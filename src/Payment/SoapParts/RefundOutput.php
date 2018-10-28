<?php

namespace GoetasWebservices\Client\AdyenPayment\Payment\SoapParts;

/**
 * Class representing RefundOutput
 */
class RefundOutput
{

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\Payment\RefundResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\AdyenPayment\Payment\RefundResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\AdyenPayment\Payment\RefundResponse $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\AdyenPayment\Payment\RefundResponse $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

