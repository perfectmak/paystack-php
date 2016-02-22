<?php
/**
 * Created by PhpStorm.
 * User: perfectmak
 * Date: 2/12/16
 * Time: 3:46 PM
 */

namespace Paystack\Http;


use Httpful\Http;
use Paystack\Interfaces\Http\IClient;
use Paystack\Interfaces\IRequest;
use Paystack\Interfaces\IResponse;
use Paystack\Paystack;
use Paystack\Response;


/**
 * This HttpClient uses
 * Class HttpClient
 * @package Paystack\Http
 */
class HttpClient implements IClient
{

    /**
     * @param IRequest $request
     * @return IResponse
     */
    public function sendRequest(IRequest $request)
    {
        $response = \Httpful\Request::init()
            ->addHeader('Authorization', 'Bearer '.Paystack::getApiKey())
            ->uri($request->getUrl())
            ->method($request->getType())
            ->addHeaders($request->getHeaders())
            ->body($request->getBody())
            ->sendsJson()
            ->send();

        $iResponse = new Response($response->code, $response->body);
        return $iResponse;
    }
}