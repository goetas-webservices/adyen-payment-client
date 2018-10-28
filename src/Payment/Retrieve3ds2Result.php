<?php

namespace GoetasWebservices\Client\AdyenPayment\Payment;

/**
 * Class representing Retrieve3ds2Result
 */
class Retrieve3ds2Result
{

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\Payment\ThreeDS2ResultRequestType $threeDS2ResultRequest
     */
    private $threeDS2ResultRequest = null;

    /**
     * Gets as threeDS2ResultRequest
     *
     * @return \GoetasWebservices\Client\AdyenPayment\Payment\ThreeDS2ResultRequestType
     */
    public function getThreeDS2ResultRequest()
    {
        return $this->threeDS2ResultRequest;
    }

    /**
     * Sets a new threeDS2ResultRequest
     *
     * @param \GoetasWebservices\Client\AdyenPayment\Payment\ThreeDS2ResultRequestType $threeDS2ResultRequest
     * @return self
     */
    public function setThreeDS2ResultRequest(\GoetasWebservices\Client\AdyenPayment\Payment\ThreeDS2ResultRequestType $threeDS2ResultRequest)
    {
        $this->threeDS2ResultRequest = $threeDS2ResultRequest;
        return $this;
    }


}

