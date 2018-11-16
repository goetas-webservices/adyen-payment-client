<?php

namespace GoetasWebservices\Client\AdyenPayment\Payment\SoapParts;

/**
 * Class representing VoidPendingRefundOutput
 */
class VoidPendingRefundOutput
{

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\Payment\VoidPendingRefundResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\AdyenPayment\Payment\VoidPendingRefundResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\AdyenPayment\Payment\VoidPendingRefundResponse $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\AdyenPayment\Payment\VoidPendingRefundResponse $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

