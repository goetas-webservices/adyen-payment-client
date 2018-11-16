<?php

namespace GoetasWebservices\Client\AdyenPayment\Payment\SoapParts;

/**
 * Class representing CheckFraudInput
 */
class CheckFraudInput
{

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\Payment\CheckFraud $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\AdyenPayment\Payment\CheckFraud
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\AdyenPayment\Payment\CheckFraud $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\AdyenPayment\Payment\CheckFraud $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

