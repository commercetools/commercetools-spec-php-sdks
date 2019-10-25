<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\JsonObjectModel;
use stdClass;

final class ProductVariantChannelAvailabilityMapModel extends JsonObjectModel implements ProductVariantChannelAvailabilityMap
{
    public function __construct(
    ) {
    }

    /**
     * @return mixed
     */
    public function by(string $key)
    {
        $data = $this->raw($key);
        if (is_null($data)) {
            return null;
        }
        if (1 === preg_match(ProductVariantChannelAvailabilityMap::FIELD_PATTERN0, $key)) {
            // @psalm-var stdClass|array<string, mixed> $data

            return ProductVariantChannelAvailabilityModel::of($data);
        }

        return $data;
    }
}