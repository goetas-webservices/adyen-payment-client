<?php

namespace GoetasWebservices\Client\AdyenPayment\AppInfo;

/**
 * Class representing MerchantDeviceType
 *
 *
 * XSD Type: MerchantDevice
 */
class MerchantDeviceType
{

    /**
     * @property string $os
     */
    private $os = null;

    /**
     * @property string $osVersion
     */
    private $osVersion = null;

    /**
     * @property string $reference
     */
    private $reference = null;

    /**
     * Gets as os
     *
     * @return string
     */
    public function getOs()
    {
        return $this->os;
    }

    /**
     * Sets a new os
     *
     * @param string $os
     * @return self
     */
    public function setOs($os)
    {
        $this->os = $os;
        return $this;
    }

    /**
     * Gets as osVersion
     *
     * @return string
     */
    public function getOsVersion()
    {
        return $this->osVersion;
    }

    /**
     * Sets a new osVersion
     *
     * @param string $osVersion
     * @return self
     */
    public function setOsVersion($osVersion)
    {
        $this->osVersion = $osVersion;
        return $this;
    }

    /**
     * Gets as reference
     *
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Sets a new reference
     *
     * @param string $reference
     * @return self
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
        return $this;
    }


}

