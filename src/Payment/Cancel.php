<?php

namespace GoetasWebservices\Client\AdyenPayment\Payment;

/**
 * Class representing Cancel
 */
class Cancel
{

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\Payment\ModificationRequestType $modificationRequest
     */
    private $modificationRequest = null;

    /**
     * Gets as modificationRequest
     *
     * @return \GoetasWebservices\Client\AdyenPayment\Payment\ModificationRequestType
     */
    public function getModificationRequest()
    {
        return $this->modificationRequest;
    }

    /**
     * Sets a new modificationRequest
     *
     * @param \GoetasWebservices\Client\AdyenPayment\Payment\ModificationRequestType $modificationRequest
     * @return self
     */
    public function setModificationRequest(\GoetasWebservices\Client\AdyenPayment\Payment\ModificationRequestType $modificationRequest)
    {
        $this->modificationRequest = $modificationRequest;
        return $this;
    }


}

