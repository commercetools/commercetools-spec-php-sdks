<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Api\Models\Common\AddressCollection;
use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\CreatedByModel;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\LastModifiedByModel;
use Commercetools\Api\Models\Common\LoggedResource;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupReference;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupReferenceModel;
use Commercetools\Api\Models\Store\StoreKeyReferenceCollection;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Api\Models\Type\CustomFieldsModel;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

final class CustomerModel extends JsonObjectModel implements Customer
{
    /**
     * @var ?DateTimeImmutable
     */
    protected $createdAt;

    /**
     * @var ?DateTimeImmutable
     */
    protected $lastModifiedAt;

    /**
     * @var ?string
     */
    protected $id;

    /**
     * @var ?int
     */
    protected $version;

    /**
     * @var ?CreatedBy
     */
    protected $createdBy;

    /**
     * @var ?LastModifiedBy
     */
    protected $lastModifiedBy;

    /**
     * @var ?string
     */
    protected $lastName;

    /**
     * @var ?AddressCollection
     */
    protected $addresses;

    /**
     * @var ?StoreKeyReferenceCollection
     */
    protected $stores;

    /**
     * @var ?CustomerGroupReference
     */
    protected $customerGroup;

    /**
     * @var ?CustomFields
     */
    protected $custom;

    /**
     * @var ?string
     */
    protected $companyName;

    /**
     * @var ?string
     */
    protected $vatId;

    /**
     * @var ?string
     */
    protected $externalId;

    /**
     * @var ?DateTimeImmutable
     */
    protected $dateOfBirth;

    /**
     * @var ?string
     */
    protected $locale;

    /**
     * @var ?array
     */
    protected $billingAddressIds;

    /**
     * @var ?string
     */
    protected $defaultShippingAddressId;

    /**
     * @var ?string
     */
    protected $title;

    /**
     * @var ?string
     */
    protected $customerNumber;

    /**
     * @var ?bool
     */
    protected $isEmailVerified;

    /**
     * @var ?string
     */
    protected $defaultBillingAddressId;

    /**
     * @var ?array
     */
    protected $shippingAddressIds;

    /**
     * @var ?string
     */
    protected $firstName;

    /**
     * @var ?string
     */
    protected $password;

    /**
     * @var ?string
     */
    protected $middleName;

    /**
     * @var ?string
     */
    protected $salutation;

    /**
     * @var ?string
     */
    protected $key;

    /**
     * @var ?string
     */
    protected $email;

