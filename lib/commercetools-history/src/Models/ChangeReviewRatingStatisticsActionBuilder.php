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
 * @implements Builder<ChangeReviewRatingStatisticsAction>
 */
final class ChangeReviewRatingStatisticsActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $change;

    /**
     * @var null|ReviewRatingStatistics|ReviewRatingStatisticsBuilder
     */
    private $nextValue;

    /**
     * @var null|ReviewRatingStatistics|ReviewRatingStatisticsBuilder
     */
    private $previousValue;

    /**
     * <p>Update action for <code>changeReviewRatingStatistics</code></p>
     *
     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
    }

    /**
     * @return null|ReviewRatingStatistics
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof ReviewRatingStatisticsBuilder ? $this->nextValue->build() : $this->nextValue;
    }

    /**
     * @return null|ReviewRatingStatistics
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof ReviewRatingStatisticsBuilder ? $this->previousValue->build() : $this->previousValue;
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
     * @param ?ReviewRatingStatistics $nextValue
     * @return $this
     */
    public function withNextValue(?ReviewRatingStatistics $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @param ?ReviewRatingStatistics $previousValue
     * @return $this
     */
    public function withPreviousValue(?ReviewRatingStatistics $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @return $this
     */
    public function withNextValueBuilder(?ReviewRatingStatisticsBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @return $this
     */
    public function withPreviousValueBuilder(?ReviewRatingStatisticsBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    public function build(): ChangeReviewRatingStatisticsAction
    {
        return new ChangeReviewRatingStatisticsActionModel(
            $this->change,
            $this->nextValue instanceof ReviewRatingStatisticsBuilder ? $this->nextValue->build() : $this->nextValue,
            $this->previousValue instanceof ReviewRatingStatisticsBuilder ? $this->previousValue->build() : $this->previousValue
        );
    }

    public static function of(): ChangeReviewRatingStatisticsActionBuilder
    {
        return new self();
    }
}
