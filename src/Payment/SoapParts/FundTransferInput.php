<?php

namespace GoetasWebservices\Client\AdyenPayment\Payment\SoapParts;

/**
 * Class representing FundTransferInput
 */
class FundTransferInput
{

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\Payment\FundTransfer $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\AdyenPayment\Payment\FundTransfer
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\AdyenPayment\Payment\FundTransfer $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\AdyenPayment\Payment\FundTransfer $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

