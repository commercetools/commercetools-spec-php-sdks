<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Test\Client\Resource;

use PHPUnit\Framework\TestCase;
use Commercetools\Api\Client\ApiRoot;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyInStoreKeyByStoreKeyOrdersByID;
use Psr\Http\Message\RequestInterface;

class ResourceByProjectKeyInStoreKeyByStoreKeyOrdersByIDTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyInStoreKeyByStoreKeyOrdersByIDGet_withExpand' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->orders()
                        ->withId("ID")
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                '{projectKey}/in-store/key={storeKey}/orders/{ID}?expand=expand',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyOrdersByIDGet' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->orders()
                        ->withId("ID")
                        ->get();
                },
                'get',
                '{projectKey}/in-store/key={storeKey}/orders/{ID}',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyOrdersByIDPost_withExpand' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->orders()
                        ->withId("ID")
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                '{projectKey}/in-store/key={storeKey}/orders/{ID}?expand=expand',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyOrdersByIDPost' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->orders()
                        ->withId("ID")
                        ->post(null);
                },
                'post',
                '{projectKey}/in-store/key={storeKey}/orders/{ID}',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyOrdersByIDDelete_withDataErasure' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->orders()
                        ->withId("ID")
                        ->delete()
                        ->withDataErasure('dataErasure');
                },
                'delete',
                '{projectKey}/in-store/key={storeKey}/orders/{ID}?dataErasure=dataErasure',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyOrdersByIDDelete_withVersion' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->orders()
                        ->withId("ID")
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                '{projectKey}/in-store/key={storeKey}/orders/{ID}?version=version',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyOrdersByIDDelete_withExpand' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->orders()
                        ->withId("ID")
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                '{projectKey}/in-store/key={storeKey}/orders/{ID}?expand=expand',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyOrdersByIDDelete' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->orders()
                        ->withId("ID")
                        ->delete();
                },
                'delete',
                '{projectKey}/in-store/key={storeKey}/orders/{ID}',
            ]
        ];
    }
    
    /**
     * @dataProvider getRequests()
     */
    public function testBuilder(callable $builderFunction, string $method, string $relativeUri, string $body = null)
    {
        $builder = new ApiRoot();
        $request = $builderFunction($builder);
        $this->assertSame(strtolower($method), strtolower($request->getMethod()));
        $this->assertStringContainsString(str_replace(['{', '}'], '', $relativeUri), (string)$request->getUri());
        if (!is_null($body)) {
            $this->assertJsonStringEqualsJsonString($body, (string)$request->getBody());
        };
    }
}