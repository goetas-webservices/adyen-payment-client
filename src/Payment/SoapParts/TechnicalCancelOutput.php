<?php

namespace GoetasWebservices\Client\AdyenPayment\Payment\SoapParts;

/**
 * Class representing TechnicalCancelOutput
 */
class TechnicalCancelOutput
{

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\Payment\TechnicalCancelResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\AdyenPayment\Payment\TechnicalCancelResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\AdyenPayment\Payment\TechnicalCancelResponse $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\AdyenPayment\Payment\TechnicalCancelResponse $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

