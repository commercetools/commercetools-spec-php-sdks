<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface SetAssetTagsAction extends Action
{

    public const FIELD_ASSET = 'asset';
    public const FIELD_NEXT_VALUE = 'nextValue';
    public const FIELD_PREVIOUS_VALUE = 'previousValue';

    /**
     * <p>Update action for <code>setAssetTags</code></p>
     *
     * @return null|string
     */
    public function getChange();

    /**
     * @return null|string
     */
    public function getType();

    /**
     * @return null|AssetActionValue
     */
    public function getAsset();

    /**
     * @return null|array
     */
    public function getNextValue();

    /**
     * @return null|array
     */
    public function getPreviousValue();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?AssetActionValue $asset
     */
    public function setAsset(?AssetActionValue $asset): void;

    /**
     * @param ?array $nextValue
     */
    public function setNextValue(?array $nextValue): void;

    /**
     * @param ?array $previousValue
     */
    public function setPreviousValue(?array $previousValue): void;
}