<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CartDiscount;

use Commercetools\Types\CartDiscount\CartDiscountUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CartDiscountSetValidFromActionCollectionModel extends CartDiscountUpdateActionCollectionModel implements CartDiscountSetValidFromActionCollection
{

    /**
     * @param CartDiscountSetValidFromAction $value
     * @return CartDiscountSetValidFromActionCollection
     */
    public function add($value) {
        if (!$value instanceof CartDiscountSetValidFromAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CartDiscountSetValidFromAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CartDiscountSetValidFromAction) {
            $data = $this->mapData(CartDiscountSetValidFromAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}