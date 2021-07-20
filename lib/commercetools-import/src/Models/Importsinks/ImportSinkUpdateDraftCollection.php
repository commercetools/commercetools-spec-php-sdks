<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importsinks;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ImportSinkUpdateDraft>
 * @method ImportSinkUpdateDraft current()
 * @method ImportSinkUpdateDraft at($offset)
 */
class ImportSinkUpdateDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert ImportSinkUpdateDraft $value
     * @psalm-param ImportSinkUpdateDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ImportSinkUpdateDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof ImportSinkUpdateDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ImportSinkUpdateDraft
     */
    protected function mapper()
    {
        return function (int $index): ?ImportSinkUpdateDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ImportSinkUpdateDraft $data */
                $data = ImportSinkUpdateDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
