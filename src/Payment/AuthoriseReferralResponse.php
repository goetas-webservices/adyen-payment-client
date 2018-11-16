<?php

namespace GoetasWebservices\Client\AdyenPayment\Payment;

/**
 * Class representing AuthoriseReferralResponse
 */
class AuthoriseReferralResponse
{

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\Payment\ModificationResultType $authoriseReferralResult
     */
    private $authoriseReferralResult = null;

    /**
     * Gets as authoriseReferralResult
     *
     * @return \GoetasWebservices\Client\AdyenPayment\Payment\ModificationResultType
     */
    public function getAuthoriseReferralResult()
    {
        return $this->authoriseReferralResult;
    }

    /**
     * Sets a new authoriseReferralResult
     *
     * @param \GoetasWebservices\Client\AdyenPayment\Payment\ModificationResultType $authoriseReferralResult
     * @return self
     */
    public function setAuthoriseReferralResult(\GoetasWebservices\Client\AdyenPayment\Payment\ModificationResultType $authoriseReferralResult)
    {
        $this->authoriseReferralResult = $authoriseReferralResult;
        return $this;
    }


}

