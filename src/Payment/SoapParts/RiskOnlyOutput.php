<?php

namespace GoetasWebservices\Client\AdyenPayment\Payment\SoapParts;

/**
 * Class representing RiskOnlyOutput
 */
class RiskOnlyOutput
{

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\Payment\RiskOnlyResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\AdyenPayment\Payment\RiskOnlyResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\AdyenPayment\Payment\RiskOnlyResponse $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\AdyenPayment\Payment\RiskOnlyResponse $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

