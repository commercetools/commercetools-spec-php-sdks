<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\CartUpdateActionCollection;


interface CartSetCustomLineItemTaxAmountActionCollection extends CartUpdateActionCollection
{
    /**
     * @param $index
     * @return CartSetCustomLineItemTaxAmountAction
     */
    public function at($index);

    /**
     * @return CartSetCustomLineItemTaxAmountAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CartSetCustomLineItemTaxAmountAction
     */
    public function map($data, $index);
}