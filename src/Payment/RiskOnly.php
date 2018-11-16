<?php

namespace GoetasWebservices\Client\AdyenPayment\Payment;

/**
 * Class representing RiskOnly
 */
class RiskOnly
{

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\Payment\PaymentRequestType $paymentRequest
     */
    private $paymentRequest = null;

    /**
     * Gets as paymentRequest
     *
     * @return \GoetasWebservices\Client\AdyenPayment\Payment\PaymentRequestType
     */
    public function getPaymentRequest()
    {
        return $this->paymentRequest;
    }

    /**
     * Sets a new paymentRequest
     *
     * @param \GoetasWebservices\Client\AdyenPayment\Payment\PaymentRequestType $paymentRequest
     * @return self
     */
    public function setPaymentRequest(\GoetasWebservices\Client\AdyenPayment\Payment\PaymentRequestType $paymentRequest)
    {
        $this->paymentRequest = $paymentRequest;
        return $this;
    }


}

