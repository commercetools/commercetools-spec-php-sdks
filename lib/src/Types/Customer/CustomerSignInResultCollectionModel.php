<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class CustomerSignInResultCollectionModel extends JsonCollection implements CustomerSignInResultCollection
{

    /**
     * @param CustomerSignInResult $value
     * @return CustomerSignInResultCollection
     */
    public function add($value) {
        if (!$value instanceof CustomerSignInResult) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CustomerSignInResult
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CustomerSignInResult) {
            $data = $this->mapData(CustomerSignInResult::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}