<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\DiscountCode;

use Commercetools\Base\JsonObjectModel;
use stdClass;

final class DiscountCodeUpdateModel extends JsonObjectModel implements DiscountCodeUpdate
{
    /**
     * @var ?DiscountCodeUpdateActionCollection
     */
    protected $actions;

    /**
     * @var ?int
     */
    protected $version;

    public function __construct(
        DiscountCodeUpdateActionCollection $actions = null,
        int $version = null
    ) {
        $this->actions = $actions;
        $this->version = $version;
    }

    /**
     * @return null|DiscountCodeUpdateActionCollection
     */
    public function getActions()
    {
        if (is_null($this->actions)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(DiscountCodeUpdate::FIELD_ACTIONS);
            if (is_null($data)) {
                return null;
            }
            $this->actions = DiscountCodeUpdateActionCollection::fromArray($data);
        }

        return $this->actions;
    }

    /**
     * @return null|int
     */
    public function getVersion()
    {
        if (is_null($this->version)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(DiscountCodeUpdate::FIELD_VERSION);
            if (is_null($data)) {
                return null;
            }
            $this->version = (int) $data;
        }

        return $this->version;
    }

    public function setActions(?DiscountCodeUpdateActionCollection $actions): void
    {
        $this->actions = $actions;
    }

    public function setVersion(?int $version): void
    {
        $this->version = $version;
    }
}