<?php
/**
 * Elastic Enterprise Search
 *
 * @link      https://github.com/elastic/enterprise-search-php
 * @copyright Copyright (c) Elasticsearch B.V (https://www.elastic.co)
 * @license   http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 *
 * Licensed to Elasticsearch B.V under one or more agreements.
 * Elasticsearch B.V licenses this file to you under the Apache 2.0 License.
 * See the LICENSE file in the project root for more information.
 */
declare(strict_types=1);

namespace Elastic\EnterpriseSearch;

use Elastic\EnterpriseSearch\AppSearch\Endpoints as AppEndpoints;
use Elastic\EnterpriseSearch\EnterpriseSearch\EndpointsTrait;
use Elastic\EnterpriseSearch\Exception\InvalidParameterException;
use Elastic\EnterpriseSearch\Exception\MissingParameterException;
use Elastic\EnterpriseSearch\WorkplaceSearch\Endpoints as WorkplaceEndpoints;
use Elastic\Transport\Transport;
use Elastic\Transport\TransportBuilder;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class Client
{
    const VERSION = '7.12beta1';

    use EndpointsTrait;

    /**
     * @var array
     */
    private $config = [];

    /**
     * @var Transport
     */
    private $transport;

    /**
     * @var AppEndpoints
     */
    private $appSearch;

    /**
     * @var WorkplaceEndpoints
     */
    private $workplaceSearch;

    public function __construct(array $config)
    {
        $this->config = $config;
        $builder = TransportBuilder::create();
        $this->initBuilder($builder, $config);
        $this->transport = $builder->build();
        $this->initTransport($this->transport, $config);
    }

    /**
     * Initialize the TransportBuilder
     */
    private function initBuilder(TransportBuilder $builder, array $config): void
    {
        if (!isset($config['host'])) {
            throw new MissingParameterException('You need to specify a host value');
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
        if (isset($config['username'])) {
            $transport->setUserInfo($config['username'], $config['password'] ?? null);
        }
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
        $transport->setHeader('Accept-Encoding', 'gzip');
    }

    /**
     * Returns the App Search instance endpoints
     */
    public function appSearch(array $config = []): AppEndpoints
    {
        if (!isset($this->appSearch)) {
            if (!isset($this->config['app-search']['api-key']) && !isset($config['api-key'])) {
                throw new MissingParameterException(
                    'The api-key parameter is missing. ' .
                    'You can pass it in Client::appSearch() or in Client::_construct() using ["app-search"]["api-key"]'
                );
            }
            $transport = clone($this->transport);
            // reset the UserInfo for Basic authentication
            $transport->setUserInfo('');
            $apiKey = $config['api-key'] ?? $this->config['app-search']['api-key'];
            // set the authoriazione header
            $transport->setHeader('Authorization', sprintf("Bearer %s", $apiKey));
            $this->appSearch = new AppEndpoints($transport);
        }
        return $this->appSearch;
    }

    /**
     * Returns the Workplace Search instance endpoints
     */
    public function workplaceSearch(array $config = []): WorkplaceEndpoints
    {
        if (!isset($this->workplaceSearch)) {
            if (!isset($this->config['workplace-search']['token']) && !isset($config['token'])) {
                throw new MissingParameterException(
                    'The token parameter is missing. ' .
                    'You can pass it in Client::workplaceSearch() or in Client::_construct() using ["workplace-search"]["token"]'
                );
            }
            $transport = clone($this->transport);
            // reset the UserInfo for Basic authentication
            $transport->setUserInfo('');
            $token = $config['token'] ?? $this->config['workplace-search']['token'];
            // set the authoriazione header
            $transport->setHeader('Authorization', sprintf("Bearer %s", $token));
            $this->workplaceSearch = new WorkplaceEndpoints($transport);
        }
        return $this->workplaceSearch;
    }

    /**
     * Returns the last request, as PSR-7 message
     */
    public function getLastRequest(): RequestInterface
    {
        return $this->transport->getLastRequest();
    }

    /**
     * Returns the last response, as PSR-7 message
     */
    public function getLastResponse(): ResponseInterface
    {
        return $this->transport->getLastResponse();
    } 
}