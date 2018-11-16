<?php

namespace GoetasWebservices\Client\AdyenPayment\Payment;

/**
 * Class representing ForexQuoteType
 *
 *
 * XSD Type: ForexQuote
 */
class ForexQuoteType
{

    /**
     * @property string $account
     */
    private $account = null;

    /**
     * @property string $accountType
     */
    private $accountType = null;

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\Common\AmountType $baseAmount
     */
    private $baseAmount = null;

    /**
     * @property int $basePoints
     */
    private $basePoints = null;

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\Common\AmountType $buy
     */
    private $buy = null;

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\Common\AmountType $interbank
     */
    private $interbank = null;

    /**
     * @property string $reference
     */
    private $reference = null;

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\Common\AmountType $sell
     */
    private $sell = null;

    /**
     * @property string $signature
     */
    private $signature = null;

    /**
     * @property string $source
     */
    private $source = null;

    /**
     * @property string $type
     */
    private $type = null;

    /**
     * @property \DateTime $validTill
     */
    private $validTill = null;

    /**
     * Gets as account
     *
     * @return string
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * Sets a new account
     *
     * @param string $account
     * @return self
     */
    public function setAccount($account)
    {
        $this->account = $account;
        return $this;
    }

    /**
     * Gets as accountType
     *
     * @return string
     */
    public function getAccountType()
    {
        return $this->accountType;
    }

    /**
     * Sets a new accountType
     *
     * @param string $accountType
     * @return self
     */
    public function setAccountType($accountType)
    {
        $this->accountType = $accountType;
        return $this;
    }

    /**
     * Gets as baseAmount
     *
     * @return \GoetasWebservices\Client\AdyenPayment\Common\AmountType
     */
    public function getBaseAmount()
    {
        return $this->baseAmount;
    }

    /**
     * Sets a new baseAmount
     *
     * @param \GoetasWebservices\Client\AdyenPayment\Common\AmountType $baseAmount
     * @return self
     */
    public function setBaseAmount(\GoetasWebservices\Client\AdyenPayment\Common\AmountType $baseAmount)
    {
        $this->baseAmount = $baseAmount;
        return $this;
    }

    /**
     * Gets as basePoints
     *
     * @return int
     */
    public function getBasePoints()
    {
        return $this->basePoints;
    }

    /**
     * Sets a new basePoints
     *
     * @param int $basePoints
     * @return self
     */
    public function setBasePoints($basePoints)
    {
        $this->basePoints = $basePoints;
        return $this;
    }

    /**
     * Gets as buy
     *
     * @return \GoetasWebservices\Client\AdyenPayment\Common\AmountType
     */
    public function getBuy()
    {
        return $this->buy;
    }

    /**
     * Sets a new buy
     *
     * @param \GoetasWebservices\Client\AdyenPayment\Common\AmountType $buy
     * @return self
     */
    public function setBuy(\GoetasWebservices\Client\AdyenPayment\Common\AmountType $buy)
    {
        $this->buy = $buy;
        return $this;
    }

    /**
     * Gets as interbank
     *
     * @return \GoetasWebservices\Client\AdyenPayment\Common\AmountType
     */
    public function getInterbank()
    {
        return $this->interbank;
    }

    /**
     * Sets a new interbank
     *
     * @param \GoetasWebservices\Client\AdyenPayment\Common\AmountType $interbank
     * @return self
     */
    public function setInterbank(\GoetasWebservices\Client\AdyenPayment\Common\AmountType $interbank)
    {
        $this->interbank = $interbank;
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
     * Gets as sell
     *
     * @return \GoetasWebservices\Client\AdyenPayment\Common\AmountType
     */
    public function getSell()
    {
        return $this->sell;
    }

    /**
     * Sets a new sell
     *
     * @param \GoetasWebservices\Client\AdyenPayment\Common\AmountType $sell
     * @return self
     */
    public function setSell(\GoetasWebservices\Client\AdyenPayment\Common\AmountType $sell)
    {
        $this->sell = $sell;
        return $this;
    }

    /**
     * Gets as signature
     *
     * @return string
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * Sets a new signature
     *
     * @param string $signature
     * @return self
     */
    public function setSignature($signature)
    {
        $this->signature = $signature;
        return $this;
    }

    /**
     * Gets as source
     *
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Sets a new source
     *
     * @param string $source
     * @return self
     */
    public function setSource($source)
    {
        $this->source = $source;
        return $this;
    }

    /**
     * Gets as type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as validTill
     *
     * @return \DateTime
     */
    public function getValidTill()
    {
        return $this->validTill;
    }

    /**
     * Sets a new validTill
     *
     * @param \DateTime $validTill
     * @return self
     */
    public function setValidTill(\DateTime $validTill)
    {
        $this->validTill = $validTill;
        return $this;
    }


}

