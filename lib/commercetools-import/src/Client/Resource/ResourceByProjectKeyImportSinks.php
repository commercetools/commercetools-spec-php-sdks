<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Client\Resource;

use Commercetools\Client\ApiResource;
use Commercetools\Import\Models\Importsinks\ImportSinkDraft;

/** @psalm-suppress PropertyNotSetInConstructor */
class ResourceByProjectKeyImportSinks extends ApiResource
{
    /**
     * @psalm-param scalar $importSinkKey
     *
     * @param null|mixed $importSinkKey
     */
    public function withImportSinkKeyValue($importSinkKey = null): ResourceByProjectKeyImportSinksByImportSinkKey
    {
        $args = $this->getArgs();
        if (!is_null($importSinkKey)) {
            $args['importSinkKey'] = $importSinkKey;
        }

        return new ResourceByProjectKeyImportSinksByImportSinkKey($this->getUri().'/{importSinkKey}', $args, $this->getClient());
    }

    /**
     * @psalm-param ?ImportSinkDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?ImportSinkDraft $body = null, array $headers = []): ByProjectKeyImportSinksPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyImportSinksPost($args['projectKey'], $body, $headers, $this->getClient());
    }
}