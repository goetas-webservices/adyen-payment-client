<?php

namespace GoetasWebservices\Client\AdyenPayment\Payment;

/**
 * Class representing RiskOnlyResponse
 */
class RiskOnlyResponse
{

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\Payment\PaymentResultType $paymentResult
     */
    private $paymentResult = null;

    /**
     * Gets as paymentResult
     *
     * @return \GoetasWebservices\Client\AdyenPayment\Payment\PaymentResultType
     */
    public function getPaymentResult()
    {
        return $this->paymentResult;
    }

    /**
     * Sets a new paymentResult
     *
     * @param \GoetasWebservices\Client\AdyenPayment\Payment\PaymentResultType $paymentResult
     * @return self
     */
    public function setPaymentResult(\GoetasWebservices\Client\AdyenPayment\Payment\PaymentResultType $paymentResult)
    {
        $this->paymentResult = $paymentResult;
        return $this;
    }


}

