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
final class ChangeValueRelativeActionValueModel extends JsonObjectModel implements ChangeValueRelativeActionValue
{
    public const DISCRIMINATOR_VALUE = 'relative';
    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?int
     */
    protected $permyriad;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?int $permyriad = null
    ) {
        $this->permyriad = $permyriad;
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
     * @return null|int
     */
    public function getPermyriad()
    {
        if (is_null($this->permyriad)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_PERMYRIAD);
            if (is_null($data)) {
                return null;
            }
            $this->permyriad =  (int) $data;
        }

        return $this->permyriad;
    }


    /**
     * @param ?int $permyriad
     */
    public function setPermyriad(?int $permyriad): void
    {
        $this->permyriad = $permyriad;
    }



}