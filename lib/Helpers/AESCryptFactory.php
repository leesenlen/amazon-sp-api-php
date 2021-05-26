<?php

namespace ClouSale\AmazonSellingPartnerAPI\Helpers;

class AESCryptFactory 
{
    const ENCRYPTION_ALGORITHM = 'AES/CBC/PKCS5Padding';

    public static function decrypt($message, $key, $iv) 
    {
        $data = openssl_decrypt($message, 'aes-128-cbc', static::formatKey($key), 0, static::formatKey($iv));
        dd($data);
        return $data;
    }

    public static function encrypt($message, $key, $iv)
    {
        $data = openssl_encrypt($message, 'aes-128-cbc', static::formatKey($key), 0, static::formatKey($iv));
        dd($data);
        return $data;
    }

    public static function formatInitializationVector($iv)
    {
        return base64_decode($iv);
    }

    public static function formatKey($key) 
    {
        return base64_decode($key);
    }
}