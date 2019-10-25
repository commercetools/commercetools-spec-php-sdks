<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CustomObject;

use Commercetools\Base\JsonObject;

interface CustomObjectDraft extends JsonObject
{
    const FIELD_CONTAINER = 'container';
    const FIELD_KEY = 'key';
    const FIELD_VALUE = 'value';
    const FIELD_VERSION = 'version';

    /**
     * @return null|string
     */
    public function getContainer();

    /**
     * @return null|string
     */
    public function getKey();

    /**
     * @return null|JsonObject
     */
    public function getValue();

    /**
     * @return null|int
     */
    public function getVersion();

    public function setContainer(?string $container): void;

    public function setKey(?string $key): void;

    public function setValue(?JsonObject $value): void;

    public function setVersion(?int $version): void;
}