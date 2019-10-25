<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

interface OrderAddParcelToDeliveryAction extends OrderUpdateAction
{
    const FIELD_DELIVERY_ID = 'deliveryId';
    const FIELD_MEASUREMENTS = 'measurements';
    const FIELD_TRACKING_DATA = 'trackingData';
    const FIELD_ITEMS = 'items';

    /**
     * @return null|string
     */
    public function getDeliveryId();

    /**
     * @return null|ParcelMeasurements
     */
    public function getMeasurements();

    /**
     * @return null|TrackingData
     */
    public function getTrackingData();

    /**
     * @return null|DeliveryItemCollection
     */
    public function getItems();

    public function setDeliveryId(?string $deliveryId): void;

    public function setMeasurements(?ParcelMeasurements $measurements): void;

    public function setTrackingData(?TrackingData $trackingData): void;

    public function setItems(?DeliveryItemCollection $items): void;
}