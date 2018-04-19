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
use Commercetools\Types\CartDiscount\CartDiscount;
use Commercetools\Builder\CartDiscountUpdateBuilder;

use Commercetools\Types\CartDiscount\CartDiscountDraft;


class ResourceByProjectKeyCartDiscounts extends Resource
{
    /**
     * @return ResourceByProjectKeyCartDiscountsByID
     */
    public function withId($ID = null): ResourceByProjectKeyCartDiscountsByID {
        $args = array_merge($this->getArgs(), array_filter(['ID' => $ID], function($value) { return !is_null($value); }));
        return new ResourceByProjectKeyCartDiscountsByID($this->getUri() . '/{ID}', $args, $this->getMapper());
    }


    /**
     * @return ByProjectKeyCartDiscountsGet
     */
    public function get(): ByProjectKeyCartDiscountsGet {
        $args = $this->getArgs();
        return new ByProjectKeyCartDiscountsGet($args['projectKey']);
    }
    /**
     * @param CartDiscountDraft $body
     * @return ByProjectKeyCartDiscountsPost
     */
    public function post(CartDiscountDraft $body = null): ByProjectKeyCartDiscountsPost {
        $args = $this->getArgs();
        return new ByProjectKeyCartDiscountsPost($args['projectKey'], $body);
    }


    /**
     * @param CartDiscount $cartDiscount
     * @return CartDiscountUpdateBuilder
     */
    public function update(CartDiscount $cartDiscount): CartDiscountUpdateBuilder
    {
        $builder = new CartDiscountUpdateBuilder(function(CartDiscountUpdateBuilder $builder) { return $this->withId($builder->getResource()->getId())->post($builder->build()); });
        $builder->with($cartDiscount);
        if ($cartDiscount instanceof MapperAware) {
            $builder->setMapper($cartDiscount->getMapper());
        }
        return $builder;
    }

    /**
     * @param CartDiscount $cartDiscount
     * @return ByProjectKeyCartDiscountsByIDDelete
     */
    public function delete(CartDiscount $cartDiscount): ByProjectKeyCartDiscountsByIDDelete
    {
        return $this->withId($cartDiscount->getId())->delete()->withVersion($cartDiscount->getVersion());
    }

    /**
     * @param CartDiscountDraft|callable $cartDiscountDraft builder function <code>
     *   function(CartDiscountDraft $cartDiscountDraft): CartDiscountDraft {
     *     // modify $draft as needed
     *     return $cartDiscountDraft;
     *   }
     *   </code>
     * @throws InvalidArgumentException
     * @return ByProjectKeyCartDiscountsPost
     */
    public function create($cartDiscountDraft): ByProjectKeyCartDiscountsPost
    {
        if (is_callable($cartDiscountDraft)) {
            $callback = $cartDiscountDraft;
            $emptyDraft = $this->mapData(CartDiscountDraft::class, null);
            $cartDiscountDraft = $callback($emptyDraft);
        }
        if (!$cartDiscountDraft instanceof CartDiscountDraft) {
            throw new InvalidArgumentException();
        }
        return $this->post($cartDiscountDraft);
    }
}