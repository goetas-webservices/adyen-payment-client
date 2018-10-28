<?php

namespace GoetasWebservices\Client\AdyenPayment\ThreedsToData;

/**
 * Class representing AccountInfoType
 *
 *
 * XSD Type: AccountInfo
 */
class AccountInfoType
{

    /**
     * @property string $accountAgeIndicator
     */
    private $accountAgeIndicator = null;

    /**
     * @property \DateTime $accountChangeDate
     */
    private $accountChangeDate = null;

    /**
     * @property string $accountChangeIndicator
     */
    private $accountChangeIndicator = null;

    /**
     * @property \DateTime $accountCreationDate
     */
    private $accountCreationDate = null;

    /**
     * @property int $addCardAttemptsDay
     */
    private $addCardAttemptsDay = null;

    /**
     * @property \DateTime $deliveryAddressUsageDate
     */
    private $deliveryAddressUsageDate = null;

    /**
     * @property string $deliveryAddressUsageIndicator
     */
    private $deliveryAddressUsageIndicator = null;

    /**
     * @property string $homePhone
     */
    private $homePhone = null;

    /**
     * @property string $mobilePhone
     */
    private $mobilePhone = null;

    /**
     * @property \DateTime $passwordChangeDate
     */
    private $passwordChangeDate = null;

    /**
     * @property string $passwordChangeIndicator
     */
    private $passwordChangeIndicator = null;

    /**
     * @property int $pastTransactionsDay
     */
    private $pastTransactionsDay = null;

    /**
     * @property int $pastTransactionsYear
     */
    private $pastTransactionsYear = null;

    /**
     * @property \DateTime $paymentAccountAge
     */
    private $paymentAccountAge = null;

    /**
     * @property string $paymentAccountIndicator
     */
    private $paymentAccountIndicator = null;

    /**
     * @property int $purchasesLast6Months
     */
    private $purchasesLast6Months = null;

    /**
     * @property bool $suspiciousActivity
     */
    private $suspiciousActivity = null;

    /**
     * @property string $workPhone
     */
    private $workPhone = null;

    /**
     * Gets as accountAgeIndicator
     *
     * @return string
     */
    public function getAccountAgeIndicator()
    {
        return $this->accountAgeIndicator;
    }

    /**
     * Sets a new accountAgeIndicator
     *
     * @param string $accountAgeIndicator
     * @return self
     */
    public function setAccountAgeIndicator($accountAgeIndicator)
    {
        $this->accountAgeIndicator = $accountAgeIndicator;
        return $this;
    }

    /**
     * Gets as accountChangeDate
     *
     * @return \DateTime
     */
    public function getAccountChangeDate()
    {
        return $this->accountChangeDate;
    }

    /**
     * Sets a new accountChangeDate
     *
     * @param \DateTime $accountChangeDate
     * @return self
     */
    public function setAccountChangeDate(\DateTime $accountChangeDate)
    {
        $this->accountChangeDate = $accountChangeDate;
        return $this;
    }

    /**
     * Gets as accountChangeIndicator
     *
     * @return string
     */
    public function getAccountChangeIndicator()
    {
        return $this->accountChangeIndicator;
    }

    /**
     * Sets a new accountChangeIndicator
     *
     * @param string $accountChangeIndicator
     * @return self
     */
    public function setAccountChangeIndicator($accountChangeIndicator)
    {
        $this->accountChangeIndicator = $accountChangeIndicator;
        return $this;
    }

    /**
     * Gets as accountCreationDate
     *
     * @return \DateTime
     */
    public function getAccountCreationDate()
    {
        return $this->accountCreationDate;
    }

    /**
     * Sets a new accountCreationDate
     *
     * @param \DateTime $accountCreationDate
     * @return self
     */
    public function setAccountCreationDate(\DateTime $accountCreationDate)
    {
        $this->accountCreationDate = $accountCreationDate;
        return $this;
    }

    /**
     * Gets as addCardAttemptsDay
     *
     * @return int
     */
    public function getAddCardAttemptsDay()
    {
        return $this->addCardAttemptsDay;
    }

    /**
     * Sets a new addCardAttemptsDay
     *
     * @param int $addCardAttemptsDay
     * @return self
     */
    public function setAddCardAttemptsDay($addCardAttemptsDay)
    {
        $this->addCardAttemptsDay = $addCardAttemptsDay;
        return $this;
    }

    /**
     * Gets as deliveryAddressUsageDate
     *
     * @return \DateTime
     */
    public function getDeliveryAddressUsageDate()
    {
        return $this->deliveryAddressUsageDate;
    }

    /**
     * Sets a new deliveryAddressUsageDate
     *
     * @param \DateTime $deliveryAddressUsageDate
     * @return self
     */
    public function setDeliveryAddressUsageDate(\DateTime $deliveryAddressUsageDate)
    {
        $this->deliveryAddressUsageDate = $deliveryAddressUsageDate;
        return $this;
    }

    /**
     * Gets as deliveryAddressUsageIndicator
     *
     * @return string
     */
    public function getDeliveryAddressUsageIndicator()
    {
        return $this->deliveryAddressUsageIndicator;
    }

