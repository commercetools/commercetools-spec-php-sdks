<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\ShippingMethod\ShippingMethodUpdate;
use Commercetools\Client\ApiResource;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 * @psalm-immutable
 */
class ResourceByProjectKeyShippingMethodsKeyByKey extends ApiResource
{
    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyShippingMethodsKeyByKeyGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyShippingMethodsKeyByKeyGet((string) $args['projectKey'], (string) $args['key'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?ShippingMethodUpdate $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?ShippingMethodUpdate $body = null, array $headers = []): ByProjectKeyShippingMethodsKeyByKeyPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyShippingMethodsKeyByKeyPost((string) $args['projectKey'], (string) $args['key'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function delete($body = null, array $headers = []): ByProjectKeyShippingMethodsKeyByKeyDelete
    {
        $args = $this->getArgs();

        return new ByProjectKeyShippingMethodsKeyByKeyDelete((string) $args['projectKey'], (string) $args['key'], $body, $headers, $this->getClient());
    }
}
