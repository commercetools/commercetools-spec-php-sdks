<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\CartUpdateActionCollection;


interface CartSetShippingMethodTaxRateActionCollection extends CartUpdateActionCollection
{
    /**
     * @param $index
     * @return CartSetShippingMethodTaxRateAction
     */
    public function at($index);

    /**
     * @return CartSetShippingMethodTaxRateAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CartSetShippingMethodTaxRateAction
     */
    public function map($data, $index);
}