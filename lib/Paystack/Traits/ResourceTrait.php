<?php
/**
 * Created by PhpStorm.
 * User: perfectmak
 * Date: 2/12/16
 * Time: 4:01 PM
 */

namespace Paystack\Traits;


use Paystack\Interfaces\IRequest;
use Paystack\Interfaces\IResponse;
use Paystack\Paystack;
use Paystack\Request;

trait ResourceTrait
{
    protected $_attributes = [];
    protected function __construct($params)
    {
        if(is_array($params))
            $this->_attributes = $params;
        else{
            $this->_attributes = json_decode(json_encode($params), true);
        }
    }


    /**
     * @param $url
     * @param array $params
     * @return static
     * @throws \Exception
     */
    protected static function _create($url, array $params)
    {
        $response = (new Request())
            ->setUrl(Paystack::api($url))
            ->setType(IRequest::TYPE_POST)
            ->setBody(json_encode($params))
            ->send();


        if($response->getCode() === IResponse::CODE_VALIDATION_ERROR)
            throw new \Exception($response->getBody()->message);

        return new static($response->getBody()->data);
    }

    protected static function _get($url)
    {
        $response = (new Request())
            ->setUrl(Paystack::api($url))
            ->setType(IRequest::TYPE_GET)
            ->send();


        if($response->getCode() === IResponse::CODE_VALIDATION_ERROR)
            throw new \Exception($response->getBody()->message);

        return new static($response->getBody()->data);
    }

    public function __get($key)
    {
        if(array_key_exists($key, $this->_attributes))
        {
            return $this->_attributes[$key];
        }
        else
            return null;
    }

    /**
     * @param $key
     * @param $value
     * @todo Should check in a list of properties defined in Resource class
     */
    public function __set($key, $value)
    {
        $this->_attributes[$key] = $value;
    }

    protected static function url($path = ''){
        return rtrim(self::$resourceUrl, '/').'/'
            .ltrim($path, '/');
    }
}