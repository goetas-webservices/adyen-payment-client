<?php

namespace GoetasWebservices\Client\AdyenPayment\Common;

/**
 * Class representing InstallmentsType
 *
 *
 * XSD Type: Installments
 */
class InstallmentsType
{

    /**
     * @property int $value
     */
    private $value = null;

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

