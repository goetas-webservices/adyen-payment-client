<?php

namespace GoetasWebservices\Client\AdyenPayment\Payment\SoapParts;

/**
 * Class representing CancelOrRefundInput
 */
class CancelOrRefundInput
{

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\Payment\CancelOrRefund $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\AdyenPayment\Payment\CancelOrRefund
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\AdyenPayment\Payment\CancelOrRefund $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\AdyenPayment\Payment\CancelOrRefund $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

