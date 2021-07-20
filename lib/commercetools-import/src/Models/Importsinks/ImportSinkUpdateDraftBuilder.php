<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importsinks;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ImportSinkUpdateDraft>
 */
final class ImportSinkUpdateDraftBuilder implements Builder
{
    /**
     * @var ?int
     */
    private $version;

    /**
     * @var ?string
     */
    private $resourceType;

    /**
     * <p>Current version of the ImportSink.</p>
     *
     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * <p>The <a href="#importresourcetype">resource type</a> to be imported.
     * If not given, the ImportSink is able to import all of the supported <a href="#importresourcetype">ImportResourceTypes</a>.</p>
     *
     * @return null|string
     */
    public function getResourceType()
    {
        return $this->resourceType;
    }

    /**
     * @param ?int $version
     * @return $this
     */
    public function withVersion(?int $version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * @param ?string $resourceType
     * @return $this
     */
    public function withResourceType(?string $resourceType)
    {
        $this->resourceType = $resourceType;

        return $this;
    }


    public function build(): ImportSinkUpdateDraft
    {
        return new ImportSinkUpdateDraftModel(
            $this->version,
            $this->resourceType
        );
    }

    public static function of(): ImportSinkUpdateDraftBuilder
    {
        return new self();
    }
}
