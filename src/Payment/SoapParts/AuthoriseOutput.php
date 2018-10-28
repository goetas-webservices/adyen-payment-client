<?php

namespace GoetasWebservices\Client\AdyenPayment\Payment\SoapParts;

/**
 * Class representing AuthoriseOutput
 */
class AuthoriseOutput
{

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\Payment\AuthoriseResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\AdyenPayment\Payment\AuthoriseResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\AdyenPayment\Payment\AuthoriseResponse $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\AdyenPayment\Payment\AuthoriseResponse $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