    public function __construct(
        DateTimeImmutable $createdAt = null,
        DateTimeImmutable $lastModifiedAt = null,
        string $id = null,
        int $version = null,
        CreatedBy $createdBy = null,
        LastModifiedBy $lastModifiedBy = null,
        string $lastName = null,
        AddressCollection $addresses = null,
        StoreKeyReferenceCollection $stores = null,
        CustomerGroupReference $customerGroup = null,
        CustomFields $custom = null,
        string $companyName = null,
        string $vatId = null,
        string $externalId = null,
        DateTimeImmutable $dateOfBirth = null,
        string $locale = null,
        array $billingAddressIds = null,
        string $defaultShippingAddressId = null,
        string $title = null,
        string $customerNumber = null,
        bool $isEmailVerified = null,
        string $defaultBillingAddressId = null,
        array $shippingAddressIds = null,
        string $firstName = null,
        string $password = null,
        string $middleName = null,
        string $salutation = null,
        string $key = null,
        string $email = null
    ) {
        $this->createdAt = $createdAt;
        $this->lastModifiedAt = $lastModifiedAt;
        $this->id = $id;
        $this->version = $version;
        $this->createdBy = $createdBy;
        $this->lastModifiedBy = $lastModifiedBy;
        $this->lastName = $lastName;
        $this->addresses = $addresses;
        $this->stores = $stores;
        $this->customerGroup = $customerGroup;
        $this->custom = $custom;
        $this->companyName = $companyName;
        $this->vatId = $vatId;
        $this->externalId = $externalId;
        $this->dateOfBirth = $dateOfBirth;
        $this->locale = $locale;
        $this->billingAddressIds = $billingAddressIds;
        $this->defaultShippingAddressId = $defaultShippingAddressId;
        $this->title = $title;
        $this->customerNumber = $customerNumber;
        $this->isEmailVerified = $isEmailVerified;
        $this->defaultBillingAddressId = $defaultBillingAddressId;
        $this->shippingAddressIds = $shippingAddressIds;
        $this->firstName = $firstName;
        $this->password = $password;
        $this->middleName = $middleName;
        $this->salutation = $salutation;
        $this->key = $key;
        $this->email = $email;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt()
    {
        if (is_null($this->createdAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(BaseResource::FIELD_CREATED_AT);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->createdAt = $data;
        }

        return $this->createdAt;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt()
    {
        if (is_null($this->lastModifiedAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(BaseResource::FIELD_LAST_MODIFIED_AT);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->lastModifiedAt = $data;
        }

        return $this->lastModifiedAt;
    }

    /**
     * @return null|string
     */
    public function getId()
    {
        if (is_null($this->id)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(BaseResource::FIELD_ID);
            if (is_null($data)) {
                return null;
            }
            $this->id = (string) $data;
        }

        return $this->id;
    }

    /**
     * @return null|int
     */
    public function getVersion()
    {
        if (is_null($this->version)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(BaseResource::FIELD_VERSION);
            if (is_null($data)) {
                return null;
            }
            $this->version = (int) $data;
        }

        return $this->version;
    }

    /**
     * @return null|CreatedBy
     */
    public function getCreatedBy()
    {
        if (is_null($this->createdBy)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(LoggedResource::FIELD_CREATED_BY);
            if (is_null($data)) {
                return null;
            }

            $this->createdBy = CreatedByModel::of($data);
        }

        return $this->createdBy;
    }

    /**
     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy()
    {
        if (is_null($this->lastModifiedBy)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(LoggedResource::FIELD_LAST_MODIFIED_BY);
            if (is_null($data)) {
                return null;
            }

            $this->lastModifiedBy = LastModifiedByModel::of($data);
        }

        return $this->lastModifiedBy;
    }

    /**
     * @return null|string
     */
    public function getLastName()
    {
        if (is_null($this->lastName)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Customer::FIELD_LAST_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->lastName = (string) $data;
        }

        return $this->lastName;
    }

    /**
     * @return null|AddressCollection
     */
    public function getAddresses()
    {
        if (is_null($this->addresses)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(Customer::FIELD_ADDRESSES);
            if (is_null($data)) {
                return null;
            }
            $this->addresses = AddressCollection::fromArray($data);
        }

        return $this->addresses;
    }

    /**
     * @return null|StoreKeyReferenceCollection
     */
    public function getStores()
    {
        if (is_null($this->stores)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(Customer::FIELD_STORES);
            if (is_null($data)) {
                return null;
            }
            $this->stores = StoreKeyReferenceCollection::fromArray($data);
        }

        return $this->stores;
    }

    /**
     * @return null|CustomerGroupReference
     */
    public function getCustomerGroup()
    {
        if (is_null($this->customerGroup)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(Customer::FIELD_CUSTOMER_GROUP);
            if (is_null($data)) {
                return null;
            }

            $this->customerGroup = CustomerGroupReferenceModel::of($data);
        }

        return $this->customerGroup;
    }

    /**
     * @return null|CustomFields
     */
    public function getCustom()
    {
        if (is_null($this->custom)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(Customer::FIELD_CUSTOM);
            if (is_null($data)) {
                return null;
            }

            $this->custom = CustomFieldsModel::of($data);
        }

        return $this->custom;
    }

    /**
     * @return null|string
     */
    public function getCompanyName()
    {
        if (is_null($this->companyName)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Customer::FIELD_COMPANY_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->companyName = (string) $data;
        }

        return $this->companyName;
    }

    /**
     * @return null|string
     */
    public function getVatId()
    {
        if (is_null($this->vatId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Customer::FIELD_VAT_ID);
            if (is_null($data)) {
                return null;
            }
            $this->vatId = (string) $data;
        }

        return $this->vatId;
    }

    /**
     * @return null|string
     */
    public function getExternalId()
    {
        if (is_null($this->externalId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Customer::FIELD_EXTERNAL_ID);
            if (is_null($data)) {
                return null;
            }
            $this->externalId = (string) $data;
        }

        return $this->externalId;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getDateOfBirth()
    {
        if (is_null($this->dateOfBirth)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Customer::FIELD_DATE_OF_BIRTH);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATE_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->dateOfBirth = $data;
        }

        return $this->dateOfBirth;
    }

    /**
     * @return null|string
     */
    public function getLocale()
    {
        if (is_null($this->locale)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Customer::FIELD_LOCALE);
            if (is_null($data)) {
                return null;
            }
            $this->locale = (string) $data;
        }

        return $this->locale;
    }

    /**
     * @return null|array
     */
    public function getBillingAddressIds()
    {
        if (is_null($this->billingAddressIds)) {
            /** @psalm-var ?array<int, mixed> $data */
            $data = $this->raw(Customer::FIELD_BILLING_ADDRESS_IDS);
            if (is_null($data)) {
                return null;
            }
            $this->billingAddressIds = $data;
        }

        return $this->billingAddressIds;
    }

    /**
     * @return null|string
     */
    public function getDefaultShippingAddressId()
    {
        if (is_null($this->defaultShippingAddressId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Customer::FIELD_DEFAULT_SHIPPING_ADDRESS_ID);
            if (is_null($data)) {
                return null;
            }
            $this->defaultShippingAddressId = (string) $data;
        }

        return $this->defaultShippingAddressId;
    }

    /**
     * @return null|string
     */
    public function getTitle()
    {
        if (is_null($this->title)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Customer::FIELD_TITLE);
            if (is_null($data)) {
                return null;
            }
            $this->title = (string) $data;
        }

        return $this->title;
    }

    /**
     * @return null|string
     */
    public function getCustomerNumber()
    {
        if (is_null($this->customerNumber)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Customer::FIELD_CUSTOMER_NUMBER);
            if (is_null($data)) {
                return null;
            }
            $this->customerNumber = (string) $data;
        }

        return $this->customerNumber;
    }

    /**
     * @return null|bool
     */
    public function getIsEmailVerified()
    {
        if (is_null($this->isEmailVerified)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(Customer::FIELD_IS_EMAIL_VERIFIED);
            if (is_null($data)) {
                return null;
            }
            $this->isEmailVerified = (bool) $data;
        }

        return $this->isEmailVerified;
    }

    /**
     * @return null|string
     */
    public function getDefaultBillingAddressId()
    {
        if (is_null($this->defaultBillingAddressId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Customer::FIELD_DEFAULT_BILLING_ADDRESS_ID);
            if (is_null($data)) {
                return null;
            }
            $this->defaultBillingAddressId = (string) $data;
        }

        return $this->defaultBillingAddressId;
    }

    /**
     * @return null|array
     */
    public function getShippingAddressIds()
    {
        if (is_null($this->shippingAddressIds)) {
            /** @psalm-var ?array<int, mixed> $data */
            $data = $this->raw(Customer::FIELD_SHIPPING_ADDRESS_IDS);
            if (is_null($data)) {
                return null;
            }
            $this->shippingAddressIds = $data;
        }

        return $this->shippingAddressIds;
    }

    /**
     * @return null|string
     */
    public function getFirstName()
    {
        if (is_null($this->firstName)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Customer::FIELD_FIRST_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->firstName = (string) $data;
        }

        return $this->firstName;
    }

    /**
     * @return null|string
     */
    public function getPassword()
    {
        if (is_null($this->password)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Customer::FIELD_PASSWORD);
            if (is_null($data)) {
                return null;
            }
            $this->password = (string) $data;
        }

        return $this->password;
    }

