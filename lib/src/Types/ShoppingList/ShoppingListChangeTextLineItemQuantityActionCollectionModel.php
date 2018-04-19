<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

use Commercetools\Types\ShoppingList\ShoppingListUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ShoppingListChangeTextLineItemQuantityActionCollectionModel extends ShoppingListUpdateActionCollectionModel implements ShoppingListChangeTextLineItemQuantityActionCollection
{

    /**
     * @param ShoppingListChangeTextLineItemQuantityAction $value
     * @return ShoppingListChangeTextLineItemQuantityActionCollection
     */
    public function add($value) {
        if (!$value instanceof ShoppingListChangeTextLineItemQuantityAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ShoppingListChangeTextLineItemQuantityAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ShoppingListChangeTextLineItemQuantityAction) {
            $data = $this->mapData(ShoppingListChangeTextLineItemQuantityAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}