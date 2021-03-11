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

namespace Elastic\EnterpriseSearch\Tests;

use Elastic\EnterpriseSearch\Client;
use Elastic\EnterpriseSearch\AppSearch\Endpoints as AppSearchEndpoints;
use Elastic\EnterpriseSearch\EnterpriseSearch\Endpoints as EnterpriseSearchEndpoints;
use Elastic\EnterpriseSearch\Exception\MissingParameterException;
use Elastic\EnterpriseSearch\WorkplaceSearch\Endpoints as WorkplaceSearchEndpoints;
use PHPUnit\Framework\TestCase;
use Psr\Log\NullLogger;

final class ClientTest extends TestCase
{
    public function testConstructWithEmptyConfig()
    {
        $this->expectException(MissingParameterException::class);
        $client = new Client([]);
    }

    public function testConstructWithMissingHost()
    {
        $this->expectException(MissingParameterException::class);
        $client = new Client([
            'logger' => new NullLogger()
        ]);
    }
    
    /**
     * @doesNotPerformAssertions
     */
    public function testConstructorWithHost()
    {
        $client = new Client([
            'host' => 'http://localhost:3002'
        ]);
    }

    public function testEnterpriseSearchMissingUsername()
    {
        $this->expectException(MissingParameterException::class);
        $client = new Client([
            'host' => 'http://localhost:3002'
        ]);
        $es = $client->enterpriseSearch();
    }

    public function testEnterpriseSearchMissingPassword()
    {
        $this->expectException(MissingParameterException::class);
        $client = new Client([
            'host' => 'http://localhost:3002',
            'enterprise-search' => [
                'username' => 'foo'
            ]
        ]);
        $es = $client->enterpriseSearch();
    }

    public function testEnterpriseSearchConstruct()
    {
        $client = new Client([
            'host' => 'http://localhost:3002',
            'enterprise-search' => [
                'username' => 'foo',
                'password' => 'bar'
            ]
        ]);
        $es = $client->enterpriseSearch();
        $this->assertInstanceOf(EnterpriseSearchEndpoints::class, $es);
    }

    public function testAppSearchConstruct()
    {
        $client = new Client([
            'host' => 'http://localhost:3002',
            'app-search' => [
                'api-key' => 'foo'
            ]
        ]);
        $app = $client->appSearch();
        $this->assertInstanceOf(AppSearchEndpoints::class, $app);
    }

    public function testWorkplaceSearchConstruct()
    {
        $client = new Client([
            'host' => 'http://localhost:3002',
            'workplace-search' => [
                'token' => 'foo'
            ]
        ]);
        $workplace = $client->workplaceSearch();
        $this->assertInstanceOf(WorkplaceSearchEndpoints::class, $workplace);
    }
}