<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Type\FieldContainer;
use Commercetools\Api\Models\Type\TypeResourceIdentifier;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CartSetCustomTypeAction extends CartUpdateAction
{
    public const FIELD_TYPE = 'type';
    public const FIELD_FIELDS = 'fields';

    /**
     * @return null|TypeResourceIdentifier
     */
    public function getType();

    /**
     * @return null|FieldContainer
     */
    public function getFields();

    public function setType(?TypeResourceIdentifier $type): void;

    public function setFields(?FieldContainer $fields): void;
}