    /**
     * Sets a new deliveryAddressUsageIndicator
     *
     * @param string $deliveryAddressUsageIndicator
     * @return self
     */
    public function setDeliveryAddressUsageIndicator($deliveryAddressUsageIndicator)
    {
        $this->deliveryAddressUsageIndicator = $deliveryAddressUsageIndicator;
        return $this;
    }

    /**
     * Gets as homePhone
     *
     * @return string
     */
    public function getHomePhone()
    {
        return $this->homePhone;
    }

    /**
     * Sets a new homePhone
     *
     * @param string $homePhone
     * @return self
     */
    public function setHomePhone($homePhone)
    {
        $this->homePhone = $homePhone;
        return $this;
    }

    /**
     * Gets as mobilePhone
     *
     * @return string
     */
    public function getMobilePhone()
    {
        return $this->mobilePhone;
    }

    /**
     * Sets a new mobilePhone
     *
     * @param string $mobilePhone
     * @return self
     */
    public function setMobilePhone($mobilePhone)
    {
        $this->mobilePhone = $mobilePhone;
        return $this;
    }

    /**
     * Gets as passwordChangeDate
     *
     * @return \DateTime
     */
    public function getPasswordChangeDate()
    {
        return $this->passwordChangeDate;
    }

    /**
     * Sets a new passwordChangeDate
     *
     * @param \DateTime $passwordChangeDate
     * @return self
     */
    public function setPasswordChangeDate(\DateTime $passwordChangeDate)
    {
        $this->passwordChangeDate = $passwordChangeDate;
        return $this;
    }

    /**
     * Gets as passwordChangeIndicator
     *
     * @return string
     */
    public function getPasswordChangeIndicator()
    {
        return $this->passwordChangeIndicator;
    }

    /**
     * Sets a new passwordChangeIndicator
     *
     * @param string $passwordChangeIndicator
     * @return self
     */
    public function setPasswordChangeIndicator($passwordChangeIndicator)
    {
        $this->passwordChangeIndicator = $passwordChangeIndicator;
        return $this;
    }

    /**
     * Gets as pastTransactionsDay
     *
     * @return int
     */
    public function getPastTransactionsDay()
    {
        return $this->pastTransactionsDay;
    }

    /**
     * Sets a new pastTransactionsDay
     *
     * @param int $pastTransactionsDay
     * @return self
     */
    public function setPastTransactionsDay($pastTransactionsDay)
    {
        $this->pastTransactionsDay = $pastTransactionsDay;
        return $this;
    }

    /**
     * Gets as pastTransactionsYear
     *
     * @return int
     */
    public function getPastTransactionsYear()
    {
        return $this->pastTransactionsYear;
    }

    /**
     * Sets a new pastTransactionsYear
     *
     * @param int $pastTransactionsYear
     * @return self
     */
    public function setPastTransactionsYear($pastTransactionsYear)
    {
        $this->pastTransactionsYear = $pastTransactionsYear;
        return $this;
    }

    /**
     * Gets as paymentAccountAge
     *
     * @return \DateTime
     */
    public function getPaymentAccountAge()
    {
        return $this->paymentAccountAge;
    }

    /**
     * Sets a new paymentAccountAge
     *
     * @param \DateTime $paymentAccountAge
     * @return self
     */
    public function setPaymentAccountAge(\DateTime $paymentAccountAge)
    {
        $this->paymentAccountAge = $paymentAccountAge;
        return $this;
    }

    /**
     * Gets as paymentAccountIndicator
     *
     * @return string
     */
    public function getPaymentAccountIndicator()
    {
        return $this->paymentAccountIndicator;
    }

    /**
     * Sets a new paymentAccountIndicator
     *
     * @param string $paymentAccountIndicator
     * @return self
     */
    public function setPaymentAccountIndicator($paymentAccountIndicator)
    {
        $this->paymentAccountIndicator = $paymentAccountIndicator;
        return $this;
    }

    /**
     * Gets as purchasesLast6Months
     *
     * @return int
     */
    public function getPurchasesLast6Months()
    {
        return $this->purchasesLast6Months;
    }

    /**
     * Sets a new purchasesLast6Months
     *
     * @param int $purchasesLast6Months
     * @return self
     */
    public function setPurchasesLast6Months($purchasesLast6Months)
    {
        $this->purchasesLast6Months = $purchasesLast6Months;
        return $this;
    }

    /**
     * Gets as suspiciousActivity
     *
     * @return bool
     */
    public function getSuspiciousActivity()
    {
        return $this->suspiciousActivity;
    }

    /**
     * Sets a new suspiciousActivity
     *
     * @param bool $suspiciousActivity
     * @return self
     */
    public function setSuspiciousActivity($suspiciousActivity)
    {
        $this->suspiciousActivity = $suspiciousActivity;
        return $this;
    }

    /**
     * Gets as workPhone
     *
     * @return string
     */
    public function getWorkPhone()
    {
        return $this->workPhone;
    }

    /**
     * Sets a new workPhone
     *
     * @param string $workPhone
     * @return self
     */
    public function setWorkPhone($workPhone)
    {
        $this->workPhone = $workPhone;
        return $this;
    }


}

