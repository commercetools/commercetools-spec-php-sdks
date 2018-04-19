<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Message\MessageModel;

class CustomerCompanyNameSetMessageModel extends MessageModel implements CustomerCompanyNameSetMessage
{
    const DISCRIMINATOR_VALUE = 'CustomerCompanyNameSet';

    /**
     * @var string
     */
    protected $companyName;

    /**
     * @return string
     */
    public function getCompanyName()
    {
        if (is_null($this->companyName)) {
            $value = $this->raw(CustomerCompanyNameSetMessage::FIELD_COMPANY_NAME);
            $value = (string)$value;
            $this->companyName = $value;
        }
        return $this->companyName;
    }

    /**
     * @param string $companyName
     * @return $this
     */
    public function setCompanyName(string $companyName)
    {
        $this->companyName = (string)$companyName;

        return $this;
    }

}