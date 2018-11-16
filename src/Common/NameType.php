<?php

namespace GoetasWebservices\Client\AdyenPayment\Common;

/**
 * Class representing NameType
 *
 *
 * XSD Type: Name
 */
class NameType
{

    /**
     * @property string $firstName
     */
    private $firstName = null;

    /**
     * @property string $gender
     */
    private $gender = null;

    /**
     * @property string $infix
     */
    private $infix = null;

    /**
     * @property string $lastName
     */
    private $lastName = null;

    /**
     * Gets as firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Sets a new firstName
     *
     * @param string $firstName
     * @return self
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * Gets as gender
     *
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Sets a new gender
     *
     * @param string $gender
     * @return self
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
        return $this;
    }

    /**
     * Gets as infix
     *
     * @return string
     */
    public function getInfix()
    {
        return $this->infix;
    }

    /**
     * Sets a new infix
     *
     * @param string $infix
     * @return self
     */
    public function setInfix($infix)
    {
        $this->infix = $infix;
        return $this;
    }

    /**
     * Gets as lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Sets a new lastName
     *
     * @param string $lastName
     * @return self
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }


}

