<?php

namespace ClouSale\AmazonSellingPartnerAPI\Documents;

class GZIPDecodeFactory 
{
    public static function decode($data)
    {
        return gzdecode($data);
    }
}