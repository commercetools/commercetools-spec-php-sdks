<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\Builder;

/**
 * @implements Builder<SearchKeywords>
 */
final class SearchKeywordsBuilder implements Builder
{
    public function __construct()
    {
    }

    public function build(): SearchKeywords
    {
        return new SearchKeywordsModel(
        );
    }

    public static function of(): SearchKeywordsBuilder
    {
        return new self();
    }
}