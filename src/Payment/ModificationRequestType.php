<?php

namespace GoetasWebservices\Client\AdyenPayment\Payment;

/**
 * Class representing ModificationRequestType
 *
 *
 * XSD Type: ModificationRequest
 */
class ModificationRequestType
{

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\Payment\AnyType2anyTypeMapType\EntryAType[] $additionalData
     */
    private $additionalData = null;

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\AppInfo\ApplicationInfoType $applicationInfo
     */
    private $applicationInfo = null;

    /**
     * @property string $authorisationCode
     */
    private $authorisationCode = null;

    /**
     * @property string $merchantAccount
     */
    private $merchantAccount = null;

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\Common\AmountType $modificationAmount
     */
    private $modificationAmount = null;

    /**
     * @property string $originalMerchantReference
     */
    private $originalMerchantReference = null;

    /**
     * @property string $originalReference
     */
    private $originalReference = null;

    /**
     * @property string $reference
     */
    private $reference = null;

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\Payment\SplitType[] $splits
     */
    private $splits = null;

    /**
     * @property string $tenderReference
     */
    private $tenderReference = null;

    /**
     * @property string $uniqueTerminalId
     */
    private $uniqueTerminalId = null;

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
     * Gets as applicationInfo
     *
     * @return \GoetasWebservices\Client\AdyenPayment\AppInfo\ApplicationInfoType
     */
    public function getApplicationInfo()
    {
        return $this->applicationInfo;
    }

    /**
     * Sets a new applicationInfo
     *
     * @param \GoetasWebservices\Client\AdyenPayment\AppInfo\ApplicationInfoType $applicationInfo
     * @return self
     */
    public function setApplicationInfo(\GoetasWebservices\Client\AdyenPayment\AppInfo\ApplicationInfoType $applicationInfo)
    {
        $this->applicationInfo = $applicationInfo;
        return $this;
    }

    /**
     * Gets as authorisationCode
     *
     * @return string
     */
    public function getAuthorisationCode()
    {
        return $this->authorisationCode;
    }

    /**
     * Sets a new authorisationCode
     *
     * @param string $authorisationCode
     * @return self
     */
    public function setAuthorisationCode($authorisationCode)
    {
        $this->authorisationCode = $authorisationCode;
        return $this;
    }

    /**
     * Gets as merchantAccount
     *
     * @return string
     */
    public function getMerchantAccount()
    {
        return $this->merchantAccount;
    }

    /**
     * Sets a new merchantAccount
     *
     * @param string $merchantAccount
     * @return self
     */
    public function setMerchantAccount($merchantAccount)
    {
        $this->merchantAccount = $merchantAccount;
        return $this;
    }

    /**
     * Gets as modificationAmount
     *
     * @return \GoetasWebservices\Client\AdyenPayment\Common\AmountType
     */
    public function getModificationAmount()
    {
        return $this->modificationAmount;
    }

    /**
     * Sets a new modificationAmount
     *
     * @param \GoetasWebservices\Client\AdyenPayment\Common\AmountType $modificationAmount
     * @return self
     */
    public function setModificationAmount(\GoetasWebservices\Client\AdyenPayment\Common\AmountType $modificationAmount)
    {
        $this->modificationAmount = $modificationAmount;
        return $this;
    }

    /**
     * Gets as originalMerchantReference
     *
     * @return string
     */
    public function getOriginalMerchantReference()
    {
        return $this->originalMerchantReference;
    }

    /**
     * Sets a new originalMerchantReference
     *
     * @param string $originalMerchantReference
     * @return self
     */
    public function setOriginalMerchantReference($originalMerchantReference)
    {
        $this->originalMerchantReference = $originalMerchantReference;
        return $this;
    }

    /**
     * Gets as originalReference
     *
     * @return string
     */
    public function getOriginalReference()
    {
        return $this->originalReference;
    }

    /**
     * Sets a new originalReference
     *
     * @param string $originalReference
     * @return self
     */
    public function setOriginalReference($originalReference)
    {
        $this->originalReference = $originalReference;
        return $this;
    }

    /**
     * Gets as reference
     *
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Sets a new reference
     *
     * @param string $reference
     * @return self
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * Adds as split
     *
     * @return self
     * @param \GoetasWebservices\Client\AdyenPayment\Payment\SplitType $split
     */
    public function addToSplits(\GoetasWebservices\Client\AdyenPayment\Payment\SplitType $split)
    {
        $this->splits[] = $split;
        return $this;
    }

    /**
     * isset splits
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSplits($index)
    {
        return isset($this->splits[$index]);
    }

    /**
     * unset splits
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSplits($index)
    {
        unset($this->splits[$index]);
    }

    /**
     * Gets as splits
     *
     * @return \GoetasWebservices\Client\AdyenPayment\Payment\SplitType[]
     */
    public function getSplits()
    {
        return $this->splits;
    }

    /**
     * Sets a new splits
     *
     * @param \GoetasWebservices\Client\AdyenPayment\Payment\SplitType[] $splits
     * @return self
     */
    public function setSplits(array $splits)
    {
        $this->splits = $splits;
        return $this;
    }

    /**
     * Gets as tenderReference
     *
     * @return string
     */
    public function getTenderReference()
    {
        return $this->tenderReference;
    }

    /**
     * Sets a new tenderReference
     *
     * @param string $tenderReference
     * @return self
     */
    public function setTenderReference($tenderReference)
    {
        $this->tenderReference = $tenderReference;
        return $this;
    }

    /**
     * Gets as uniqueTerminalId
     *
     * @return string
     */
    public function getUniqueTerminalId()
    {
        return $this->uniqueTerminalId;
    }

    /**
     * Sets a new uniqueTerminalId
     *
     * @param string $uniqueTerminalId
     * @return self
     */
    public function setUniqueTerminalId($uniqueTerminalId)
    {
        $this->uniqueTerminalId = $uniqueTerminalId;
        return $this;
    }


}

