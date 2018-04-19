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
use Commercetools\Types\ProductType\ProductType;
use Commercetools\Builder\ProductTypeUpdateBuilder;

use Commercetools\Types\ProductType\ProductTypeDraft;


class ResourceByProjectKeyProductTypes extends Resource
{
    /**
     * @return ResourceByProjectKeyProductTypesKeyByKey
     */
    public function withKey($key = null): ResourceByProjectKeyProductTypesKeyByKey {
        $args = array_merge($this->getArgs(), array_filter(['key' => $key], function($value) { return !is_null($value); }));
        return new ResourceByProjectKeyProductTypesKeyByKey($this->getUri() . '/key={key}', $args, $this->getMapper());
    }
    /**
     * @return ResourceByProjectKeyProductTypesByID
     */
    public function withId($ID = null): ResourceByProjectKeyProductTypesByID {
        $args = array_merge($this->getArgs(), array_filter(['ID' => $ID], function($value) { return !is_null($value); }));
        return new ResourceByProjectKeyProductTypesByID($this->getUri() . '/{ID}', $args, $this->getMapper());
    }


    /**
     * @return ByProjectKeyProductTypesGet
     */
    public function get(): ByProjectKeyProductTypesGet {
        $args = $this->getArgs();
        return new ByProjectKeyProductTypesGet($args['projectKey']);
    }
    /**
     * @param ProductTypeDraft $body
     * @return ByProjectKeyProductTypesPost
     */
    public function post(ProductTypeDraft $body = null): ByProjectKeyProductTypesPost {
        $args = $this->getArgs();
        return new ByProjectKeyProductTypesPost($args['projectKey'], $body);
    }


    /**
     * @param ProductType $productType
     * @return ProductTypeUpdateBuilder
     */
    public function update(ProductType $productType): ProductTypeUpdateBuilder
    {
        $builder = new ProductTypeUpdateBuilder(function(ProductTypeUpdateBuilder $builder) { return $this->withId($builder->getResource()->getId())->post($builder->build()); });
        $builder->with($productType);
        if ($productType instanceof MapperAware) {
            $builder->setMapper($productType->getMapper());
        }
        return $builder;
    }

    /**
     * @param ProductType $productType
     * @return ByProjectKeyProductTypesByIDDelete
     */
    public function delete(ProductType $productType): ByProjectKeyProductTypesByIDDelete
    {
        return $this->withId($productType->getId())->delete()->withVersion($productType->getVersion());
    }

    /**
     * @param ProductTypeDraft|callable $productTypeDraft builder function <code>
     *   function(ProductTypeDraft $productTypeDraft): ProductTypeDraft {
     *     // modify $draft as needed
     *     return $productTypeDraft;
     *   }
     *   </code>
     * @throws InvalidArgumentException
     * @return ByProjectKeyProductTypesPost
     */
    public function create($productTypeDraft): ByProjectKeyProductTypesPost
    {
        if (is_callable($productTypeDraft)) {
            $callback = $productTypeDraft;
            $emptyDraft = $this->mapData(ProductTypeDraft::class, null);
            $productTypeDraft = $callback($emptyDraft);
        }
        if (!$productTypeDraft instanceof ProductTypeDraft) {
            throw new InvalidArgumentException();
        }
        return $this->post($productTypeDraft);
    }
}