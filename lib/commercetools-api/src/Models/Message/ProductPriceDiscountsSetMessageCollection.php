<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ProductPriceDiscountsSetMessage>
 *
 * @method ProductPriceDiscountsSetMessage current()
 * @method ProductPriceDiscountsSetMessage at($offset)
 */
class ProductPriceDiscountsSetMessageCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductPriceDiscountsSetMessage $value
     * @psalm-param ProductPriceDiscountsSetMessage|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return ProductPriceDiscountsSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductPriceDiscountsSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductPriceDiscountsSetMessage
     */
    protected function mapper()
    {
        return function (int $index): ?ProductPriceDiscountsSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductPriceDiscountsSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}