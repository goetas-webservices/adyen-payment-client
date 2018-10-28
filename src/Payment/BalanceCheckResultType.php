<?php

namespace GoetasWebservices\Client\AdyenPayment\Payment;

/**
 * Class representing BalanceCheckResultType
 *
 *
 * XSD Type: BalanceCheckResult
 */
class BalanceCheckResultType
{

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\Payment\AnyType2anyTypeMapType\EntryAType[] $additionalData
     */
    private $additionalData = null;

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\Common\AmountType $currentBalance
     */
    private $currentBalance = null;

    /**
     * @property string $pspReference
     */
    private $pspReference = null;

    /**
     * @property string $responseCode
     */
    private $responseCode = null;

    /**
     * Adds as entry
     *
     * @return self
     * @param \GoetasWebservices\Client\AdyenPayment\Payment\AnyType2anyTypeMapType\EntryAType $entry
     */
    public function addToAdditionalData(\GoetasWebservices\Client\AdyenPayment\Payment\AnyType2anyTypeMapType\EntryAType $entry)
    {
        $this->additionalData[] = $entry;
        return $this;
    }

    /**
     * isset additionalData
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalData($index)
    {
        return isset($this->additionalData[$index]);
    }

    /**
     * unset additionalData
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalData($index)
    {
        unset($this->additionalData[$index]);
    }

    /**
     * Gets as additionalData
     *
     * @return \GoetasWebservices\Client\AdyenPayment\Payment\AnyType2anyTypeMapType\EntryAType[]
     */
    public function getAdditionalData()
    {
        return $this->additionalData;
    }

    /**
     * Sets a new additionalData
     *
     * @param \GoetasWebservices\Client\AdyenPayment\Payment\AnyType2anyTypeMapType\EntryAType[] $additionalData
     * @return self
     */
    public function setAdditionalData(array $additionalData)
    {
        $this->additionalData = $additionalData;
        return $this;
    }

    /**
     * Gets as currentBalance
     *
     * @return \GoetasWebservices\Client\AdyenPayment\Common\AmountType
     */
    public function getCurrentBalance()
    {
        return $this->currentBalance;
    }

    /**
     * Sets a new currentBalance
     *
     * @param \GoetasWebservices\Client\AdyenPayment\Common\AmountType $currentBalance
     * @return self
     */
    public function setCurrentBalance(\GoetasWebservices\Client\AdyenPayment\Common\AmountType $currentBalance)
    {
        $this->currentBalance = $currentBalance;
        return $this;
    }

    /**
     * Gets as pspReference
     *
     * @return string
     */
    public function getPspReference()
    {
        return $this->pspReference;
    }

    /**
     * Sets a new pspReference
     *
     * @param string $pspReference
     * @return self
     */
    public function setPspReference($pspReference)
    {
        $this->pspReference = $pspReference;
        return $this;
    }

    /**
     * Gets as responseCode
     *
     * @return string
     */
    public function getResponseCode()
    {
        return $this->responseCode;
    }

    /**
     * Sets a new responseCode
     *
     * @param string $responseCode
     * @return self
     */
    public function setResponseCode($responseCode)
    {
        $this->responseCode = $responseCode;
        return $this;
    }


}

