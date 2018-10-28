<?php

namespace GoetasWebservices\Client\AdyenPayment\Payment\SoapParts;

/**
 * Class representing Authorise3ds2Input
 */
class Authorise3ds2Input
{

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\Payment\Authorise3ds2 $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\AdyenPayment\Payment\Authorise3ds2
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\AdyenPayment\Payment\Authorise3ds2 $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\AdyenPayment\Payment\Authorise3ds2 $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

