<?php

namespace GoetasWebservices\Client\AdyenPayment\Payment;

/**
 * Class representing PaymentResultType
 *
 *
 * XSD Type: PaymentResult
 */
class PaymentResultType
{

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\Payment\AnyType2anyTypeMapType\EntryAType[] $additionalData
     */
    private $additionalData = null;

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\Payment\FraudResultType $fraudResult
     */
    private $fraudResult = null;

    /**
     * @property string $pspReference
     */
    private $pspReference = null;

    /**
     * @property string $refusalReason
     */
    private $refusalReason = null;

    /**
     * @property string $resultCode
     */
    private $resultCode = null;

    /**
     * @property string $authCode
     */
    private $authCode = null;

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\Common\AmountType $dccAmount
     */
    private $dccAmount = null;

    /**
     * @property string $dccSignature
     */
    private $dccSignature = null;

    /**
     * @property string $issuerUrl
     */
    private $issuerUrl = null;

    /**
     * @property string $md
     */
    private $md = null;

    /**
     * @property string $paRequest
     */
    private $paRequest = null;

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
     * Gets as fraudResult
     *
     * @return \GoetasWebservices\Client\AdyenPayment\Payment\FraudResultType
     */
    public function getFraudResult()
    {
        return $this->fraudResult;
    }

    /**
     * Sets a new fraudResult
     *
     * @param \GoetasWebservices\Client\AdyenPayment\Payment\FraudResultType $fraudResult
     * @return self
     */
    public function setFraudResult(\GoetasWebservices\Client\AdyenPayment\Payment\FraudResultType $fraudResult)
    {
        $this->fraudResult = $fraudResult;
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
     * Gets as refusalReason
     *
     * @return string
     */
    public function getRefusalReason()
    {
        return $this->refusalReason;
    }

    /**
     * Sets a new refusalReason
     *
     * @param string $refusalReason
     * @return self
     */
    public function setRefusalReason($refusalReason)
    {
        $this->refusalReason = $refusalReason;
        return $this;
    }

    /**
     * Gets as resultCode
     *
     * @return string
     */
    public function getResultCode()
    {
        return $this->resultCode;
    }

    /**
     * Sets a new resultCode
     *
     * @param string $resultCode
     * @return self
     */
    public function setResultCode($resultCode)
    {
        $this->resultCode = $resultCode;
        return $this;
    }

    /**
     * Gets as authCode
     *
     * @return string
     */
    public function getAuthCode()
    {
        return $this->authCode;
    }

    /**
     * Sets a new authCode
     *
     * @param string $authCode
     * @return self
     */
    public function setAuthCode($authCode)
    {
        $this->authCode = $authCode;
        return $this;
    }

    /**
     * Gets as dccAmount
     *
     * @return \GoetasWebservices\Client\AdyenPayment\Common\AmountType
     */
    public function getDccAmount()
    {
        return $this->dccAmount;
    }

    /**
     * Sets a new dccAmount
     *
     * @param \GoetasWebservices\Client\AdyenPayment\Common\AmountType $dccAmount
     * @return self
     */
    public function setDccAmount(\GoetasWebservices\Client\AdyenPayment\Common\AmountType $dccAmount)
    {
        $this->dccAmount = $dccAmount;
        return $this;
    }

    /**
     * Gets as dccSignature
     *
     * @return string
     */
    public function getDccSignature()
    {
        return $this->dccSignature;
    }

    /**
     * Sets a new dccSignature
     *
     * @param string $dccSignature
     * @return self
     */
    public function setDccSignature($dccSignature)
    {
        $this->dccSignature = $dccSignature;
        return $this;
    }

    /**
     * Gets as issuerUrl
     *
     * @return string
     */
    public function getIssuerUrl()
    {
        return $this->issuerUrl;
    }

    /**
     * Sets a new issuerUrl
     *
     * @param string $issuerUrl
     * @return self
     */
    public function setIssuerUrl($issuerUrl)
    {
        $this->issuerUrl = $issuerUrl;
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
     * Gets as paRequest
     *
     * @return string
     */
    public function getPaRequest()
    {
        return $this->paRequest;
    }

    /**
     * Sets a new paRequest
     *
     * @param string $paRequest
     * @return self
     */
    public function setPaRequest($paRequest)
    {
        $this->paRequest = $paRequest;
        return $this;
    }


}

