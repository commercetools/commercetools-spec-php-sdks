<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ChangeTransactionInteractionIdAction>
 */
final class ChangeTransactionInteractionIdActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $change;

    /**
     * @var null|TransactionActionValue|TransactionActionValueBuilder
     */
    private $transaction;

    /**
     * @var ?string
     */
    private $nextValue;

    /**
     * @var ?string
     */
    private $previousValue;

    /**
     * <p>Update action for <code>changeTransactionInteractionId</code> on payments</p>
     *
     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
    }

    /**
     * @return null|TransactionActionValue
     */
    public function getTransaction()
    {
        return $this->transaction instanceof TransactionActionValueBuilder ? $this->transaction->build() : $this->transaction;
    }

    /**
     * @return null|string
     */
    public function getNextValue()
    {
        return $this->nextValue;
    }

    /**
     * @return null|string
     */
    public function getPreviousValue()
    {
        return $this->previousValue;
    }

    /**
     * @param ?string $change
     * @return $this
     */
    public function withChange(?string $change)
    {
        $this->change = $change;

        return $this;
    }

    /**
     * @param ?TransactionActionValue $transaction
     * @return $this
     */
    public function withTransaction(?TransactionActionValue $transaction)
    {
        $this->transaction = $transaction;

        return $this;
    }

    /**
     * @param ?string $nextValue
     * @return $this
     */
    public function withNextValue(?string $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @param ?string $previousValue
     * @return $this
     */
    public function withPreviousValue(?string $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTransactionBuilder(?TransactionActionValueBuilder $transaction)
    {
        $this->transaction = $transaction;

        return $this;
    }

    public function build(): ChangeTransactionInteractionIdAction
    {
        return new ChangeTransactionInteractionIdActionModel(
            $this->change,
            $this->transaction instanceof TransactionActionValueBuilder ? $this->transaction->build() : $this->transaction,
            $this->nextValue,
            $this->previousValue
        );
    }

    public static function of(): ChangeTransactionInteractionIdActionBuilder
    {
        return new self();
    }
}