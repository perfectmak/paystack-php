<?php
/**
 * Created by PhpStorm.
 * User: perfectmak
 * Date: 2/12/16
 * Time: 5:54 PM
 */

namespace Paystack\Interfaces;


interface IResponse
{
    const CODE_OK = 200;
    const CODE_VALIDATION_ERROR = 400;
    const CODE_NOT_FOUND = 404;

    public function getCode();

    public function getBody();
}