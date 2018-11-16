<?php

namespace GoetasWebservices\Client\AdyenPayment\Payment\SoapParts;

/**
 * Class representing RefundWithDataOutput
 */
class RefundWithDataOutput
{

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\Payment\RefundWithDataResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\AdyenPayment\Payment\RefundWithDataResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\AdyenPayment\Payment\RefundWithDataResponse $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\AdyenPayment\Payment\RefundWithDataResponse $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

