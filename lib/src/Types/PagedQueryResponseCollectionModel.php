<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class PagedQueryResponseCollectionModel extends JsonCollection implements PagedQueryResponseCollection
{

    /**
     * @param PagedQueryResponse $value
     * @return PagedQueryResponseCollection
     */
    public function add($value) {
        if (!$value instanceof PagedQueryResponse) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return PagedQueryResponse
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof PagedQueryResponse) {
            $data = $this->mapData(PagedQueryResponse::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}