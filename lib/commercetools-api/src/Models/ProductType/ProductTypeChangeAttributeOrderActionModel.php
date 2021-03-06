<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ProductTypeChangeAttributeOrderActionModel extends JsonObjectModel implements ProductTypeChangeAttributeOrderAction
{
    public const DISCRIMINATOR_VALUE = 'changeAttributeOrder';
    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?AttributeDefinitionCollection
     */
    protected $attributes;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?AttributeDefinitionCollection $attributes = null
    ) {
        $this->attributes = $attributes;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|AttributeDefinitionCollection
     */
    public function getAttributes()
    {
        if (is_null($this->attributes)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_ATTRIBUTES);
            if (is_null($data)) {
                return null;
            }
            $this->attributes = AttributeDefinitionCollection::fromArray($data);
        }

        return $this->attributes;
    }


    /**
     * @param ?AttributeDefinitionCollection $attributes
     */
    public function setAttributes(?AttributeDefinitionCollection $attributes): void
    {
        $this->attributes = $attributes;
    }
}
