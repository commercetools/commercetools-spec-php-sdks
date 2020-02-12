<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Cart\ExternalLineItemTotalPrice;
use Commercetools\Api\Models\Cart\ExternalLineItemTotalPriceModel;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Api\Models\Order\StagedOrderUpdateActionModel;
use Commercetools\Base\DateTimeImmutableCollection;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

final class StagedOrderSetLineItemTotalPriceActionModel extends JsonObjectModel implements StagedOrderSetLineItemTotalPriceAction
{
    public const DISCRIMINATOR_VALUE = 'setLineItemTotalPrice';
    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?string
     */
    protected $lineItemId;

    /**
     * @var ?ExternalLineItemTotalPrice
     */
    protected $externalTotalPrice;


    public function __construct(
        string $lineItemId = null,
        ExternalLineItemTotalPrice $externalTotalPrice = null
    ) {
        $this->lineItemId = $lineItemId;
        $this->externalTotalPrice = $externalTotalPrice;
        $this->action = static::DISCRIMINATOR_VALUE;
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
    public function getLineItemId()
    {
        if (is_null($this->lineItemId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(StagedOrderSetLineItemTotalPriceAction::FIELD_LINE_ITEM_ID);
            if (is_null($data)) {
                return null;
            }
            $this->lineItemId = (string) $data;
        }

        return $this->lineItemId;
    }

    /**
     * @return null|ExternalLineItemTotalPrice
     */
    public function getExternalTotalPrice()
    {
        if (is_null($this->externalTotalPrice)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(StagedOrderSetLineItemTotalPriceAction::FIELD_EXTERNAL_TOTAL_PRICE);
            if (is_null($data)) {
                return null;
            }

            $this->externalTotalPrice = ExternalLineItemTotalPriceModel::of($data);
        }

        return $this->externalTotalPrice;
    }

    public function setLineItemId(?string $lineItemId): void
    {
        $this->lineItemId = $lineItemId;
    }

    public function setExternalTotalPrice(?ExternalLineItemTotalPrice $externalTotalPrice): void
    {
        $this->externalTotalPrice = $externalTotalPrice;
    }
}
