<?php

namespace GoetasWebservices\Client\AdyenPayment\Payment\SoapParts;

/**
 * Class representing Authorise3dOutput
 */
class Authorise3dOutput
{

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\Payment\Authorise3dResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\AdyenPayment\Payment\Authorise3dResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\AdyenPayment\Payment\Authorise3dResponse $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\AdyenPayment\Payment\Authorise3dResponse $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

