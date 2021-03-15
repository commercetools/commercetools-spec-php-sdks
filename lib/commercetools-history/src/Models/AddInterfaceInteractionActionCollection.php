<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<AddInterfaceInteractionAction>
 * @method AddInterfaceInteractionAction current()
 * @method AddInterfaceInteractionAction at($offset)
 */
class AddInterfaceInteractionActionCollection extends MapperSequence
{
    /**
     * @psalm-assert AddInterfaceInteractionAction $value
     * @psalm-param AddInterfaceInteractionAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AddInterfaceInteractionActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof AddInterfaceInteractionAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AddInterfaceInteractionAction
     */
    protected function mapper()
    {
        return function (int $index): ?AddInterfaceInteractionAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = AddInterfaceInteractionActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}