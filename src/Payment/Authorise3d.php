<?php

namespace GoetasWebservices\Client\AdyenPayment\Payment;

/**
 * Class representing Authorise3d
 */
class Authorise3d
{

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\Payment\PaymentRequest3dType $paymentRequest3d
     */
    private $paymentRequest3d = null;

    /**
     * Gets as paymentRequest3d
     *
     * @return \GoetasWebservices\Client\AdyenPayment\Payment\PaymentRequest3dType
     */
    public function getPaymentRequest3d()
    {
        return $this->paymentRequest3d;
    }

    /**
     * Sets a new paymentRequest3d
     *
     * @param \GoetasWebservices\Client\AdyenPayment\Payment\PaymentRequest3dType $paymentRequest3d
     * @return self
     */
    public function setPaymentRequest3d(\GoetasWebservices\Client\AdyenPayment\Payment\PaymentRequest3dType $paymentRequest3d)
    {
        $this->paymentRequest3d = $paymentRequest3d;
        return $this;
    }


}

