<?php

namespace GoetasWebservices\Client\AdyenPayment\Payment;

/**
 * Class representing BalanceCheck
 */
class BalanceCheck
{

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\Payment\BalanceCheckRequestType $request
     */
    private $request = null;

    /**
     * Gets as request
     *
     * @return \GoetasWebservices\Client\AdyenPayment\Payment\BalanceCheckRequestType
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Sets a new request
     *
     * @param \GoetasWebservices\Client\AdyenPayment\Payment\BalanceCheckRequestType $request
     * @return self
     */
    public function setRequest(\GoetasWebservices\Client\AdyenPayment\Payment\BalanceCheckRequestType $request)
    {
        $this->request = $request;
        return $this;
    }


}

