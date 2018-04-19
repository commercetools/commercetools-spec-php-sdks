<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\DiscountCode;

use Commercetools\Types\DiscountCode\DiscountCodeUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class DiscountCodeSetDescriptionActionCollectionModel extends DiscountCodeUpdateActionCollectionModel implements DiscountCodeSetDescriptionActionCollection
{

    /**
     * @param DiscountCodeSetDescriptionAction $value
     * @return DiscountCodeSetDescriptionActionCollection
     */
    public function add($value) {
        if (!$value instanceof DiscountCodeSetDescriptionAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return DiscountCodeSetDescriptionAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof DiscountCodeSetDescriptionAction) {
            $data = $this->mapData(DiscountCodeSetDescriptionAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}