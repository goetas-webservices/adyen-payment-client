<?php

namespace GoetasWebservices\Client\AdyenPayment\Payment;

/**
 * Class representing RefundResponse
 */
class RefundResponse
{

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\Payment\ModificationResultType $refundResult
     */
    private $refundResult = null;

    /**
     * Gets as refundResult
     *
     * @return \GoetasWebservices\Client\AdyenPayment\Payment\ModificationResultType
     */
    public function getRefundResult()
    {
        return $this->refundResult;
    }

    /**
     * Sets a new refundResult
     *
     * @param \GoetasWebservices\Client\AdyenPayment\Payment\ModificationResultType $refundResult
     * @return self
     */
    public function setRefundResult(\GoetasWebservices\Client\AdyenPayment\Payment\ModificationResultType $refundResult)
    {
        $this->refundResult = $refundResult;
        return $this;
    }


}

