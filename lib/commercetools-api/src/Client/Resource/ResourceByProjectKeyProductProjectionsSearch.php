<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Client\ApiResource;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 * @psalm-immutable
 */
class ResourceByProjectKeyProductProjectionsSearch extends ApiResource
{
    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post($body = null, array $headers = []): ByProjectKeyProductProjectionsSearchPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyProductProjectionsSearchPost((string) $args['projectKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyProductProjectionsSearchGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyProductProjectionsSearchGet((string) $args['projectKey'], $body, $headers, $this->getClient());
    }
}
