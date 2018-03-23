<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CartDiscount;

use Commercetools\Base\JsonObject;

use Commercetools\Types;

interface CartDiscountTarget extends JsonObject {
    const DISCRIMINATOR = 'type';
    const SUB_TYPES = [
        'multiBuyCustomLineItems' => Types\CartDiscount\MultiBuyCustomLineItemsTarget::class,
        'multiBuyLineItems' => Types\CartDiscount\MultiBuyLineItemsTarget::class,
        'customLineItems' => Types\CartDiscount\CartDiscountCustomLineItemsTarget::class,
        'shipping' => Types\CartDiscount\CartDiscountShippingCostTarget::class,
        'lineItems' => Types\CartDiscount\CartDiscountLineItemsTarget::class,

    ];

    const FIELD_TYPE = 'type';

    /**
     * @return string
     */
    public function getType();

    /**
     * @param string $type
     * @return $this
     */
    public function setType(string $type);

}