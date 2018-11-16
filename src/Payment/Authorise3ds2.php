<?php

namespace GoetasWebservices\Client\AdyenPayment\Payment;

/**
 * Class representing Authorise3ds2
 */
class Authorise3ds2
{

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\Payment\PaymentRequest3ds2Type $paymentRequest3ds2
     */
    private $paymentRequest3ds2 = null;

    /**
     * Gets as paymentRequest3ds2
     *
     * @return \GoetasWebservices\Client\AdyenPayment\Payment\PaymentRequest3ds2Type
     */
    public function getPaymentRequest3ds2()
    {
        return $this->paymentRequest3ds2;
    }

    /**
     * Sets a new paymentRequest3ds2
     *
     * @param \GoetasWebservices\Client\AdyenPayment\Payment\PaymentRequest3ds2Type $paymentRequest3ds2
     * @return self
     */
    public function setPaymentRequest3ds2(\GoetasWebservices\Client\AdyenPayment\Payment\PaymentRequest3ds2Type $paymentRequest3ds2)
    {
        $this->paymentRequest3ds2 = $paymentRequest3ds2;
        return $this;
    }


}

