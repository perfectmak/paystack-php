<?php

namespace Paystack;

use Paystack\Http\HttpClient;

class Paystack
{
    private static $apiKey;

    const API_URL = 'https://api.paystack.co';


    public static function init($apiKey)
    {
        //setup API Key
        self::setApiKey($apiKey);

        //set default request httpclient
        Request::setClient(new HttpClient());
    }

    /**
     * @return mixed
     */
    public static function getApiKey()
    {
        return self::$apiKey;
    }

    /**
     * @param mixed $apiKey
     */
    public static function setApiKey($apiKey)
    {
        self::$apiKey = $apiKey;
    }

    public static function api($resourceUrl)
    {
        return self::API_URL.$resourceUrl;
    }

}


?>