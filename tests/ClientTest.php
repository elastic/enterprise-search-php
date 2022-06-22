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

namespace Elastic\EnterpriseSearch\Tests;

use Elastic\EnterpriseSearch\Client;
use Elastic\EnterpriseSearch\AppSearch\Endpoints as AppSearchEndpoints;
use Elastic\EnterpriseSearch\EnterpriseSearch\Endpoints as EnterpriseSearchEndpoints;
use Elastic\EnterpriseSearch\Exception\MissingParameterException;
use Elastic\EnterpriseSearch\WorkplaceSearch\Endpoints as WorkplaceSearchEndpoints;
use PHPUnit\Framework\TestCase;

final class ClientTest extends TestCase
{
    /**
     * @doesNotPerformAssertions
     */
    public function testConstructWithNoConfig()
    {
        $client = new Client();
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

    public function testEnterpriseSearchConstructWithGlobalConfig()
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

    public function testEnterpriseSearchConstructWithLocalConfig()
    {
        $client = new Client();
        $es = $client->enterpriseSearch([
            'host' => 'http://localhost:3002',
            'username' => 'foo',
            'password' => 'bar'
        ]);
        $this->assertInstanceOf(EnterpriseSearchEndpoints::class, $es);
    }

    public function testEnterpriseSearchConstructWithGlobalAndLocalConfig()
    {
        $client = new Client([
            'host' => 'http://localhost:3002'
        ]);
        $es = $client->enterpriseSearch([
            'username' => 'foo',
            'password' => 'bar'
        ]);
        $this->assertInstanceOf(EnterpriseSearchEndpoints::class, $es);
    }

    public function testEnterpriseSearchOverrideHostGlobal()
    {
        $globalHost = 'http://localhost:3002';
        $localHost  = 'http://localhost:3003';
        $client = new Client([
            'host' => $globalHost
        ]);
        $es = $client->enterpriseSearch([
            'host' => $localHost,
            'username' => 'foo',
            'password' => 'bar'
        ]);
        $uri = (string) $es->getTransport()->getNodePool()->nextNode()->getUri();
        $this->assertEquals($localHost, $uri);
    }

    public function testEnterpriseSearchReturnNewObject()
    {
        $client = new Client();
        $es1 = $client->enterpriseSearch([
            'host' => 'http://localhost:3001',
            'username' => 'foo',
            'password' => 'bar'
        ]);
        $es2 = $client->enterpriseSearch([
            'host' => 'http://localhost:3002',
            'username' => 'faa',
            'password' => 'baz'
        ]);
        $this->assertNotEquals($es1, $es2);
    }

    public function testAppSearchConstructWithToken()
    {
        $client = new Client([
            'host' => 'http://localhost:3002',
            'app-search' => [
                'token' => 'foo'
            ]
        ]);
        $app = $client->appSearch();
        $this->assertInstanceOf(AppSearchEndpoints::class, $app);
    }

    public function testAppSearchConstructWithBasicAuth()
    {
        $client = new Client([
            'host' => 'http://localhost:3002',
            'app-search' => [
                'username' => 'foo',
                'password' => 'bar'
            ]
        ]);
        $app = $client->appSearch();
        $this->assertInstanceOf(AppSearchEndpoints::class, $app);
    }

    public function testAppSearchConstructWithMissingParameterException()
    {
        $client = new Client([
            'host' => 'http://localhost:3002',
        ]);
        $this->expectException(MissingParameterException::class);
        $workplace = $client->appSearch();
    }

    public function testWorkplaceSearchConstructWithToken()
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

    public function testWorkplaceSearchConstructWithBasicAuth()
    {
        $client = new Client([
            'host' => 'http://localhost:3002',
            'workplace-search' => [
                'username' => 'foo',
                'password' => 'bar'
            ]
        ]);
        $workplace = $client->workplaceSearch();
        $this->assertInstanceOf(WorkplaceSearchEndpoints::class, $workplace);
    }

    public function testWorkplaceSearchConstructWithMissingParameterException()
    {
        $client = new Client([
            'host' => 'http://localhost:3002',
        ]);
        $this->expectException(MissingParameterException::class);
        $workplace = $client->workplaceSearch();
    }
}