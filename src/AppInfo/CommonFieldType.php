<?php

namespace GoetasWebservices\Client\AdyenPayment\AppInfo;

/**
 * Class representing CommonFieldType
 *
 *
 * XSD Type: CommonField
 */
class CommonFieldType
{

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property string $version
     */
    private $version = null;

    /**
     * Gets as name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * @param string $version
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }


}

