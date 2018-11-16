<?php

namespace GoetasWebservices\Client\AdyenPayment\Payment;

/**
 * Class representing TechnicalCancelResponse
 */
class TechnicalCancelResponse
{

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\Payment\ModificationResultType $technicalCancelResult
     */
    private $technicalCancelResult = null;

    /**
     * Gets as technicalCancelResult
     *
     * @return \GoetasWebservices\Client\AdyenPayment\Payment\ModificationResultType
     */
    public function getTechnicalCancelResult()
    {
        return $this->technicalCancelResult;
    }

    /**
     * Sets a new technicalCancelResult
     *
     * @param \GoetasWebservices\Client\AdyenPayment\Payment\ModificationResultType $technicalCancelResult
     * @return self
     */
    public function setTechnicalCancelResult(\GoetasWebservices\Client\AdyenPayment\Payment\ModificationResultType $technicalCancelResult)
    {
        $this->technicalCancelResult = $technicalCancelResult;
        return $this;
    }


}

