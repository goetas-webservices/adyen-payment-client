<?php

use GoetasWebservices\SoapServices\SoapClient\ClientFactory;
use GoetasWebservices\SoapServices\SoapClient\Builder\SoapContainerBuilder;
use GoetasWebservices\Client\AdyenPayment\SoapContainer;
use GoetasWebservices\Client\AdyenPayment\SoapStubs\PaymentPortType;

require __DIR__ . '/vendor/autoload.php';

// project initialization
$container = new SoapContainer();
$serializer = SoapContainerBuilder::createSerializerBuilderFromContainer($container)->build();
$metadata = $container->get('goetas_webservices.soap_client.metadata_reader');
$factory = new ClientFactory($metadata, $serializer);

/**
 * @var $client PaymentPortType
 */
$client = $factory->getClient('https://pal-test.adyen.com/pal/servlet/Payment/v40?wsdl','PaymentHttpPort', 'Payment');


$result = $client->balanceCheck(/* put here your params */);

var_dump($result);
