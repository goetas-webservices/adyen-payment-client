<?php

namespace GoetasWebservices\Client\AdyenPayment\Payment\SoapParts;

/**
 * Class representing FundTransferOutput
 */
class FundTransferOutput
{

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\Payment\FundTransferResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\AdyenPayment\Payment\FundTransferResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\AdyenPayment\Payment\FundTransferResponse $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\AdyenPayment\Payment\FundTransferResponse $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

