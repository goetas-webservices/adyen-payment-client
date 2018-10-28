<?php

namespace GoetasWebservices\Client\AdyenPayment\Payment;

/**
 * Class representing ThreeDS2ResultRequestType
 *
 *
 * XSD Type: ThreeDS2ResultRequest
 */
class ThreeDS2ResultRequestType
{

    /**
     * @property string $merchantAccount
     */
    private $merchantAccount = null;

    /**
     * @property string $pspReference
     */
    private $pspReference = null;

    /**
     * Gets as merchantAccount
     *
     * @return string
     */
    public function getMerchantAccount()
    {
        return $this->merchantAccount;
    }

    /**
     * Sets a new merchantAccount
     *
     * @param string $merchantAccount
     * @return self
     */
    public function setMerchantAccount($merchantAccount)
    {
        $this->merchantAccount = $merchantAccount;
        return $this;
    }

    /**
     * Gets as pspReference
     *
     * @return string
     */
    public function getPspReference()
    {
        return $this->pspReference;
    }

    /**
     * Sets a new pspReference
     *
     * @param string $pspReference
     * @return self
     */
    public function setPspReference($pspReference)
    {
        $this->pspReference = $pspReference;
        return $this;
    }


}

