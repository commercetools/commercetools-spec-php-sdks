<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Producttypes;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<AttributeMoneyType>
 */
final class AttributeMoneyTypeBuilder implements Builder
{
    public function build(): AttributeMoneyType
    {
        return new AttributeMoneyTypeModel(
        );
    }

    public static function of(): AttributeMoneyTypeBuilder
    {
        return new self();
    }
}
