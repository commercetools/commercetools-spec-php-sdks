<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<SetShoppingListLineItemCustomTypeAction>
 */
final class SetShoppingListLineItemCustomTypeActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $change;

    /**
     * @var null|ShoppingListLineItemValue|ShoppingListLineItemValueBuilder
     */
    private $lineItem;

    /**
     * @var null|CustomFields|CustomFieldsBuilder
     */
    private $nextValue;

    /**
     * @var null|CustomFields|CustomFieldsBuilder
     */
    private $previousValue;

    /**
     * <p>Update action for <code>setLineItemCustomType</code></p>
     *
     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
    }

    /**
     * @return null|ShoppingListLineItemValue
     */
    public function getLineItem()
    {
        return $this->lineItem instanceof ShoppingListLineItemValueBuilder ? $this->lineItem->build() : $this->lineItem;
    }

    /**
     * @return null|CustomFields
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof CustomFieldsBuilder ? $this->nextValue->build() : $this->nextValue;
    }

    /**
     * @return null|CustomFields
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof CustomFieldsBuilder ? $this->previousValue->build() : $this->previousValue;
    }

    /**
     * @param ?string $change
     * @return $this
     */
    public function withChange(?string $change)
    {
        $this->change = $change;

        return $this;
    }

    /**
     * @param ?ShoppingListLineItemValue $lineItem
     * @return $this
     */
    public function withLineItem(?ShoppingListLineItemValue $lineItem)
    {
        $this->lineItem = $lineItem;

        return $this;
    }

    /**
     * @param ?CustomFields $nextValue
     * @return $this
     */
    public function withNextValue(?CustomFields $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @param ?CustomFields $previousValue
     * @return $this
     */
    public function withPreviousValue(?CustomFields $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @return $this
     */
    public function withLineItemBuilder(?ShoppingListLineItemValueBuilder $lineItem)
    {
        $this->lineItem = $lineItem;

        return $this;
    }

    /**
     * @return $this
     */
    public function withNextValueBuilder(?CustomFieldsBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @return $this
     */
    public function withPreviousValueBuilder(?CustomFieldsBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    public function build(): SetShoppingListLineItemCustomTypeAction
    {
        return new SetShoppingListLineItemCustomTypeActionModel(
            $this->change,
            $this->lineItem instanceof ShoppingListLineItemValueBuilder ? $this->lineItem->build() : $this->lineItem,
            $this->nextValue instanceof CustomFieldsBuilder ? $this->nextValue->build() : $this->nextValue,
            $this->previousValue instanceof CustomFieldsBuilder ? $this->previousValue->build() : $this->previousValue
        );
    }

    public static function of(): SetShoppingListLineItemCustomTypeActionBuilder
    {
        return new self();
    }
}
