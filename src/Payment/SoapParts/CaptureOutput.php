<?php

namespace GoetasWebservices\Client\AdyenPayment\Payment\SoapParts;

/**
 * Class representing CaptureOutput
 */
class CaptureOutput
{

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\Payment\CaptureResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\AdyenPayment\Payment\CaptureResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\AdyenPayment\Payment\CaptureResponse $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\AdyenPayment\Payment\CaptureResponse $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

