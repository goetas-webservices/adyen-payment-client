<?php

namespace GoetasWebservices\Client\AdyenPayment\Payment\SoapParts;

/**
 * Class representing AuthoriseReferralInput
 */
class AuthoriseReferralInput
{

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\Payment\AuthoriseReferral $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\AdyenPayment\Payment\AuthoriseReferral
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\AdyenPayment\Payment\AuthoriseReferral $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\AdyenPayment\Payment\AuthoriseReferral $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

