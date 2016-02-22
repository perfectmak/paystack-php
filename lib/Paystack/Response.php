<?php
/**
 * Created by PhpStorm.
 * User: perfectmak
 * Date: 2/12/16
 * Time: 5:54 PM
 */

namespace Paystack;


use Paystack\Interfaces\IResponse;

class Response implements IResponse
{
    private $_code = null;

    private $_body = null;

    public function __construct($code, $body)
    {
        $this->setCode($code);
        $this->setBody($body);
    }

    public function getCode()
    {
        return $this->_code;
    }

    public function getBody()
    {
        return $this->_body;
    }

    private function setCode($code)
    {
        $this->_code = $code;
    }

    private function setBody($body)
    {
        $this->_body = $body;
    }
}