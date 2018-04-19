<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\Order\OrderUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class OrderSetCustomerEmailActionCollectionModel extends OrderUpdateActionCollectionModel implements OrderSetCustomerEmailActionCollection
{

    /**
     * @param OrderSetCustomerEmailAction $value
     * @return OrderSetCustomerEmailActionCollection
     */
    public function add($value) {
        if (!$value instanceof OrderSetCustomerEmailAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return OrderSetCustomerEmailAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof OrderSetCustomerEmailAction) {
            $data = $this->mapData(OrderSetCustomerEmailAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}