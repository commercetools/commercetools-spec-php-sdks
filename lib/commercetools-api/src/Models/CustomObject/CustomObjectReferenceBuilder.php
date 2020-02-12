<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CustomObject;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\Common\ReferenceBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CustomObjectReference>
 */
final class CustomObjectReferenceBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $id;

    /**
     * @var null|CustomObject|CustomObjectBuilder
     */
    private $obj;

    /**
     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return null|CustomObject
     */
    public function getObj()
    {
        return $this->obj instanceof CustomObjectBuilder ? $this->obj->build() : $this->obj;
    }

    /**
     * @return $this
     */
    public function withId(?string $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return $this
     */
    public function withObj(?CustomObject $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    /**
     * @return $this
     */
    public function withObjBuilder(?CustomObjectBuilder $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    public function build(): CustomObjectReference
    {
        return new CustomObjectReferenceModel(
            $this->id,
            $this->obj instanceof CustomObjectBuilder ? $this->obj->build() : $this->obj
        );
    }

    public static function of(): CustomObjectReferenceBuilder
    {
        return new self();
    }
}
