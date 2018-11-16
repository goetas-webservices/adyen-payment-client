<?php

namespace GoetasWebservices\Client\AdyenPayment\Payment;

/**
 * Class representing BalanceCheckResponse
 */
class BalanceCheckResponse
{

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\Payment\BalanceCheckResultType $response
     */
    private $response = null;

    /**
     * Gets as response
     *
     * @return \GoetasWebservices\Client\AdyenPayment\Payment\BalanceCheckResultType
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Sets a new response
     *
     * @param \GoetasWebservices\Client\AdyenPayment\Payment\BalanceCheckResultType $response
     * @return self
     */
    public function setResponse(\GoetasWebservices\Client\AdyenPayment\Payment\BalanceCheckResultType $response)
    {
        $this->response = $response;
        return $this;
    }


}