    /**
     * @return null|string
     */
    public function getMiddleName()
    {
        if (is_null($this->middleName)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Customer::FIELD_MIDDLE_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->middleName = (string) $data;
        }

        return $this->middleName;
    }

    /**
     * @return null|string
     */
    public function getSalutation()
    {
        if (is_null($this->salutation)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Customer::FIELD_SALUTATION);
            if (is_null($data)) {
                return null;
            }
            $this->salutation = (string) $data;
        }

        return $this->salutation;
    }

    /**
     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Customer::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
    }

    /**
     * @return null|string
     */
    public function getEmail()
    {
        if (is_null($this->email)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Customer::FIELD_EMAIL);
            if (is_null($data)) {
                return null;
            }
            $this->email = (string) $data;
        }

        return $this->email;
    }

    public function setCreatedAt(?DateTimeImmutable $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void
    {
        $this->lastModifiedAt = $lastModifiedAt;
    }

    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    public function setVersion(?int $version): void
    {
        $this->version = $version;
    }

    public function setCreatedBy(?CreatedBy $createdBy): void
    {
        $this->createdBy = $createdBy;
    }

    public function setLastModifiedBy(?LastModifiedBy $lastModifiedBy): void
    {
        $this->lastModifiedBy = $lastModifiedBy;
    }

    public function setLastName(?string $lastName): void
    {
        $this->lastName = $lastName;
    }

    public function setAddresses(?AddressCollection $addresses): void
    {
        $this->addresses = $addresses;
    }

    public function setStores(?StoreKeyReferenceCollection $stores): void
    {
        $this->stores = $stores;
    }

    public function setCustomerGroup(?CustomerGroupReference $customerGroup): void
    {
        $this->customerGroup = $customerGroup;
    }

    public function setCustom(?CustomFields $custom): void
    {
        $this->custom = $custom;
    }

    public function setCompanyName(?string $companyName): void
    {
        $this->companyName = $companyName;
    }

    public function setVatId(?string $vatId): void
    {
        $this->vatId = $vatId;
    }

    public function setExternalId(?string $externalId): void
    {
        $this->externalId = $externalId;
    }

    public function setDateOfBirth(?DateTimeImmutable $dateOfBirth): void
    {
        $this->dateOfBirth = $dateOfBirth;
    }

    public function setLocale(?string $locale): void
    {
        $this->locale = $locale;
    }

    public function setBillingAddressIds(?array $billingAddressIds): void
    {
        $this->billingAddressIds = $billingAddressIds;
    }

    public function setDefaultShippingAddressId(?string $defaultShippingAddressId): void
    {
        $this->defaultShippingAddressId = $defaultShippingAddressId;
    }

    public function setTitle(?string $title): void
    {
        $this->title = $title;
    }

    public function setCustomerNumber(?string $customerNumber): void
    {
        $this->customerNumber = $customerNumber;
    }

    public function setIsEmailVerified(?bool $isEmailVerified): void
    {
        $this->isEmailVerified = $isEmailVerified;
    }

    public function setDefaultBillingAddressId(?string $defaultBillingAddressId): void
    {
        $this->defaultBillingAddressId = $defaultBillingAddressId;
    }

    public function setShippingAddressIds(?array $shippingAddressIds): void
    {
        $this->shippingAddressIds = $shippingAddressIds;
    }

    public function setFirstName(?string $firstName): void
    {
        $this->firstName = $firstName;
    }

    public function setPassword(?string $password): void
    {
        $this->password = $password;
    }

    public function setMiddleName(?string $middleName): void
    {
        $this->middleName = $middleName;
    }

    public function setSalutation(?string $salutation): void
    {
        $this->salutation = $salutation;
    }

    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }

    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[BaseResource::FIELD_CREATED_AT]) && $data[BaseResource::FIELD_CREATED_AT] instanceof \DateTimeImmutable) {
            $data[BaseResource::FIELD_CREATED_AT] = $data[BaseResource::FIELD_CREATED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        if (isset($data[BaseResource::FIELD_LAST_MODIFIED_AT]) && $data[BaseResource::FIELD_LAST_MODIFIED_AT] instanceof \DateTimeImmutable) {
            $data[BaseResource::FIELD_LAST_MODIFIED_AT] = $data[BaseResource::FIELD_LAST_MODIFIED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        if (isset($data[Customer::FIELD_DATE_OF_BIRTH]) && $data[Customer::FIELD_DATE_OF_BIRTH] instanceof \DateTimeImmutable) {
            $data[Customer::FIELD_DATE_OF_BIRTH] = $data[Customer::FIELD_DATE_OF_BIRTH]->format('Y-m-d');
        }

        return (object) $data;
    }
}