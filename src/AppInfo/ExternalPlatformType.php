<?php

namespace GoetasWebservices\Client\AdyenPayment\AppInfo;

/**
 * Class representing ExternalPlatformType
 *
 *
 * XSD Type: ExternalPlatform
 */
class ExternalPlatformType
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
     * @property string $integrator
     */
    private $integrator = null;

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

    /**
     * Gets as integrator
     *
     * @return string
     */
    public function getIntegrator()
    {
        return $this->integrator;
    }

    /**
     * Sets a new integrator
     *
     * @param string $integrator
     * @return self
     */
    public function setIntegrator($integrator)
    {
        $this->integrator = $integrator;
        return $this;
    }


}

