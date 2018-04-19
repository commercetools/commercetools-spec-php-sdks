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
use Commercetools\Types\Type\Type;
use Commercetools\Builder\TypeUpdateBuilder;

use Commercetools\Types\Type\TypeDraft;


class ResourceByProjectKeyTypes extends Resource
{
    /**
     * @return ResourceByProjectKeyTypesKeyByKey
     */
    public function withKey($key = null): ResourceByProjectKeyTypesKeyByKey {
        $args = array_merge($this->getArgs(), array_filter(['key' => $key], function($value) { return !is_null($value); }));
        return new ResourceByProjectKeyTypesKeyByKey($this->getUri() . '/key={key}', $args, $this->getMapper());
    }
    /**
     * @return ResourceByProjectKeyTypesByID
     */
    public function withId($ID = null): ResourceByProjectKeyTypesByID {
        $args = array_merge($this->getArgs(), array_filter(['ID' => $ID], function($value) { return !is_null($value); }));
        return new ResourceByProjectKeyTypesByID($this->getUri() . '/{ID}', $args, $this->getMapper());
    }


    /**
     * @return ByProjectKeyTypesGet
     */
    public function get(): ByProjectKeyTypesGet {
        $args = $this->getArgs();
        return new ByProjectKeyTypesGet($args['projectKey']);
    }
    /**
     * @param TypeDraft $body
     * @return ByProjectKeyTypesPost
     */
    public function post(TypeDraft $body = null): ByProjectKeyTypesPost {
        $args = $this->getArgs();
        return new ByProjectKeyTypesPost($args['projectKey'], $body);
    }


    /**
     * @param Type $type
     * @return TypeUpdateBuilder
     */
    public function update(Type $type): TypeUpdateBuilder
    {
        $builder = new TypeUpdateBuilder(function(TypeUpdateBuilder $builder) { return $this->withId($builder->getResource()->getId())->post($builder->build()); });
        $builder->with($type);
        if ($type instanceof MapperAware) {
            $builder->setMapper($type->getMapper());
        }
        return $builder;
    }

    /**
     * @param Type $type
     * @return ByProjectKeyTypesByIDDelete
     */
    public function delete(Type $type): ByProjectKeyTypesByIDDelete
    {
        return $this->withId($type->getId())->delete()->withVersion($type->getVersion());
    }

    /**
     * @param TypeDraft|callable $typeDraft builder function <code>
     *   function(TypeDraft $typeDraft): TypeDraft {
     *     // modify $draft as needed
     *     return $typeDraft;
     *   }
     *   </code>
     * @throws InvalidArgumentException
     * @return ByProjectKeyTypesPost
     */
    public function create($typeDraft): ByProjectKeyTypesPost
    {
        if (is_callable($typeDraft)) {
            $callback = $typeDraft;
            $emptyDraft = $this->mapData(TypeDraft::class, null);
            $typeDraft = $callback($emptyDraft);
        }
        if (!$typeDraft instanceof TypeDraft) {
            throw new InvalidArgumentException();
        }
        return $this->post($typeDraft);
    }
}