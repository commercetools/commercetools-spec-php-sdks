<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ChangeLocalizedDescriptionActionModel extends JsonObjectModel implements ChangeLocalizedDescriptionAction
{
    public const DISCRIMINATOR_VALUE = 'ChangeLocalizedDescriptionAction';
    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?string
     */
    protected $change;

    /**
     * @var ?LocalizedString
     */
    protected $previousValue;

    /**
     * @var ?LocalizedString
     */
    protected $nextValue;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $change = null,
        ?LocalizedString $previousValue = null,
        ?LocalizedString $nextValue = null
    ) {
        $this->change = $change;
        $this->previousValue = $previousValue;
        $this->nextValue = $nextValue;
        $this->type = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type =  (string) $data;
        }

        return $this->type;
    }

    /**
     * <p>Shape of the action for <code>changeDescription</code></p>
     *
     * @return null|string
     */
    public function getChange()
    {
        if (is_null($this->change)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CHANGE);
            if (is_null($data)) {
                return null;
            }
            $this->change =  (string) $data;
        }

        return $this->change;
    }

    /**
     * @return null|LocalizedString
     */
    public function getPreviousValue()
    {
        if (is_null($this->previousValue)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PREVIOUS_VALUE);
            if (is_null($data)) {
                return null;
            }

            $this->previousValue =  LocalizedStringModel::of($data);
        }

        return $this->previousValue;
    }

    /**
     * @return null|LocalizedString
     */
    public function getNextValue()
    {
        if (is_null($this->nextValue)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_NEXT_VALUE);
            if (is_null($data)) {
                return null;
            }

            $this->nextValue =  LocalizedStringModel::of($data);
        }

        return $this->nextValue;
    }


    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void
    {
        $this->change = $change;
    }

    /**
     * @param ?LocalizedString $previousValue
     */
    public function setPreviousValue(?LocalizedString $previousValue): void
    {
        $this->previousValue = $previousValue;
    }

    /**
     * @param ?LocalizedString $nextValue
     */
    public function setNextValue(?LocalizedString $nextValue): void
    {
        $this->nextValue = $nextValue;
    }



}