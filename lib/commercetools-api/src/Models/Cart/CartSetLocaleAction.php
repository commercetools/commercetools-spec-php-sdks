<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CartSetLocaleAction extends CartUpdateAction
{
    public const FIELD_LOCALE = 'locale';

    /**
     * @return null|string
     */
    public function getLocale();

    /**
     * @param ?string $locale
     */
    public function setLocale(?string $locale): void;
}
