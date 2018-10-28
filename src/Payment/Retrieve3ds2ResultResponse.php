<?php

namespace GoetasWebservices\Client\AdyenPayment\Payment;

/**
 * Class representing Retrieve3ds2ResultResponse
 */
class Retrieve3ds2ResultResponse
{

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\Payment\ThreeDS2ResultResponseType $threeDS2ResultResponse
     */
    private $threeDS2ResultResponse = null;

    /**
     * Gets as threeDS2ResultResponse
     *
     * @return \GoetasWebservices\Client\AdyenPayment\Payment\ThreeDS2ResultResponseType
     */
    public function getThreeDS2ResultResponse()
    {
        return $this->threeDS2ResultResponse;
    }

    /**
     * Sets a new threeDS2ResultResponse
     *
     * @param \GoetasWebservices\Client\AdyenPayment\Payment\ThreeDS2ResultResponseType $threeDS2ResultResponse
     * @return self
     */
    public function setThreeDS2ResultResponse(\GoetasWebservices\Client\AdyenPayment\Payment\ThreeDS2ResultResponseType $threeDS2ResultResponse)
    {
        $this->threeDS2ResultResponse = $threeDS2ResultResponse;
        return $this;
    }


}

