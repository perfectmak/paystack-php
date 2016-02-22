<?php

require('../vendor/autoload.php');


\Paystack\Paystack::init('sk_test_19f3325a5a0abe546b508cd5926f3d6223d4e4d8');

try {
//    $customer = \Paystack\Customer::create([
//        'email' => 'damiperfect@yahoo.com',
//        'first_name' => 'Perfecto',
//        'last_name' => 'Makanjuo',
//        'phone' => '08064474572'
//    ]);
//
//    echo 'Customer\'s first name is: '.$customer->first_name;

//    $payment = \Paystack\Transaction::initialize([
//        'email' => 'damiperfect@gmail.com',
//        'amount' => '3000'
//    ]);

    $transaction = \Paystack\Transaction::verify('3beczdakli');
    echo $transaction->amount;
}
catch(Exception $e)
{
    echo $e->getMessage();
}

?>