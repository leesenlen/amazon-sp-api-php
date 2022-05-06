<?php

namespace ClouSale\AmazonSellingPartnerAPI;

class AmazonMarketPlace
{
    public static $MarketPlaceMap = [
        'BR' => [
            'marketplace_id' => 'A2Q3Y263D00KWC', 
            'seller_central' => 'https://sellercentral.amazon.com.br', 
            'country' => 'Brazil', 
            'channel_site' => 'amazon.com.br', 
            'currency' => 'BRL',
            'endpoint' => 'https://mws.amazonservices.com',
            'area' => 'NA',
            'vender_central' => 'https://vendorcentral.amazon.com.br',
        ],
        'CA' => [
            'marketplace_id' => 'A2EUQ1WTGCTBG2', 
            'seller_central' => 'https://sellercentral.amazon.ca', 
            'country' => 'Canada', 
            'channel_site' => 'amazon.ca', 
            'currency' => 'CAD',
            'endpoint' => 'https://mws.amazonservices.ca',
            'area' => 'NA',
            'vender_central' => 'https://vendorcentral.amazon.ca', 
        ],
        'MX' => [
            'marketplace_id' => 'A1AM78C64UM0Y8', 
            'seller_central' => 'https://sellercentral.amazon.com.mx', 
            'country' => 'Mexico', 
            'channel_site' => 'amazon.com.mx', 
            'currency' => 'MXN',
            'endpoint' => 'https://mws.amazonservices.com.mx',
            'area' => 'NA',
            'vender_central' => 'https://vendorcentral.amazon.com.mx', 
        ],
        'US' => [
            'marketplace_id' => 'ATVPDKIKX0DER' , 
            'seller_central' => 'https://sellercentral.amazon.com', 
            'country' => 'US', 
            'channel_site' => 'amazon.com', 
            'currency' => 'USD',
            'endpoint' => ' https://mws.amazonservices.com',
            'area' => 'NA',
            'vender_central' => 'https://vendorcentral.amazon.com', 
        ],
        // 阿联酋
        'AE' => [
            'marketplace_id' => 'A2VIGQ35RCS4UG', 
            'seller_central' => 'https://sellercentral.amazon.ae', 
            'country' => 'U.A.E.', 
            'channel_site' => 'amazon.ae', 
            'currency' => 'AED',
            'endpoint' => 'https://mws.amazonservices.ae',
            'area' => 'EU',
            'vender_central' => 'https://vendorcentral.amazon.me', 
        ],
        'DE' => [
            'marketplace_id' => 'A1PA6795UKMFR9', 
            'seller_central' => 'https://sellercentral.amazon.de', 
            'country' => 'Germany', 
            'channel_site' => 'amazon.de', 
            'currency' => 'EUR',
            'endpoint' => 'https://mws-eu.amazonservices.com',
            'area' => 'EU',
            'vender_central' => 'https://vendorcentral.amazon.de', 
        ],
        // 埃及
        'EG' => [
            'marketplace_id' => 'ARBP9OOSHTCHU' , 
            'seller_central' => 'https://sellercentral.amazon.eg', 
            'country' => 'Egypt', 
            'channel_site' => 'amazon.eg', 
            'currency' => 'EGP',
            'endpoint' => 'https://mws-eu.amazonservices.com',
            'area' => 'EU',
            'vender_central' => 'https://vendorcentral.amazon.me', 
        ],
        'ES' => [
            'marketplace_id' => 'A1RKKUPIHCS9HS', 
            'seller_central' => 'https://sellercentral.amazon.es', 
            'country' => 'Spain', 
            'channel_site' => 'amazon.es', 
            'currency' => 'EUR',
            'endpoint' => 'https://mws-eu.amazonservices.com',
            'area' => 'EU',
            'vender_central' => 'https://vendorcentral.amazon.es', 
        ],
        'FR' => [
            'marketplace_id' => 'A13V1IB3VIYZZH', 
            'seller_central' => 'https://sellercentral.amazon.fr', 
            'country' => 'France', 
            'channel_site' => 'amazon.fr', 
            'currency' => 'EUR',
            'endpoint' => 'https://mws-eu.amazonservices.com',
            'area' => 'EU',
            'vender_central' => 'https://vendorcentral.amazon.fr', 
        ],
        'UK' => [
            'marketplace_id' => 'A1F83G8C2ARO7P', 
            'seller_central' => 'https://sellercentral.amazon.co.uk', 
            'country' => 'UK', 
            'channel_site' => 'amazon.co.uk', 
            'currency' => 'GBP',
            'endpoint' => 'https://mws-eu.amazonservices.com',
            'area' => 'EU',
            'vender_central' => 'https://vendorcentral.amazon.co.uk', 
        ],
        'IN' => [
            'marketplace_id' => 'A21TJRUUN4KGV',  
            'seller_central' => 'https://sellercentral.amazon.in', 
            'country' => 'India', 
            'channel_site' => 'amazon.in', 
            'currency' => 'INR',
            'endpoint' => 'https://mws.amazonservices.in',
            'area' => 'EU',
            'vender_central' => 'https://vendorcentral.amazon.in', 
        ],
        'IT' => [
            'marketplace_id' => 'APJ6JRA9NG5V4',  
            'seller_central' => 'https://sellercentral.amazon.it', 
            'country' => 'Italy', 
            'channel_site' => 'amazon.it', 
            'currency' => 'EUR',
            'endpoint' => 'https://mws-eu.amazonservices.com',
            'area' => 'EU',
            'vender_central' => 'https://vendorcentral.amazon.it', 
        ],
        'NL' => [
            'marketplace_id' => 'A1805IZSGTT6HS', 
            'seller_central' => 'https://sellercentral.amazon.nl', 
            'country' => 'Netherlands', 
            'channel_site' => 'amazon.nl', 
            'currency' => 'EUR',
            'endpoint' => 'https://mws-eu.amazonservices.com',
            'area' => 'EU',
            'vender_central' => 'https://vendorcentral.amazon.nl', 
        ],
        'PL' => [
            'marketplace_id' => 'A1C3SOZRARQ6R3', 
            'seller_central' => 'https://sellercentral.amazon.pl', 
            'country' => 'Poland', 
            'channel_site' => 'amazon.pl', 
            'currency' => 'PLN',
            'endpoint' => 'https://mws-eu.amazonservices.com',
            'area' => 'EU',
            'vender_central' => 'https://vendorcentral.amazon.pl', 
        ],
        // 沙特阿拉伯
        'SA' => [
            'marketplace_id' => 'A17E79C6D8DWNP', 
            'seller_central' => 'https://sellercentral.amazon.sa', 
            'country' => 'Saudi Arabia', 
            'channel_site' => 'amazon.sa', 
            'currency' => 'SAR',
            'endpoint' => 'https://mws-eu.amazonservices.com',
            'area' => 'EU',
            'vender_central' => '', 
        ],
        'SE' => [
            'marketplace_id' => 'A2NODRKZP88ZB9', 
            'seller_central' => 'https://sellercentral.amazon.se', 
            'country' => 'Sweden', 
            'channel_site' => 'amazon.se', 
            'currency' => 'SEK',
            'endpoint' => 'https://mws-eu.amazonservices.com',
            'area' => 'EU',
            'vender_central' => 'https://vendorcentral.amazon.se', 
        ],
        'TR' => [
            'marketplace_id' => 'A33AVAJ2PDY3EV', 
            'seller_central' => 'https://sellercentral.amazon.com.tr', 
            'country' => 'Turkey', 
            'channel_site' => 'amazon.com.tr', 
            'currency' => 'TRY', // 不太确定，官方文档上没找到
            'endpoint' => 'https://mws-eu.amazonservices.com',
            'area' => 'EU',
            'vender_central' => 'https://vendorcentral.amazon.com.tr', 
        ],
        
        'SG' => [
            'marketplace_id' => 'A19VAU5U5O7RUS', 
            'seller_central' => 'https://sellercentral.amazon.sg', 
            'country' => 'Singapore', 
            'channel_site' => 'amazon.sg', 
            'currency' => 'SGD',
            'endpoint' => 'https://mws-fe.amazonservices.com',
            'area' => 'FE',
            'vender_central' => 'https://vendorcentral.amazon.sg', 
        ],
        'AU' => [
            'marketplace_id' => 'A39IBJ37TRP1C6', 
            'seller_central' => 'https://sellercentral.amazon.com.au', 
            'country' => 'Australia', 
            'channel_site' => 'amazon.com.au', 
            'currency' => 'AUD',
            'endpoint' => 'https://mws.amazonservices.com.au',
            'area' => 'FE',
            'vender_central' => 'https://vendorcentral.amazon.com.au', 
        ],
        'JP' => [
            'marketplace_id' => 'A1VC38T7YXB528', 
            'seller_central' => 'https://sellercentral.amazon.co.jp', 
            'country' => 'Japan', 
            'channel_site' => 'amazon.co.jp', 
            'currency' => 'JPY',
            'endpoint' => 'https://mws.amazonservices.jp',
            'area' => 'FE',
            'vender_central' => 'https://vendorcentral.amazon.co.jp', 
        ],
    ];

