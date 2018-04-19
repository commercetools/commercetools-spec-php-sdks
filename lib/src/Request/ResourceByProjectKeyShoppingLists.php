<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Base\MapperAware;
use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\ShoppingList\ShoppingList;
use Commercetools\Builder\ShoppingListUpdateBuilder;

use Commercetools\Types\ShoppingList\ShoppingListDraft;


class ResourceByProjectKeyShoppingLists extends Resource
{
    /**
     * @return ResourceByProjectKeyShoppingListsKeyByKey
     */
    public function withKey($key = null): ResourceByProjectKeyShoppingListsKeyByKey {
        $args = array_merge($this->getArgs(), array_filter(['key' => $key], function($value) { return !is_null($value); }));
        return new ResourceByProjectKeyShoppingListsKeyByKey($this->getUri() . '/key={key}', $args, $this->getMapper());
    }
    /**
     * @return ResourceByProjectKeyShoppingListsByID
     */
    public function withId($ID = null): ResourceByProjectKeyShoppingListsByID {
        $args = array_merge($this->getArgs(), array_filter(['ID' => $ID], function($value) { return !is_null($value); }));
        return new ResourceByProjectKeyShoppingListsByID($this->getUri() . '/{ID}', $args, $this->getMapper());
    }


    /**
     * @return ByProjectKeyShoppingListsGet
     */
    public function get(): ByProjectKeyShoppingListsGet {
        $args = $this->getArgs();
        return new ByProjectKeyShoppingListsGet($args['projectKey']);
    }
    /**
     * @param ShoppingListDraft $body
     * @return ByProjectKeyShoppingListsPost
     */
    public function post(ShoppingListDraft $body = null): ByProjectKeyShoppingListsPost {
        $args = $this->getArgs();
        return new ByProjectKeyShoppingListsPost($args['projectKey'], $body);
    }


    /**
     * @param ShoppingList $shoppingList
     * @return ShoppingListUpdateBuilder
     */
    public function update(ShoppingList $shoppingList): ShoppingListUpdateBuilder
    {
        $builder = new ShoppingListUpdateBuilder(function(ShoppingListUpdateBuilder $builder) { return $this->withId($builder->getResource()->getId())->post($builder->build()); });
        $builder->with($shoppingList);
        if ($shoppingList instanceof MapperAware) {
            $builder->setMapper($shoppingList->getMapper());
        }
        return $builder;
    }

    /**
     * @param ShoppingList $shoppingList
     * @return ByProjectKeyShoppingListsByIDDelete
     */
    public function delete(ShoppingList $shoppingList): ByProjectKeyShoppingListsByIDDelete
    {
        return $this->withId($shoppingList->getId())->delete()->withVersion($shoppingList->getVersion());
    }

    /**
     * @param ShoppingListDraft|callable $shoppingListDraft builder function <code>
     *   function(ShoppingListDraft $shoppingListDraft): ShoppingListDraft {
     *     // modify $draft as needed
     *     return $shoppingListDraft;
     *   }
     *   </code>
     * @throws InvalidArgumentException
     * @return ByProjectKeyShoppingListsPost
     */
    public function create($shoppingListDraft): ByProjectKeyShoppingListsPost
    {
        if (is_callable($shoppingListDraft)) {
            $callback = $shoppingListDraft;
            $emptyDraft = $this->mapData(ShoppingListDraft::class, null);
            $shoppingListDraft = $callback($emptyDraft);
        }
        if (!$shoppingListDraft instanceof ShoppingListDraft) {
            throw new InvalidArgumentException();
        }
        return $this->post($shoppingListDraft);
    }
}