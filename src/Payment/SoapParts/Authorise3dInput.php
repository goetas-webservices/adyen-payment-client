<?php

namespace GoetasWebservices\Client\AdyenPayment\Payment\SoapParts;

/**
 * Class representing Authorise3dInput
 */
class Authorise3dInput
{

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\Payment\Authorise3d $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\AdyenPayment\Payment\Authorise3d
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\AdyenPayment\Payment\Authorise3d $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\AdyenPayment\Payment\Authorise3d $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

