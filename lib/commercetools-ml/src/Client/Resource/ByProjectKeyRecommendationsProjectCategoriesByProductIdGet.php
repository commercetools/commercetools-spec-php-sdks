<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Client\Resource;

use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\Exception\ClientException;
use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Exception\ApiServerException;
use Commercetools\Exception\ApiClientException;
use Commercetools\Client\ApiRequest;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Ml\Models\CategoryRecommendations\ProjectCategoryRecommendationPagedQueryResponse;
use Commercetools\Ml\Models\CategoryRecommendations\ProjectCategoryRecommendationPagedQueryResponseModel;

use Psr\Http\Message\ResponseInterface;

/** @psalm-suppress PropertyNotSetInConstructor */
class ByProjectKeyRecommendationsProjectCategoriesByProductIdGet extends ApiRequest
{
    /**
     * @param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function __construct(string $projectKey, string $productId, $body = null, array $headers = [], ClientInterface $client = null)
    {
        $uri = str_replace(['{projectKey}', '{productId}'], [$projectKey, $productId], '{projectKey}/recommendations/project-categories/{productId}');
        parent::__construct($client, 'GET', $uri, $headers, !is_null($body) ? json_encode($body) : null);
    }

    /**
     * @template T of JsonObject
     * @psalm-param ?class-string<T> $resultType
     * @return JsonObject|ProjectCategoryRecommendationPagedQueryResponse|T|null
     */
    public function mapFromResponse(?ResponseInterface $response, string $resultType = null)
    {
        if (is_null($response)) {
            return null;
        }
        if (is_null($resultType)) {
            switch ($response->getStatusCode()) {
                case '200':
                    $resultType = ProjectCategoryRecommendationPagedQueryResponseModel::class;

                    break;
                default:
                    $resultType = JsonObjectModel::class;

                    break;
            }
        }

        return $resultType::of($this->responseData($response));
    }

    /**
     * @template T of JsonObject
     * @psalm-param ?class-string<T> $resultType
     *
     * @return null|JsonObject|ProjectCategoryRecommendationPagedQueryResponse
     */
    public function execute(array $options = [], string $resultType = null)
    {
        try {
            $response = $this->send($options);
        } catch (ServerException $e) {
            $result = $this->mapFromResponse($e->getResponse());

            throw new ApiServerException($e->getMessage(), $result, $this, $e->getResponse(), $e, []);
        } catch (ClientException $e) {
            $result = $this->mapFromResponse($e->getResponse());

            throw new ApiClientException($e->getMessage(), $result, $this, $e->getResponse(), $e, []);
        }

        return $this->mapFromResponse($response, $resultType);
    }

    /**
     * 
     * @psalm-param scalar|scalar[] $limit
     */
    public function withLimit($limit): ByProjectKeyRecommendationsProjectCategoriesByProductIdGet
    {
        return $this->withQueryParam('limit', $limit);
    }

    /**
     * 
     * @psalm-param scalar|scalar[] $offset
     */
    public function withOffset($offset): ByProjectKeyRecommendationsProjectCategoriesByProductIdGet
    {
        return $this->withQueryParam('offset', $offset);
    }

    /**
     * 
     * @psalm-param scalar|scalar[] $staged
     */
    public function withStaged($staged): ByProjectKeyRecommendationsProjectCategoriesByProductIdGet
    {
        return $this->withQueryParam('staged', $staged);
    }

    /**
     * 
     * @psalm-param scalar|scalar[] $confidenceMin
     */
    public function withConfidenceMin($confidenceMin): ByProjectKeyRecommendationsProjectCategoriesByProductIdGet
    {
        return $this->withQueryParam('confidenceMin', $confidenceMin);
    }

    /**
     * 
     * @psalm-param scalar|scalar[] $confidenceMax
     */
    public function withConfidenceMax($confidenceMax): ByProjectKeyRecommendationsProjectCategoriesByProductIdGet
    {
        return $this->withQueryParam('confidenceMax', $confidenceMax);
    }
}