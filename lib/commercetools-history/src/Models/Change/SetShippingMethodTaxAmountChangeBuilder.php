<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<SetShippingMethodTaxAmountChange>
 */
final class SetShippingMethodTaxAmountChangeBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $change;

    /**
     * @var ?string
     */
    private $taxMode;

    /**
     * @var ?JsonObject
     */
    private $nextValue;

    /**
     * @var ?JsonObject
     */
    private $previousValue;

    /**
     * <p>Update action for <code>setShippingMethodTaxAmount</code></p>
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
    public function getTaxMode()
    {
        return $this->taxMode;
    }

    /**
     * @return null|JsonObject
     */
    public function getNextValue()
    {
        return $this->nextValue;
    }

    /**
     * @return null|JsonObject
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
     * @param ?string $taxMode
     * @return $this
     */
    public function withTaxMode(?string $taxMode)
    {
        $this->taxMode = $taxMode;

        return $this;
    }

    /**
     * @param ?JsonObject $nextValue
     * @return $this
     */
    public function withNextValue(?JsonObject $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @param ?JsonObject $previousValue
     * @return $this
     */
    public function withPreviousValue(?JsonObject $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }


    public function build(): SetShippingMethodTaxAmountChange
    {
        return new SetShippingMethodTaxAmountChangeModel(
            $this->change,
            $this->taxMode,
            $this->nextValue,
            $this->previousValue
        );
    }

    public static function of(): SetShippingMethodTaxAmountChangeBuilder
    {
        return new self();
    }
}
