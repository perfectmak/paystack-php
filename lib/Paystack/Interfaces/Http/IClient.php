<?php
/**
 * Created by PhpStorm.
 * User: perfectmak
 * Date: 2/12/16
 * Time: 3:46 PM
 */

namespace Paystack\Interfaces\Http;


use Paystack\Interfaces\IRequest;
use Paystack\Interfaces\IResponse;
use Paystack\Response;

interface IClient
{
    /**
     * @param IRequest $request
     * @return IResponse
     */
    public function sendRequest(IRequest $request);
}