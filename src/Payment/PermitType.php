<?php

namespace GoetasWebservices\Client\AdyenPayment\Payment;

/**
 * Class representing PermitType
 *
 *
 * XSD Type: Permit
 */
class PermitType
{

    /**
     * @property string $partnerId
     */
    private $partnerId = null;

    /**
     * @property string $profileReference
     */
    private $profileReference = null;

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\Payment\PermitRestrictionType $restriction
     */
    private $restriction = null;

    /**
     * @property string $resultKey
     */
    private $resultKey = null;

    /**
     * @property \DateTime $validTillDate
     */
    private $validTillDate = null;

    /**
     * Gets as partnerId
     *
     * @return string
     */
    public function getPartnerId()
    {
        return $this->partnerId;
    }

    /**
     * Sets a new partnerId
     *
     * @param string $partnerId
     * @return self
     */
    public function setPartnerId($partnerId)
    {
        $this->partnerId = $partnerId;
        return $this;
    }

    /**
     * Gets as profileReference
     *
     * @return string
     */
    public function getProfileReference()
    {
        return $this->profileReference;
    }

    /**
     * Sets a new profileReference
     *
     * @param string $profileReference
     * @return self
     */
    public function setProfileReference($profileReference)
    {
        $this->profileReference = $profileReference;
        return $this;
    }

    /**
     * Gets as restriction
     *
     * @return \GoetasWebservices\Client\AdyenPayment\Payment\PermitRestrictionType
     */
    public function getRestriction()
    {
        return $this->restriction;
    }

    /**
     * Sets a new restriction
     *
     * @param \GoetasWebservices\Client\AdyenPayment\Payment\PermitRestrictionType $restriction
     * @return self
     */
    public function setRestriction(\GoetasWebservices\Client\AdyenPayment\Payment\PermitRestrictionType $restriction)
    {
        $this->restriction = $restriction;
        return $this;
    }

    /**
     * Gets as resultKey
     *
     * @return string
     */
    public function getResultKey()
    {
        return $this->resultKey;
    }

    /**
     * Sets a new resultKey
     *
     * @param string $resultKey
     * @return self
     */
    public function setResultKey($resultKey)
    {
        $this->resultKey = $resultKey;
        return $this;
    }

    /**
     * Gets as validTillDate
     *
     * @return \DateTime
     */
    public function getValidTillDate()
    {
        return $this->validTillDate;
    }

    /**
     * Sets a new validTillDate
     *
     * @param \DateTime $validTillDate
     * @return self
     */
    public function setValidTillDate(\DateTime $validTillDate)
    {
        $this->validTillDate = $validTillDate;
        return $this;
    }


}

