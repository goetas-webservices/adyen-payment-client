<?php

namespace GoetasWebservices\Client\AdyenPayment\Payment;

/**
 * Class representing FundTransferResponse
 */
class FundTransferResponse
{

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\Payment\FundTransferResultType $result
     */
    private $result = null;

    /**
     * Gets as result
     *
     * @return \GoetasWebservices\Client\AdyenPayment\Payment\FundTransferResultType
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Sets a new result
     *
     * @param \GoetasWebservices\Client\AdyenPayment\Payment\FundTransferResultType $result
     * @return self
     */
    public function setResult(\GoetasWebservices\Client\AdyenPayment\Payment\FundTransferResultType $result)
    {
        $this->result = $result;
        return $this;
    }


}

