<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\State;

use Commercetools\Base\Collection;

interface StateCollection extends Collection {
    /**
     * @param $index
     * @return State
     */
    public function at($index);

    /**
     * @return State
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return State
     */
    public function map($data, $index);

    /**
     * @param $id
     * @return string
     */
    public function byId($id);
}