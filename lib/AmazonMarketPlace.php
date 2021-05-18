<?php

namespace ClouSale\AmazonSellingPartnerAPI;

class AmazonMarketPlace
{
    public static $MarketPlaceMap = [
        'BR' => 'A2Q3Y263D00KWC',
        'CA' => 'A2EUQ1WTGCTBG2',
        'MX' => 'A1AM78C64UM0Y8',
        'US' => 'ATVPDKIKX0DER' ,
        
        'AE' => 'A2VIGQ35RCS4UG',
        'DE' => 'A1PA6795UKMFR9',
        'EG' => 'ARBP9OOSHTCHU' ,
        'ES' => 'A1RKKUPIHCS9HS',
        'FR' => 'A13V1IB3VIYZZH',
        'UK' => 'A1F83G8C2ARO7P',
        'PL' => 'A1C3SOZRARQ6R3',
        'IN' => 'A21TJRUUN4KGV', 
        'IT' => 'APJ6JRA9NG5V4', 
        'NL' => 'A1805IZSGTT6HS',
        'SA' => 'A17E79C6D8DWNP',
        'SE' => 'A2NODRKZP88ZB9',
        'TR' => 'A33AVAJ2PDY3EV',
        
        'SG' => 'A19VAU5U5O7RUS',
        'AU' => 'A39IBJ37TRP1C6',
        'JP' => 'A1VC38T7YXB528',
    ];

    public static function id($site) {
        return !empty(static::$MarketPlaceMap[$site]) ? static::$MarketPlaceMap[$site] : null;
    }
}
