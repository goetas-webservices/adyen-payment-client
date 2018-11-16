<?php

namespace GoetasWebservices\Client\AdyenPayment\ThreedsToData;

/**
 * Class representing DeviceRenderOptionsType
 *
 *
 * XSD Type: DeviceRenderOptions
 */
class DeviceRenderOptionsType
{

    /**
     * @property string $sdkInterface
     */
    private $sdkInterface = null;

    /**
     * @property string[] $sdkUiType
     */
    private $sdkUiType = null;

    /**
     * Gets as sdkInterface
     *
     * @return string
     */
    public function getSdkInterface()
    {
        return $this->sdkInterface;
    }

    /**
     * Sets a new sdkInterface
     *
     * @param string $sdkInterface
     * @return self
     */
    public function setSdkInterface($sdkInterface)
    {
        $this->sdkInterface = $sdkInterface;
        return $this;
    }

    /**
     * Adds as sDKUiType
     *
     * @return self
     * @param string $sDKUiType
     */
    public function addToSdkUiType($sDKUiType)
    {
        $this->sdkUiType[] = $sDKUiType;
        return $this;
    }

    /**
     * isset sdkUiType
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSdkUiType($index)
    {
        return isset($this->sdkUiType[$index]);
    }

    /**
     * unset sdkUiType
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSdkUiType($index)
    {
        unset($this->sdkUiType[$index]);
    }

    /**
     * Gets as sdkUiType
     *
     * @return string[]
     */
    public function getSdkUiType()
    {
        return $this->sdkUiType;
    }

    /**
     * Sets a new sdkUiType
     *
     * @param string $sdkUiType
     * @return self
     */
    public function setSdkUiType(array $sdkUiType)
    {
        $this->sdkUiType = $sdkUiType;
        return $this;
    }


}

