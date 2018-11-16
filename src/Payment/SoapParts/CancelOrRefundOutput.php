<?php

namespace GoetasWebservices\Client\AdyenPayment\Payment\SoapParts;

/**
 * Class representing CancelOrRefundOutput
 */
class CancelOrRefundOutput
{

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\Payment\CancelOrRefundResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\AdyenPayment\Payment\CancelOrRefundResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\AdyenPayment\Payment\CancelOrRefundResponse $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\AdyenPayment\Payment\CancelOrRefundResponse $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

