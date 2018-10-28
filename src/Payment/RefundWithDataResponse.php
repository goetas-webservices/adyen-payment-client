<?php

namespace GoetasWebservices\Client\AdyenPayment\Payment;

/**
 * Class representing RefundWithDataResponse
 */
class RefundWithDataResponse
{

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\Payment\PaymentResultType $result
     */
    private $result = null;

    /**
     * Gets as result
     *
     * @return \GoetasWebservices\Client\AdyenPayment\Payment\PaymentResultType
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Sets a new result
     *
     * @param \GoetasWebservices\Client\AdyenPayment\Payment\PaymentResultType $result
     * @return self
     */
    public function setResult(\GoetasWebservices\Client\AdyenPayment\Payment\PaymentResultType $result)
    {
        $this->result = $result;
        return $this;
    }


}

