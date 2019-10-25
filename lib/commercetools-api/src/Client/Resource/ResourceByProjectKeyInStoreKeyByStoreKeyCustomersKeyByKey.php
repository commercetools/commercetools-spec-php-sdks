<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Common\Update;
use Commercetools\Client\ApiResource;

/** @psalm-suppress PropertyNotSetInConstructor */
class ResourceByProjectKeyInStoreKeyByStoreKeyCustomersKeyByKey extends ApiResource
{
    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     *
     * @param null|mixed $body
     */
    public function get($body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyCustomersKeyByKeyGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyCustomersKeyByKeyGet($args['projectKey'], $args['storeKey'], $args['key'], $body, $headers, $this->getClient());
    }

    /**
     * @psalm-param ?Update $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?Update $body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyCustomersKeyByKeyPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyCustomersKeyByKeyPost($args['projectKey'], $args['storeKey'], $args['key'], $body, $headers, $this->getClient());
    }

    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     *
     * @param null|mixed $body
     */
    public function delete($body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyCustomersKeyByKeyDelete
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyCustomersKeyByKeyDelete($args['projectKey'], $args['storeKey'], $args['key'], $body, $headers, $this->getClient());
    }
}