<?php
/**
 * Created by PhpStorm.
 * User: perfectmak
 * Date: 2/12/16
 * Time: 5:54 PM
 */

namespace Paystack\Interfaces;


use Paystack\Interfaces\Http\IClient;

interface IRequest
{
    const TYPE_POST = 'POST';
    const TYPE_GET = 'GET';
    const TYPE_DELETE = 'DELETE';


    public static function setClient(IClient $client);

    public static function getClient();

    public function setUrl($url);

    public function getUrl();

    public function setType($type);

    public function getType();

    public function setHeader($key, $value);

    public function getHeader($key);

    public function getHeaders();

    public function setBody($body);

    public function getBody();

    public function send();
}