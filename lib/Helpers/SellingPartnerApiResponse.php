<?php

namespace ClouSale\AmazonSellingPartnerAPI\Helpers;

use GuzzleHttp\Psr7\Response;

class SellingPartnerApiResponse
{
    private $statusCode = 200;

    private $headers = [];

    private $body = null;

    private $response = null;

    public function __construct(Response $response=null) 
    {
        $this->response = $response;
        if ($response) {
            $this->statusCode = $response->getStatusCode();
            $this->headers = $response->getHeaders();
            $this->body = $response->getBody()->getContents();
        }
    }

    public function setBody($body) 
    {
        $this->body = $body;
        return $this;
    }

    public function getBody()
    {
        return $this->body;
    }

    public function setHeaders($headers)
    {
        $this->headers = $headers;
        return $this;
    }

    public function getHeaders()
    {
        return $this->headers;
    }

    public function setStatusCode($code)
    {
        $this->statusCode = $code;
        return $this;
    }

    public function getStatusCode()
    {
        return $this->statusCode;
    }

    public function getAmznRateLimit()
    {
        $limitInfo = $this->headers['x-amzn-RateLimit-Limit'] ? $this->headers['x-amzn-RateLimit-Limit'] : [0];

        return floatval(current($limitInfo));
    }
}
