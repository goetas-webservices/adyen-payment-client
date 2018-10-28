<?php

namespace GoetasWebservices\Client\AdyenPayment\ThreedsToData;

/**
 * Class representing ThreeDS2RequestDataType
 *
 *
 * XSD Type: ThreeDS2RequestData
 */
class ThreeDS2RequestDataType
{

    /**
     * @property bool $authenticationOnly
     */
    private $authenticationOnly = null;

    /**
     * @property string $challengeIndicator
     */
    private $challengeIndicator = null;

    /**
     * @property string $deviceChannel
     */
    private $deviceChannel = null;

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\ThreedsToData\DeviceRenderOptionsType $deviceRenderOptions
     */
    private $deviceRenderOptions = null;

    /**
     * @property string $notificationURL
     */
    private $notificationURL = null;

    /**
     * @property string $sdkAppID
     */
    private $sdkAppID = null;

    /**
     * @property string $sdkEncData
     */
    private $sdkEncData = null;

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\ThreedsToData\SDKEphemPubKeyType $sdkEphemPubKey
     */
    private $sdkEphemPubKey = null;

    /**
     * @property int $sdkMaxTimeout
     */
    private $sdkMaxTimeout = null;

    /**
     * @property string $sdkReferenceNumber
     */
    private $sdkReferenceNumber = null;

    /**
     * @property string $sdkTransID
     */
    private $sdkTransID = null;

    /**
     * @property string $threeDSCompInd
     */
    private $threeDSCompInd = null;

    /**
     * @property string $threeDSRequestorURL
     */
    private $threeDSRequestorURL = null;

    /**
     * @property string $threeDSServerTransID
     */
    private $threeDSServerTransID = null;

    /**
     * Gets as authenticationOnly
     *
     * @return bool
     */
    public function getAuthenticationOnly()
    {
        return $this->authenticationOnly;
    }

    /**
     * Sets a new authenticationOnly
     *
     * @param bool $authenticationOnly
     * @return self
     */
    public function setAuthenticationOnly($authenticationOnly)
    {
        $this->authenticationOnly = $authenticationOnly;
        return $this;
    }

    /**
     * Gets as challengeIndicator
     *
     * @return string
     */
    public function getChallengeIndicator()
    {
        return $this->challengeIndicator;
    }

    /**
     * Sets a new challengeIndicator
     *
     * @param string $challengeIndicator
     * @return self
     */
    public function setChallengeIndicator($challengeIndicator)
    {
        $this->challengeIndicator = $challengeIndicator;
        return $this;
    }

    /**
     * Gets as deviceChannel
     *
     * @return string
     */
    public function getDeviceChannel()
    {
        return $this->deviceChannel;
    }

    /**
     * Sets a new deviceChannel
     *
     * @param string $deviceChannel
     * @return self
     */
    public function setDeviceChannel($deviceChannel)
    {
        $this->deviceChannel = $deviceChannel;
        return $this;
    }

    /**
     * Gets as deviceRenderOptions
     *
     * @return \GoetasWebservices\Client\AdyenPayment\ThreedsToData\DeviceRenderOptionsType
     */
    public function getDeviceRenderOptions()
    {
        return $this->deviceRenderOptions;
    }

    /**
     * Sets a new deviceRenderOptions
     *
     * @param \GoetasWebservices\Client\AdyenPayment\ThreedsToData\DeviceRenderOptionsType $deviceRenderOptions
     * @return self
     */
    public function setDeviceRenderOptions(\GoetasWebservices\Client\AdyenPayment\ThreedsToData\DeviceRenderOptionsType $deviceRenderOptions)
    {
        $this->deviceRenderOptions = $deviceRenderOptions;
        return $this;
    }

    /**
     * Gets as notificationURL
     *
     * @return string
     */
    public function getNotificationURL()
    {
        return $this->notificationURL;
    }

    /**
     * Sets a new notificationURL
     *
     * @param string $notificationURL
     * @return self
     */
    public function setNotificationURL($notificationURL)
    {
        $this->notificationURL = $notificationURL;
        return $this;
    }

    /**
     * Gets as sdkAppID
     *
     * @return string
     */
    public function getSdkAppID()
    {
        return $this->sdkAppID;
    }

