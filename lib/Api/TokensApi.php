<?php
/**
 * SellersApi.
 *
 * @author   Stefan Neuhaus / ClouSale
 */

/**
 * Selling Partner API for Sellers.
 *
 * The Selling Partner API for Sellers lets you retrieve information on behalf of sellers about their seller account, such as the marketplaces they participate in. Along with listing the marketplaces that a seller can sell in, the API also provides additional information about the marketplace such as the default language and the default currency. The API also provides seller-specific information such as whether the seller has suspended listings in that marketplace.
 *
 * OpenAPI spec version: v1
 */

namespace ClouSale\AmazonSellingPartnerAPI\Api;

use ClouSale\AmazonSellingPartnerAPI\Configuration;
use ClouSale\AmazonSellingPartnerAPI\HeaderSelector;
use ClouSale\AmazonSellingPartnerAPI\Helpers\SellingPartnerApiRequest;
use ClouSale\AmazonSellingPartnerAPI\Models\Tokens\CreateRestrictedDataTokenResponse;
use ClouSale\AmazonSellingPartnerAPI\Models\Tokens\CreateRestrictedDataTokenRequest;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Psr7\Request;

/**
 * SellersApi Class Doc Comment.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class TokensApi
{
    use SellingPartnerApiRequest;
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    public function __construct(Configuration $config)
    {
        $this->client = new Client();
        $this->config = $config;
        $this->headerSelector = new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }


    /**
     * Operation getMarketplaceParticipationsWithHttpInfo.
     *
     * @throws \ClouSale\AmazonSellingPartnerAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return array of \ClouSale\AmazonSellingPartnerAPI\Models\Sellers\GetMarketplaceParticipationsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function createRestrictedDataToken($resourcePaths)
    {
        $resources = new CreateRestrictedDataTokenRequest(['restrictedResources' => $resourcePaths]);
        
        $request = $this->createRestrictedDataTokenRequest($resources);

        list($response) = $this->sendRequest($request, CreateRestrictedDataTokenResponse::class);
        return $response;
    }

    /**
     * Create request for operation 'getMarketplaceParticipations'.
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function createRestrictedDataTokenRequest($body)
    {
        $resourcePath = '/tokens/2021-03-01/restrictedDataToken';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = $body;
        $multipart = false;

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'POST', $httpBody);
    }
}
