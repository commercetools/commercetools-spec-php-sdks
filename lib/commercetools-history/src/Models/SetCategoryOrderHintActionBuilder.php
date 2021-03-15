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
 * @implements Builder<SetCategoryOrderHintAction>
 */
final class SetCategoryOrderHintActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $change;

    /**
     * @var ?string
     */
    private $catalogData;

    /**
     * @var ?string
     */
    private $categoryId;

    /**
     * @var null|CategoryOrderHints|CategoryOrderHintsBuilder
     */
    private $previousValue;

    /**
     * @var null|CategoryOrderHints|CategoryOrderHintsBuilder
     */
    private $nextValue;

    /**
     * <p>Update action for <code>setCategoryOrderHint</code></p>
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
    public function getCatalogData()
    {
        return $this->catalogData;
    }

    /**
     * @return null|string
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * @return null|CategoryOrderHints
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof CategoryOrderHintsBuilder ? $this->previousValue->build() : $this->previousValue;
    }

    /**
     * @return null|CategoryOrderHints
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof CategoryOrderHintsBuilder ? $this->nextValue->build() : $this->nextValue;
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
     * @param ?string $catalogData
     * @return $this
     */
    public function withCatalogData(?string $catalogData)
    {
        $this->catalogData = $catalogData;

        return $this;
    }

    /**
     * @param ?string $categoryId
     * @return $this
     */
    public function withCategoryId(?string $categoryId)
    {
        $this->categoryId = $categoryId;

        return $this;
    }

    /**
     * @param ?CategoryOrderHints $previousValue
     * @return $this
     */
    public function withPreviousValue(?CategoryOrderHints $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @param ?CategoryOrderHints $nextValue
     * @return $this
     */
    public function withNextValue(?CategoryOrderHints $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @return $this
     */
    public function withPreviousValueBuilder(?CategoryOrderHintsBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @return $this
     */
    public function withNextValueBuilder(?CategoryOrderHintsBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    public function build(): SetCategoryOrderHintAction
    {
        return new SetCategoryOrderHintActionModel(
            $this->change,
            $this->catalogData,
            $this->categoryId,
            $this->previousValue instanceof CategoryOrderHintsBuilder ? $this->previousValue->build() : $this->previousValue,
            $this->nextValue instanceof CategoryOrderHintsBuilder ? $this->nextValue->build() : $this->nextValue
        );
    }

    public static function of(): SetCategoryOrderHintActionBuilder
    {
        return new self();
    }
}