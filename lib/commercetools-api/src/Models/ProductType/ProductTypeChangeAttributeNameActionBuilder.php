<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductTypeChangeAttributeNameAction>
 */
final class ProductTypeChangeAttributeNameActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $attributeName;

    /**
     * @var ?string
     */
    private $newAttributeName;

    /**
     * @return null|string
     */
    public function getAttributeName()
    {
        return $this->attributeName;
    }

    /**
     * @return null|string
     */
    public function getNewAttributeName()
    {
        return $this->newAttributeName;
    }

    /**
     * @param ?string $attributeName
     * @return $this
     */
    public function withAttributeName(?string $attributeName)
    {
        $this->attributeName = $attributeName;

        return $this;
    }

    /**
     * @param ?string $newAttributeName
     * @return $this
     */
    public function withNewAttributeName(?string $newAttributeName)
    {
        $this->newAttributeName = $newAttributeName;

        return $this;
    }


    public function build(): ProductTypeChangeAttributeNameAction
    {
        return new ProductTypeChangeAttributeNameActionModel(
            $this->attributeName,
            $this->newAttributeName
        );
    }

    public static function of(): ProductTypeChangeAttributeNameActionBuilder
    {
        return new self();
    }
}
