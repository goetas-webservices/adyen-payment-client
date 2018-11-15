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
