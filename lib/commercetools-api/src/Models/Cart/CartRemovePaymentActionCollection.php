<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<CartRemovePaymentAction>
 *
 * @method CartRemovePaymentAction current()
 * @method CartRemovePaymentAction at($offset)
 */
class CartRemovePaymentActionCollection extends MapperSequence
{
    /**
     * @psalm-assert CartRemovePaymentAction $value
     * @psalm-param CartRemovePaymentAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return CartRemovePaymentActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartRemovePaymentAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartRemovePaymentAction
     */
    protected function mapper()
    {
        return function (int $index): ?CartRemovePaymentAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CartRemovePaymentActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}