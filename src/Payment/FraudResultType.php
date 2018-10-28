<?php

namespace GoetasWebservices\Client\AdyenPayment\Payment;

/**
 * Class representing FraudResultType
 *
 *
 * XSD Type: FraudResult
 */
class FraudResultType
{

    /**
     * @property int $accountScore
     */
    private $accountScore = null;

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\Payment\FraudCheckResultType[] $results
     */
    private $results = null;

    /**
     * Gets as accountScore
     *
     * @return int
     */
    public function getAccountScore()
    {
        return $this->accountScore;
    }

    /**
     * Sets a new accountScore
     *
     * @param int $accountScore
     * @return self
     */
    public function setAccountScore($accountScore)
    {
        $this->accountScore = $accountScore;
        return $this;
    }

    /**
     * Adds as fraudCheckResult
     *
     * @return self
     * @param \GoetasWebservices\Client\AdyenPayment\Payment\FraudCheckResultType $fraudCheckResult
     */
    public function addToResults(\GoetasWebservices\Client\AdyenPayment\Payment\FraudCheckResultType $fraudCheckResult)
    {
        $this->results[] = $fraudCheckResult;
        return $this;
    }

    /**
     * isset results
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResults($index)
    {
        return isset($this->results[$index]);
    }

    /**
     * unset results
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResults($index)
    {
        unset($this->results[$index]);
    }

    /**
     * Gets as results
     *
     * @return \GoetasWebservices\Client\AdyenPayment\Payment\FraudCheckResultType[]
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * Sets a new results
     *
     * @param \GoetasWebservices\Client\AdyenPayment\Payment\FraudCheckResultType[] $results
     * @return self
     */
    public function setResults(array $results)
    {
        $this->results = $results;
        return $this;
    }


}

