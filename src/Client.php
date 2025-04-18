<?php
/**
 * Elastic Enterprise Search
 *
 * @link      https://github.com/elastic/enterprise-search-php
 * @copyright Copyright (c) Elasticsearch B.V (https://www.elastic.co)
 * @license   https://opensource.org/licenses/MIT MIT License
 *
 * Licensed to Elasticsearch B.V under one or more agreements.
 * Elasticsearch B.V licenses this file to you under the MIT License.
 * See the LICENSE file in the project root for more information.
 */
declare(strict_types=1);

namespace Elastic\EnterpriseSearch;

use Elastic\EnterpriseSearch\AppSearch\Endpoints as AppEndpoints;
use Elastic\EnterpriseSearch\EnterpriseSearch\Endpoints as EnterpriseEndpoints;
use Elastic\EnterpriseSearch\Exception\InvalidParameterException;
use Elastic\EnterpriseSearch\Exception\MissingParameterException;
use Elastic\EnterpriseSearch\WorkplaceSearch\Endpoints as WorkplaceEndpoints;
use Elastic\Transport\Transport;
use Elastic\Transport\TransportBuilder;

class Client
{
    const VERSION = '8.18.0';

    private array $config = [];

    /**
     * Set the global config for all the endpoints
     *
     * Example:
     * $config = [
     *     'host' => 'localhost:3200',
     *     'enterprise-search' => [
     *         'username' => 'insert username here',
     *         'password' => 'insert password here'
     *     ],
     *     'app-search' => [
     *         'token' => 'insert token from Elasticsearch',
     *          // or
     *         'apiKey' => 'insert API key from App Search Credentials'
     *     ],
     *     'workplace-search' => [
     *         'token' => 'insert token or API key here',
     *          // or
     *         'apiKey' => 'insert API key from Workplace Search API key or OAuth'
     *     ]
     * ];
     */
    public function __construct(array $config = [])
    {
        $this->config = $config;
    }

    /**
     * Build a Transport object using $config options
     */
    private function buildTransport(array $config): Transport
    {
        $builder = TransportBuilder::create();
        $this->initBuilder($builder, $config);
        $transport = $builder->build();
        $this->initTransport($transport, $config);

        return $transport;
    }

    /**
     * Initialize the TransportBuilder
     */
    private function initBuilder(TransportBuilder $builder, array $config): void
    {
        if (!isset($config['host'])) {
            throw new MissingParameterException(
                'Host parameter is missing. You can pass as $config[\'host\'] ' .
                'in Client::_construct($config), Client::enterpriseSearch($config), ' .
                'Client::appSearch($config) or Client::workplaceSearch($config)'
            );
        }
        if (isset($config['host'])) {
            $builder->setHosts([$config['host']]);
            unset($config['host']);
        }
        foreach ($config as $key => $value) {
            $set = 'set' . ucfirst($key);
            if (method_exists($builder, $set)) {
                $builder->$set($value);
                unset($config[$key]);
            }
        }
    }

    /**
     * Initialize the Transport
     */
    private function initTransport(Transport $transport, array $config): void
    {
        if (isset($config['headers'])) {
            if (!is_array($config['headers'])) {
                throw new InvalidParameterException('The headers parameter must be an array');
            }
            foreach ($config['headers'] as $key => $value) {
                $transport->setHeader($key, $value);
            }
        }
        $transport->setUserAgent('enterprise-search-php', self::VERSION);
        if (!isset($config['meta-header']) || $config['meta-header']) {
            $transport->setElasticMetaHeader('ent', self::VERSION);
        }
    }

    /**
     * Merge the subarray $part array in $global and merge the result with $config
     */
    private function mergeWithPart(array $global, array $config, string $part): array
    {
        if (isset($global[$part])) {
            $global = array_merge($global, $global[$part]);
            unset($global[$part]);
        }
        return array_merge($global, $config);
    }

    /**
     * Returns the Enterprise Search instance endpoints
     * You can override the global configuration using $config
     */
    public function enterpriseSearch(array $config = []): EnterpriseEndpoints
    {
        $merged = $this->mergeWithPart($this->config, $config, 'enterprise-search');
        $transport = $this->buildTransport($merged);
        $this->setAuthentication($transport, $merged, 'ApiKey');
        return new EnterpriseEndpoints($transport);
    }

    /**
     * Returns the App Search instance endpoints
     * You can override the global configuration using $config
     */
    public function appSearch(array $config = []): AppEndpoints
    {
        $merged = $this->mergeWithPart($this->config, $config, 'app-search');
        $transport = $this->buildTransport($merged);
        $this->setAuthentication($transport, $merged);

        return new AppEndpoints($transport);
    }

    /**
     * Returns the Workplace Search instance endpoints
     * You can override the global configuration using $config
     */
    public function workplaceSearch(array $config = []): WorkplaceEndpoints
    {
        $merged = $this->mergeWithPart($this->config, $config, 'workplace-search');
        $transport = $this->buildTransport($merged);
        $this->setAuthentication($transport, $merged);

        return new WorkplaceEndpoints($transport);
    }

    /**
     * Set the authentication mechanism using username and password,
     * token or apiKey
     */
    private function setAuthentication(Transport $transport, array $config, string $method = 'Bearer')
    {
        if (isset($config['username']) && isset($config['password'])) {
            $transport->setUserInfo($config['username'], $config['password']);
            return;
        }  
        if (isset($config['token'])) {
            $transport->setHeader('Authorization', sprintf("Bearer %s", $config['token']));
            return;
        } 
        if (isset($config['apiKey'])) {
            $transport->setHeader('Authorization', sprintf("%s %s", $method, $config['apiKey']));
            return;
        }
        throw new MissingParameterException(
            'You need to use an authentication method: username and password, token or apiKey'
        );
    }
}
