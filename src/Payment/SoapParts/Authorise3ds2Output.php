<?php

namespace GoetasWebservices\Client\AdyenPayment\Payment\SoapParts;

/**
 * Class representing Authorise3ds2Output
 */
class Authorise3ds2Output
{

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\Payment\Authorise3ds2Response $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\AdyenPayment\Payment\Authorise3ds2Response
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\AdyenPayment\Payment\Authorise3ds2Response $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\AdyenPayment\Payment\Authorise3ds2Response $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

