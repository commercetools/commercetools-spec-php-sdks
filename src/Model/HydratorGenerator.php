<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class HydratorGenerator {
    protected static $types = [
       PagedQueryResponse::class => PagedQueryResponse::class,
       Update::class => Update::class,
       UpdateAction::class => UpdateAction::class,
       UpdateActionCollection::class => UpdateActionCollection::class,
       Reference::class => Reference::class,
       ReferenceCollection::class => ReferenceCollection::class,
       Resource::class => Resource::class,
       ReferenceTypeId::class => ReferenceTypeId::class,
       Asset::class => Asset::class,
       AssetCollection::class => AssetCollection::class,
       AssetSource::class => AssetSource::class,
       AssetSourceCollection::class => AssetSourceCollection::class,
       AssetDimensions::class => AssetDimensions::class,
       AssetDraft::class => AssetDraft::class,
       AssetDraftCollection::class => AssetDraftCollection::class,
       Address::class => Address::class,
       AddressCollection::class => AddressCollection::class,
       DiscountedPrice::class => DiscountedPrice::class,
       GeoJson::class => GeoJson::class,
       GeoJsonPoint::class => GeoJsonPoint::class,
       Image::class => Image::class,
       ImageCollection::class => ImageCollection::class,
       ImageDimensions::class => ImageDimensions::class,
       LocalizedString::class => LocalizedString::class,
       Money::class => Money::class,
       Price::class => Price::class,
       PriceCollection::class => PriceCollection::class,
       PriceDraft::class => PriceDraft::class,
       PriceDraftCollection::class => PriceDraftCollection::class,
       ScopedPrice::class => ScopedPrice::class,
       ScopedPriceCollection::class => ScopedPriceCollection::class,
       Category::class => Category::class,
       CategoryCollection::class => CategoryCollection::class,
       CategoryDraft::class => CategoryDraft::class,
       CategoryReference::class => CategoryReference::class,
       CategoryReferenceCollection::class => CategoryReferenceCollection::class,
       CategoryPagedQueryResponse::class => CategoryPagedQueryResponse::class,
       CategoryUpdate::class => CategoryUpdate::class,
       CategoryUpdateAction::class => CategoryUpdateAction::class,
       CategoryUpdateActionCollection::class => CategoryUpdateActionCollection::class,
       CategoryChangeNameAction::class => CategoryChangeNameAction::class,
       CategoryChangeSlugAction::class => CategoryChangeSlugAction::class,
       CategorySetDescriptionAction::class => CategorySetDescriptionAction::class,
       CategoryChangeParentAction::class => CategoryChangeParentAction::class,
       CategoryChangeOrderHintAction::class => CategoryChangeOrderHintAction::class,
       CategorySetExternalIdAction::class => CategorySetExternalIdAction::class,
       CategorySetMetaTitleAction::class => CategorySetMetaTitleAction::class,
       CategorySetMetaKeywordsAction::class => CategorySetMetaKeywordsAction::class,
       CategorySetMetaDescriptionAction::class => CategorySetMetaDescriptionAction::class,
       CategorySetCustomTypeAction::class => CategorySetCustomTypeAction::class,
       CategorySetCustomFieldAction::class => CategorySetCustomFieldAction::class,
       CategoryAddAssetAction::class => CategoryAddAssetAction::class,
       CategoryRemoveAssetAction::class => CategoryRemoveAssetAction::class,
       CategoryChangeAssetOrderAction::class => CategoryChangeAssetOrderAction::class,
       CategoryChangeAssetNameAction::class => CategoryChangeAssetNameAction::class,
       CategorySetAssetDescriptionAction::class => CategorySetAssetDescriptionAction::class,
       CategorySetAssetTagsAction::class => CategorySetAssetTagsAction::class,
       CategorySetAssetSourcesAction::class => CategorySetAssetSourcesAction::class,
       CategorySetAssetCustomTypeAction::class => CategorySetAssetCustomTypeAction::class,
       CategorySetAssetCustomFieldAction::class => CategorySetAssetCustomFieldAction::class,
       Channel::class => Channel::class,
       ChannelCollection::class => ChannelCollection::class,
       ChannelDraft::class => ChannelDraft::class,
       ChannelReference::class => ChannelReference::class,
       ChannelReferenceCollection::class => ChannelReferenceCollection::class,
       ChannelRoleEnum::class => ChannelRoleEnum::class,
       CustomerGroupReference::class => CustomerGroupReference::class,
       CustomerGroupReferenceCollection::class => CustomerGroupReferenceCollection::class,
       MessageConfiguration::class => MessageConfiguration::class,
       AttributeBooleanType::class => AttributeBooleanType::class,
       AttributeConstraintEnum::class => AttributeConstraintEnum::class,
       AttributeDateTimeType::class => AttributeDateTimeType::class,
       AttributeDateType::class => AttributeDateType::class,
       AttributeTimeType::class => AttributeTimeType::class,
       AttributeDefinition::class => AttributeDefinition::class,
       AttributeDefinitionCollection::class => AttributeDefinitionCollection::class,
       AttributeDefinitionDraft::class => AttributeDefinitionDraft::class,
       AttributeDefinitionDraftCollection::class => AttributeDefinitionDraftCollection::class,
       AttributeEnumType::class => AttributeEnumType::class,
       AttributeLocalizedEnumType::class => AttributeLocalizedEnumType::class,
       AttributeLocalizedEnumValue::class => AttributeLocalizedEnumValue::class,
       AttributeMoneyType::class => AttributeMoneyType::class,
       AttributeNestedType::class => AttributeNestedType::class,
       AttributeNumberType::class => AttributeNumberType::class,
       AttributePlainEnumValue::class => AttributePlainEnumValue::class,
       AttributeReferenceType::class => AttributeReferenceType::class,
       AttributeSetType::class => AttributeSetType::class,
       AttributeTextType::class => AttributeTextType::class,
       AttributeType::class => AttributeType::class,
       ProductPagedQueryResponse::class => ProductPagedQueryResponse::class,
       ProductType::class => ProductType::class,
       ProductTypeCollection::class => ProductTypeCollection::class,
       ProductTypeDraft::class => ProductTypeDraft::class,
       ProductTypeReference::class => ProductTypeReference::class,
       ProductTypeReferenceCollection::class => ProductTypeReferenceCollection::class,
       ProductTypePagedQueryResponse::class => ProductTypePagedQueryResponse::class,
       ProductTypeUpdate::class => ProductTypeUpdate::class,
       ProductTypeUpdateAction::class => ProductTypeUpdateAction::class,
       ProductTypeUpdateActionCollection::class => ProductTypeUpdateActionCollection::class,
       TextInputHint::class => TextInputHint::class,
       ProductTypeSetKeyAction::class => ProductTypeSetKeyAction::class,
       ProductTypeChangeNameAction::class => ProductTypeChangeNameAction::class,
       ProductTypeChangeDescriptionAction::class => ProductTypeChangeDescriptionAction::class,
       ProductTypeAddAttributeDefinitionAction::class => ProductTypeAddAttributeDefinitionAction::class,
       ProductTypeRemoveAttributeDefinitionAction::class => ProductTypeRemoveAttributeDefinitionAction::class,
       ProductTypeChangeLabelAction::class => ProductTypeChangeLabelAction::class,
       ProductTypeSetInputTipAction::class => ProductTypeSetInputTipAction::class,
       ProductTypeAddPlainEnumValueAction::class => ProductTypeAddPlainEnumValueAction::class,
       ProductTypeAddLocalizedEnumValueAction::class => ProductTypeAddLocalizedEnumValueAction::class,
       ProductTypeChangeAttributeOrderAction::class => ProductTypeChangeAttributeOrderAction::class,
       ProductTypeChangePlainEnumValueOrderAction::class => ProductTypeChangePlainEnumValueOrderAction::class,
       ProductTypeChangeLocalizedEnumValueOrderAction::class => ProductTypeChangeLocalizedEnumValueOrderAction::class,
       ProductTypeChangePlainEnumValueLabelAction::class => ProductTypeChangePlainEnumValueLabelAction::class,
       ProductTypeChangeLocalizedEnumValueLabelAction::class => ProductTypeChangeLocalizedEnumValueLabelAction::class,
       ProductTypeChangeIsSearchableAction::class => ProductTypeChangeIsSearchableAction::class,
       Project::class => Project::class,
       Attribute::class => Attribute::class,
       AttributeCollection::class => AttributeCollection::class,
       CategoryOrderHints::class => CategoryOrderHints::class,
       CustomTokenizer::class => CustomTokenizer::class,
       Product::class => Product::class,
       ProductCollection::class => ProductCollection::class,
       ProductCatalogData::class => ProductCatalogData::class,
       ProductData::class => ProductData::class,
       ProductDraft::class => ProductDraft::class,
       ProductVariant::class => ProductVariant::class,
       ProductVariantCollection::class => ProductVariantCollection::class,
       ProductVariantAvailability::class => ProductVariantAvailability::class,
       ProductVariantAvailabilityCollection::class => ProductVariantAvailabilityCollection::class,
       ProductVariantDraft::class => ProductVariantDraft::class,
       ProductVariantDraftCollection::class => ProductVariantDraftCollection::class,
       SearchKeyword::class => SearchKeyword::class,
       SearchKeywordCollection::class => SearchKeywordCollection::class,
       SearchKeywords::class => SearchKeywords::class,
       SuggestTokenizer::class => SuggestTokenizer::class,
       WhitespaceTokenizer::class => WhitespaceTokenizer::class,
       ProductProjection::class => ProductProjection::class,
       ProductProjectionCollection::class => ProductProjectionCollection::class,
       ProductProjectionPagedQueryResponse::class => ProductProjectionPagedQueryResponse::class,
       FacetTypes::class => FacetTypes::class,
       FacetResult::class => FacetResult::class,
       FacetResultRange::class => FacetResultRange::class,
       FacetResultRangeCollection::class => FacetResultRangeCollection::class,
       FacetResultTerm::class => FacetResultTerm::class,
       FacetResultTermCollection::class => FacetResultTermCollection::class,
       FacetResults::class => FacetResults::class,
       FilteredFacetResult::class => FilteredFacetResult::class,
       ProductProjectionPagedSearchResponse::class => ProductProjectionPagedSearchResponse::class,
       RangeFacetResult::class => RangeFacetResult::class,
       TermFacetResult::class => TermFacetResult::class,
       TermFacetResultType::class => TermFacetResultType::class,
       ProductDiscountReference::class => ProductDiscountReference::class,
       ProductDiscountReferenceCollection::class => ProductDiscountReferenceCollection::class,
       ReviewRatingStatistics::class => ReviewRatingStatistics::class,
       TaxCategoryReference::class => TaxCategoryReference::class,
       TaxCategoryReferenceCollection::class => TaxCategoryReferenceCollection::class,
       StateReference::class => StateReference::class,
       StateReferenceCollection::class => StateReferenceCollection::class,
       TypeReference::class => TypeReference::class,
       TypeReferenceCollection::class => TypeReferenceCollection::class,
       Type::class => Type::class,
       TypeCollection::class => TypeCollection::class,
       FieldDefinition::class => FieldDefinition::class,
       FieldDefinitionCollection::class => FieldDefinitionCollection::class,
       FieldType::class => FieldType::class,
       CustomFields::class => CustomFields::class,
       CustomFieldsCollection::class => CustomFieldsCollection::class,
       CustomFieldsDraft::class => CustomFieldsDraft::class,
    ];
        
    public function getHydratorClass($className)
    {
        $hydratorClass = null;
        if (isset(self::$types[$className])) {
            $hydratorClass = self::$types[$className];
        }
        return $hydratorClass;
    }
}
