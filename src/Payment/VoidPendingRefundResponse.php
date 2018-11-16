<?php

namespace GoetasWebservices\Client\AdyenPayment\Payment;

/**
 * Class representing VoidPendingRefundResponse
 */
class VoidPendingRefundResponse
{

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\Payment\ModificationResultType $voidPendingRefundResult
     */
    private $voidPendingRefundResult = null;

    /**
     * Gets as voidPendingRefundResult
     *
     * @return \GoetasWebservices\Client\AdyenPayment\Payment\ModificationResultType
     */
    public function getVoidPendingRefundResult()
    {
        return $this->voidPendingRefundResult;
    }

    /**
     * Sets a new voidPendingRefundResult
     *
     * @param \GoetasWebservices\Client\AdyenPayment\Payment\ModificationResultType $voidPendingRefundResult
     * @return self
     */
    public function setVoidPendingRefundResult(\GoetasWebservices\Client\AdyenPayment\Payment\ModificationResultType $voidPendingRefundResult)
    {
        $this->voidPendingRefundResult = $voidPendingRefundResult;
        return $this;
    }


}

