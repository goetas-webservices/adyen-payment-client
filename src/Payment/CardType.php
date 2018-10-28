<?php

namespace GoetasWebservices\Client\AdyenPayment\Payment;

/**
 * Class representing CardType
 *
 *
 * XSD Type: Card
 */
class CardType
{

    /**
     * @property string $cvc
     */
    private $cvc = null;

    /**
     * @property string $expiryMonth
     */
    private $expiryMonth = null;

    /**
     * @property string $expiryYear
     */
    private $expiryYear = null;

    /**
     * @property string $holderName
     */
    private $holderName = null;

    /**
     * @property string $issueNumber
     */
    private $issueNumber = null;

    /**
     * @property string $number
     */
    private $number = null;

    /**
     * @property string $startMonth
     */
    private $startMonth = null;

    /**
     * @property string $startYear
     */
    private $startYear = null;

    /**
     * Gets as cvc
     *
     * @return string
     */
    public function getCvc()
    {
        return $this->cvc;
    }

    /**
     * Sets a new cvc
     *
     * @param string $cvc
     * @return self
     */
    public function setCvc($cvc)
    {
        $this->cvc = $cvc;
        return $this;
    }

    /**
     * Gets as expiryMonth
     *
     * @return string
     */
    public function getExpiryMonth()
    {
        return $this->expiryMonth;
    }

    /**
     * Sets a new expiryMonth
     *
     * @param string $expiryMonth
     * @return self
     */
    public function setExpiryMonth($expiryMonth)
    {
        $this->expiryMonth = $expiryMonth;
        return $this;
    }

    /**
     * Gets as expiryYear
     *
     * @return string
     */
    public function getExpiryYear()
    {
        return $this->expiryYear;
    }

    /**
     * Sets a new expiryYear
     *
     * @param string $expiryYear
     * @return self
     */
    public function setExpiryYear($expiryYear)
    {
        $this->expiryYear = $expiryYear;
        return $this;
    }

    /**
     * Gets as holderName
     *
     * @return string
     */
    public function getHolderName()
    {
        return $this->holderName;
    }

    /**
     * Sets a new holderName
     *
     * @param string $holderName
     * @return self
     */
    public function setHolderName($holderName)
    {
        $this->holderName = $holderName;
        return $this;
    }

    /**
     * Gets as issueNumber
     *
     * @return string
     */
    public function getIssueNumber()
    {
        return $this->issueNumber;
    }

    /**
     * Sets a new issueNumber
     *
     * @param string $issueNumber
     * @return self
     */
    public function setIssueNumber($issueNumber)
    {
        $this->issueNumber = $issueNumber;
        return $this;
    }

    /**
     * Gets as number
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets a new number
     *
     * @param string $number
     * @return self
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }

    /**
     * Gets as startMonth
     *
     * @return string
     */
    public function getStartMonth()
    {
        return $this->startMonth;
    }

    /**
     * Sets a new startMonth
     *
     * @param string $startMonth
     * @return self
     */
    public function setStartMonth($startMonth)
    {
        $this->startMonth = $startMonth;
        return $this;
    }

    /**
     * Gets as startYear
     *
     * @return string
     */
    public function getStartYear()
    {
        return $this->startYear;
    }

    /**
     * Sets a new startYear
     *
     * @param string $startYear
     * @return self
     */
    public function setStartYear($startYear)
    {
        $this->startYear = $startYear;
        return $this;
    }


}

