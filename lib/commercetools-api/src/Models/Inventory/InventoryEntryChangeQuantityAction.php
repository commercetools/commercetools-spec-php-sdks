<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Inventory;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface InventoryEntryChangeQuantityAction extends InventoryEntryUpdateAction
{
    public const FIELD_QUANTITY = 'quantity';

    /**
     * @return null|int
     */
    public function getQuantity();

    public function setQuantity(?int $quantity): void;
}
