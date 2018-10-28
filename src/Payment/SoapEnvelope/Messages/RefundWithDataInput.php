<?php

namespace GoetasWebservices\Client\AdyenPayment\Payment\SoapEnvelope\Messages;

/**
 * Class representing RefundWithDataInput
 */
class RefundWithDataInput
{

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\Payment\SoapParts\RefundWithDataInput $body
     */
    private $body = null;

    /**
     * @property \GoetasWebservices\SoapServices\SoapClient\Arguments\Headers\Handler\HeaderPlaceholder $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \GoetasWebservices\Client\AdyenPayment\Payment\SoapParts\RefundWithDataInput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \GoetasWebservices\Client\AdyenPayment\Payment\SoapParts\RefundWithDataInput $body
     * @return self
     */
    public function setBody(\GoetasWebservices\Client\AdyenPayment\Payment\SoapParts\RefundWithDataInput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \GoetasWebservices\SoapServices\SoapClient\Arguments\Headers\Handler\HeaderPlaceholder
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \GoetasWebservices\SoapServices\SoapClient\Arguments\Headers\Handler\HeaderPlaceholder $header
     * @return self
     */
    public function setHeader(\GoetasWebservices\SoapServices\SoapClient\Arguments\Headers\Handler\HeaderPlaceholder $header)
    {
        $this->header = $header;
        return $this;
    }


}

