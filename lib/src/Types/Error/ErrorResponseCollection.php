<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Error;

use Commercetools\Base\Collection;

interface ErrorResponseCollection extends Collection
{
    /**
     * @param $index
     * @return ErrorResponse
     */
    public function at($index);

    /**
     * @return ErrorResponse
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ErrorResponse
     */
    public function map($data, $index);
}