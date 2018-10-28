<?php

namespace GoetasWebservices\Client\AdyenPayment\AppInfo;

/**
 * Class representing ApplicationInfoType
 *
 *
 * XSD Type: ApplicationInfo
 */
class ApplicationInfoType
{

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\AppInfo\CommonFieldType $adyenLibrary
     */
    private $adyenLibrary = null;

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\AppInfo\CommonFieldType $adyenPaymentSource
     */
    private $adyenPaymentSource = null;

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\AppInfo\ExternalPlatformType $externalPlatform
     */
    private $externalPlatform = null;

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\AppInfo\CommonFieldType $merchantApplication
     */
    private $merchantApplication = null;

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\AppInfo\MerchantDeviceType $merchantDevice
     */
    private $merchantDevice = null;

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\AppInfo\CommonFieldType $paymentDetailsSource
     */
    private $paymentDetailsSource = null;

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\AppInfo\ShopperInteractionDeviceType $shopperInteractionDevice
     */
    private $shopperInteractionDevice = null;

    /**
     * Gets as adyenLibrary
     *
     * @return \GoetasWebservices\Client\AdyenPayment\AppInfo\CommonFieldType
     */
    public function getAdyenLibrary()
    {
        return $this->adyenLibrary;
    }

    /**
     * Sets a new adyenLibrary
     *
     * @param \GoetasWebservices\Client\AdyenPayment\AppInfo\CommonFieldType $adyenLibrary
     * @return self
     */
    public function setAdyenLibrary(\GoetasWebservices\Client\AdyenPayment\AppInfo\CommonFieldType $adyenLibrary)
    {
        $this->adyenLibrary = $adyenLibrary;
        return $this;
    }

    /**
     * Gets as adyenPaymentSource
     *
     * @return \GoetasWebservices\Client\AdyenPayment\AppInfo\CommonFieldType
     */
    public function getAdyenPaymentSource()
    {
        return $this->adyenPaymentSource;
    }

    /**
     * Sets a new adyenPaymentSource
     *
     * @param \GoetasWebservices\Client\AdyenPayment\AppInfo\CommonFieldType $adyenPaymentSource
     * @return self
     */
    public function setAdyenPaymentSource(\GoetasWebservices\Client\AdyenPayment\AppInfo\CommonFieldType $adyenPaymentSource)
    {
        $this->adyenPaymentSource = $adyenPaymentSource;
        return $this;
    }

    /**
     * Gets as externalPlatform
     *
     * @return \GoetasWebservices\Client\AdyenPayment\AppInfo\ExternalPlatformType
     */
    public function getExternalPlatform()
    {
        return $this->externalPlatform;
    }

    /**
     * Sets a new externalPlatform
     *
     * @param \GoetasWebservices\Client\AdyenPayment\AppInfo\ExternalPlatformType $externalPlatform
     * @return self
     */
    public function setExternalPlatform(\GoetasWebservices\Client\AdyenPayment\AppInfo\ExternalPlatformType $externalPlatform)
    {
        $this->externalPlatform = $externalPlatform;
        return $this;
    }

    /**
     * Gets as merchantApplication
     *
     * @return \GoetasWebservices\Client\AdyenPayment\AppInfo\CommonFieldType
     */
    public function getMerchantApplication()
    {
        return $this->merchantApplication;
    }

    /**
     * Sets a new merchantApplication
     *
     * @param \GoetasWebservices\Client\AdyenPayment\AppInfo\CommonFieldType $merchantApplication
     * @return self
     */
    public function setMerchantApplication(\GoetasWebservices\Client\AdyenPayment\AppInfo\CommonFieldType $merchantApplication)
    {
        $this->merchantApplication = $merchantApplication;
        return $this;
    }

    /**
     * Gets as merchantDevice
     *
     * @return \GoetasWebservices\Client\AdyenPayment\AppInfo\MerchantDeviceType
     */
    public function getMerchantDevice()
    {
        return $this->merchantDevice;
    }

    /**
     * Sets a new merchantDevice
     *
     * @param \GoetasWebservices\Client\AdyenPayment\AppInfo\MerchantDeviceType $merchantDevice
     * @return self
     */
    public function setMerchantDevice(\GoetasWebservices\Client\AdyenPayment\AppInfo\MerchantDeviceType $merchantDevice)
    {
        $this->merchantDevice = $merchantDevice;
        return $this;
    }

    /**
     * Gets as paymentDetailsSource
     *
     * @return \GoetasWebservices\Client\AdyenPayment\AppInfo\CommonFieldType
     */
    public function getPaymentDetailsSource()
    {
        return $this->paymentDetailsSource;
    }

    /**
     * Sets a new paymentDetailsSource
     *
     * @param \GoetasWebservices\Client\AdyenPayment\AppInfo\CommonFieldType $paymentDetailsSource
     * @return self
     */
    public function setPaymentDetailsSource(\GoetasWebservices\Client\AdyenPayment\AppInfo\CommonFieldType $paymentDetailsSource)
    {
        $this->paymentDetailsSource = $paymentDetailsSource;
        return $this;
    }

    /**
     * Gets as shopperInteractionDevice
     *
     * @return \GoetasWebservices\Client\AdyenPayment\AppInfo\ShopperInteractionDeviceType
     */
    public function getShopperInteractionDevice()
    {
        return $this->shopperInteractionDevice;
    }

    /**
     * Sets a new shopperInteractionDevice
     *
     * @param \GoetasWebservices\Client\AdyenPayment\AppInfo\ShopperInteractionDeviceType $shopperInteractionDevice
     * @return self
     */
    public function setShopperInteractionDevice(\GoetasWebservices\Client\AdyenPayment\AppInfo\ShopperInteractionDeviceType $shopperInteractionDevice)
    {
        $this->shopperInteractionDevice = $shopperInteractionDevice;
        return $this;
    }


}

