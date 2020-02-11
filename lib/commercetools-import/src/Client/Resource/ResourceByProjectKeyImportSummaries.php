<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Client\Resource;

use Commercetools\Client\ApiResource;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 * @psalm-immutable
 */
class ResourceByProjectKeyImportSummaries extends ApiResource
{
    public function importSinkKeyWithImportSinkKeyValue(string $importSinkKey = null): ResourceByProjectKeyImportSummariesImportSinkKeyByImportSinkKey
    {
        $args = $this->getArgs();
        if (!is_null($importSinkKey)) {
            $args['importSinkKey'] = $importSinkKey;
        }

        return new ResourceByProjectKeyImportSummariesImportSinkKeyByImportSinkKey($this->getUri() . '/importSinkKey={importSinkKey}', $args, $this->getClient());
    }
}