<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\JsonObjectModel;

final class OutOfStockErrorModel extends JsonObjectModel implements OutOfStockError
{
    const DISCRIMINATOR_VALUE = 'OutOfStock';

    /**
     * @var ?string
     */
    protected $code;

    /**
     * @var ?string
     */
    protected $message;

    /**
     * @var ?array
     */
    protected $lineItems;

    /**
     * @var ?array
     */
    protected $skus;

    public function __construct(
        string $code = null,
        string $message = null,
        array $lineItems = null,
        array $skus = null
    ) {
        $this->code = $code;
        $this->message = $message;
        $this->lineItems = $lineItems;
        $this->skus = $skus;
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
     * @return null|array
     */
    public function getLineItems()
    {
        if (is_null($this->lineItems)) {
            /** @psalm-var ?array<int, mixed> $data */
            $data = $this->raw(OutOfStockError::FIELD_LINE_ITEMS);
            if (is_null($data)) {
                return null;
            }
            $this->lineItems = $data;
        }

        return $this->lineItems;
    }

    /**
     * @return null|array
     */
    public function getSkus()
    {
        if (is_null($this->skus)) {
            /** @psalm-var ?array<int, mixed> $data */
            $data = $this->raw(OutOfStockError::FIELD_SKUS);
            if (is_null($data)) {
                return null;
            }
            $this->skus = $data;
        }

        return $this->skus;
    }

    public function setCode(?string $code): void
    {
        $this->code = $code;
    }

    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }

    public function setLineItems(?array $lineItems): void
    {
        $this->lineItems = $lineItems;
    }

    public function setSkus(?array $skus): void
    {
        $this->skus = $skus;
    }
}