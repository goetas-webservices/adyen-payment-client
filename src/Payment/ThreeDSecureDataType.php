<?php

namespace GoetasWebservices\Client\AdyenPayment\Payment;

/**
 * Class representing ThreeDSecureDataType
 *
 *
 * XSD Type: ThreeDSecureData
 */
class ThreeDSecureDataType
{

    /**
     * @property string $authenticationResponse
     */
    private $authenticationResponse = null;

    /**
     * @property mixed $cavv
     */
    private $cavv = null;

    /**
     * @property string $cavvAlgorithm
     */
    private $cavvAlgorithm = null;

    /**
     * @property string $directoryResponse
     */
    private $directoryResponse = null;

    /**
     * @property string $eci
     */
    private $eci = null;

    /**
     * @property string $threeDSVersion
     */
    private $threeDSVersion = null;

    /**
     * @property mixed $xid
     */
    private $xid = null;

    /**
     * Gets as authenticationResponse
     *
     * @return string
     */
    public function getAuthenticationResponse()
    {
        return $this->authenticationResponse;
    }

    /**
     * Sets a new authenticationResponse
     *
     * @param string $authenticationResponse
     * @return self
     */
    public function setAuthenticationResponse($authenticationResponse)
    {
        $this->authenticationResponse = $authenticationResponse;
        return $this;
    }

    /**
     * Gets as cavv
     *
     * @return mixed
     */
    public function getCavv()
    {
        return $this->cavv;
    }

    /**
     * Sets a new cavv
     *
     * @param mixed $cavv
     * @return self
     */
    public function setCavv($cavv)
    {
        $this->cavv = $cavv;
        return $this;
    }

    /**
     * Gets as cavvAlgorithm
     *
     * @return string
     */
    public function getCavvAlgorithm()
    {
        return $this->cavvAlgorithm;
    }

    /**
     * Sets a new cavvAlgorithm
     *
     * @param string $cavvAlgorithm
     * @return self
     */
    public function setCavvAlgorithm($cavvAlgorithm)
    {
        $this->cavvAlgorithm = $cavvAlgorithm;
        return $this;
    }

    /**
     * Gets as directoryResponse
     *
     * @return string
     */
    public function getDirectoryResponse()
    {
        return $this->directoryResponse;
    }

    /**
     * Sets a new directoryResponse
     *
     * @param string $directoryResponse
     * @return self
     */
    public function setDirectoryResponse($directoryResponse)
    {
        $this->directoryResponse = $directoryResponse;
        return $this;
    }

    /**
     * Gets as eci
     *
     * @return string
     */
    public function getEci()
    {
        return $this->eci;
    }

    /**
     * Sets a new eci
     *
     * @param string $eci
     * @return self
     */
    public function setEci($eci)
    {
        $this->eci = $eci;
        return $this;
    }

    /**
     * Gets as threeDSVersion
     *
     * @return string
     */
    public function getThreeDSVersion()
    {
        return $this->threeDSVersion;
    }

    /**
     * Sets a new threeDSVersion
     *
     * @param string $threeDSVersion
     * @return self
     */
    public function setThreeDSVersion($threeDSVersion)
    {
        $this->threeDSVersion = $threeDSVersion;
        return $this;
    }

    /**
     * Gets as xid
     *
     * @return mixed
     */
    public function getXid()
    {
        return $this->xid;
    }

    /**
     * Sets a new xid
     *
     * @param mixed $xid
     * @return self
     */
    public function setXid($xid)
    {
        $this->xid = $xid;
        return $this;
    }


}

