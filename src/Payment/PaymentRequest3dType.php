<?php

namespace GoetasWebservices\Client\AdyenPayment\Payment;

/**
 * Class representing PaymentRequest3dType
 *
 *
 * XSD Type: PaymentRequest3d
 */
class PaymentRequest3dType
{

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\ThreedsToData\AccountInfoType $accountInfo
     */
    private $accountInfo = null;

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\Common\AmountType $additionalAmount
     */
    private $additionalAmount = null;

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\Payment\AnyType2anyTypeMapType\EntryAType[] $additionalData
     */
    private $additionalData = null;

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\Common\AmountType $amount
     */
    private $amount = null;

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\AppInfo\ApplicationInfoType $applicationInfo
     */
    private $applicationInfo = null;

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\Common\AddressType $billingAddress
     */
    private $billingAddress = null;

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\Common\BrowserInfoType $browserInfo
     */
    private $browserInfo = null;

    /**
     * @property int $captureDelayHours
     */
    private $captureDelayHours = null;

    /**
     * @property \DateTime $dateOfBirth
     */
    private $dateOfBirth = null;

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\Payment\ForexQuoteType $dccQuote
     */
    private $dccQuote = null;

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\Common\AddressType $deliveryAddress
     */
    private $deliveryAddress = null;

    /**
     * @property \DateTime $deliveryDate
     */
    private $deliveryDate = null;

    /**
     * @property string $deviceFingerprint
     */
    private $deviceFingerprint = null;

    /**
     * @property int $fraudOffset
     */
    private $fraudOffset = null;

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\Common\InstallmentsType $installments
     */
    private $installments = null;

    /**
     * @property string $mcc
     */
    private $mcc = null;

    /**
     * @property string $merchantAccount
     */
    private $merchantAccount = null;

    /**
     * @property string $merchantOrderReference
     */
    private $merchantOrderReference = null;

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\ThreedsToData\MerchantRiskIndicatorType $merchantRiskIndicator
     */
    private $merchantRiskIndicator = null;

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\Payment\AnyType2anyTypeMapType\EntryAType[] $metadata
     */
    private $metadata = null;

    /**
     * @property string $orderReference
     */
    private $orderReference = null;

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\Payment\RecurringType $recurring
     */
    private $recurring = null;

    /**
     * @property string $recurringProcessingModel
     */
    private $recurringProcessingModel = null;

    /**
     * @property string $reference
     */
    private $reference = null;

    /**
     * @property string $selectedBrand
     */
    private $selectedBrand = null;

    /**
     * @property string $selectedRecurringDetailReference
     */
    private $selectedRecurringDetailReference = null;

    /**
     * @property string $sessionId
     */
    private $sessionId = null;

    /**
     * @property string $shopperEmail
     */
    private $shopperEmail = null;

    /**
     * @property string $shopperIP
     */
    private $shopperIP = null;

    /**
     * @property string $shopperInteraction
     */
    private $shopperInteraction = null;

    /**
     * @property string $shopperLocale
     */
    private $shopperLocale = null;

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\Common\NameType $shopperName
     */
    private $shopperName = null;

    /**
     * @property string $shopperReference
     */
    private $shopperReference = null;

    /**
     * @property string $shopperStatement
     */
    private $shopperStatement = null;

    /**
     * @property string $socialSecurityNumber
     */
    private $socialSecurityNumber = null;

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\Payment\SplitType[] $splits
     */
    private $splits = null;

    /**
     * @property string $store
     */
    private $store = null;

    /**
     * @property string $telephoneNumber
     */
    private $telephoneNumber = null;

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\ThreedsToData\ThreeDS2RequestDataType $threeDS2RequestData
     */
    private $threeDS2RequestData = null;

    /**
     * @property string $totalsGroup
     */
    private $totalsGroup = null;

    /**
     * @property bool $trustedShopper
     */
    private $trustedShopper = null;

    /**
     * @property string $md
     */
    private $md = null;

    /**
     * @property string $paResponse
     */
    private $paResponse = null;

    /**
     * Gets as accountInfo
     *
     * @return \GoetasWebservices\Client\AdyenPayment\ThreedsToData\AccountInfoType
     */
    public function getAccountInfo()
    {
        return $this->accountInfo;
    }

