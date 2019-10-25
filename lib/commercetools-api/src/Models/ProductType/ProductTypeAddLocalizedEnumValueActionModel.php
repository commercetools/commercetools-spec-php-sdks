<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\JsonObjectModel;
use stdClass;

final class ProductTypeAddLocalizedEnumValueActionModel extends JsonObjectModel implements ProductTypeAddLocalizedEnumValueAction
{
    const DISCRIMINATOR_VALUE = 'addLocalizedEnumValue';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?string
     */
    protected $attributeName;

    /**
     * @var ?AttributeLocalizedEnumValue
     */
    protected $value;

    public function __construct(
        string $action = null,
        string $attributeName = null,
        AttributeLocalizedEnumValue $value = null
    ) {
        $this->action = $action;
        $this->attributeName = $attributeName;
        $this->value = $value;
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
     * @return null|string
     */
    public function getAttributeName()
    {
        if (is_null($this->attributeName)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ProductTypeAddLocalizedEnumValueAction::FIELD_ATTRIBUTE_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->attributeName = (string) $data;
        }

        return $this->attributeName;
    }

    /**
     * @return null|AttributeLocalizedEnumValue
     */
    public function getValue()
    {
        if (is_null($this->value)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ProductTypeAddLocalizedEnumValueAction::FIELD_VALUE);
            if (is_null($data)) {
                return null;
            }

            $this->value = AttributeLocalizedEnumValueModel::of($data);
        }

        return $this->value;
    }

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    public function setAttributeName(?string $attributeName): void
    {
        $this->attributeName = $attributeName;
    }

    public function setValue(?AttributeLocalizedEnumValue $value): void
    {
        $this->value = $value;
    }
}