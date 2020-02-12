<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

final class ReferenceExistsErrorModel extends JsonObjectModel implements ReferenceExistsError
{
    public const DISCRIMINATOR_VALUE = 'ReferenceExists';
    /**
     * @var ?string
     */
    protected $code;

    /**
     * @var ?string
     */
    protected $message;

    /**
     * @var ?string
     */
    protected $referencedBy;


    public function __construct(
        string $message = null,
        string $referencedBy = null
    ) {
        $this->message = $message;
        $this->referencedBy = $referencedBy;
        $this->code = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getCode()
    {
        if (is_null($this->code)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ErrorObject::FIELD_CODE);
            if (is_null($data)) {
                return null;
            }
            $this->code = (string) $data;
        }

        return $this->code;
    }

    /**
     * @return null|string
     */
    public function getMessage()
    {
        if (is_null($this->message)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ErrorObject::FIELD_MESSAGE);
            if (is_null($data)) {
                return null;
            }
            $this->message = (string) $data;
        }

        return $this->message;
    }

    /**
     * @return null|string
     */
    public function getReferencedBy()
    {
        if (is_null($this->referencedBy)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ReferenceExistsError::FIELD_REFERENCED_BY);
            if (is_null($data)) {
                return null;
            }
            $this->referencedBy = (string) $data;
        }

        return $this->referencedBy;
    }

    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }

    public function setReferencedBy(?string $referencedBy): void
    {
        $this->referencedBy = $referencedBy;
    }
}
