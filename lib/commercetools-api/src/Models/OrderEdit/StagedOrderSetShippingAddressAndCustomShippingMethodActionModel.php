<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Cart\ExternalTaxRateDraft;
use Commercetools\Api\Models\Cart\ExternalTaxRateDraftModel;
use Commercetools\Api\Models\Common\Address;
use Commercetools\Api\Models\Common\AddressModel;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Api\Models\ShippingMethod\ShippingRateDraft;
use Commercetools\Api\Models\ShippingMethod\ShippingRateDraftModel;
use Commercetools\Api\Models\TaxCategory\TaxCategoryResourceIdentifier;
use Commercetools\Api\Models\TaxCategory\TaxCategoryResourceIdentifierModel;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class StagedOrderSetShippingAddressAndCustomShippingMethodActionModel extends JsonObjectModel implements StagedOrderSetShippingAddressAndCustomShippingMethodAction
{
    const DISCRIMINATOR_VALUE = 'setShippingAddressAndCustomShippingMethod';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?ShippingRateDraft
     */
    protected $shippingRate;

    /**
     * @var ?ExternalTaxRateDraft
     */
    protected $externalTaxRate;

    /**
     * @var ?Address
     */
    protected $address;

    /**
     * @var ?string
     */
    protected $shippingMethodName;

    /**
     * @var ?TaxCategoryResourceIdentifier
     */
    protected $taxCategory;

    public function __construct(
        string $action = null,
        ShippingRateDraft $shippingRate = null,
        ExternalTaxRateDraft $externalTaxRate = null,
        Address $address = null,
        string $shippingMethodName = null,
        TaxCategoryResourceIdentifier $taxCategory = null
    ) {
        $this->action = $action;
        $this->shippingRate = $shippingRate;
        $this->externalTaxRate = $externalTaxRate;
        $this->address = $address;
        $this->shippingMethodName = $shippingMethodName;
        $this->taxCategory = $taxCategory;
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
     * @return null|ShippingRateDraft
     */
    public function getShippingRate()
    {
        if (is_null($this->shippingRate)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(StagedOrderSetShippingAddressAndCustomShippingMethodAction::FIELD_SHIPPING_RATE);
            if (is_null($data)) {
                return null;
            }

            $this->shippingRate = ShippingRateDraftModel::of($data);
        }

        return $this->shippingRate;
    }

    /**
     * @return null|ExternalTaxRateDraft
     */
    public function getExternalTaxRate()
    {
        if (is_null($this->externalTaxRate)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(StagedOrderSetShippingAddressAndCustomShippingMethodAction::FIELD_EXTERNAL_TAX_RATE);
            if (is_null($data)) {
                return null;
            }

            $this->externalTaxRate = ExternalTaxRateDraftModel::of($data);
        }

        return $this->externalTaxRate;
    }

    /**
     * @return null|Address
     */
    public function getAddress()
    {
        if (is_null($this->address)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(StagedOrderSetShippingAddressAndCustomShippingMethodAction::FIELD_ADDRESS);
            if (is_null($data)) {
                return null;
            }

            $this->address = AddressModel::of($data);
        }

        return $this->address;
    }

    /**
     * @return null|string
     */
    public function getShippingMethodName()
    {
        if (is_null($this->shippingMethodName)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(StagedOrderSetShippingAddressAndCustomShippingMethodAction::FIELD_SHIPPING_METHOD_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->shippingMethodName = (string) $data;
        }

        return $this->shippingMethodName;
    }

    /**
     * @return null|TaxCategoryResourceIdentifier
     */
    public function getTaxCategory()
    {
        if (is_null($this->taxCategory)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(StagedOrderSetShippingAddressAndCustomShippingMethodAction::FIELD_TAX_CATEGORY);
            if (is_null($data)) {
                return null;
            }

            $this->taxCategory = TaxCategoryResourceIdentifierModel::of($data);
        }

        return $this->taxCategory;
    }

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    public function setShippingRate(?ShippingRateDraft $shippingRate): void
    {
        $this->shippingRate = $shippingRate;
    }

    public function setExternalTaxRate(?ExternalTaxRateDraft $externalTaxRate): void
    {
        $this->externalTaxRate = $externalTaxRate;
    }

    public function setAddress(?Address $address): void
    {
        $this->address = $address;
    }

    public function setShippingMethodName(?string $shippingMethodName): void
    {
        $this->shippingMethodName = $shippingMethodName;
    }

    public function setTaxCategory(?TaxCategoryResourceIdentifier $taxCategory): void
    {
        $this->taxCategory = $taxCategory;
    }
}