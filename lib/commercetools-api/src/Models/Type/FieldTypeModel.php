<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Base\JsonObjectModel;
use stdClass;

final class FieldTypeModel extends JsonObjectModel implements FieldType
{
    const DISCRIMINATOR_VALUE = '';

    /**
     * @var ?string
     */
    protected $name;

    /**
     * @psalm-var array<string, class-string<FieldType> >
     */
    private static $discriminatorClasses = [
        'Boolean' => CustomFieldBooleanTypeModel::class,
        'DateTime' => CustomFieldDateTimeTypeModel::class,
        'Date' => CustomFieldDateTypeModel::class,
        'Enum' => CustomFieldEnumTypeModel::class,
        'LocalizedEnum' => CustomFieldLocalizedEnumTypeModel::class,
        'LocalizedString' => CustomFieldLocalizedStringTypeModel::class,
        'Money' => CustomFieldMoneyTypeModel::class,
        'Number' => CustomFieldNumberTypeModel::class,
        'Reference' => CustomFieldReferenceTypeModel::class,
        'Set' => CustomFieldSetTypeModel::class,
        'String' => CustomFieldStringTypeModel::class,
        'Time' => CustomFieldTimeTypeModel::class,
    ];

    public function __construct(
        string $name = null
    ) {
        $this->name = $name;
        $this->name = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(FieldType::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->name = (string) $data;
        }

        return $this->name;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @psalm-param stdClass|array<string, mixed> $value
     * @psalm-return class-string<FieldType>
     *
     * @param mixed $value
     */
    public static function resolveDiscriminatorClass($value): string
    {
        $fieldName = FieldType::DISCRIMINATOR_FIELD;
        if (is_object($value) && isset($value->{$fieldName})) {
            /** @var string $discriminatorValue */
            $discriminatorValue = $value->{$fieldName};
            if (isset(static::$discriminatorClasses[$discriminatorValue])) {
                return static::$discriminatorClasses[$discriminatorValue];
            }
        }
        if (is_array($value) && isset($value[$fieldName])) {
            /** @var string $discriminatorValue */
            $discriminatorValue = $value[$fieldName];
            if (isset(static::$discriminatorClasses[$discriminatorValue])) {
                return static::$discriminatorClasses[$discriminatorValue];
            }
        }

        /** @psalm-var class-string<FieldType> */
        $type = FieldTypeModel::class;

        return $type;
    }
}