<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Base\JsonObjectModel;

final class StagedOrderSetCountryActionModel extends JsonObjectModel implements StagedOrderSetCountryAction
{
    const DISCRIMINATOR_VALUE = 'setCountry';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?string
     */
    protected $country;

    public function __construct(
        string $action = null,
        string $country = null
    ) {
        $this->action = $action;
        $this->country = $country;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(StagedOrderUpdateAction::FIELD_ACTION);
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
    public function getCountry()
    {
        if (is_null($this->country)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(StagedOrderSetCountryAction::FIELD_COUNTRY);
            if (is_null($data)) {
                return null;
            }
            $this->country = (string) $data;
        }

        return $this->country;
    }

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    public function setCountry(?string $country): void
    {
        $this->country = $country;
    }
}