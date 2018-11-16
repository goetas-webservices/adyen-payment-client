<?php

namespace GoetasWebservices\Client\AdyenPayment\Payment;

/**
 * Class representing AdjustAuthorisationResponse
 */
class AdjustAuthorisationResponse
{

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\Payment\ModificationResultType $adjustAuthorisationResult
     */
    private $adjustAuthorisationResult = null;

    /**
     * Gets as adjustAuthorisationResult
     *
     * @return \GoetasWebservices\Client\AdyenPayment\Payment\ModificationResultType
     */
    public function getAdjustAuthorisationResult()
    {
        return $this->adjustAuthorisationResult;
    }

    /**
     * Sets a new adjustAuthorisationResult
     *
     * @param \GoetasWebservices\Client\AdyenPayment\Payment\ModificationResultType $adjustAuthorisationResult
     * @return self
     */
    public function setAdjustAuthorisationResult(\GoetasWebservices\Client\AdyenPayment\Payment\ModificationResultType $adjustAuthorisationResult)
    {
        $this->adjustAuthorisationResult = $adjustAuthorisationResult;
        return $this;
    }


}

