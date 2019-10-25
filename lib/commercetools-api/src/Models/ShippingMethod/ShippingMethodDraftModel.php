<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Api\Models\TaxCategory\TaxCategoryResourceIdentifier;
use Commercetools\Api\Models\TaxCategory\TaxCategoryResourceIdentifierModel;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class ShippingMethodDraftModel extends JsonObjectModel implements ShippingMethodDraft
{
    /**
     * @var ?ZoneRateDraftCollection
     */
    protected $zoneRates;

    /**
     * @var ?string
     */
    protected $predicate;

    /**
     * @var ?bool
     */
    protected $isDefault;

    /**
     * @var ?string
     */
    protected $name;

    /**
     * @var ?string
     */
    protected $description;

    /**
     * @var ?string
     */
    protected $key;

    /**
     * @var ?TaxCategoryResourceIdentifier
     */
    protected $taxCategory;

    public function __construct(
        ZoneRateDraftCollection $zoneRates = null,
        string $predicate = null,
        bool $isDefault = null,
        string $name = null,
        string $description = null,
        string $key = null,
        TaxCategoryResourceIdentifier $taxCategory = null
    ) {
        $this->zoneRates = $zoneRates;
        $this->predicate = $predicate;
        $this->isDefault = $isDefault;
        $this->name = $name;
        $this->description = $description;
        $this->key = $key;
        $this->taxCategory = $taxCategory;
    }

    /**
     * @return null|ZoneRateDraftCollection
     */
    public function getZoneRates()
    {
        if (is_null($this->zoneRates)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(ShippingMethodDraft::FIELD_ZONE_RATES);
            if (is_null($data)) {
                return null;
            }
            $this->zoneRates = ZoneRateDraftCollection::fromArray($data);
        }

        return $this->zoneRates;
    }

    /**
     * @return null|string
     */
    public function getPredicate()
    {
        if (is_null($this->predicate)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ShippingMethodDraft::FIELD_PREDICATE);
            if (is_null($data)) {
                return null;
            }
            $this->predicate = (string) $data;
        }

        return $this->predicate;
    }

    /**
     * @return null|bool
     */
    public function getIsDefault()
    {
        if (is_null($this->isDefault)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(ShippingMethodDraft::FIELD_IS_DEFAULT);
            if (is_null($data)) {
                return null;
            }
            $this->isDefault = (bool) $data;
        }

        return $this->isDefault;
    }

    /**
     * @return null|string
     */
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ShippingMethodDraft::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->name = (string) $data;
        }

        return $this->name;
    }

    /**
     * @return null|string
     */
    public function getDescription()
    {
        if (is_null($this->description)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ShippingMethodDraft::FIELD_DESCRIPTION);
            if (is_null($data)) {
                return null;
            }
            $this->description = (string) $data;
        }

        return $this->description;
    }

    /**
     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ShippingMethodDraft::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
    }

    /**
     * @return null|TaxCategoryResourceIdentifier
     */
    public function getTaxCategory()
    {
        if (is_null($this->taxCategory)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ShippingMethodDraft::FIELD_TAX_CATEGORY);
            if (is_null($data)) {
                return null;
            }

            $this->taxCategory = TaxCategoryResourceIdentifierModel::of($data);
        }

        return $this->taxCategory;
    }

    public function setZoneRates(?ZoneRateDraftCollection $zoneRates): void
    {
        $this->zoneRates = $zoneRates;
    }

    public function setPredicate(?string $predicate): void
    {
        $this->predicate = $predicate;
    }

    public function setIsDefault(?bool $isDefault): void
    {
        $this->isDefault = $isDefault;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    public function setTaxCategory(?TaxCategoryResourceIdentifier $taxCategory): void
    {
        $this->taxCategory = $taxCategory;
    }
}