    /**
     * Sets a new sdkAppID
     *
     * @param string $sdkAppID
     * @return self
     */
    public function setSdkAppID($sdkAppID)
    {
        $this->sdkAppID = $sdkAppID;
        return $this;
    }

    /**
     * Gets as sdkEncData
     *
     * @return string
     */
    public function getSdkEncData()
    {
        return $this->sdkEncData;
    }

    /**
     * Sets a new sdkEncData
     *
     * @param string $sdkEncData
     * @return self
     */
    public function setSdkEncData($sdkEncData)
    {
        $this->sdkEncData = $sdkEncData;
        return $this;
    }

    /**
     * Gets as sdkEphemPubKey
     *
     * @return \GoetasWebservices\Client\AdyenPayment\ThreedsToData\SDKEphemPubKeyType
     */
    public function getSdkEphemPubKey()
    {
        return $this->sdkEphemPubKey;
    }

    /**
     * Sets a new sdkEphemPubKey
     *
     * @param \GoetasWebservices\Client\AdyenPayment\ThreedsToData\SDKEphemPubKeyType $sdkEphemPubKey
     * @return self
     */
    public function setSdkEphemPubKey(\GoetasWebservices\Client\AdyenPayment\ThreedsToData\SDKEphemPubKeyType $sdkEphemPubKey)
    {
        $this->sdkEphemPubKey = $sdkEphemPubKey;
        return $this;
    }

    /**
     * Gets as sdkMaxTimeout
     *
     * @return int
     */
    public function getSdkMaxTimeout()
    {
        return $this->sdkMaxTimeout;
    }

    /**
     * Sets a new sdkMaxTimeout
     *
     * @param int $sdkMaxTimeout
     * @return self
     */
    public function setSdkMaxTimeout($sdkMaxTimeout)
    {
        $this->sdkMaxTimeout = $sdkMaxTimeout;
        return $this;
    }

    /**
     * Gets as sdkReferenceNumber
     *
     * @return string
     */
    public function getSdkReferenceNumber()
    {
        return $this->sdkReferenceNumber;
    }

    /**
     * Sets a new sdkReferenceNumber
     *
     * @param string $sdkReferenceNumber
     * @return self
     */
    public function setSdkReferenceNumber($sdkReferenceNumber)
    {
        $this->sdkReferenceNumber = $sdkReferenceNumber;
        return $this;
    }

    /**
     * Gets as sdkTransID
     *
     * @return string
     */
    public function getSdkTransID()
    {
        return $this->sdkTransID;
    }

    /**
     * Sets a new sdkTransID
     *
     * @param string $sdkTransID
     * @return self
     */
    public function setSdkTransID($sdkTransID)
    {
        $this->sdkTransID = $sdkTransID;
        return $this;
    }

    /**
     * Gets as threeDSCompInd
     *
     * @return string
     */
    public function getThreeDSCompInd()
    {
        return $this->threeDSCompInd;
    }

    /**
     * Sets a new threeDSCompInd
     *
     * @param string $threeDSCompInd
     * @return self
     */
    public function setThreeDSCompInd($threeDSCompInd)
    {
        $this->threeDSCompInd = $threeDSCompInd;
        return $this;
    }

    /**
     * Gets as threeDSRequestorURL
     *
     * @return string
     */
    public function getThreeDSRequestorURL()
    {
        return $this->threeDSRequestorURL;
    }

    /**
     * Sets a new threeDSRequestorURL
     *
     * @param string $threeDSRequestorURL
     * @return self
     */
    public function setThreeDSRequestorURL($threeDSRequestorURL)
    {
        $this->threeDSRequestorURL = $threeDSRequestorURL;
        return $this;
    }

    /**
     * Gets as threeDSServerTransID
     *
     * @return string
     */
    public function getThreeDSServerTransID()
    {
        return $this->threeDSServerTransID;
    }

    /**
     * Sets a new threeDSServerTransID
     *
     * @param string $threeDSServerTransID
     * @return self
     */
    public function setThreeDSServerTransID($threeDSServerTransID)
    {
        $this->threeDSServerTransID = $threeDSServerTransID;
        return $this;
    }


}

