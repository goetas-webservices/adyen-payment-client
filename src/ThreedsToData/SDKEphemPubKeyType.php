<?php

namespace GoetasWebservices\Client\AdyenPayment\ThreedsToData;

/**
 * Class representing SDKEphemPubKeyType
 *
 *
 * XSD Type: SDKEphemPubKey
 */
class SDKEphemPubKeyType
{

    /**
     * @property string $crv
     */
    private $crv = null;

    /**
     * @property string $kty
     */
    private $kty = null;

    /**
     * @property string $x
     */
    private $x = null;

    /**
     * @property string $y
     */
    private $y = null;

    /**
     * Gets as crv
     *
     * @return string
     */
    public function getCrv()
    {
        return $this->crv;
    }

    /**
     * Sets a new crv
     *
     * @param string $crv
     * @return self
     */
    public function setCrv($crv)
    {
        $this->crv = $crv;
        return $this;
    }

    /**
     * Gets as kty
     *
     * @return string
     */
    public function getKty()
    {
        return $this->kty;
    }

    /**
     * Sets a new kty
     *
     * @param string $kty
     * @return self
     */
    public function setKty($kty)
    {
        $this->kty = $kty;
        return $this;
    }

    /**
     * Gets as x
     *
     * @return string
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * Sets a new x
     *
     * @param string $x
     * @return self
     */
    public function setX($x)
    {
        $this->x = $x;
        return $this;
    }

    /**
     * Gets as y
     *
     * @return string
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * Sets a new y
     *
     * @param string $y
     * @return self
     */
    public function setY($y)
    {
        $this->y = $y;
        return $this;
    }


}

