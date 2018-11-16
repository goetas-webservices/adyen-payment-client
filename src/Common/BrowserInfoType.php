<?php

namespace GoetasWebservices\Client\AdyenPayment\Common;

/**
 * Class representing BrowserInfoType
 *
 *
 * XSD Type: BrowserInfo
 */
class BrowserInfoType
{

    /**
     * @property string $acceptHeader
     */
    private $acceptHeader = null;

    /**
     * @property int $colorDepth
     */
    private $colorDepth = null;

    /**
     * @property bool $javaEnabled
     */
    private $javaEnabled = null;

    /**
     * @property string $language
     */
    private $language = null;

    /**
     * @property int $screenHeight
     */
    private $screenHeight = null;

    /**
     * @property int $screenWidth
     */
    private $screenWidth = null;

    /**
     * @property int $timeZoneOffset
     */
    private $timeZoneOffset = null;

    /**
     * @property string $userAgent
     */
    private $userAgent = null;

    /**
     * Gets as acceptHeader
     *
     * @return string
     */
    public function getAcceptHeader()
    {
        return $this->acceptHeader;
    }

    /**
     * Sets a new acceptHeader
     *
     * @param string $acceptHeader
     * @return self
     */
    public function setAcceptHeader($acceptHeader)
    {
        $this->acceptHeader = $acceptHeader;
        return $this;
    }

    /**
     * Gets as colorDepth
     *
     * @return int
     */
    public function getColorDepth()
    {
        return $this->colorDepth;
    }

    /**
     * Sets a new colorDepth
     *
     * @param int $colorDepth
     * @return self
     */
    public function setColorDepth($colorDepth)
    {
        $this->colorDepth = $colorDepth;
        return $this;
    }

    /**
     * Gets as javaEnabled
     *
     * @return bool
     */
    public function getJavaEnabled()
    {
        return $this->javaEnabled;
    }

    /**
     * Sets a new javaEnabled
     *
     * @param bool $javaEnabled
     * @return self
     */
    public function setJavaEnabled($javaEnabled)
    {
        $this->javaEnabled = $javaEnabled;
        return $this;
    }

    /**
     * Gets as language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Sets a new language
     *
     * @param string $language
     * @return self
     */
    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * Gets as screenHeight
     *
     * @return int
     */
    public function getScreenHeight()
    {
        return $this->screenHeight;
    }

    /**
     * Sets a new screenHeight
     *
     * @param int $screenHeight
     * @return self
     */
    public function setScreenHeight($screenHeight)
    {
        $this->screenHeight = $screenHeight;
        return $this;
    }

    /**
     * Gets as screenWidth
     *
     * @return int
     */
    public function getScreenWidth()
    {
        return $this->screenWidth;
    }

    /**
     * Sets a new screenWidth
     *
     * @param int $screenWidth
     * @return self
     */
    public function setScreenWidth($screenWidth)
    {
        $this->screenWidth = $screenWidth;
        return $this;
    }

    /**
     * Gets as timeZoneOffset
     *
     * @return int
     */
    public function getTimeZoneOffset()
    {
        return $this->timeZoneOffset;
    }

    /**
     * Sets a new timeZoneOffset
     *
     * @param int $timeZoneOffset
     * @return self
     */
    public function setTimeZoneOffset($timeZoneOffset)
    {
        $this->timeZoneOffset = $timeZoneOffset;
        return $this;
    }

    /**
     * Gets as userAgent
     *
     * @return string
     */
    public function getUserAgent()
    {
        return $this->userAgent;
    }

    /**
     * Sets a new userAgent
     *
     * @param string $userAgent
     * @return self
     */
    public function setUserAgent($userAgent)
    {
        $this->userAgent = $userAgent;
        return $this;
    }


}

