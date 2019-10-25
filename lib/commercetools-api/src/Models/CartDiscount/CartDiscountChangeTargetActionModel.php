<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Base\JsonObjectModel;
use stdClass;

final class CartDiscountChangeTargetActionModel extends JsonObjectModel implements CartDiscountChangeTargetAction
{
    const DISCRIMINATOR_VALUE = 'changeTarget';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?CartDiscountTarget
     */
    protected $target;

    public function __construct(
        string $action = null,
        CartDiscountTarget $target = null
    ) {
        $this->action = $action;
        $this->target = $target;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(CartDiscountUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|CartDiscountTarget
     */
    public function getTarget()
    {
        if (is_null($this->target)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(CartDiscountChangeTargetAction::FIELD_TARGET);
            if (is_null($data)) {
                return null;
            }
            $className = CartDiscountTargetModel::resolveDiscriminatorClass($data);
            $this->target = $className::of($data);
        }

        return $this->target;
    }

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    public function setTarget(?CartDiscountTarget $target): void
    {
        $this->target = $target;
    }
}