<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Common;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class AssetDimensionsModel extends JsonObjectModel implements AssetDimensions
{
    /**
     * @var ?int
     */
    protected $w;

    /**
     * @var ?int
     */
    protected $h;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?int $w = null,
        ?int $h = null
    ) {
        $this->w = $w;
        $this->h = $h;
    }

    /**
     * <p>The width of the asset source.</p>
     *
     * @return null|int
     */
    public function getW()
    {
        if (is_null($this->w)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_W);
            if (is_null($data)) {
                return null;
            }
            $this->w = (int) $data;
        }

        return $this->w;
    }

    /**
     * <p>The height of the asset source.</p>
     *
     * @return null|int
     */
    public function getH()
    {
        if (is_null($this->h)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_H);
            if (is_null($data)) {
                return null;
            }
            $this->h = (int) $data;
        }

        return $this->h;
    }


    /**
     * @param ?int $w
     */
    public function setW(?int $w): void
    {
        $this->w = $w;
    }

    /**
     * @param ?int $h
     */
    public function setH(?int $h): void
    {
        $this->h = $h;
    }
}
