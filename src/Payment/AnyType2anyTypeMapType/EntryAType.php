<?php

namespace GoetasWebservices\Client\AdyenPayment\Payment\AnyType2anyTypeMapType;

/**
 * Class representing EntryAType
 */
class EntryAType
{

    /**
     * @property mixed $key
     */
    private $key = null;

    /**
     * @property mixed $value
     */
    private $value = null;

    /**
     * Gets as key
     *
     * @return mixed
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Sets a new key
     *
     * @param mixed $key
     * @return self
     */
    public function setKey($key)
    {
        $this->key = $key;
        return $this;
    }

    /**
     * Gets as value
     *
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * @param mixed $value
     * @return self
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }


}

