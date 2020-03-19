<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\MissingData;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<MissingImagesProductLevel>
 * @method MissingImagesProductLevel current()
 * @method MissingImagesProductLevel at($offset)
 */
class MissingImagesProductLevelCollection extends MapperSequence
{
    /**
     * @psalm-assert MissingImagesProductLevel $value
     * @psalm-param MissingImagesProductLevel|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MissingImagesProductLevelCollection
     */
    public function add($value)
    {
        if (!$value instanceof MissingImagesProductLevel) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MissingImagesProductLevel
     */
    protected function mapper()
    {
        return function (int $index): ?MissingImagesProductLevel {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = MissingImagesProductLevelModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
