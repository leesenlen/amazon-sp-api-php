<?php

namespace ClouSale\AmazonSellingPartnerAPI\Helpers;

use ClouSale\AmazonSellingPartnerAPI\ApiException;
use ClouSale\AmazonSellingPartnerAPI\ObjectSerializer;
use ClouSale\AmazonSellingPartnerAPI\Signature;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Query;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use GuzzleHttp\Utils;

/**
 * Trait SellingPartnerApiRequest.
 *
 * @author Stefan Neuhaus / ClouSale
 */
trait SellingPartnerApiRequest
{

    protected $lastRequestInfo = null;
    protected $lastHederInfo = null;

    protected $defaultHttpOptions = [
        'timeout' => 20,
    ];

    private function generateRequest(
        bool $multipart,
        array $formParams,
        array $queryParams,
        string $resourcePath,
        array $headerParams,
        string $method,
        $httpBody
    ): Request {
        if (null != $formParams) {
            ksort($formParams);
        }
        if (null != $queryParams) {
            ksort($queryParams);
        }
        // body params
        $_tempBody = $httpBody;
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && 'application/json' === $headers['Content-Type']) {
                $httpBody = Utils::jsonEncode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue,
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);
            } elseif ('application/json' === $headers['Content-Type']) {
                $httpBody = Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = Query::build($formParams);
            }
        }
        $query = Query::build($queryParams);
        $amazonHeader = Signature::calculateSignature(
            $this->config,
            parse_url($this->config->getHost(),PHP_URL_HOST),
            $method,
            $resourcePath,
            $query,
            (string) $httpBody
        );
        $headers = array_merge(
            $headerParams,
            $headers,
            $amazonHeader
        );

        return new Request(
            $method,
            $this->config->getHost().$resourcePath.($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    public function setDefaultHttpOptions($options)
    {
        foreach ($options as $key => $option) {
            $this->defaultHttpOptions[$key] = $option;
        }

        return $this;
    }

    public function getDefaultHttpOptions()
    {
        return $this->defaultHttpOptions;
    }

    /**
     * @throws ApiException
     */
    private function sendRequest(Request $request, string $returnType): array
    {
        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null);
            }
            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            $responseBody = $response->getBody();
            if ('\SplFileObject' === $returnType) {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string', 'integer', 'bool'])) {
                    $content = json_decode($content);
                }
            }
//            var_dump($content);
//            exit();

            $sellingApiResponse = new SellingPartnerApiResponse($response);
            $this->logLastRequest($request, $sellingApiResponse);

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders(),
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 503:
                case 500:
                case 429:
                case 404:
                case 403:
                case 401:
                case 400:
                case 200:
                    $sellingApiResponse = new SellingPartnerApiResponse();
                    $sellingApiResponse->setStatusCode($e->getCode());
                    $sellingApiResponse->setBody($e->getResponseBody());
                    $sellingApiResponse->setHeaders($e->getResponseHeaders());
                    $this->logLastRequest($request, $sellingApiResponse);

                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        $returnType,
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    private function logLastRequest($request, $response=null)
    {
        $this->lastRequestInfo['path'] = $request->getUri()->getPath();
        if (!empty($response)) {
            $this->lastRequestInfo['amazon-ratelimit'] = $response->getAmznRateLimit();
            $this->lastHederInfo = $response->getHeaders();
        } else {
            $this->lastRequestInfo['amazon-ratelimit'] = null;
            $this->lastHederInfo = null;
        }
    }

    public function getLastRequestInfo()
    {
        return $this->lastRequestInfo;
    }

    public function getLastHederInfo()
    {
        return $this->lastHederInfo;
    }

    /**
     * Create http client option.
     *
     * @throws \RuntimeException on file opening failure
     *
     * @return array of http client options
     */
    protected function createHttpClientOption(): array
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: '.$this->config->getDebugFile());
            }
        }

        $options = array_merge($options, $this->defaultHttpOptions);

        return $options;
    }

    /**
     * @throws ApiException
     *
     * @return mixed
     */
    private function sendRequestAsync(Request $request, string $returnType)
    {
        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ('\SplFileObject' === $returnType) {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ('string' !== $returnType) {
                            $content = json_decode($content);
                        }
                    }

                    $sellingApiResponse = new SellingPartnerApiResponse($response);
                    $this->logLastRequest($request, $sellingApiResponse);

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders(),
                    ];
                },
                function ($exception) {
                    $sellingApiResponse = new SellingPartnerApiResponse($exception->getResponse());
                    $this->logLastRequest($request, $sellingApiResponse);

                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
                }
            );
    }
}
