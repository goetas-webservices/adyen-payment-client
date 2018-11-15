# Adyen Payments SOAP PHP client

This project provides a SOAP client for the Adyen Payments webservice API

More info can be found visiting [https://docs.adyen.com/developers/api-reference/payments-api](https://docs.adyen.com/developers/api-reference/payments-api) 

## Installing

The recommended way to install `goetas-webservices/adyen-payment-client` is using [Composer](https://getcomposer.org/), just run:

```yaml
composer require goetas-webservices/adyen-payment-client
```
## Features

- Pure PHP, no dependencies on `ext-soap`
- Complete IDE type hinting support
- PSR-7 HTTP messaging compatible
- Multi HTTP client (guzzle, buzz, curl, react)
- No WSDL/XSD parsing on production
- Extensible (event listeners support)

## Usage

```php
<?php

use GoetasWebservices\SoapServices\SoapClient\ClientFactory;
use GoetasWebservices\SoapServices\SoapClient\Builder\SoapContainerBuilder;
use GoetasWebservices\Client\AdyenPayment\SoapContainer;
use GoetasWebservices\Client\AdyenPayment\SoapStubs\PaymentPortType;

require __DIR__ . '/vendor/autoload.php';

// project initialization
$container = new SoapContainer();

// use this when cloning this repository and keeping the directory, comment it when including goetas-webservices/adyen-payment-client via composer
$serializer = SoapContainerBuilder::createSerializerBuilderFromContainer($container)->build();

// uncomment this when including goetas-webservices/adyen-payment-client via composer
// $serializer = SoapContainerBuilder::createSerializerBuilderFromContainer($container, null, __DIR__ . '/vendor/goetas-webservices/adyen-payment-client')->build();

$metadata = $container->get('goetas_webservices.soap_client.metadata_reader');
$factory = new ClientFactory($metadata, $serializer);

/**
 * @var $client PaymentPortType
 */
$client = $factory->getClient('https://pal-test.adyen.com/pal/servlet/Payment/v40?wsdl','PaymentHttpPort', 'Payment');


$result = $client->balanceCheck(/* put here your params */);

var_dump($result);

```

## Note 

The code in this project is provided under the 
[MIT](https://opensource.org/licenses/MIT) license. 
For professional support 
contact [goetas@gmail.com](mailto:goetas@gmail.com) 
or visit [https://www.goetas.com](https://www.goetas.com)
