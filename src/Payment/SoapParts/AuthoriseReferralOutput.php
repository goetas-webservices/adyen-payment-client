<?php

namespace GoetasWebservices\Client\AdyenPayment\Payment\SoapParts;

/**
 * Class representing AuthoriseReferralOutput
 */
class AuthoriseReferralOutput
{

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\Payment\AuthoriseReferralResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\AdyenPayment\Payment\AuthoriseReferralResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\AdyenPayment\Payment\AuthoriseReferralResponse $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\AdyenPayment\Payment\AuthoriseReferralResponse $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

