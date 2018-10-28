<?php

namespace GoetasWebservices\Client\AdyenPayment\Payment;

/**
 * Class representing CancelOrRefundResponse
 */
class CancelOrRefundResponse
{

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\Payment\ModificationResultType $cancelOrRefundResult
     */
    private $cancelOrRefundResult = null;

    /**
     * Gets as cancelOrRefundResult
     *
     * @return \GoetasWebservices\Client\AdyenPayment\Payment\ModificationResultType
     */
    public function getCancelOrRefundResult()
    {
        return $this->cancelOrRefundResult;
    }

    /**
     * Sets a new cancelOrRefundResult
     *
     * @param \GoetasWebservices\Client\AdyenPayment\Payment\ModificationResultType $cancelOrRefundResult
     * @return self
     */
    public function setCancelOrRefundResult(\GoetasWebservices\Client\AdyenPayment\Payment\ModificationResultType $cancelOrRefundResult)
    {
        $this->cancelOrRefundResult = $cancelOrRefundResult;
        return $this;
    }


}

