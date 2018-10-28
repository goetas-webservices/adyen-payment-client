<?php

namespace GoetasWebservices\Client\AdyenPayment\Payment\SoapParts;

/**
 * Class representing AdjustAuthorisationOutput
 */
class AdjustAuthorisationOutput
{

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\Payment\AdjustAuthorisationResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\AdyenPayment\Payment\AdjustAuthorisationResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\AdyenPayment\Payment\AdjustAuthorisationResponse $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\AdyenPayment\Payment\AdjustAuthorisationResponse $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

