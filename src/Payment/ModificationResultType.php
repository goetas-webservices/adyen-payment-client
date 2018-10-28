<?php

namespace GoetasWebservices\Client\AdyenPayment\Payment;

/**
 * Class representing ModificationResultType
 *
 *
 * XSD Type: ModificationResult
 */
class ModificationResultType
{

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\Payment\AnyType2anyTypeMapType\EntryAType[] $additionalData
     */
    private $additionalData = null;

    /**
     * @property string $pspReference
     */
    private $pspReference = null;

    /**
     * @property string $response
     */
    private $response = null;

    /**
     * Adds as entry
     *
     * @return self
     * @param \GoetasWebservices\Client\AdyenPayment\Payment\AnyType2anyTypeMapType\EntryAType $entry
     */
    public function addToAdditionalData(\GoetasWebservices\Client\AdyenPayment\Payment\AnyType2anyTypeMapType\EntryAType $entry)
    {
        $this->additionalData[] = $entry;
        return $this;
    }

    /**
     * isset additionalData
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalData($index)
    {
        return isset($this->additionalData[$index]);
    }

    /**
     * unset additionalData
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalData($index)
    {
        unset($this->additionalData[$index]);
    }

    /**
     * Gets as additionalData
     *
     * @return \GoetasWebservices\Client\AdyenPayment\Payment\AnyType2anyTypeMapType\EntryAType[]
     */
    public function getAdditionalData()
    {
        return $this->additionalData;
    }

    /**
     * Sets a new additionalData
     *
     * @param \GoetasWebservices\Client\AdyenPayment\Payment\AnyType2anyTypeMapType\EntryAType[] $additionalData
     * @return self
     */
    public function setAdditionalData(array $additionalData)
    {
        $this->additionalData = $additionalData;
        return $this;
    }

    /**
     * Gets as pspReference
     *
     * @return string
     */
    public function getPspReference()
    {
        return $this->pspReference;
    }

    /**
     * Sets a new pspReference
     *
     * @param string $pspReference
     * @return self
     */
    public function setPspReference($pspReference)
    {
        $this->pspReference = $pspReference;
        return $this;
    }

    /**
     * Gets as response
     *
     * @return string
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Sets a new response
     *
     * @param string $response
     * @return self
     */
    public function setResponse($response)
    {
        $this->response = $response;
        return $this;
    }


}

