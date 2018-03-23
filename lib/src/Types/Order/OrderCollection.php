<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Base\Collection;

interface OrderCollection extends Collection {
    /**
     * @param $index
     * @return Order
     */
    public function at($index);

    /**
     * @return Order
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return Order
     */
    public function map($data, $index);

    /**
     * @param $id
     * @return string
     */
    public function byId($id);
}