<?php

namespace GoetasWebservices\Client\AdyenPayment\Payment;

/**
 * Class representing CancelResponse
 */
class CancelResponse
{

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\Payment\ModificationResultType $cancelResult
     */
    private $cancelResult = null;

    /**
     * Gets as cancelResult
     *
     * @return \GoetasWebservices\Client\AdyenPayment\Payment\ModificationResultType
     */
    public function getCancelResult()
    {
        return $this->cancelResult;
    }

    /**
     * Sets a new cancelResult
     *
     * @param \GoetasWebservices\Client\AdyenPayment\Payment\ModificationResultType $cancelResult
     * @return self
     */
    public function setCancelResult(\GoetasWebservices\Client\AdyenPayment\Payment\ModificationResultType $cancelResult)
    {
        $this->cancelResult = $cancelResult;
        return $this;
    }


}

