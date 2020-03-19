<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\MissingData;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use DateTimeImmutable;
use DateTimeImmutableModel;

/**
 * @internal
 */
final class MissingPricesTaskStatusModel extends JsonObjectModel implements MissingPricesTaskStatus
{

    /**
     * @var ?string
     */
    protected $state;

    /**
     * @var ?DateTimeImmutable
     */
    protected $expires;

    /**
     * @var ?MissingPricesPagedQueryResult
     */
    protected $result;


    public function __construct(
        string $state = null,
        DateTimeImmutable $expires = null,
        MissingPricesPagedQueryResult $result = null
    ) {
        $this->state = $state;
        $this->expires = $expires;
        $this->result = $result;

    }

    /**
     * @return null|string
     */
    public function getState()
    {
        if (is_null($this->state)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(MissingPricesTaskStatus::FIELD_STATE);
            if (is_null($data)) {
                return null;
            }
            $this->state = (string) $data;
        }

        return $this->state;
    }

    /**
     * <p>The expiry date of the result. You cannot access the result after the expiry date. Default: 1 day after the result first becomes available. This is only available when the TaskStatus state is SUCCESS.</p>
     *
     * @return null|DateTimeImmutable
     */
    public function getExpires()
    {
        if (is_null($this->expires)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(MissingPricesTaskStatus::FIELD_EXPIRES);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->expires = $data;
        }

        return $this->expires;
    }

    /**
     * <p>The response to an asynchronous request. The type depends on the request initiated. Only populated when the status is <code>SUCCESS</code>.</p>
     *
     * @return null|MissingPricesPagedQueryResult
     */
    public function getResult()
    {
        if (is_null($this->result)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(MissingPricesTaskStatus::FIELD_RESULT);
            if (is_null($data)) {
                return null;
            }

            $this->result = MissingPricesPagedQueryResultModel::of($data);
        }

        return $this->result;
    }

    public function setState(?string $state): void
    {
        $this->state = $state;
    }

    public function setExpires(?DateTimeImmutable $expires): void
    {
        $this->expires = $expires;
    }

    public function setResult(?MissingPricesPagedQueryResult $result): void
    {
        $this->result = $result;
    }


    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[MissingPricesTaskStatus::FIELD_EXPIRES]) && $data[MissingPricesTaskStatus::FIELD_EXPIRES] instanceof \DateTimeImmutable) {
            $data[MissingPricesTaskStatus::FIELD_EXPIRES] = $data[MissingPricesTaskStatus::FIELD_EXPIRES]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object) $data;
    }

}
