<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Base\JsonObjectModel;

class ProductVariantAvailabilityModel extends JsonObjectModel implements ProductVariantAvailability {
    /**
     * @var mixed
     */
    protected $isOnStock;
    /**
     * @var int
     */
    protected $restockableInDays;
    /**
     * @var int
     */
    protected $availableQuantity;
    /**
     * @var ProductVariantChannelAvailabilityMap
     */
    protected $channels;

    /**
     * @return mixed
     */
    public function getIsOnStock()
    {
        if (is_null($this->isOnStock)) {
            $value = $this->raw(ProductVariantAvailability::FIELD_IS_ON_STOCK);
            $this->isOnStock = $value;
        }
        return $this->isOnStock;
    }
    /**
     * @return int
     */
    public function getRestockableInDays()
    {
        if (is_null($this->restockableInDays)) {
            $value = $this->raw(ProductVariantAvailability::FIELD_RESTOCKABLE_IN_DAYS);
            $value = (int)$value;
            $this->restockableInDays = $value;
        }
        return $this->restockableInDays;
    }
    /**
     * @return int
     */
    public function getAvailableQuantity()
    {
        if (is_null($this->availableQuantity)) {
            $value = $this->raw(ProductVariantAvailability::FIELD_AVAILABLE_QUANTITY);
            $value = (int)$value;
            $this->availableQuantity = $value;
        }
        return $this->availableQuantity;
    }
    /**
     * @return ProductVariantChannelAvailabilityMap
     */
    public function getChannels()
    {
        if (is_null($this->channels)) {
            $value = $this->raw(ProductVariantAvailability::FIELD_CHANNELS);
            if (is_null($value)) {
                return $this->mapData(ProductVariantChannelAvailabilityMap::class, null);
            }
            $value = $this->mapData(ProductVariantChannelAvailabilityMap::class, $value);

            $this->channels = $value;
        }
        return $this->channels;
    }

    /**
     * @param $isOnStock
     * @return $this
     */
    public function setIsOnStock($isOnStock)
    {
        $this->isOnStock = $isOnStock;

        return $this;
    }
    /**
     * @param int $restockableInDays
     * @return $this
     */
    public function setRestockableInDays(int $restockableInDays)
    {
        $this->restockableInDays = (int)$restockableInDays;

        return $this;
    }
    /**
     * @param int $availableQuantity
     * @return $this
     */
    public function setAvailableQuantity(int $availableQuantity)
    {
        $this->availableQuantity = (int)$availableQuantity;

        return $this;
    }
    /**
     * @param ProductVariantChannelAvailabilityMap $channels
     * @return $this
     */
    public function setChannels(ProductVariantChannelAvailabilityMap $channels)
    {
        $this->channels = $channels;

        return $this;
    }

}