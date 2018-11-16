<?php

namespace GoetasWebservices\Client\AdyenPayment\Payment\SoapParts;

/**
 * Class representing VoidPendingRefundInput
 */
class VoidPendingRefundInput
{

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\Payment\VoidPendingRefund $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\AdyenPayment\Payment\VoidPendingRefund
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\AdyenPayment\Payment\VoidPendingRefund $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\AdyenPayment\Payment\VoidPendingRefund $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

