<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\Order\OrderUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class OrderSetParcelMeasurementsActionCollectionModel extends OrderUpdateActionCollectionModel implements OrderSetParcelMeasurementsActionCollection
{

    /**
     * @param OrderSetParcelMeasurementsAction $value
     * @return OrderSetParcelMeasurementsActionCollection
     */
    public function add($value) {
        if (!$value instanceof OrderSetParcelMeasurementsAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return OrderSetParcelMeasurementsAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof OrderSetParcelMeasurementsAction) {
            $data = $this->mapData(OrderSetParcelMeasurementsAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}