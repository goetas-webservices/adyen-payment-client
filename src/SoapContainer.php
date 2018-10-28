<?php

namespace GoetasWebservices\Client\AdyenPayment;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/*
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final since Symfony 3.3
 */
class SoapContainer extends Container
{
    private $parameters;
    private $targetDirs = array();

    public function __construct()
    {
        $this->parameters = $this->getDefaultParameters();

        $this->services = array();
        $this->methodMap = array(
            'goetas_webservices.soap_client.metadata_reader' => 'getGoetasWebservices_SoapClient_MetadataReaderService',
        );
        $this->privates = array(
            'goetas_webservices.soap_client.metadata_reader' => true,
        );

        $this->aliases = array();
    }

    public function getRemovedIds()
    {
        return array(
            'Psr\\Container\\ContainerInterface' => true,
            'Symfony\\Component\\DependencyInjection\\ContainerInterface' => true,
            'goetas_webservices.soap_client.metadata.generator' => true,
            'goetas_webservices.soap_client.metadata_loader.array' => true,
            'goetas_webservices.soap_client.metadata_loader.dev' => true,
            'goetas_webservices.soap_client.metadata_reader' => true,
            'goetas_webservices.soap_client.stub.class_writer' => true,
            'goetas_webservices.soap_client.stub.client_generator' => true,
            'goetas_webservices.wsdl2php.converter.jms' => true,
            'goetas_webservices.wsdl2php.converter.php' => true,
            'goetas_webservices.wsdl2php.event_dispatcher' => true,
            'goetas_webservices.wsdl2php.soap_reader' => true,
            'goetas_webservices.wsdl2php.wsdl_reader' => true,
            'goetas_webservices.xsd2php.class_writer.php' => true,
            'goetas_webservices.xsd2php.converter.jms' => true,
            'goetas_webservices.xsd2php.converter.php' => true,
            'goetas_webservices.xsd2php.naming_convention' => true,
            'goetas_webservices.xsd2php.naming_convention.long' => true,
            'goetas_webservices.xsd2php.naming_convention.short' => true,
            'goetas_webservices.xsd2php.path_generator.jms' => true,
            'goetas_webservices.xsd2php.path_generator.jms.psr4' => true,
            'goetas_webservices.xsd2php.path_generator.php' => true,
            'goetas_webservices.xsd2php.path_generator.php.psr4' => true,
            'goetas_webservices.xsd2php.php.class_generator' => true,
            'goetas_webservices.xsd2php.schema_reader' => true,
            'goetas_webservices.xsd2php.writer.jms' => true,
            'goetas_webservices.xsd2php.writer.php' => true,
            'logger' => true,
        );
    }

    public function compile()
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled()
    {
        return true;
    }

    public function isFrozen()
    {
        @trigger_error(sprintf('The %s() method is deprecated since Symfony 3.3 and will be removed in 4.0. Use the isCompiled() method instead.', __METHOD__), E_USER_DEPRECATED);

        return true;
    }

    /*
     * Gets the private 'goetas_webservices.soap_client.metadata_reader' shared service.
     *
     * @return \GoetasWebservices\SoapServices\SoapClient\Metadata\Loader\ArrayMetadataLoader
     */
    protected function getGoetasWebservices_SoapClient_MetadataReaderService()
    {
        return $this->services['goetas_webservices.soap_client.metadata_reader'] = new \GoetasWebservices\SoapServices\SoapClient\Metadata\Loader\ArrayMetadataLoader($this->parameters['goetas_webservices.soap_client.metadata']);
    }

