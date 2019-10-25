<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Base\JsonObject;

interface ExternalOAuth extends JsonObject
{
    const FIELD_URL = 'url';
    const FIELD_AUTHORIZATION_HEADER = 'authorizationHeader';

    /**
     * @return null|string
     */
    public function getUrl();

    /**
     * @return null|string
     */
    public function getAuthorizationHeader();

    public function setUrl(?string $url): void;

    public function setAuthorizationHeader(?string $authorizationHeader): void;
}