<?php

namespace GoetasWebservices\Client\AdyenPayment\Payment\SoapParts;

/**
 * Class representing RefundWithDataInput
 */
class RefundWithDataInput
{

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\Payment\RefundWithData $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\AdyenPayment\Payment\RefundWithData
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\AdyenPayment\Payment\RefundWithData $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\AdyenPayment\Payment\RefundWithData $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

