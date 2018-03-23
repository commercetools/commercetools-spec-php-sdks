<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Base\Collection;

interface CustomFieldLocalizedEnumValueCollection extends Collection {
    /**
     * @param $index
     * @return CustomFieldLocalizedEnumValue
     */
    public function at($index);

    /**
     * @return CustomFieldLocalizedEnumValue
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CustomFieldLocalizedEnumValue
     */
    public function map($data, $index);
}