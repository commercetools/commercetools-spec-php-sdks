<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\JsonObjectModel;

final class ProductTypeChangeAttributeOrderByNameActionModel extends JsonObjectModel implements ProductTypeChangeAttributeOrderByNameAction
{
    const DISCRIMINATOR_VALUE = 'changeAttributeOrderByName';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?array
     */
    protected $attributeNames;

    public function __construct(
        string $action = null,
        array $attributeNames = null
    ) {
        $this->action = $action;
        $this->attributeNames = $attributeNames;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ProductTypeUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|array
     */
    public function getAttributeNames()
    {
        if (is_null($this->attributeNames)) {
            /** @psalm-var ?array<int, mixed> $data */
            $data = $this->raw(ProductTypeChangeAttributeOrderByNameAction::FIELD_ATTRIBUTE_NAMES);
            if (is_null($data)) {
                return null;
            }
            $this->attributeNames = $data;
        }

        return $this->attributeNames;
    }

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    public function setAttributeNames(?array $attributeNames): void
    {
        $this->attributeNames = $attributeNames;
    }
}