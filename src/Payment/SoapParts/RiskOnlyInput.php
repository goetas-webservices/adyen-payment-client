<?php

namespace GoetasWebservices\Client\AdyenPayment\Payment\SoapParts;

/**
 * Class representing RiskOnlyInput
 */
class RiskOnlyInput
{

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\Payment\RiskOnly $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\AdyenPayment\Payment\RiskOnly
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\AdyenPayment\Payment\RiskOnly $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\AdyenPayment\Payment\RiskOnly $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

