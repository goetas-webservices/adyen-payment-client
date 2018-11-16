<?php

namespace GoetasWebservices\Client\AdyenPayment\Payment\SoapParts;

/**
 * Class representing Retrieve3ds2ResultOutput
 */
class Retrieve3ds2ResultOutput
{

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\Payment\Retrieve3ds2ResultResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\AdyenPayment\Payment\Retrieve3ds2ResultResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\AdyenPayment\Payment\Retrieve3ds2ResultResponse $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\AdyenPayment\Payment\Retrieve3ds2ResultResponse $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