    /**
     * Sets a new accountInfo
     *
     * @param \GoetasWebservices\Client\AdyenPayment\ThreedsToData\AccountInfoType $accountInfo
     * @return self
     */
    public function setAccountInfo(\GoetasWebservices\Client\AdyenPayment\ThreedsToData\AccountInfoType $accountInfo)
    {
        $this->accountInfo = $accountInfo;
        return $this;
    }

    /**
     * Gets as additionalAmount
     *
     * @return \GoetasWebservices\Client\AdyenPayment\Common\AmountType
     */
    public function getAdditionalAmount()
    {
        return $this->additionalAmount;
    }

    /**
     * Sets a new additionalAmount
     *
     * @param \GoetasWebservices\Client\AdyenPayment\Common\AmountType $additionalAmount
     * @return self
     */
    public function setAdditionalAmount(\GoetasWebservices\Client\AdyenPayment\Common\AmountType $additionalAmount)
    {
        $this->additionalAmount = $additionalAmount;
        return $this;
    }

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
     * Gets as amount
     *
     * @return \GoetasWebservices\Client\AdyenPayment\Common\AmountType
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets a new amount
     *
     * @param \GoetasWebservices\Client\AdyenPayment\Common\AmountType $amount
     * @return self
     */
    public function setAmount(\GoetasWebservices\Client\AdyenPayment\Common\AmountType $amount)
    {
        $this->amount = $amount;
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
     * Gets as billingAddress
     *
     * @return \GoetasWebservices\Client\AdyenPayment\Common\AddressType
     */
    public function getBillingAddress()
    {
        return $this->billingAddress;
    }

    /**
     * Sets a new billingAddress
     *
     * @param \GoetasWebservices\Client\AdyenPayment\Common\AddressType $billingAddress
     * @return self
     */
    public function setBillingAddress(\GoetasWebservices\Client\AdyenPayment\Common\AddressType $billingAddress)
    {
        $this->billingAddress = $billingAddress;
        return $this;
    }

    /**
     * Gets as browserInfo
     *
     * @return \GoetasWebservices\Client\AdyenPayment\Common\BrowserInfoType
     */
    public function getBrowserInfo()
    {
        return $this->browserInfo;
    }

    /**
     * Sets a new browserInfo
     *
     * @param \GoetasWebservices\Client\AdyenPayment\Common\BrowserInfoType $browserInfo
     * @return self
     */
    public function setBrowserInfo(\GoetasWebservices\Client\AdyenPayment\Common\BrowserInfoType $browserInfo)
    {
        $this->browserInfo = $browserInfo;
        return $this;
    }

    /**
     * Gets as captureDelayHours
     *
     * @return int
     */
    public function getCaptureDelayHours()
    {
        return $this->captureDelayHours;
    }

    /**
     * Sets a new captureDelayHours
     *
     * @param int $captureDelayHours
     * @return self
     */
    public function setCaptureDelayHours($captureDelayHours)
    {
        $this->captureDelayHours = $captureDelayHours;
        return $this;
    }

    /**
     * Gets as dateOfBirth
     *
     * @return \DateTime
     */
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    /**
     * Sets a new dateOfBirth
     *
     * @param \DateTime $dateOfBirth
     * @return self
     */
    public function setDateOfBirth(\DateTime $dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;
        return $this;
    }

    /**
     * Gets as dccQuote
     *
     * @return \GoetasWebservices\Client\AdyenPayment\Payment\ForexQuoteType
     */
    public function getDccQuote()
    {
        return $this->dccQuote;
    }

    /**
     * Sets a new dccQuote
     *
     * @param \GoetasWebservices\Client\AdyenPayment\Payment\ForexQuoteType $dccQuote
     * @return self
     */
    public function setDccQuote(\GoetasWebservices\Client\AdyenPayment\Payment\ForexQuoteType $dccQuote)
    {
        $this->dccQuote = $dccQuote;
        return $this;
    }

    /**
     * Gets as deliveryAddress
     *
     * @return \GoetasWebservices\Client\AdyenPayment\Common\AddressType
     */
    public function getDeliveryAddress()
    {
        return $this->deliveryAddress;
    }

    /**
     * Sets a new deliveryAddress
     *
     * @param \GoetasWebservices\Client\AdyenPayment\Common\AddressType $deliveryAddress
     * @return self
     */
    public function setDeliveryAddress(\GoetasWebservices\Client\AdyenPayment\Common\AddressType $deliveryAddress)
    {
        $this->deliveryAddress = $deliveryAddress;
        return $this;
    }

    /**
     * Gets as deliveryDate
     *
     * @return \DateTime
     */
    public function getDeliveryDate()
    {
        return $this->deliveryDate;
    }

    /**
     * Sets a new deliveryDate
     *
     * @param \DateTime $deliveryDate
     * @return self
     */
    public function setDeliveryDate(\DateTime $deliveryDate)
    {
        $this->deliveryDate = $deliveryDate;
        return $this;
    }

    /**
     * Gets as deviceFingerprint
     *
     * @return string
     */
    public function getDeviceFingerprint()
    {
        return $this->deviceFingerprint;
    }

    /**
     * Sets a new deviceFingerprint
     *
     * @param string $deviceFingerprint
     * @return self
     */
    public function setDeviceFingerprint($deviceFingerprint)
    {
        $this->deviceFingerprint = $deviceFingerprint;
        return $this;
    }

    /**
     * Gets as fraudOffset
     *
     * @return int
     */
    public function getFraudOffset()
    {
        return $this->fraudOffset;
    }

    /**
     * Sets a new fraudOffset
     *
     * @param int $fraudOffset
     * @return self
     */
    public function setFraudOffset($fraudOffset)
    {
        $this->fraudOffset = $fraudOffset;
        return $this;
    }

    /**
     * Gets as installments
     *
     * @return \GoetasWebservices\Client\AdyenPayment\Common\InstallmentsType
     */
    public function getInstallments()
    {
        return $this->installments;
    }

    /**
     * Sets a new installments
     *
     * @param \GoetasWebservices\Client\AdyenPayment\Common\InstallmentsType $installments
     * @return self
     */
    public function setInstallments(\GoetasWebservices\Client\AdyenPayment\Common\InstallmentsType $installments)
    {
        $this->installments = $installments;
        return $this;
    }

    /**
     * Gets as mcc
     *
     * @return string
     */
    public function getMcc()
    {
        return $this->mcc;
    }

    /**
     * Sets a new mcc
     *
     * @param string $mcc
     * @return self
     */
    public function setMcc($mcc)
    {
        $this->mcc = $mcc;
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
     * Gets as merchantOrderReference
     *
     * @return string
     */
    public function getMerchantOrderReference()
    {
        return $this->merchantOrderReference;
    }

    /**
     * Sets a new merchantOrderReference
     *
     * @param string $merchantOrderReference
     * @return self
     */
    public function setMerchantOrderReference($merchantOrderReference)
    {
        $this->merchantOrderReference = $merchantOrderReference;
        return $this;
    }

    /**
     * Gets as merchantRiskIndicator
     *
     * @return \GoetasWebservices\Client\AdyenPayment\ThreedsToData\MerchantRiskIndicatorType
     */
    public function getMerchantRiskIndicator()
    {
        return $this->merchantRiskIndicator;
    }

    /**
     * Sets a new merchantRiskIndicator
     *
     * @param \GoetasWebservices\Client\AdyenPayment\ThreedsToData\MerchantRiskIndicatorType $merchantRiskIndicator
     * @return self
     */
    public function setMerchantRiskIndicator(\GoetasWebservices\Client\AdyenPayment\ThreedsToData\MerchantRiskIndicatorType $merchantRiskIndicator)
    {
        $this->merchantRiskIndicator = $merchantRiskIndicator;
        return $this;
    }

    /**
     * Adds as entry
     *
     * @return self
     * @param \GoetasWebservices\Client\AdyenPayment\Payment\AnyType2anyTypeMapType\EntryAType $entry
     */
    public function addToMetadata(\GoetasWebservices\Client\AdyenPayment\Payment\AnyType2anyTypeMapType\EntryAType $entry)
    {
        $this->metadata[] = $entry;
        return $this;
    }

    /**
     * isset metadata
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMetadata($index)
    {
        return isset($this->metadata[$index]);
    }

    /**
     * unset metadata
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMetadata($index)
    {
        unset($this->metadata[$index]);
    }

    /**
     * Gets as metadata
     *
     * @return \GoetasWebservices\Client\AdyenPayment\Payment\AnyType2anyTypeMapType\EntryAType[]
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * Sets a new metadata
     *
     * @param \GoetasWebservices\Client\AdyenPayment\Payment\AnyType2anyTypeMapType\EntryAType[] $metadata
     * @return self
     */
    public function setMetadata(array $metadata)
    {
        $this->metadata = $metadata;
        return $this;
    }

    /**
     * Gets as orderReference
     *
     * @return string
     */
    public function getOrderReference()
    {
        return $this->orderReference;
    }

    /**
     * Sets a new orderReference
     *
     * @param string $orderReference
     * @return self
     */
    public function setOrderReference($orderReference)
    {
        $this->orderReference = $orderReference;
        return $this;
    }

    /**
     * Gets as recurring
     *
     * @return \GoetasWebservices\Client\AdyenPayment\Payment\RecurringType
     */
    public function getRecurring()
    {
        return $this->recurring;
    }

    /**
     * Sets a new recurring
     *
     * @param \GoetasWebservices\Client\AdyenPayment\Payment\RecurringType $recurring
     * @return self
     */
    public function setRecurring(\GoetasWebservices\Client\AdyenPayment\Payment\RecurringType $recurring)
    {
        $this->recurring = $recurring;
        return $this;
    }

    /**
     * Gets as recurringProcessingModel
     *
     * @return string
     */
    public function getRecurringProcessingModel()
    {
        return $this->recurringProcessingModel;
    }

    /**
     * Sets a new recurringProcessingModel
     *
     * @param string $recurringProcessingModel
     * @return self
     */
    public function setRecurringProcessingModel($recurringProcessingModel)
    {
        $this->recurringProcessingModel = $recurringProcessingModel;
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
     * Gets as selectedBrand
     *
     * @return string
     */
    public function getSelectedBrand()
    {
        return $this->selectedBrand;
    }

    /**
     * Sets a new selectedBrand
     *
     * @param string $selectedBrand
     * @return self
     */
    public function setSelectedBrand($selectedBrand)
    {
        $this->selectedBrand = $selectedBrand;
        return $this;
    }

    /**
     * Gets as selectedRecurringDetailReference
     *
     * @return string
     */
    public function getSelectedRecurringDetailReference()
    {
        return $this->selectedRecurringDetailReference;
    }

    /**
     * Sets a new selectedRecurringDetailReference
     *
     * @param string $selectedRecurringDetailReference
     * @return self
     */
    public function setSelectedRecurringDetailReference($selectedRecurringDetailReference)
    {
        $this->selectedRecurringDetailReference = $selectedRecurringDetailReference;
        return $this;
    }

    /**
     * Gets as sessionId
     *
     * @return string
     */
    public function getSessionId()
    {
        return $this->sessionId;
    }

    /**
     * Sets a new sessionId
     *
     * @param string $sessionId
     * @return self
     */
    public function setSessionId($sessionId)
    {
        $this->sessionId = $sessionId;
        return $this;
    }

    /**
     * Gets as shopperEmail
     *
     * @return string
     */
    public function getShopperEmail()
    {
        return $this->shopperEmail;
    }

    /**
     * Sets a new shopperEmail
     *
     * @param string $shopperEmail
     * @return self
     */
    public function setShopperEmail($shopperEmail)
    {
        $this->shopperEmail = $shopperEmail;
        return $this;
    }

    /**
     * Gets as shopperIP
     *
     * @return string
     */
    public function getShopperIP()
    {
        return $this->shopperIP;
    }

    /**
     * Sets a new shopperIP
     *
     * @param string $shopperIP
     * @return self
     */
    public function setShopperIP($shopperIP)
    {
        $this->shopperIP = $shopperIP;
        return $this;
    }

    /**
     * Gets as shopperInteraction
     *
     * @return string
     */
    public function getShopperInteraction()
    {
        return $this->shopperInteraction;
    }

    /**
     * Sets a new shopperInteraction
     *
     * @param string $shopperInteraction
     * @return self
     */
    public function setShopperInteraction($shopperInteraction)
    {
        $this->shopperInteraction = $shopperInteraction;
        return $this;
    }

    /**
     * Gets as shopperLocale
     *
     * @return string
     */
    public function getShopperLocale()
    {
        return $this->shopperLocale;
    }

    /**
     * Sets a new shopperLocale
     *
     * @param string $shopperLocale
     * @return self
     */
    public function setShopperLocale($shopperLocale)
    {
        $this->shopperLocale = $shopperLocale;
        return $this;
    }

    /**
     * Gets as shopperName
     *
     * @return \GoetasWebservices\Client\AdyenPayment\Common\NameType
     */
    public function getShopperName()
    {
        return $this->shopperName;
    }

    /**
     * Sets a new shopperName
     *
     * @param \GoetasWebservices\Client\AdyenPayment\Common\NameType $shopperName
     * @return self
     */
    public function setShopperName(\GoetasWebservices\Client\AdyenPayment\Common\NameType $shopperName)
    {
        $this->shopperName = $shopperName;
        return $this;
    }

    /**
     * Gets as shopperReference
     *
     * @return string
     */
    public function getShopperReference()
    {
        return $this->shopperReference;
    }

    /**
     * Sets a new shopperReference
     *
     * @param string $shopperReference
     * @return self
     */
    public function setShopperReference($shopperReference)
    {
        $this->shopperReference = $shopperReference;
        return $this;
    }

    /**
     * Gets as shopperStatement
     *
     * @return string
     */
    public function getShopperStatement()
    {
        return $this->shopperStatement;
    }

    /**
     * Sets a new shopperStatement
     *
     * @param string $shopperStatement
     * @return self
     */
    public function setShopperStatement($shopperStatement)
    {
        $this->shopperStatement = $shopperStatement;
        return $this;
    }

    /**
     * Gets as socialSecurityNumber
     *
     * @return string
     */
    public function getSocialSecurityNumber()
    {
        return $this->socialSecurityNumber;
    }

    /**
     * Sets a new socialSecurityNumber
     *
     * @param string $socialSecurityNumber
     * @return self
     */
    public function setSocialSecurityNumber($socialSecurityNumber)
    {
        $this->socialSecurityNumber = $socialSecurityNumber;
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
     * Gets as store
     *
     * @return string
     */
    public function getStore()
    {
        return $this->store;
    }

    /**
     * Sets a new store
     *
     * @param string $store
     * @return self
     */
    public function setStore($store)
    {
        $this->store = $store;
        return $this;
    }

    /**
     * Gets as telephoneNumber
     *
     * @return string
     */
    public function getTelephoneNumber()
    {
        return $this->telephoneNumber;
    }

    /**
     * Sets a new telephoneNumber
     *
     * @param string $telephoneNumber
     * @return self
     */
    public function setTelephoneNumber($telephoneNumber)
    {
        $this->telephoneNumber = $telephoneNumber;
        return $this;
    }

    /**
     * Gets as threeDS2RequestData
     *
     * @return \GoetasWebservices\Client\AdyenPayment\ThreedsToData\ThreeDS2RequestDataType
     */
    public function getThreeDS2RequestData()
    {
        return $this->threeDS2RequestData;
    }

    /**
     * Sets a new threeDS2RequestData
     *
     * @param \GoetasWebservices\Client\AdyenPayment\ThreedsToData\ThreeDS2RequestDataType $threeDS2RequestData
     * @return self
     */
    public function setThreeDS2RequestData(\GoetasWebservices\Client\AdyenPayment\ThreedsToData\ThreeDS2RequestDataType $threeDS2RequestData)
    {
        $this->threeDS2RequestData = $threeDS2RequestData;
        return $this;
    }

    /**
     * Gets as totalsGroup
     *
     * @return string
     */
    public function getTotalsGroup()
    {
        return $this->totalsGroup;
    }

    /**
     * Sets a new totalsGroup
     *
     * @param string $totalsGroup
     * @return self
     */
    public function setTotalsGroup($totalsGroup)
    {
        $this->totalsGroup = $totalsGroup;
        return $this;
    }

    /**
     * Gets as trustedShopper
     *
     * @return bool
     */
    public function getTrustedShopper()
    {
        return $this->trustedShopper;
    }

    /**
     * Sets a new trustedShopper
     *
     * @param bool $trustedShopper
     * @return self
     */
    public function setTrustedShopper($trustedShopper)
    {
        $this->trustedShopper = $trustedShopper;
        return $this;
    }

    /**
     * Gets as md
     *
     * @return string
     */
    public function getMd()
    {
        return $this->md;
    }

    /**
     * Sets a new md
     *
     * @param string $md
     * @return self
     */
    public function setMd($md)
    {
        $this->md = $md;
        return $this;
    }

    /**
     * Gets as paResponse
     *
     * @return string
     */
    public function getPaResponse()
    {
        return $this->paResponse;
    }

    /**
     * Sets a new paResponse
     *
     * @param string $paResponse
     * @return self
     */
    public function setPaResponse($paResponse)
    {
        $this->paResponse = $paResponse;
        return $this;
    }


}

