<?php

namespace GoetasWebservices\Client\AdyenPayment\Payment\SoapParts;

/**
 * Class representing BalanceCheckInput
 */
class BalanceCheckInput
{

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\Payment\BalanceCheck $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\AdyenPayment\Payment\BalanceCheck
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\AdyenPayment\Payment\BalanceCheck $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\AdyenPayment\Payment\BalanceCheck $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

