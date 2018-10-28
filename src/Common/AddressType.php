<?php

namespace GoetasWebservices\Client\AdyenPayment\Common;

/**
 * Class representing AddressType
 *
 *
 * XSD Type: Address
 */
class AddressType
{

    /**
     * @property string $city
     */
    private $city = null;

    /**
     * @property string $country
     */
    private $country = null;

    /**
     * @property string $houseNumberOrName
     */
    private $houseNumberOrName = null;

    /**
     * @property string $postalCode
     */
    private $postalCode = null;

    /**
     * @property string $stateOrProvince
     */
    private $stateOrProvince = null;

    /**
     * @property string $street
     */
    private $street = null;

    /**
     * Gets as city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Sets a new city
     *
     * @param string $city
     * @return self
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * Gets as country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Sets a new country
     *
     * @param string $country
     * @return self
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * Gets as houseNumberOrName
     *
     * @return string
     */
    public function getHouseNumberOrName()
    {
        return $this->houseNumberOrName;
    }

    /**
     * Sets a new houseNumberOrName
     *
     * @param string $houseNumberOrName
     * @return self
     */
    public function setHouseNumberOrName($houseNumberOrName)
    {
        $this->houseNumberOrName = $houseNumberOrName;
        return $this;
    }

    /**
     * Gets as postalCode
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * Sets a new postalCode
     *
     * @param string $postalCode
     * @return self
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
        return $this;
    }

    /**
     * Gets as stateOrProvince
     *
     * @return string
     */
    public function getStateOrProvince()
    {
        return $this->stateOrProvince;
    }

    /**
     * Sets a new stateOrProvince
     *
     * @param string $stateOrProvince
     * @return self
     */
    public function setStateOrProvince($stateOrProvince)
    {
        $this->stateOrProvince = $stateOrProvince;
        return $this;
    }

    /**
     * Gets as street
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Sets a new street
     *
     * @param string $street
     * @return self
     */
    public function setStreet($street)
    {
        $this->street = $street;
        return $this;
    }


}

