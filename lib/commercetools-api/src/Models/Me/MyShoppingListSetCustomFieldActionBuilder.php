<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;

/**
 * @implements Builder<MyShoppingListSetCustomFieldAction>
 */
final class MyShoppingListSetCustomFieldActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $action;

    /**
     * @var ?string
     */
    private $name;

    /**
     * @var ?JsonObject
     */
    private $value;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return null|JsonObject
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @return $this
     */
    public function withAction(?string $action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * @return $this
     */
    public function withName(?string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return $this
     */
    public function withValue(?JsonObject $value)
    {
        $this->value = $value;

        return $this;
    }

    public function build(): MyShoppingListSetCustomFieldAction
    {
        return new MyShoppingListSetCustomFieldActionModel(
            $this->action,
            $this->name,
            $this->value
        );
    }

    public static function of(): MyShoppingListSetCustomFieldActionBuilder
    {
        return new self();
    }
}