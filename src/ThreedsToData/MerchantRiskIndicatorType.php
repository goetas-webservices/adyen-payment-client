<?php

namespace GoetasWebservices\Client\AdyenPayment\ThreedsToData;

/**
 * Class representing MerchantRiskIndicatorType
 *
 *
 * XSD Type: MerchantRiskIndicator
 */
class MerchantRiskIndicatorType
{

    /**
     * @property bool $addressMatch
     */
    private $addressMatch = null;

    /**
     * @property string $deliveryAddressIndicator
     */
    private $deliveryAddressIndicator = null;

    /**
     * @property string $deliveryEmail
     */
    private $deliveryEmail = null;

    /**
     * @property string $deliveryTimeframe
     */
    private $deliveryTimeframe = null;

    /**
     * @property \GoetasWebservices\Client\AdyenPayment\Common\AmountType $giftCardAmount
     */
    private $giftCardAmount = null;

    /**
     * @property int $giftCardCount
     */
    private $giftCardCount = null;

    /**
     * @property \DateTime $preOrderDate
     */
    private $preOrderDate = null;

    /**
     * @property bool $preOrderPurchase
     */
    private $preOrderPurchase = null;

    /**
     * @property bool $reorderItems
     */
    private $reorderItems = null;

    /**
     * Gets as addressMatch
     *
     * @return bool
     */
    public function getAddressMatch()
    {
        return $this->addressMatch;
    }

    /**
     * Sets a new addressMatch
     *
     * @param bool $addressMatch
     * @return self
     */
    public function setAddressMatch($addressMatch)
    {
        $this->addressMatch = $addressMatch;
        return $this;
    }

    /**
     * Gets as deliveryAddressIndicator
     *
     * @return string
     */
    public function getDeliveryAddressIndicator()
    {
        return $this->deliveryAddressIndicator;
    }

    /**
     * Sets a new deliveryAddressIndicator
     *
     * @param string $deliveryAddressIndicator
     * @return self
     */
    public function setDeliveryAddressIndicator($deliveryAddressIndicator)
    {
        $this->deliveryAddressIndicator = $deliveryAddressIndicator;
        return $this;
    }

    /**
     * Gets as deliveryEmail
     *
     * @return string
     */
    public function getDeliveryEmail()
    {
        return $this->deliveryEmail;
    }

    /**
     * Sets a new deliveryEmail
     *
     * @param string $deliveryEmail
     * @return self
     */
    public function setDeliveryEmail($deliveryEmail)
    {
        $this->deliveryEmail = $deliveryEmail;
        return $this;
    }

    /**
     * Gets as deliveryTimeframe
     *
     * @return string
     */
    public function getDeliveryTimeframe()
    {
        return $this->deliveryTimeframe;
    }

    /**
     * Sets a new deliveryTimeframe
     *
     * @param string $deliveryTimeframe
     * @return self
     */
    public function setDeliveryTimeframe($deliveryTimeframe)
    {
        $this->deliveryTimeframe = $deliveryTimeframe;
        return $this;
    }

    /**
     * Gets as giftCardAmount
     *
     * @return \GoetasWebservices\Client\AdyenPayment\Common\AmountType
     */
    public function getGiftCardAmount()
    {
        return $this->giftCardAmount;
    }

    /**
     * Sets a new giftCardAmount
     *
     * @param \GoetasWebservices\Client\AdyenPayment\Common\AmountType $giftCardAmount
     * @return self
     */
    public function setGiftCardAmount(\GoetasWebservices\Client\AdyenPayment\Common\AmountType $giftCardAmount)
    {
        $this->giftCardAmount = $giftCardAmount;
        return $this;
    }

    /**
     * Gets as giftCardCount
     *
     * @return int
     */
    public function getGiftCardCount()
    {
        return $this->giftCardCount;
    }

    /**
     * Sets a new giftCardCount
     *
     * @param int $giftCardCount
     * @return self
     */
    public function setGiftCardCount($giftCardCount)
    {
        $this->giftCardCount = $giftCardCount;
        return $this;
    }

    /**
     * Gets as preOrderDate
     *
     * @return \DateTime
     */
    public function getPreOrderDate()
    {
        return $this->preOrderDate;
    }

    /**
     * Sets a new preOrderDate
     *
     * @param \DateTime $preOrderDate
     * @return self
     */
    public function setPreOrderDate(\DateTime $preOrderDate)
    {
        $this->preOrderDate = $preOrderDate;
        return $this;
    }

    /**
     * Gets as preOrderPurchase
     *
     * @return bool
     */
    public function getPreOrderPurchase()
    {
        return $this->preOrderPurchase;
    }

    /**
     * Sets a new preOrderPurchase
     *
     * @param bool $preOrderPurchase
     * @return self
     */
    public function setPreOrderPurchase($preOrderPurchase)
    {
        $this->preOrderPurchase = $preOrderPurchase;
        return $this;
    }

    /**
     * Gets as reorderItems
     *
     * @return bool
     */
    public function getReorderItems()
    {
        return $this->reorderItems;
    }

    /**
     * Sets a new reorderItems
     *
     * @param bool $reorderItems
     * @return self
     */
    public function setReorderItems($reorderItems)
    {
        $this->reorderItems = $reorderItems;
        return $this;
    }


}

