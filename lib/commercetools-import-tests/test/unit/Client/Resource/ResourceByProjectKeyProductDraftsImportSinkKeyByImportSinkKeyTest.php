<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Test\Client\Resource;

use Commercetools\Base\JsonObject;
use Commercetools\Client\ApiRequest;
use Commercetools\Exception\ApiClientException;
use Commercetools\Exception\ApiServerException;
use Commercetools\Import\Client\ImportRequestBuilder;
use Commercetools\Import\Client\Resource\ResourceByProjectKeyProductDraftsImportSinkKeyByImportSinkKeyImportOperations;
use Commercetools\Import\Client\Resource\ResourceByProjectKeyProductDraftsImportSinkKeyByImportSinkKeyResourceKeyByResourceKey;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Prophecy\Argument;
use Psr\Http\Message\RequestInterface;

/**
 * @covers \Commercetools\Import\Client\Resource\ByProjectKeyProductDraftsImportSinkKeyByImportSinkKeyPost
 * @covers \Commercetools\Import\Client\Resource\ResourceByProjectKeyProductDraftsImportSinkKeyByImportSinkKey
 */
class ResourceByProjectKeyProductDraftsImportSinkKeyByImportSinkKeyTest extends TestCase
{
    /**
     * @dataProvider getRequests()
     */
    public function testBuilder(callable $builderFunction, string $method, string $relativeUri, string $body = null)
    {
        $builder = new ImportRequestBuilder();
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
        $builder = new ImportRequestBuilder();
        $resource = $builderFunction($builder);
        $this->assertInstanceOf($class, $resource);
        $this->assertEquals($expectedArgs, $resource->getArgs());
    }

    /**
     * @dataProvider getRequestBuilderResponses()
     */
    public function testMapFromResponse(callable $builderFunction, $statusCode)
    {
        $builder = new ImportRequestBuilder();
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

        $builder = new ImportRequestBuilder($client->reveal());
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

        $builder = new ImportRequestBuilder($client->reveal());
        $request = $builderFunction($builder);
        $this->expectException(ApiServerException::class);
        $request->execute();
    }

    public function getRequests()
    {
        return [
            'ByProjectKeyProductDraftsImportSinkKeyByImportSinkKeyPost' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->productDrafts()
                        ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
                        ->post(null);
                },
                'post',
                '{projectKey}/product-drafts/importSinkKey={importSinkKey}',
            ]
        ];
    }

    public function getResources()
    {
        return [
            'ResourceByProjectKeyProductDraftsImportSinkKeyByImportSinkKeyResourceKeyByResourceKey' => [
                function (ImportRequestBuilder $builder): ResourceByProjectKeyProductDraftsImportSinkKeyByImportSinkKeyResourceKeyByResourceKey {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->productDrafts()
                        ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
                        ->resourceKeyWithResourceKeyValue("resourceKey");
                },
                ResourceByProjectKeyProductDraftsImportSinkKeyByImportSinkKeyResourceKeyByResourceKey::class,
                ['projectKey' => 'projectKey', 'importSinkKey' => 'importSinkKey', 'resourceKey' => 'resourceKey'],
                '/{projectKey}/product-drafts/importSinkKey={importSinkKey}/resourceKey={resourceKey}'
            ],
            'ResourceByProjectKeyProductDraftsImportSinkKeyByImportSinkKeyImportOperations' => [
                function (ImportRequestBuilder $builder): ResourceByProjectKeyProductDraftsImportSinkKeyByImportSinkKeyImportOperations {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->productDrafts()
                        ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
                        ->importOperations();
                },
                ResourceByProjectKeyProductDraftsImportSinkKeyByImportSinkKeyImportOperations::class,
                ['projectKey' => 'projectKey', 'importSinkKey' => 'importSinkKey'],
                '/{projectKey}/product-drafts/importSinkKey={importSinkKey}/import-operations'
            ]
        ];
    }

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyProductDraftsImportSinkKeyByImportSinkKeyPost' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->productDrafts()
                        ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
                        ->post(null);
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyProductDraftsImportSinkKeyByImportSinkKeyPost_201' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->productDrafts()
                        ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
                        ->post(null);
                },
                201
            ]
        ];
    }
}
