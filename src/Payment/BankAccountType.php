<?php

namespace GoetasWebservices\Client\AdyenPayment\Payment;

/**
 * Class representing BankAccountType
 *
 *
 * XSD Type: BankAccount
 */
class BankAccountType
{

    /**
     * @property string $bankAccountNumber
     */
    private $bankAccountNumber = null;

    /**
     * @property string $bankCity
     */
    private $bankCity = null;

    /**
     * @property string $bankLocationId
     */
    private $bankLocationId = null;

    /**
     * @property string $bankName
     */
    private $bankName = null;

    /**
     * @property string $bic
     */
    private $bic = null;

    /**
     * @property string $countryCode
     */
    private $countryCode = null;

    /**
     * @property string $iban
     */
    private $iban = null;

    /**
     * @property string $ownerName
     */
    private $ownerName = null;

    /**
     * @property string $taxId
     */
    private $taxId = null;

    /**
     * Gets as bankAccountNumber
     *
     * @return string
     */
    public function getBankAccountNumber()
    {
        return $this->bankAccountNumber;
    }

    /**
     * Sets a new bankAccountNumber
     *
     * @param string $bankAccountNumber
     * @return self
     */
    public function setBankAccountNumber($bankAccountNumber)
    {
        $this->bankAccountNumber = $bankAccountNumber;
        return $this;
    }

    /**
     * Gets as bankCity
     *
     * @return string
     */
    public function getBankCity()
    {
        return $this->bankCity;
    }

    /**
     * Sets a new bankCity
     *
     * @param string $bankCity
     * @return self
     */
    public function setBankCity($bankCity)
    {
        $this->bankCity = $bankCity;
        return $this;
    }

    /**
     * Gets as bankLocationId
     *
     * @return string
     */
    public function getBankLocationId()
    {
        return $this->bankLocationId;
    }

    /**
     * Sets a new bankLocationId
     *
     * @param string $bankLocationId
     * @return self
     */
    public function setBankLocationId($bankLocationId)
    {
        $this->bankLocationId = $bankLocationId;
        return $this;
    }

    /**
     * Gets as bankName
     *
     * @return string
     */
    public function getBankName()
    {
        return $this->bankName;
    }

    /**
     * Sets a new bankName
     *
     * @param string $bankName
     * @return self
     */
    public function setBankName($bankName)
    {
        $this->bankName = $bankName;
        return $this;
    }

    /**
     * Gets as bic
     *
     * @return string
     */
    public function getBic()
    {
        return $this->bic;
    }

    /**
     * Sets a new bic
     *
     * @param string $bic
     * @return self
     */
    public function setBic($bic)
    {
        $this->bic = $bic;
        return $this;
    }

    /**
     * Gets as countryCode
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * Sets a new countryCode
     *
     * @param string $countryCode
     * @return self
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
        return $this;
    }

    /**
     * Gets as iban
     *
     * @return string
     */
    public function getIban()
    {
        return $this->iban;
    }

    /**
     * Sets a new iban
     *
     * @param string $iban
     * @return self
     */
    public function setIban($iban)
    {
        $this->iban = $iban;
        return $this;
    }

    /**
     * Gets as ownerName
     *
     * @return string
     */
    public function getOwnerName()
    {
        return $this->ownerName;
    }

    /**
     * Sets a new ownerName
     *
     * @param string $ownerName
     * @return self
     */
    public function setOwnerName($ownerName)
    {
        $this->ownerName = $ownerName;
        return $this;
    }

    /**
     * Gets as taxId
     *
     * @return string
     */
    public function getTaxId()
    {
        return $this->taxId;
    }

    /**
     * Sets a new taxId
     *
     * @param string $taxId
     * @return self
     */
    public function setTaxId($taxId)
    {
        $this->taxId = $taxId;
        return $this;
    }


}

