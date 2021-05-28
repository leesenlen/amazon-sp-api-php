<?php

namespace ClouSale\AmazonSellingPartnerAPI\Documents;

class AESCryptFactory 
{
    const ENCRYPTION_ALGORITHM = 'AES/CBC/PKCS5Padding';

    const ENCRYPTION_CIPHER = 'aes-256-cbc';

    public static function decrypt($data, $key, $iv) 
    {
        return openssl_decrypt($data, static::ENCRYPTION_CIPHER, static::formatKey($key), OPENSSL_RAW_DATA, static::formatKey($iv));
    }

    public static function encrypt($message, $key, $iv)
    {
        return openssl_encrypt($message, static::ENCRYPTION_CIPHER, static::formatKey($key), OPENSSL_RAW_DATA, static::formatKey($iv));
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