<?php

namespace GoetasWebservices\Client\AdyenPayment\AppInfo;

/**
 * Class representing ShopperInteractionDeviceType
 *
 *
 * XSD Type: ShopperInteractionDevice
 */
class ShopperInteractionDeviceType
{

    /**
     * @property string $locale
     */
    private $locale = null;

    /**
     * @property string $os
     */
    private $os = null;

    /**
     * @property string $osVersion
     */
    private $osVersion = null;

    /**
     * Gets as locale
     *
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * Sets a new locale
     *
     * @param string $locale
     * @return self
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;
        return $this;
    }

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


}

