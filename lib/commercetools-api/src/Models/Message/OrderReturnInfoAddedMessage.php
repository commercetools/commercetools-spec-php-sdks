<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Order\ReturnInfo;

interface OrderReturnInfoAddedMessage extends Message
{
    const FIELD_RETURN_INFO = 'returnInfo';

    /**
     * @return null|ReturnInfo
     */
    public function getReturnInfo();

    public function setReturnInfo(?ReturnInfo $returnInfo): void;
}