    /**
     * 根据站点获取MarketPlaceId
     */
    public static function id($site)
    {
        return !empty(static::$MarketPlaceMap[$site]) ? static::$MarketPlaceMap[$site]['marketplace_id'] : null;
    }

    /**
     * 根据站点获取币种
     */
    public static function currency($site)
    {
        return !empty(static::$MarketPlaceMap[$site]) ? static::$MarketPlaceMap[$site]['currency'] : null;
    }

    /**
     * 根据站点获取channel url，amazon站点门户
     */
    public static function channel($site)
    {
        return !empty(static::$MarketPlaceMap[$site]) ? static::$MarketPlaceMap[$site]['channel_site'] : null;
    }

    /**
     * 根据站点获取国家名称
     */
    public static function country($site)
    {
        return !empty(static::$MarketPlaceMap[$site]) ? static::$MarketPlaceMap[$site]['country'] : null;
    }

    /**
     * 根据站点获取所属区域，授权归属区域（NA/FE/EU）
     */
    public static function area($site)
    {
        return !empty(static::$MarketPlaceMap[$site]) ? static::$MarketPlaceMap[$site]['area'] : null;
    }

    /**
     * 根据地区获取当前地区所有站点
     */
    public static function sitesByArea($area)
    {
        $area = strtoupper(trim($area));
        $sites = [];
        foreach (static::$MarketPlaceMap as $site => $value) {
            if ($value['area']===$area) $sites[] = $site;
        }
        return $sites ?: null;
    }

    public static function siteById($marketplace)
    {
        $marketplace = strtoupper(trim($marketplace));
        foreach (static::$MarketPlaceMap as $site => $value) {
            if ($value['marketplace_id']===$marketplace) return $site;
        }
        return null;
    }

    /**
     * 根据amazon站点门户url，获取对应的站点
     * 比如 amazon.com -> US, amazon.co.jp -> jp
     */
    public static function siteByChannel($channel)
    {
        $channel = strtolower(trim($channel));
        foreach (static::$MarketPlaceMap as $site => $value) {
            if ($value['channel_site']===$channel) return $site;
        }
        return null;
    }

    public static function vendorCentral($site)
    {
        $site = strtoupper(trim($site));
        return !empty(static::$MarketPlaceMap[$site]) ? static::$MarketPlaceMap[$site]['vender_central'] : null;
    }
}
