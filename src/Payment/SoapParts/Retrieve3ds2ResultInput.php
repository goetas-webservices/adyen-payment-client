<?php

namespace GoetasWebservices\Client\AdyenPayment\Payment\SoapParts;

/**
 * Class representing Retrieve3ds2ResultInput
 */
class Retrieve3ds2ResultInput
{

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\Payment\Retrieve3ds2Result $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\AdyenPayment\Payment\Retrieve3ds2Result
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\AdyenPayment\Payment\Retrieve3ds2Result $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\AdyenPayment\Payment\Retrieve3ds2Result $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

