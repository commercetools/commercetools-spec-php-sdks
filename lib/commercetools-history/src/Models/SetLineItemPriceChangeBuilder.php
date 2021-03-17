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
 * @implements Builder<SetLineItemPriceChange>
 */
final class SetLineItemPriceChangeBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $change;

    /**
     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $lineItem;

    /**
     * @var null|Price|PriceBuilder
     */
    private $nextValue;

    /**
     * @var null|Price|PriceBuilder
     */
    private $previousValue;

    /**
     * <p>Update action for <code>setLineItemPrice</code></p>
     *
     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
    }

    /**
     * @return null|LocalizedString
     */
    public function getLineItem()
    {
        return $this->lineItem instanceof LocalizedStringBuilder ? $this->lineItem->build() : $this->lineItem;
    }

    /**
     * @return null|Price
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof PriceBuilder ? $this->nextValue->build() : $this->nextValue;
    }

    /**
     * @return null|Price
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof PriceBuilder ? $this->previousValue->build() : $this->previousValue;
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
     * @param ?LocalizedString $lineItem
     * @return $this
     */
    public function withLineItem(?LocalizedString $lineItem)
    {
        $this->lineItem = $lineItem;

        return $this;
    }

    /**
     * @param ?Price $nextValue
     * @return $this
     */
    public function withNextValue(?Price $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @param ?Price $previousValue
     * @return $this
     */
    public function withPreviousValue(?Price $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @return $this
     */
    public function withLineItemBuilder(?LocalizedStringBuilder $lineItem)
    {
        $this->lineItem = $lineItem;

        return $this;
    }

    /**
     * @return $this
     */
    public function withNextValueBuilder(?PriceBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @return $this
     */
    public function withPreviousValueBuilder(?PriceBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    public function build(): SetLineItemPriceChange
    {
        return new SetLineItemPriceChangeModel(
            $this->change,
            $this->lineItem instanceof LocalizedStringBuilder ? $this->lineItem->build() : $this->lineItem,
            $this->nextValue instanceof PriceBuilder ? $this->nextValue->build() : $this->nextValue,
            $this->previousValue instanceof PriceBuilder ? $this->previousValue->build() : $this->previousValue
        );
    }

    public static function of(): SetLineItemPriceChangeBuilder
    {
        return new self();
    }
}