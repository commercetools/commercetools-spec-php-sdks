<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Client\Resource;

use Commercetools\Client\ApiResource;
use Commercetools\Import\Models\Importsinks\ImportSinkUpdateDraft;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyImportSinksByImportSinkKey extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/import-sinks/{importSinkKey}', $args, $client);
    }

    /**
     * @psalm-param ?ImportSinkUpdateDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function put(?ImportSinkUpdateDraft $body = null, array $headers = []): ByProjectKeyImportSinksByImportSinkKeyPut
    {
        $args = $this->getArgs();

        return new ByProjectKeyImportSinksByImportSinkKeyPut($args['projectKey'], $args['importSinkKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyImportSinksByImportSinkKeyGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyImportSinksByImportSinkKeyGet($args['projectKey'], $args['importSinkKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function delete($body = null, array $headers = []): ByProjectKeyImportSinksByImportSinkKeyDelete
    {
        $args = $this->getArgs();

        return new ByProjectKeyImportSinksByImportSinkKeyDelete($args['projectKey'], $args['importSinkKey'], $body, $headers, $this->getClient());
    }
}
