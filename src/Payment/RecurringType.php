<?php

namespace GoetasWebservices\Client\AdyenPayment\Payment;

/**
 * Class representing RecurringType
 *
 *
 * XSD Type: Recurring
 */
class RecurringType
{

    /**
     * @property string $contract
     */
    private $contract = null;

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\Payment\PermitType[] $permits
     */
    private $permits = null;

    /**
     * @property string $recurringDetailName
     */
    private $recurringDetailName = null;

    /**
     * @property \DateTime $recurringExpiry
     */
    private $recurringExpiry = null;

    /**
     * @property string $recurringFrequency
     */
    private $recurringFrequency = null;

    /**
     * @property string $tokenService
     */
    private $tokenService = null;

    /**
     * Gets as contract
     *
     * @return string
     */
    public function getContract()
    {
        return $this->contract;
    }

    /**
     * Sets a new contract
     *
     * @param string $contract
     * @return self
     */
    public function setContract($contract)
    {
        $this->contract = $contract;
        return $this;
    }

    /**
     * Adds as permit
     *
     * @return self
     * @param \GoetasWebservices\Client\AdyenPayment\Payment\PermitType $permit
     */
    public function addToPermits(\GoetasWebservices\Client\AdyenPayment\Payment\PermitType $permit)
    {
        $this->permits[] = $permit;
        return $this;
    }

    /**
     * isset permits
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPermits($index)
    {
        return isset($this->permits[$index]);
    }

    /**
     * unset permits
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPermits($index)
    {
        unset($this->permits[$index]);
    }

    /**
     * Gets as permits
     *
     * @return \GoetasWebservices\Client\AdyenPayment\Payment\PermitType[]
     */
    public function getPermits()
    {
        return $this->permits;
    }

    /**
     * Sets a new permits
     *
     * @param \GoetasWebservices\Client\AdyenPayment\Payment\PermitType[] $permits
     * @return self
     */
    public function setPermits(array $permits)
    {
        $this->permits = $permits;
        return $this;
    }

    /**
     * Gets as recurringDetailName
     *
     * @return string
     */
    public function getRecurringDetailName()
    {
        return $this->recurringDetailName;
    }

    /**
     * Sets a new recurringDetailName
     *
     * @param string $recurringDetailName
     * @return self
     */
    public function setRecurringDetailName($recurringDetailName)
    {
        $this->recurringDetailName = $recurringDetailName;
        return $this;
    }

    /**
     * Gets as recurringExpiry
     *
     * @return \DateTime
     */
    public function getRecurringExpiry()
    {
        return $this->recurringExpiry;
    }

    /**
     * Sets a new recurringExpiry
     *
     * @param \DateTime $recurringExpiry
     * @return self
     */
    public function setRecurringExpiry(\DateTime $recurringExpiry)
    {
        $this->recurringExpiry = $recurringExpiry;
        return $this;
    }

    /**
     * Gets as recurringFrequency
     *
     * @return string
     */
    public function getRecurringFrequency()
    {
        return $this->recurringFrequency;
    }

    /**
     * Sets a new recurringFrequency
     *
     * @param string $recurringFrequency
     * @return self
     */
    public function setRecurringFrequency($recurringFrequency)
    {
        $this->recurringFrequency = $recurringFrequency;
        return $this;
    }

    /**
     * Gets as tokenService
     *
     * @return string
     */
    public function getTokenService()
    {
        return $this->tokenService;
    }

    /**
     * Sets a new tokenService
     *
     * @param string $tokenService
     * @return self
     */
    public function setTokenService($tokenService)
    {
        $this->tokenService = $tokenService;
        return $this;
    }


}

