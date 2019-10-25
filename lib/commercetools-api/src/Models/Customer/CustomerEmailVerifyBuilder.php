<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\Builder;

/**
 * @implements Builder<CustomerEmailVerify>
 */
final class CustomerEmailVerifyBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $tokenValue;

    /**
     * @var ?int
     */
    private $version;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getTokenValue()
    {
        return $this->tokenValue;
    }

    /**
     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @return $this
     */
    public function withTokenValue(?string $tokenValue)
    {
        $this->tokenValue = $tokenValue;

        return $this;
    }

    /**
     * @return $this
     */
    public function withVersion(?int $version)
    {
        $this->version = $version;

        return $this;
    }

    public function build(): CustomerEmailVerify
    {
        return new CustomerEmailVerifyModel(
            $this->tokenValue,
            $this->version
        );
    }

    public static function of(): CustomerEmailVerifyBuilder
    {
        return new self();
    }
}