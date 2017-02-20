<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class TaxCategoryReference extends Reference {
    protected $obj;
    const DISCRIMINATOR_VALUE = 'tax-category';

    /**
     * @return TaxCategory
     */
    public function getObj(): TaxCategory
    {
        if (is_null($this->obj)) {
            $value = $this->raw('obj');
            if (!is_null($value)) {
                $this->obj = Mapper::map($value, TaxCategory::class);
            } else {
                return Mapper::map([], TaxCategory::class);
            }
        }
        return $this->obj;
    }
                
}
