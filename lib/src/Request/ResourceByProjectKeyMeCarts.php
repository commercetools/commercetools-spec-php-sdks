<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Types\Me\MyCartDraft;


class ResourceByProjectKeyMeCarts extends Resource
{
    /**
     * @return ResourceByProjectKeyMeCartsByID
     */
    public function withId($ID = null): ResourceByProjectKeyMeCartsByID {
        $args = array_merge($this->getArgs(), array_filter(['ID' => $ID], function($value) { return !is_null($value); }));
        return new ResourceByProjectKeyMeCartsByID($this->getUri() . '/{ID}', $args, $this->getMapper());
    }


    /**
     * @return ByProjectKeyMeCartsGet
     */
    public function get(): ByProjectKeyMeCartsGet {
        $args = $this->getArgs();
        return new ByProjectKeyMeCartsGet($args['projectKey']);
    }
    /**
     * @param MyCartDraft $body
     * @return ByProjectKeyMeCartsPost
     */
    public function post(MyCartDraft $body = null): ByProjectKeyMeCartsPost {
        $args = $this->getArgs();
        return new ByProjectKeyMeCartsPost($args['projectKey'], $body);
    }

}