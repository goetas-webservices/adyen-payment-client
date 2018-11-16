<?php

namespace GoetasWebservices\Client\AdyenPayment\Payment\SoapParts;

/**
 * Class representing BalanceCheckOutput
 */
class BalanceCheckOutput
{

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\Payment\BalanceCheckResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\AdyenPayment\Payment\BalanceCheckResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\AdyenPayment\Payment\BalanceCheckResponse $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\AdyenPayment\Payment\BalanceCheckResponse $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

