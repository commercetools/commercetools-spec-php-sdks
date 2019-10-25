<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Extension;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\Common\ReferenceBuilder;
use Commercetools\Base\Builder;

/**
 * @implements Builder<ExtensionInput>
 */
final class ExtensionInputBuilder implements Builder
{
    /**
     * @var Reference|?ReferenceBuilder
     */
    private $resource;

    /**
     * @var ?string
     */
    private $action;

    public function __construct()
    {
    }

    /**
     * @return null|Reference
     */
    public function getResource()
    {
        return $this->resource instanceof ReferenceBuilder ? $this->resource->build() : $this->resource;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @return $this
     */
    public function withResource(?Reference $resource)
    {
        $this->resource = $resource;

        return $this;
    }

    /**
     * @return $this
     */
    public function withAction(?string $action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * @return $this
     */
    public function withResourceBuilder(?ReferenceBuilder $resource)
    {
        $this->resource = $resource;

        return $this;
    }

    public function build(): ExtensionInput
    {
        return new ExtensionInputModel(
            ($this->resource instanceof ReferenceBuilder ? $this->resource->build() : $this->resource),
            $this->action
        );
    }

    public static function of(): ExtensionInputBuilder
    {
        return new self();
    }
}