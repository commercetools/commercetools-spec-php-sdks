<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use Commercetools\Api\Client\ApiRequestBuilder;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyPaymentsByID;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyPaymentsKeyByKey;
use Commercetools\Base\JsonObject;
use Commercetools\Client\ApiRequest;
use Commercetools\Exception\ApiClientException;
use Commercetools\Exception\ApiServerException;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Prophecy\Argument;
use Psr\Http\Message\RequestInterface;

/**
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyPaymentsGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyPaymentsPost
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyPayments
 */
class ResourceByProjectKeyPaymentsTest extends TestCase
{
    /**
     * @dataProvider getRequests()
     */
    public function testBuilder(callable $builderFunction, string $method, string $relativeUri, string $body = null)
    {
        $builder = new ApiRequestBuilder();
        $request = $builderFunction($builder);
        $this->assertSame(strtolower($method), strtolower($request->getMethod()));
        $this->assertStringContainsString(str_replace(['{', '}'], '', $relativeUri), (string) $request->getUri());
        if (!is_null($body)) {
            $this->assertJsonStringEqualsJsonString($body, (string) $request->getBody());
        } else {
            $this->assertSame("", (string) $request->getBody());
        }
    }

    /**
     * @dataProvider getResources()
     */
    public function testResources(callable $builderFunction, string $class, array $expectedArgs)
    {
        $builder = new ApiRequestBuilder();
        $resource = $builderFunction($builder);
        $this->assertInstanceOf($class, $resource);
        $this->assertEquals($expectedArgs, $resource->getArgs());
    }

    /**
     * @dataProvider getRequestBuilderResponses()
     */
    public function testMapFromResponse(callable $builderFunction, $statusCode)
    {
        $builder = new ApiRequestBuilder();
        $request = $builderFunction($builder);
        $this->assertInstanceOf(ApiRequest::class, $request);

        $response = new Response($statusCode, [], "{}");
        $this->assertInstanceOf(JsonObject::class, $request->mapFromResponse($response));
    }

    /**
     * @dataProvider getRequestBuilders()
     */
    public function testExecuteClientException(callable $builderFunction)
    {
        $client = $this->prophesize(ClientInterface::class);
        $client->send(Argument::any(), Argument::any())->willThrow(ClientException::class);

        $builder = new ApiRequestBuilder($client->reveal());
        $request = $builderFunction($builder);
        $this->expectException(ApiClientException::class);
        $request->execute();
    }

    /**
     * @dataProvider getRequestBuilders()
     */
    public function testExecuteServerException(callable $builderFunction)
    {
        $client = $this->prophesize(ClientInterface::class);
        $client->send(Argument::any(), Argument::any())->willThrow(ServerException::class);

        $builder = new ApiRequestBuilder($client->reveal());
        $request = $builderFunction($builder);
        $this->expectException(ApiServerException::class);
        $request->execute();
    }

    public function getRequests()
    {
        return [
            'ByProjectKeyPaymentsGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->payments()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                '{projectKey}/payments?expand=expand',
            ],
            'ByProjectKeyPaymentsGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->payments()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                '{projectKey}/payments?sort=sort',
            ],
            'ByProjectKeyPaymentsGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->payments()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                '{projectKey}/payments?limit=limit',
            ],
            'ByProjectKeyPaymentsGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->payments()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                '{projectKey}/payments?offset=offset',
            ],
            'ByProjectKeyPaymentsGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->payments()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                '{projectKey}/payments?withTotal=withTotal',
            ],
            'ByProjectKeyPaymentsGet_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->payments()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                '{projectKey}/payments?where=where',
            ],
            'ByProjectKeyPaymentsGet_withPredicateVar' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->payments()
                        ->get()
                        ->withPredicateVar('varName', 'var.varName');
                },
                'get',
                '{projectKey}/payments?var.varName=var.varName',
            ],
            'ByProjectKeyPaymentsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->get();
                },
                'get',
                '{projectKey}/payments',
            ],
            'ByProjectKeyPaymentsPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->payments()
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                '{projectKey}/payments?expand=expand',
            ],
            'ByProjectKeyPaymentsPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->post(null);
                },
                'post',
                '{projectKey}/payments',
            ]
        ];
    }

    public function getResources()
    {
        return [
            'ResourceByProjectKeyPaymentsKeyByKey' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyPaymentsKeyByKey {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->withKey("key");
                },
                ResourceByProjectKeyPaymentsKeyByKey::class,
                ['projectKey' => 'projectKey', 'key' => 'key'],
                '/{projectKey}/payments/key={key}'
            ],
            'ResourceByProjectKeyPaymentsByID' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyPaymentsByID {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->withId("ID");
                },
                ResourceByProjectKeyPaymentsByID::class,
                ['projectKey' => 'projectKey', 'ID' => 'ID'],
                '/{projectKey}/payments/{ID}'
            ]
        ];
    }

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyPaymentsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->get();
                }
            ],
            'ByProjectKeyPaymentsPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->post(null);
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyPaymentsGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->get();
                },
                200
            ],
            'ByProjectKeyPaymentsGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->get();
                },
                400
            ],
            'ByProjectKeyPaymentsGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->get();
                },
                401
            ],
            'ByProjectKeyPaymentsGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->get();
                },
                403
            ],
            'ByProjectKeyPaymentsGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->get();
                },
                404
            ],
            'ByProjectKeyPaymentsGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->get();
                },
                500
            ],
            'ByProjectKeyPaymentsGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->get();
                },
                503
            ],
            'ByProjectKeyPaymentsPost_201' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->post(null);
                },
                201
            ],
            'ByProjectKeyPaymentsPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyPaymentsPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyPaymentsPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyPaymentsPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyPaymentsPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyPaymentsPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyPaymentsPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->post(null);
                },
                200
            ]
        ];
    }
}
