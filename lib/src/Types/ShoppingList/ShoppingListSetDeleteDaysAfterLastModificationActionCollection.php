<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

use Commercetools\Types\ShoppingList\ShoppingListUpdateActionCollection;


interface ShoppingListSetDeleteDaysAfterLastModificationActionCollection extends ShoppingListUpdateActionCollection
{
    /**
     * @param $index
     * @return ShoppingListSetDeleteDaysAfterLastModificationAction
     */
    public function at($index);

    /**
     * @return ShoppingListSetDeleteDaysAfterLastModificationAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ShoppingListSetDeleteDaysAfterLastModificationAction
     */
    public function map($data, $index);
}