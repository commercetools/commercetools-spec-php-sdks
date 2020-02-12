<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Store\StoreUpdate;
use Commercetools\Client\ApiResource;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 * @psalm-immutable
 */
class ResourceByProjectKeyStoresKeyByKey extends ApiResource
{
    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyStoresKeyByKeyGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyStoresKeyByKeyGet((string) $args['projectKey'], (string) $args['key'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?StoreUpdate $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?StoreUpdate $body = null, array $headers = []): ByProjectKeyStoresKeyByKeyPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyStoresKeyByKeyPost((string) $args['projectKey'], (string) $args['key'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function delete($body = null, array $headers = []): ByProjectKeyStoresKeyByKeyDelete
    {
        $args = $this->getArgs();

        return new ByProjectKeyStoresKeyByKeyDelete((string) $args['projectKey'], (string) $args['key'], $body, $headers, $this->getClient());
    }
}
