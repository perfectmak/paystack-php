<?php
/**
 * Created by PhpStorm.
 * User: perfectmak
 * Date: 2/12/16
 * Time: 5:53 PM
 */

namespace Paystack;


use Paystack\Interfaces\Http\IClient;
use Paystack\Interfaces\IRequest;

class Request implements  IRequest
{
    private $_type = false;

    private $_headers = [];

    private $_body = '';

    private $_url = '';

    /**
     * @var IClient
     */
    private static $_httpClient = null;

    public function setHeader($key, $value)
    {
        $this->_headers[$key] = $value;

        return $this;
    }

    public function getHeader($key)
    {
        return $this->_headers[$key];
    }

    public function getHeaders()
    {
        return $this->_headers;
    }

    public function setBody($body)
    {
        $this->_body = $body;

        return $this;
    }

    public function getBody()
    {
        return $this->_body;
    }

    public function setUrl($url)
    {
        $this->_url = $url;

        return $this;
    }

    public function getUrl()
    {
        return $this->_url;
    }

    public function setType($type)
    {
        $this->_type = $type;

        return $this;
    }

    public function getType()
    {
        return $this->_type;
    }


    public static function setClient(IClient $client)
    {
        self::$_httpClient = $client;
    }

    public static function getClient()
    {
        return self::$_httpClient;
    }

    public function send()
    {
        if(!is_null(self::$_httpClient))
            return self::$_httpClient->sendRequest($this);

        throw new \Exception('No HttpClient specified for requests');
    }
}