<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\DiscountCode;

use Commercetools\Base\JsonObjectModel;

final class DiscountCodeChangeIsActiveActionModel extends JsonObjectModel implements DiscountCodeChangeIsActiveAction
{
    const DISCRIMINATOR_VALUE = 'changeIsActive';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?bool
     */
    protected $isActive;

    public function __construct(
        string $action = null,
        bool $isActive = null
    ) {
        $this->action = $action;
        $this->isActive = $isActive;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(DiscountCodeUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|bool
     */
    public function getIsActive()
    {
        if (is_null($this->isActive)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(DiscountCodeChangeIsActiveAction::FIELD_IS_ACTIVE);
            if (is_null($data)) {
                return null;
            }
            $this->isActive = (bool) $data;
        }

        return $this->isActive;
    }

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    public function setIsActive(?bool $isActive): void
    {
        $this->isActive = $isActive;
    }
}