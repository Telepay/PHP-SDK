# Telepay API integration for PHP

This repository is a PHP implementation to interact with the Telepay Financial API.

The API control panel are in [https://cp.telepay.net](https://cp.telepay.net)

It provides interaction with many online payment providers like Ukash, PaysafeCard,
Bank Card, Online Wallets, etc. with a secure authentication and authorization mechanism.

## The currently implemented services are:
* **Sample Service:** for testing the right connection to the API
* **PagoFacil:** Credit and Debit bank card processing
* **Paynet Payment of services:** gives a way for pay many common services in Mexico
* **PayU:** a way for pay services in 7eleven and Oxxo, Mexico
* **SafetyPay:** online payments with your online banking credentials.
* **ToditoCash:** mexican pre-charged wallet for pay services and products online.
* **Ukash:** referenced payments with a vouchers without bank data.
* **Paynet reference:** generates reference barcodes for pay over internet without bank card data.

## The integration can be made like this:
```
<?php
require_once('TelepayApi/tp_autoloader.php');

use TelepayApi\Core\UserCredentials;
use TelepayApi\TelepayClient;

$credentials = new UserCredentials(
    'YOUR_TELEPAY_ACCESS_KEY',
    'YOUR_TELEPAY_ACCESS_SECRET'
);

$tc = new TelepayClient($credentials);

print_r($tc->getSample()->make());
```



