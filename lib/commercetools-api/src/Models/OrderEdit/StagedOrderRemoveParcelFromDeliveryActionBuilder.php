<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\Builder;

/**
 * @implements Builder<StagedOrderRemoveParcelFromDeliveryAction>
 */
final class StagedOrderRemoveParcelFromDeliveryActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $action;

    /**
     * @var ?string
     */
    private $parcelId;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @return null|string
     */
    public function getParcelId()
    {
        return $this->parcelId;
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
    public function withParcelId(?string $parcelId)
    {
        $this->parcelId = $parcelId;

        return $this;
    }

    public function build(): StagedOrderRemoveParcelFromDeliveryAction
    {
        return new StagedOrderRemoveParcelFromDeliveryActionModel(
            $this->action,
            $this->parcelId
        );
    }

    public static function of(): StagedOrderRemoveParcelFromDeliveryActionBuilder
    {
        return new self();
    }
}