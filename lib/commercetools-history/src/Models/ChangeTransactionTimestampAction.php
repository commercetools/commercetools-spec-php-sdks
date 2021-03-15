<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface ChangeTransactionTimestampAction extends Action
{

    public const FIELD_TRANSACTION = 'transaction';
    public const FIELD_NEXT_VALUE = 'nextValue';
    public const FIELD_PREVIOUS_VALUE = 'previousValue';

    /**
     * <p>Update action for <code>changeTransactionTimestamp</code> on payments</p>
     *
     * @return null|string
     */
    public function getChange();

    /**
     * @return null|string
     */
    public function getType();

    /**
     * @return null|TransactionActionValue
     */
    public function getTransaction();

    /**
     * @return null|string
     */
    public function getNextValue();

    /**
     * @return null|string
     */
    public function getPreviousValue();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?TransactionActionValue $transaction
     */
    public function setTransaction(?TransactionActionValue $transaction): void;

    /**
     * @param ?string $nextValue
     */
    public function setNextValue(?string $nextValue): void;

    /**
     * @param ?string $previousValue
     */
    public function setPreviousValue(?string $previousValue): void;
}