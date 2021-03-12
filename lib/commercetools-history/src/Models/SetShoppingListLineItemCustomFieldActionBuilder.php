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
 * @implements Builder<SetShoppingListLineItemCustomFieldAction>
 */
final class SetShoppingListLineItemCustomFieldActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $change;

    /**
     * @var ?string
     */
    private $name;

    /**
     * @var ?string
     */
    private $customTypeId;

    /**
     * @var null|ShoppingListLineItemValue|ShoppingListLineItemValueBuilder
     */
    private $lineItem;

    /**
     * @var null|mixed|mixed
     */
    private $nextValue;

    /**
     * @var null|mixed|mixed
     */
    private $previousValue;

    /**
     * <p>Update action for <code>setLineItemCustomField</code></p>
     *
     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
    }

    /**
     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return null|string
     */
    public function getCustomTypeId()
    {
        return $this->customTypeId;
    }

    /**
     * @return null|ShoppingListLineItemValue
     */
    public function getLineItem()
    {
        return $this->lineItem instanceof ShoppingListLineItemValueBuilder ? $this->lineItem->build() : $this->lineItem;
    }

    /**
     * @return null|mixed
     */
    public function getNextValue()
    {
        return $this->nextValue;
    }

    /**
     * @return null|mixed
     */
    public function getPreviousValue()
    {
        return $this->previousValue;
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
     * @param ?string $name
     * @return $this
     */
    public function withName(?string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param ?string $customTypeId
     * @return $this
     */
    public function withCustomTypeId(?string $customTypeId)
    {
        $this->customTypeId = $customTypeId;

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
     * @param mixed $nextValue
     * @return $this
     */
    public function withNextValue( $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @param mixed $previousValue
     * @return $this
     */
    public function withPreviousValue( $previousValue)
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

    public function build(): SetShoppingListLineItemCustomFieldAction
    {
        return new SetShoppingListLineItemCustomFieldActionModel(
            $this->change,
            $this->name,
            $this->customTypeId,
            $this->lineItem instanceof ShoppingListLineItemValueBuilder ? $this->lineItem->build() : $this->lineItem,
            $this->nextValue,
            $this->previousValue
        );
    }

    public static function of(): SetShoppingListLineItemCustomFieldActionBuilder
    {
        return new self();
    }
}
