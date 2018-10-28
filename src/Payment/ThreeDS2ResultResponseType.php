<?php

namespace GoetasWebservices\Client\AdyenPayment\Payment;

/**
 * Class representing ThreeDS2ResultResponseType
 *
 *
 * XSD Type: ThreeDS2ResultResponse
 */
class ThreeDS2ResultResponseType
{

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\ThreedsToData\ThreeDS2ResultType $threeDS2Result
     */
    private $threeDS2Result = null;

    /**
     * Gets as threeDS2Result
     *
     * @return \GoetasWebservices\Client\AdyenPayment\ThreedsToData\ThreeDS2ResultType
     */
    public function getThreeDS2Result()
    {
        return $this->threeDS2Result;
    }

    /**
     * Sets a new threeDS2Result
     *
     * @param \GoetasWebservices\Client\AdyenPayment\ThreedsToData\ThreeDS2ResultType $threeDS2Result
     * @return self
     */
    public function setThreeDS2Result(\GoetasWebservices\Client\AdyenPayment\ThreedsToData\ThreeDS2ResultType $threeDS2Result)
    {
        $this->threeDS2Result = $threeDS2Result;
        return $this;
    }


}

