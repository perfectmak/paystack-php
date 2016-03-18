# Paystack PHP

[![Build Status](https://secure.travis-ci.org/perfectmak/paystack-php.png?branch=master)](http://travis-ci.org/perfectmak/paystack-php)

Paystack PHP is a library for using the [Paystack](http://paystack.com) API from PHP.

While there are other PHP libraries for Paystack, this library is designed to make it less cumbersome to implement a 
payment flow on the Paystack payment platform.

## Installation

To install using composer
```
composer install perfectmak/paystack-php
```

## Usage
First you initialize the library with your secret key

```php
\Paystack\Paystack::init('__secret_key_here__');
```

### Transaction

#### Initialize a transaction
```php
    $payment = \Paystack\Transaction::initialize([
        'email' => 'jame@gosling.com',
        'amount' => '3000'
    ]);
```

### Customer

#### Create Customer
```php
    $customer = \Paystack\Customer::create([
        'email' => 'google@gosling.com',
        'first_name' => 'Perfect',
        'last_name' => 'Makanju',
        'phone' => 'xxxxxxx'
    ]);

    echo 'Customer\'s first name is: '.$customer->first_name;
```

## Todo
This library is far from complete and not yet stable. So I don't advice using it yet.

- Finish up all the resources
- Tests for each Resource
- Fix travis build script