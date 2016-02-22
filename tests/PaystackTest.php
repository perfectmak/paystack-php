<?php
/**
 * Created by PhpStorm.
 * User: perfectmak
 * Date: 2/12/16
 * Time: 5:58 PM
 */

namespace PaystackTest;


use \Paystack\Paystack;

class PaystackTest extends TestCase
{
    public function testApiKey()
    {
        $expectedApiKey = "sk_tst_111";

        Paystack::setApiKey($expectedApiKey);

        $actualApiKey = Paystack::getApiKey();

        $this->assertEquals($actualApiKey, $expectedApiKey);
    }
}