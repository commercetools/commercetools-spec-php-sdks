<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

interface CartSetLineItemTotalPriceAction extends CartUpdateAction
{
    const FIELD_LINE_ITEM_ID = 'lineItemId';
    const FIELD_EXTERNAL_TOTAL_PRICE = 'externalTotalPrice';

    /**
     * @return null|string
     */
    public function getLineItemId();

    /**
     * @return null|ExternalLineItemTotalPrice
     */
    public function getExternalTotalPrice();

    public function setLineItemId(?string $lineItemId): void;

    public function setExternalTotalPrice(?ExternalLineItemTotalPrice $externalTotalPrice): void;
}