    public function getParameter($name)
    {
        $name = (string) $name;
        if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
            $name = $this->normalizeParameterName($name);

            if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
                throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
            }
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    public function hasParameter($name)
    {
        $name = (string) $name;
        $name = $this->normalizeParameterName($name);

        return isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters);
    }

    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            $this->parameterBag = new FrozenParameterBag($parameters);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = array();
    private $dynamicParameters = array();

    /*
     * Computes a dynamic parameter.
     *
     * @param string The name of the dynamic parameter to load
     *
     * @return mixed The value of the dynamic parameter
     *
     * @throws InvalidArgumentException When the dynamic parameter does not exist
     */
    private function getDynamicParameter($name)
    {
        throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
    }

    private $normalizedParameterNames = array();

    private function normalizeParameterName($name)
    {
        if (isset($this->normalizedParameterNames[$normalizedName = strtolower($name)]) || isset($this->parameters[$normalizedName]) || array_key_exists($normalizedName, $this->parameters)) {
            $normalizedName = isset($this->normalizedParameterNames[$normalizedName]) ? $this->normalizedParameterNames[$normalizedName] : $normalizedName;
            if ((string) $name !== $normalizedName) {
                @trigger_error(sprintf('Parameter names will be made case sensitive in Symfony 4.0. Using "%s" instead of "%s" is deprecated since Symfony 3.4.', $name, $normalizedName), E_USER_DEPRECATED);
            }
        } else {
            $normalizedName = $this->normalizedParameterNames[$normalizedName] = (string) $name;
        }

        return $normalizedName;
    }

    /*
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return array(
            'goetas_webservices.soap_client.metadata' => array(
                'https://pal-test.adyen.com/pal/servlet/Payment/v40?wsdl' => array(
                    'Payment' => array(
                        'PaymentHttpPort' => array(
                            'operations' => array(
                                'adjustAuthorisation' => array(
                                    'action' => NULL,
                                    'style' => 'rpc',
                                    'version' => '1.1',
                                    'name' => 'adjustAuthorisation',
                                    'method' => 'adjustAuthorisation',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapEnvelope\\Messages\\AdjustAuthorisationInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapEnvelope\\Headers\\AdjustAuthorisationInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapParts\\AdjustAuthorisationInput',
                                        'parts' => array(
                                            'parameters' => 'AdjustAuthorisation',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapEnvelope\\Messages\\AdjustAuthorisationOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapEnvelope\\Headers\\AdjustAuthorisationOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapParts\\AdjustAuthorisationOutput',
                                        'parts' => array(
                                            'parameters' => 'AdjustAuthorisationResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'authorise' => array(
                                    'action' => NULL,
                                    'style' => 'rpc',
                                    'version' => '1.1',
                                    'name' => 'authorise',
                                    'method' => 'authorise',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapEnvelope\\Messages\\AuthoriseInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapEnvelope\\Headers\\AuthoriseInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapParts\\AuthoriseInput',
                                        'parts' => array(
                                            'parameters' => 'Authorise',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapEnvelope\\Messages\\AuthoriseOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapEnvelope\\Headers\\AuthoriseOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapParts\\AuthoriseOutput',
                                        'parts' => array(
                                            'parameters' => 'AuthoriseResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'authorise3d' => array(
                                    'action' => NULL,
                                    'style' => 'rpc',
                                    'version' => '1.1',
                                    'name' => 'authorise3d',
                                    'method' => 'authorise3d',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapEnvelope\\Messages\\Authorise3dInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapEnvelope\\Headers\\Authorise3dInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapParts\\Authorise3dInput',
                                        'parts' => array(
                                            'parameters' => 'Authorise3d',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapEnvelope\\Messages\\Authorise3dOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapEnvelope\\Headers\\Authorise3dOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapParts\\Authorise3dOutput',
                                        'parts' => array(
                                            'parameters' => 'Authorise3dResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'authorise3ds2' => array(
                                    'action' => NULL,
                                    'style' => 'rpc',
                                    'version' => '1.1',
                                    'name' => 'authorise3ds2',
                                    'method' => 'authorise3ds2',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapEnvelope\\Messages\\Authorise3ds2Input',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapEnvelope\\Headers\\Authorise3ds2Input',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapParts\\Authorise3ds2Input',
                                        'parts' => array(
                                            'parameters' => 'Authorise3ds2',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapEnvelope\\Messages\\Authorise3ds2Output',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapEnvelope\\Headers\\Authorise3ds2Output',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapParts\\Authorise3ds2Output',
                                        'parts' => array(
                                            'parameters' => 'Authorise3ds2Response',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'authoriseReferral' => array(
                                    'action' => NULL,
                                    'style' => 'rpc',
                                    'version' => '1.1',
                                    'name' => 'authoriseReferral',
                                    'method' => 'authoriseReferral',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapEnvelope\\Messages\\AuthoriseReferralInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapEnvelope\\Headers\\AuthoriseReferralInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapParts\\AuthoriseReferralInput',
                                        'parts' => array(
                                            'parameters' => 'AuthoriseReferral',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapEnvelope\\Messages\\AuthoriseReferralOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapEnvelope\\Headers\\AuthoriseReferralOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapParts\\AuthoriseReferralOutput',
                                        'parts' => array(
                                            'parameters' => 'AuthoriseReferralResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'balanceCheck' => array(
                                    'action' => NULL,
                                    'style' => 'rpc',
                                    'version' => '1.1',
                                    'name' => 'balanceCheck',
                                    'method' => 'balanceCheck',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapEnvelope\\Messages\\BalanceCheckInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapEnvelope\\Headers\\BalanceCheckInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapParts\\BalanceCheckInput',
                                        'parts' => array(
                                            'parameters' => 'BalanceCheck',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapEnvelope\\Messages\\BalanceCheckOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapEnvelope\\Headers\\BalanceCheckOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapParts\\BalanceCheckOutput',
                                        'parts' => array(
                                            'parameters' => 'BalanceCheckResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'cancel' => array(
                                    'action' => NULL,
                                    'style' => 'rpc',
                                    'version' => '1.1',
                                    'name' => 'cancel',
                                    'method' => 'cancel',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapEnvelope\\Messages\\CancelInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapEnvelope\\Headers\\CancelInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapParts\\CancelInput',
                                        'parts' => array(
                                            'parameters' => 'Cancel',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapEnvelope\\Messages\\CancelOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapEnvelope\\Headers\\CancelOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapParts\\CancelOutput',
                                        'parts' => array(
                                            'parameters' => 'CancelResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'cancelOrRefund' => array(
                                    'action' => NULL,
                                    'style' => 'rpc',
                                    'version' => '1.1',
                                    'name' => 'cancelOrRefund',
                                    'method' => 'cancelOrRefund',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapEnvelope\\Messages\\CancelOrRefundInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapEnvelope\\Headers\\CancelOrRefundInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapParts\\CancelOrRefundInput',
                                        'parts' => array(
                                            'parameters' => 'CancelOrRefund',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapEnvelope\\Messages\\CancelOrRefundOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapEnvelope\\Headers\\CancelOrRefundOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapParts\\CancelOrRefundOutput',
                                        'parts' => array(
                                            'parameters' => 'CancelOrRefundResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'capture' => array(
                                    'action' => NULL,
                                    'style' => 'rpc',
                                    'version' => '1.1',
                                    'name' => 'capture',
                                    'method' => 'capture',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapEnvelope\\Messages\\CaptureInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapEnvelope\\Headers\\CaptureInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapParts\\CaptureInput',
                                        'parts' => array(
                                            'parameters' => 'Capture',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapEnvelope\\Messages\\CaptureOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapEnvelope\\Headers\\CaptureOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapParts\\CaptureOutput',
                                        'parts' => array(
                                            'parameters' => 'CaptureResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'checkFraud' => array(
                                    'action' => NULL,
                                    'style' => 'rpc',
                                    'version' => '1.1',
                                    'name' => 'checkFraud',
                                    'method' => 'checkFraud',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapEnvelope\\Messages\\CheckFraudInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapEnvelope\\Headers\\CheckFraudInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapParts\\CheckFraudInput',
                                        'parts' => array(
                                            'parameters' => 'CheckFraud',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapEnvelope\\Messages\\CheckFraudOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapEnvelope\\Headers\\CheckFraudOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapParts\\CheckFraudOutput',
                                        'parts' => array(
                                            'parameters' => 'CheckFraudResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'fundTransfer' => array(
                                    'action' => NULL,
                                    'style' => 'rpc',
                                    'version' => '1.1',
                                    'name' => 'fundTransfer',
                                    'method' => 'fundTransfer',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapEnvelope\\Messages\\FundTransferInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapEnvelope\\Headers\\FundTransferInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapParts\\FundTransferInput',
                                        'parts' => array(
                                            'parameters' => 'FundTransfer',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapEnvelope\\Messages\\FundTransferOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapEnvelope\\Headers\\FundTransferOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapParts\\FundTransferOutput',
                                        'parts' => array(
                                            'parameters' => 'FundTransferResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'refund' => array(
                                    'action' => NULL,
                                    'style' => 'rpc',
                                    'version' => '1.1',
                                    'name' => 'refund',
                                    'method' => 'refund',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapEnvelope\\Messages\\RefundInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapEnvelope\\Headers\\RefundInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapParts\\RefundInput',
                                        'parts' => array(
                                            'parameters' => 'Refund',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapEnvelope\\Messages\\RefundOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapEnvelope\\Headers\\RefundOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapParts\\RefundOutput',
                                        'parts' => array(
                                            'parameters' => 'RefundResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'refundWithData' => array(
                                    'action' => NULL,
                                    'style' => 'rpc',
                                    'version' => '1.1',
                                    'name' => 'refundWithData',
                                    'method' => 'refundWithData',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapEnvelope\\Messages\\RefundWithDataInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapEnvelope\\Headers\\RefundWithDataInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapParts\\RefundWithDataInput',
                                        'parts' => array(
                                            'parameters' => 'RefundWithData',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapEnvelope\\Messages\\RefundWithDataOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapEnvelope\\Headers\\RefundWithDataOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapParts\\RefundWithDataOutput',
                                        'parts' => array(
                                            'parameters' => 'RefundWithDataResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'retrieve3ds2Result' => array(
                                    'action' => NULL,
                                    'style' => 'rpc',
                                    'version' => '1.1',
                                    'name' => 'retrieve3ds2Result',
                                    'method' => 'retrieve3ds2Result',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapEnvelope\\Messages\\Retrieve3ds2ResultInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapEnvelope\\Headers\\Retrieve3ds2ResultInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapParts\\Retrieve3ds2ResultInput',
                                        'parts' => array(
                                            'parameters' => 'Retrieve3ds2Result',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapEnvelope\\Messages\\Retrieve3ds2ResultOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapEnvelope\\Headers\\Retrieve3ds2ResultOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapParts\\Retrieve3ds2ResultOutput',
                                        'parts' => array(
                                            'parameters' => 'Retrieve3ds2ResultResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'riskOnly' => array(
                                    'action' => NULL,
                                    'style' => 'rpc',
                                    'version' => '1.1',
                                    'name' => 'riskOnly',
                                    'method' => 'riskOnly',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapEnvelope\\Messages\\RiskOnlyInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapEnvelope\\Headers\\RiskOnlyInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapParts\\RiskOnlyInput',
                                        'parts' => array(
                                            'parameters' => 'RiskOnly',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapEnvelope\\Messages\\RiskOnlyOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapEnvelope\\Headers\\RiskOnlyOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapParts\\RiskOnlyOutput',
                                        'parts' => array(
                                            'parameters' => 'RiskOnlyResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'technicalCancel' => array(
                                    'action' => NULL,
                                    'style' => 'rpc',
                                    'version' => '1.1',
                                    'name' => 'technicalCancel',
                                    'method' => 'technicalCancel',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapEnvelope\\Messages\\TechnicalCancelInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapEnvelope\\Headers\\TechnicalCancelInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapParts\\TechnicalCancelInput',
                                        'parts' => array(
                                            'parameters' => 'TechnicalCancel',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapEnvelope\\Messages\\TechnicalCancelOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapEnvelope\\Headers\\TechnicalCancelOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapParts\\TechnicalCancelOutput',
                                        'parts' => array(
                                            'parameters' => 'TechnicalCancelResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'voidPendingRefund' => array(
                                    'action' => NULL,
                                    'style' => 'rpc',
                                    'version' => '1.1',
                                    'name' => 'voidPendingRefund',
                                    'method' => 'voidPendingRefund',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapEnvelope\\Messages\\VoidPendingRefundInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapEnvelope\\Headers\\VoidPendingRefundInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapParts\\VoidPendingRefundInput',
                                        'parts' => array(
                                            'parameters' => 'VoidPendingRefund',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapEnvelope\\Messages\\VoidPendingRefundOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapEnvelope\\Headers\\VoidPendingRefundOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment\\SoapParts\\VoidPendingRefundOutput',
                                        'parts' => array(
                                            'parameters' => 'VoidPendingRefundResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                            ),
                            'unwrap' => false,
                            'endpoint' => 'https://pal-test.adyen.com/pal/servlet/Payment/v40',
                        ),
                    ),
                ),
            ),
            'goetas_webservices.soap_client.config' => array(
                'namespaces' => array(
                    'http://payment.services.adyen.com' => 'GoetasWebservices\\Client\\AdyenPayment\\Payment',
                    'http://applicationinfo.payment.services.adyen.com' => 'GoetasWebservices\\Client\\AdyenPayment\\AppInfo',
                    'http://common.services.adyen.com' => 'GoetasWebservices\\Client\\AdyenPayment\\Common',
                    'http://threeds2data.payment.services.adyen.com' => 'GoetasWebservices\\Client\\AdyenPayment\\ThreedsToData',
                ),
                'destinations_php' => array(
                    'GoetasWebservices\\Client\\AdyenPayment' => 'src',
                ),
                'destinations_jms' => array(
                    'GoetasWebservices\\Client\\AdyenPayment' => 'metadata',
                ),
                'metadata' => array(
                    'https://pal-test.adyen.com/pal/servlet/Payment/v40?wsdl' => NULL,
                ),
                'alternative_endpoints' => array(

                ),
                'unwrap_returns' => false,
                'naming_strategy' => 'short',
                'path_generator' => 'psr4',
                'known_locations' => array(

                ),
                'aliases' => array(

                ),
                'headers' => '\\SoapEnvelope\\Headers',
                'parts' => '\\SoapEnvelope\\Parts',
                'messages' => '\\SoapEnvelope\\Messages',
            ),
            'goetas_webservices.soap_client.unwrap_returns' => false,
        );
    }
}
