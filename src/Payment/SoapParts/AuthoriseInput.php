<?php

namespace GoetasWebservices\Client\AdyenPayment\Payment\SoapParts;

/**
 * Class representing AuthoriseInput
 */
class AuthoriseInput
{

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\Payment\Authorise $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\AdyenPayment\Payment\Authorise
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\AdyenPayment\Payment\Authorise $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\AdyenPayment\Payment\Authorise $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

