<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Errors;

use Commercetools\Base\Builder;
use Commercetools\Import\Models\Productvariants\Attribute;
use Commercetools\Import\Models\Productvariants\AttributeBuilder;

/**
 * @implements Builder<DuplicateAttributeValueError>
 */
final class DuplicateAttributeValueErrorBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $code;

    /**
     * @var ?string
     */
    private $message;

    /**
     * @var Attribute|?AttributeBuilder
     */
    private $attribute;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * <p>The error's description.</p>.
     *
     * @return null|string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * <p>The conflicting attribute.</p>.
     *
     * @return null|Attribute
     */
    public function getAttribute()
    {
        return $this->attribute instanceof AttributeBuilder ? $this->attribute->build() : $this->attribute;
    }

    /**
     * @return $this
     */
    public function withCode(?string $code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * @return $this
     */
    public function withMessage(?string $message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * @return $this
     */
    public function withAttribute(?Attribute $attribute)
    {
        $this->attribute = $attribute;

        return $this;
    }

    /**
     * @return $this
     */
    public function withAttributeBuilder(?AttributeBuilder $attribute)
    {
        $this->attribute = $attribute;

        return $this;
    }

    public function build(): DuplicateAttributeValueError
    {
        return new DuplicateAttributeValueErrorModel(
            $this->code,
            $this->message,
            ($this->attribute instanceof AttributeBuilder ? $this->attribute->build() : $this->attribute)
        );
    }

    public static function of(): DuplicateAttributeValueErrorBuilder
    {
        return new self();
    }
}