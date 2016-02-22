<?php

namespace Paystack;


use Paystack\Interfaces\IResource;
use Paystack\Traits\ResourceTrait;

class Customer implements IResource
{
    use ResourceTrait;

    protected static $resourceUrl = '/plan';

    public static function create(array $params)
    {
        return self::_create(self::url('/create'), $params);
    }

    public static function get($id)
    {
        return self::_get(self::url('/'.$id));
    }

    public static function all()
    {
        throw new \Exception();
    }

    public function save()
    {
        throw new \Exception();
    }
}
?>