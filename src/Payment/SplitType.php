<?php

namespace GoetasWebservices\Client\AdyenPayment\Payment;

/**
 * Class representing SplitType
 *
 *
 * XSD Type: Split
 */
class SplitType
{

    /**
     * @property string $account
     */
    private $account = null;

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\Common\SplitAmountType $amount
     */
    private $amount = null;

    /**
     * @property string $description
     */
    private $description = null;

    /**
     * @property string $reference
     */
    private $reference = null;

    /**
     * @property string $type
     */
    private $type = null;

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
     * Gets as amount
     *
     * @return \GoetasWebservices\Client\AdyenPayment\Common\SplitAmountType
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets a new amount
     *
     * @param \GoetasWebservices\Client\AdyenPayment\Common\SplitAmountType $amount
     * @return self
     */
    public function setAmount(\GoetasWebservices\Client\AdyenPayment\Common\SplitAmountType $amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Gets as description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
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


}

