<?php

namespace GoetasWebservices\Client\AdyenPayment\Payment\SoapParts;

/**
 * Class representing AdjustAuthorisationInput
 */
class AdjustAuthorisationInput
{

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\Payment\AdjustAuthorisation $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\AdyenPayment\Payment\AdjustAuthorisation
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\AdyenPayment\Payment\AdjustAuthorisation $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\AdyenPayment\Payment\AdjustAuthorisation $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

