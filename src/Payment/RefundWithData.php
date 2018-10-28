<?php

namespace GoetasWebservices\Client\AdyenPayment\Payment;

/**
 * Class representing RefundWithData
 */
class RefundWithData
{

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\Payment\PaymentRequestType $request
     */
    private $request = null;

    /**
     * Gets as request
     *
     * @return \GoetasWebservices\Client\AdyenPayment\Payment\PaymentRequestType
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Sets a new request
     *
     * @param \GoetasWebservices\Client\AdyenPayment\Payment\PaymentRequestType $request
     * @return self
     */
    public function setRequest(\GoetasWebservices\Client\AdyenPayment\Payment\PaymentRequestType $request)
    {
        $this->request = $request;
        return $this;
    }


}

