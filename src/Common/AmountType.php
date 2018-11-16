<?php

namespace GoetasWebservices\Client\AdyenPayment\Common;

/**
 * Class representing AmountType
 *
 *
 * XSD Type: Amount
 */
class AmountType
{

    /**
     * @property string $currency
     */
    private $currency = null;

    /**
     * @property int $value
     */
    private $value = null;

    /**
     * Gets as currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Sets a new currency
     *
     * @param string $currency
     * @return self
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * Gets as value
     *
     * @return int
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * @param int $value
     * @return self
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }


}

