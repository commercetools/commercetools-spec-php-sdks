<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Types\Type\TypeUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class TypeChangeNameActionCollectionModel extends TypeUpdateActionCollectionModel implements TypeChangeNameActionCollection
{

    /**
     * @param TypeChangeNameAction $value
     * @return TypeChangeNameActionCollection
     */
    public function add($value) {
        if (!$value instanceof TypeChangeNameAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return TypeChangeNameAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof TypeChangeNameAction) {
            $data = $this->mapData(TypeChangeNameAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}