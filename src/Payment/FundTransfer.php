<?php

namespace GoetasWebservices\Client\AdyenPayment\Payment;

/**
 * Class representing FundTransfer
 */
class FundTransfer
{

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\Payment\FundTransferRequestType $request
     */
    private $request = null;

    /**
     * Gets as request
     *
     * @return \GoetasWebservices\Client\AdyenPayment\Payment\FundTransferRequestType
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Sets a new request
     *
     * @param \GoetasWebservices\Client\AdyenPayment\Payment\FundTransferRequestType $request
     * @return self
     */
    public function setRequest(\GoetasWebservices\Client\AdyenPayment\Payment\FundTransferRequestType $request)
    {
        $this->request = $request;
        return $this;
    }


}

