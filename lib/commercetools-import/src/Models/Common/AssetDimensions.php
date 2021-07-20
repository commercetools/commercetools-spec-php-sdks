<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Common;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface AssetDimensions extends JsonObject
{
    public const FIELD_W = 'w';
    public const FIELD_H = 'h';

    /**
     * <p>The width of the asset source.</p>
     *
     * @return null|int
     */
    public function getW();

    /**
     * <p>The height of the asset source.</p>
     *
     * @return null|int
     */
    public function getH();

    /**
     * @param ?int $w
     */
    public function setW(?int $w): void;

    /**
     * @param ?int $h
     */
    public function setH(?int $h): void;
}
