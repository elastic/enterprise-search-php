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

namespace Elastic\EnterpriseSearch\Tests\Request;

use Elastic\EnterpriseSearch\AppSearch\Endpoints;
use Elastic\EnterpriseSearch\Client;
use Elastic\EnterpriseSearch\EnterpriseSearch\Request;
use Elastic\EnterpriseSearch\EnterpriseSearch\Schema\ReadOnlyState;
use PHPUnit\Framework\TestCase;

/**
 * @group enterprise
 */
final class EnterpriseSearchTest extends TestCase
{
    /**
     * @var Endpoints
     */
    private $enterpriseSearch;

    /**
     * @var Client
     */
    private $client;

    public function setUp(): void
    {
        if (!getenv('ENTERPRISE_SEARCH_URL')) {
            $this->markTestSkipped('Cannot execute integration test without ENTERPRISE_SEARCH_URL');
        }
        if (!getenv('ENTERPRISE_SEARCH_USER')) {
            $this->markTestSkipped('Cannot execute integration test without ENTERPRISE_SEARCH_USER');
        }
        if (!getenv('ENTERPRISE_SEARCH_PASSWORD')) {
            $this->markTestSkipped('Cannot execute integration test without ENTERPRISE_SEARCH_PASSWORD');
        }
        $this->client = new Client([
            'host'     => getenv('ENTERPRISE_SEARCH_URL'),
            'enterprise-search' => [
                'username' => getenv('ENTERPRISE_SEARCH_USER'),
                'password' => getenv('ENTERPRISE_SEARCH_PASSWORD')
            ]
        ]);
        $this->enterpriseSearch = $this->client->enterpriseSearch();
    }

    /**
     * @covers Elastic\EnterpriseSearch\EnterpriseSearch\Endpoints::getHealth
     * @covers Elastic\EnterpriseSearch\EnterpriseSearch\Request\GetHealth
     */
    public function testGetHealth()
    {
        $result = $this->enterpriseSearch->getHealth(new Request\GetHealth);
        
        $response = $result->getResponse();
        $req = $this->enterpriseSearch->getTransport()->getLastRequest();      

        $this->assertTrue(isset($result['name']));
        $this->assertTrue(isset($result['version']));
        $this->assertTrue(isset($result['jvm']));
        $this->assertTrue(isset($result['filebeat']));
        $this->assertTrue(isset($result['esqueues_me']));
        $this->assertTrue(isset($result['system']));
    }

    /**
     * @covers Elastic\EnterpriseSearch\EnterpriseSearch\Endpoints::getReadOnly
     * @covers Elastic\EnterpriseSearch\EnterpriseSearch\Request\GetReadOnly
     */
    public function testGetReadOnly()
    {
        $result = $this->enterpriseSearch->getReadOnly(new Request\GetReadOnly);
        
        $this->assertTrue(isset($result['enabled']));
    }

    /**
     * @covers Elastic\EnterpriseSearch\EnterpriseSearch\Endpoints::getStats
     * @covers Elastic\EnterpriseSearch\EnterpriseSearch\Request\GetStats 
     */
    public function testGetStats()
    {
        $result = $this->enterpriseSearch->getStats(new Request\GetStats);

        $this->assertTrue(isset($result['app']));
        $this->assertTrue(isset($result['queues']));
        $this->assertTrue(isset($result['connectors']));
    }

    public function testGetStatsWithIncludeParam()
    {
        $request= new Request\GetStats();
        $request->setInclude(['app', 'connectors']);

        $result = $this->enterpriseSearch->getStats($request);

        $this->assertTrue(isset($result['app']));
        $this->assertTrue(isset($result['connectors']));
        $this->assertFalse(isset($result['queues']));
    }

    /**
     * @covers Elastic\EnterpriseSearch\EnterpriseSearch\Endpoints::getVersion
     * @covers Elastic\EnterpriseSearch\EnterpriseSearch\Request\GetStats
     */
    public function testGetVersion()
    {
        $result = $this->enterpriseSearch->getVersion(new Request\GetVersion);
        
        $this->assertTrue(isset($result['number']));
        $this->assertTrue(isset($result['build_hash']));
        $this->assertTrue(isset($result['build_date']));
    }

    /**
     * @covers Elastic\EnterpriseSearch\EnterpriseSearch\Endpoints::getVersion
     * @covers Elastic\EnterpriseSearch\EnterpriseSearch\Request\GetStats
     */
    public function testPutReadOnly()
    {
        $result = $this->enterpriseSearch->putReadOnly(
            new Request\PutReadOnly(
                new ReadOnlyState(true)
            )
        );
        
        $this->assertTrue($result['enabled']);

        $result = $this->enterpriseSearch->putReadOnly(
            new Request\PutReadOnly(
                new ReadOnlyState(false)
            )
        );

        $this->assertFalse($result['enabled']);
    }
}