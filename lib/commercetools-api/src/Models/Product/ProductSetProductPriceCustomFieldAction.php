<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductSetProductPriceCustomFieldAction extends ProductUpdateAction
{
    public const FIELD_PRICE_ID = 'priceId';
    public const FIELD_STAGED = 'staged';
    public const FIELD_NAME = 'name';
    public const FIELD_VALUE = 'value';

    /**
     * @return null|string
     */
    public function getPriceId();

    /**
     * @return null|bool
     */
    public function getStaged();

    /**
     * @return null|string
     */
    public function getName();

    /**
     * @return null|mixed
     */
    public function getValue();

    /**
     * @param ?string $priceId
     */
    public function setPriceId(?string $priceId): void;

    /**
     * @param ?bool $staged
     */
    public function setStaged(?bool $staged): void;

    /**
     * @param ?string $name
     */
    public function setName(?string $name): void;

    /**
     * @param mixed $value
     */
    public function setValue($value): void;
}
