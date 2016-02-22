<?php

namespace Paystack;

use Paystack\Interfaces\IResource;
use Paystack\Traits\ResourceTrait;

class Transaction implements IResource
{
    use ResourceTrait;

    protected static $resourceUrl = '/transaction';

    public static function initialize(array $params)
    {
        return self::_create(self::url('/initialize'), $params);
    }

    public static function chargeCode(array $params)
    {
        return self::_create(self::url('/charge_authorization'), $params);
    }

    public static function chargeToken(array $params)
    {
        return self::_create(self::url('/charge_token'), $params);
    }

    public static function verify($reference)
    {
        $url = self::url('/verify/'.$reference);
        return self::_get($url, []);
    }

    public static function totals()
    {
        $transaction = self::_get(self::url('/totals'));
        return $transaction->_attributes;
    }

    public static function get($id)
    {
        return self::_get(self::url('/'.$id));
    }

    public static function all()
    {
        throw new \Exception();
    }
}
?>