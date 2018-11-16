<?php

namespace GoetasWebservices\Client\AdyenPayment\Payment\SoapParts;

/**
 * Class representing CheckFraudOutput
 */
class CheckFraudOutput
{

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\Payment\CheckFraudResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\AdyenPayment\Payment\CheckFraudResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\AdyenPayment\Payment\CheckFraudResponse $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\AdyenPayment\Payment\CheckFraudResponse $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

