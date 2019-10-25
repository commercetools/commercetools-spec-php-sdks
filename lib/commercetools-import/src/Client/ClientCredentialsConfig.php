<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Client;

use Commercetools\Client\ClientCredentials;
use Commercetools\Client\ClientCredentialsConfig as BaseClientCredentialsConfig;

class ClientCredentialsConfig extends AuthConfig implements BaseClientCredentialsConfig
{
    const AUTH_URI = 'https://auth.sphere.io/oauth/token';

    const GRANT_TYPE = 'client_credentials';

    /** @var ClientCredentials */
    private $credentials;

    public function __construct(ClientCredentials $credentials, array $clientOptions = [], string $authUri = self::AUTH_URI)
    {
        parent::__construct($clientOptions, $authUri);
        $this->credentials = $credentials;
    }

    public function getCredentials(): ClientCredentials
    {
        return $this->credentials;
    }
}