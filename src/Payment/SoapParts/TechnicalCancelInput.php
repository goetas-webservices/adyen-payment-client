<?php

namespace GoetasWebservices\Client\AdyenPayment\Payment\SoapParts;

/**
 * Class representing TechnicalCancelInput
 */
class TechnicalCancelInput
{

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\Payment\TechnicalCancel $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\AdyenPayment\Payment\TechnicalCancel
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\AdyenPayment\Payment\TechnicalCancel $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\AdyenPayment\Payment\TechnicalCancel $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

