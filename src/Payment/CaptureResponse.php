<?php

namespace GoetasWebservices\Client\AdyenPayment\Payment;

/**
 * Class representing CaptureResponse
 */
class CaptureResponse
{

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\Payment\ModificationResultType $captureResult
     */
    private $captureResult = null;

    /**
     * Gets as captureResult
     *
     * @return \GoetasWebservices\Client\AdyenPayment\Payment\ModificationResultType
     */
    public function getCaptureResult()
    {
        return $this->captureResult;
    }

    /**
     * Sets a new captureResult
     *
     * @param \GoetasWebservices\Client\AdyenPayment\Payment\ModificationResultType $captureResult
     * @return self
     */
    public function setCaptureResult(\GoetasWebservices\Client\AdyenPayment\Payment\ModificationResultType $captureResult)
    {
        $this->captureResult = $captureResult;
        return $this;
    }


}

