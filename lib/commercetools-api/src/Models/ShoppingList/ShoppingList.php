<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShoppingList;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LoggedResource;
use Commercetools\Api\Models\Customer\CustomerReference;
use Commercetools\Api\Models\Type\CustomFields;

interface ShoppingList extends LoggedResource
{
    const FIELD_CUSTOM = 'custom';
    const FIELD_CUSTOMER = 'customer';
    const FIELD_DELETE_DAYS_AFTER_LAST_MODIFICATION = 'deleteDaysAfterLastModification';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_KEY = 'key';
    const FIELD_LINE_ITEMS = 'lineItems';
    const FIELD_NAME = 'name';
    const FIELD_SLUG = 'slug';
    const FIELD_TEXT_LINE_ITEMS = 'textLineItems';
    const FIELD_ANONYMOUS_ID = 'anonymousId';

    /**
     * @return null|CustomFields
     */
    public function getCustom();

    /**
     * @return null|CustomerReference
     */
    public function getCustomer();

    /**
     * @return null|int
     */
    public function getDeleteDaysAfterLastModification();

    /**
     * @return null|LocalizedString
     */
    public function getDescription();

    /**
     * @return null|string
     */
    public function getKey();

    /**
     * @return null|ShoppingListLineItemCollection
     */
    public function getLineItems();

    /**
     * @return null|LocalizedString
     */
    public function getName();

    /**
     * @return null|LocalizedString
     */
    public function getSlug();

    /**
     * @return null|TextLineItemCollection
     */
    public function getTextLineItems();

    /**
     * @return null|string
     */
    public function getAnonymousId();

    public function setCustom(?CustomFields $custom): void;

    public function setCustomer(?CustomerReference $customer): void;

    public function setDeleteDaysAfterLastModification(?int $deleteDaysAfterLastModification): void;

    public function setDescription(?LocalizedString $description): void;

    public function setKey(?string $key): void;

    public function setLineItems(?ShoppingListLineItemCollection $lineItems): void;

    public function setName(?LocalizedString $name): void;

    public function setSlug(?LocalizedString $slug): void;

    public function setTextLineItems(?TextLineItemCollection $textLineItems): void;

    public function setAnonymousId(?string $anonymousId): void;
}