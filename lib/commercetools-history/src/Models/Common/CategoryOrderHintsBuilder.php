<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Common;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CategoryOrderHints>
 */
final class CategoryOrderHintsBuilder implements Builder
{




    public function build(): CategoryOrderHints
    {
        return new CategoryOrderHintsModel(
        );
    }

    public static function of(): CategoryOrderHintsBuilder
    {
        return new self();
    }
}
