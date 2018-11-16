<?php

namespace GoetasWebservices\Client\AdyenPayment\Payment;

/**
 * Class representing PermitRestrictionType
 *
 *
 * XSD Type: PermitRestriction
 */
class PermitRestrictionType
{

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\Common\AmountType $maxAmount
     */
    private $maxAmount = null;

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\Common\AmountType $singleTransactionLimit
     */
    private $singleTransactionLimit = null;

    /**
     * @property bool $singleUse
     */
    private $singleUse = null;

    /**
     * Gets as maxAmount
     *
     * @return \GoetasWebservices\Client\AdyenPayment\Common\AmountType
     */
    public function getMaxAmount()
    {
        return $this->maxAmount;
    }

    /**
     * Sets a new maxAmount
     *
     * @param \GoetasWebservices\Client\AdyenPayment\Common\AmountType $maxAmount
     * @return self
     */
    public function setMaxAmount(\GoetasWebservices\Client\AdyenPayment\Common\AmountType $maxAmount)
    {
        $this->maxAmount = $maxAmount;
        return $this;
    }

    /**
     * Gets as singleTransactionLimit
     *
     * @return \GoetasWebservices\Client\AdyenPayment\Common\AmountType
     */
    public function getSingleTransactionLimit()
    {
        return $this->singleTransactionLimit;
    }

    /**
     * Sets a new singleTransactionLimit
     *
     * @param \GoetasWebservices\Client\AdyenPayment\Common\AmountType $singleTransactionLimit
     * @return self
     */
    public function setSingleTransactionLimit(\GoetasWebservices\Client\AdyenPayment\Common\AmountType $singleTransactionLimit)
    {
        $this->singleTransactionLimit = $singleTransactionLimit;
        return $this;
    }

    /**
     * Gets as singleUse
     *
     * @return bool
     */
    public function getSingleUse()
    {
        return $this->singleUse;
    }

    /**
     * Sets a new singleUse
     *
     * @param bool $singleUse
     * @return self
     */
    public function setSingleUse($singleUse)
    {
        $this->singleUse = $singleUse;
        return $this;
    }


}

