<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollection;


interface DeliveryAddedMessageCollection extends MessageCollection
{
    /**
     * @param $index
     * @return DeliveryAddedMessage
     */
    public function at($index);

    /**
     * @return DeliveryAddedMessage
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return DeliveryAddedMessage
     */
    public function map($data, $index);
}