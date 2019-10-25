<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Category;

use Commercetools\Base\JsonObjectModel;

final class CategorySetExternalIdActionModel extends JsonObjectModel implements CategorySetExternalIdAction
{
    const DISCRIMINATOR_VALUE = 'setExternalId';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?string
     */
    protected $externalId;

    public function __construct(
        string $action = null,
        string $externalId = null
    ) {
        $this->action = $action;
        $this->externalId = $externalId;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(CategoryUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|string
     */
    public function getExternalId()
    {
        if (is_null($this->externalId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(CategorySetExternalIdAction::FIELD_EXTERNAL_ID);
            if (is_null($data)) {
                return null;
            }
            $this->externalId = (string) $data;
        }

        return $this->externalId;
    }

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    public function setExternalId(?string $externalId): void
    {
        $this->externalId = $externalId;
    }
}