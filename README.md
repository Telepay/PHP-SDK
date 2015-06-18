# Telepay API integration for PHP

This repository is a PHP implementation to interact with the Telepay Financial API.

The API control panel are in [https://cp.telepay.net](https://cp.telepay.net)

It provides interaction with many online payment providers like PaysafeCard,
Bank Card, Online Wallets, etc. with a secure authentication and authorization mechanism.

## The currently implemented services are:
* **Sample Service:** for testing the right connection to the API
* **PagoFacil:** Credit and Debit bank card processing
* **Paynet Payment of services:** gives a way for paying many common services in Mexico
* **PayU:** a way for pay services in 7eleven and Oxxo, Mexico
* **SafetyPay:** online payments with your online banking credentials.
* **ToditoCash:** mexican pre-charged wallet for paying services and products online.
* **Ukash:** referenced payments with a vouchers without bank data.
* **Paynet reference:** generates reference barcodes for paying over internet without bank card data.
* **Halcash Spain:** sends a hal to a phone or cancel a ticket.
* **Multiva TPV:** generates a Virtual Tpv for payments with credit card.
* **Pademobile:** online payments with your online banking credentials.
* **Sabadell TPV:** generates a Virtual Tpv for payments with credit card.
* **Abanca TPV:** generates a Virtual Tpv for payments with credit card.

## Installation
1. Get the code via clone
  * `git clone https://github.com/Telepay/PHP-SDK.git`
2. Get via require in composer.json
  * `require: { "telepay/php-sdk": "dev-master" }`

## Basic sample
```
<?php

use TelepayApi\Core\UserCredentials;
use TelepayApi\TelepayClient;

$credentials = new UserCredentials(
    'YOUR_TELEPAY_ACCESS_KEY',
    'YOUR_TELEPAY_ACCESS_SECRET'
);

$tc = new TelepayClient($credentials, 'https://api.telepay.net/test');

print_r($tc->getSample()->make());
```



