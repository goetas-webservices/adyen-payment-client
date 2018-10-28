<?php

namespace GoetasWebservices\Client\AdyenPayment\ThreedsToData;

/**
 * Class representing ThreeDS2ResultType
 *
 *
 * XSD Type: ThreeDS2Result
 */
class ThreeDS2ResultType
{

    /**
     * @property string $authenticationValue
     */
    private $authenticationValue = null;

    /**
     * @property string $eci
     */
    private $eci = null;

    /**
     * @property string $threeDSServerTransID
     */
    private $threeDSServerTransID = null;

    /**
     * @property string $timestamp
     */
    private $timestamp = null;

    /**
     * @property string $transStatus
     */
    private $transStatus = null;

    /**
     * @property string $transStatusReason
     */
    private $transStatusReason = null;

    /**
     * Gets as authenticationValue
     *
     * @return string
     */
    public function getAuthenticationValue()
    {
        return $this->authenticationValue;
    }

    /**
     * Sets a new authenticationValue
     *
     * @param string $authenticationValue
     * @return self
     */
    public function setAuthenticationValue($authenticationValue)
    {
        $this->authenticationValue = $authenticationValue;
        return $this;
    }

    /**
     * Gets as eci
     *
     * @return string
     */
    public function getEci()
    {
        return $this->eci;
    }

    /**
     * Sets a new eci
     *
     * @param string $eci
     * @return self
     */
    public function setEci($eci)
    {
        $this->eci = $eci;
        return $this;
    }

    /**
     * Gets as threeDSServerTransID
     *
     * @return string
     */
    public function getThreeDSServerTransID()
    {
        return $this->threeDSServerTransID;
    }

    /**
     * Sets a new threeDSServerTransID
     *
     * @param string $threeDSServerTransID
     * @return self
     */
    public function setThreeDSServerTransID($threeDSServerTransID)
    {
        $this->threeDSServerTransID = $threeDSServerTransID;
        return $this;
    }

    /**
     * Gets as timestamp
     *
     * @return string
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Sets a new timestamp
     *
     * @param string $timestamp
     * @return self
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;
        return $this;
    }

    /**
     * Gets as transStatus
     *
     * @return string
     */
    public function getTransStatus()
    {
        return $this->transStatus;
    }

    /**
     * Sets a new transStatus
     *
     * @param string $transStatus
     * @return self
     */
    public function setTransStatus($transStatus)
    {
        $this->transStatus = $transStatus;
        return $this;
    }

    /**
     * Gets as transStatusReason
     *
     * @return string
     */
    public function getTransStatusReason()
    {
        return $this->transStatusReason;
    }

    /**
     * Sets a new transStatusReason
     *
     * @param string $transStatusReason
     * @return self
     */
    public function setTransStatusReason($transStatusReason)
    {
        $this->transStatusReason = $transStatusReason;
        return $this;
    }


}

