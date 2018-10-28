<?php

namespace GoetasWebservices\Client\AdyenPayment\Payment;

/**
 * Class representing FraudCheckResultType
 *
 *
 * XSD Type: FraudCheckResult
 */
class FraudCheckResultType
{

    /**
     * @property int $accountScore
     */
    private $accountScore = null;

    /**
     * @property int $checkId
     */
    private $checkId = null;

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * Gets as accountScore
     *
     * @return int
     */
    public function getAccountScore()
    {
        return $this->accountScore;
    }

    /**
     * Sets a new accountScore
     *
     * @param int $accountScore
     * @return self
     */
    public function setAccountScore($accountScore)
    {
        $this->accountScore = $accountScore;
        return $this;
    }

    /**
     * Gets as checkId
     *
     * @return int
     */
    public function getCheckId()
    {
        return $this->checkId;
    }

    /**
     * Sets a new checkId
     *
     * @param int $checkId
     * @return self
     */
    public function setCheckId($checkId)
    {
        $this->checkId = $checkId;
        return $this;
    }

    /**
     * Gets as name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }


}

