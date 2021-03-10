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

use Elastic\EnterpriseSearch\Client;
use Elastic\EnterpriseSearch\EnterpriseSearch\Request;
use Elastic\EnterpriseSearch\EnterpriseSearch\Schema\ReadOnlyState;
use PHPUnit\Framework\TestCase;

/**
 * @group integration
 */
final class EnterpriseSearchTest extends TestCase
{
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
            'username' => getenv('ENTERPRISE_SEARCH_USER'),
            'password' => getenv('ENTERPRISE_SEARCH_PASSWORD')
        ]);
    }

    /**
     * @covers Elastic\EnterpriseSearch\Client::getHealth
     * @covers Elastic\EnterpriseSearch\EnterpriseSearch\Request\GetHealth
     */
    public function testGetHealth()
    {
        $result = $this->client->getHealth(new Request\GetHealth);
        
        $this->assertTrue(isset($result['name']));
        $this->assertTrue(isset($result['version']));
        $this->assertTrue(isset($result['jvm']));
        $this->assertTrue(isset($result['filebeat']));
        $this->assertTrue(isset($result['esqueues_me']));
        $this->assertTrue(isset($result['system']));
    }

    /**
     * @covers Elastic\EnterpriseSearch\Client::getReadOnly
     * @covers Elastic\EnterpriseSearch\EnterpriseSearch\Request\GetReadOnly
     */
    public function testGetReadOnly()
    {
        $result = $this->client->getReadOnly(new Request\GetReadOnly);
        
        $this->assertTrue(isset($result['enabled']));
    }

    /**
     * @covers Elastic\EnterpriseSearch\Client::getStats
     * @covers Elastic\EnterpriseSearch\EnterpriseSearch\Request\GetStats 
     */
    public function testGetStats()
    {
        $result = $this->client->getStats(new Request\GetStats);

        $this->assertTrue(isset($result['app']));
        $this->assertTrue(isset($result['queues']));
        $this->assertTrue(isset($result['connectors']));
    }

    /**
     * @covers Elastic\EnterpriseSearch\Client::getVersion
     * @covers Elastic\EnterpriseSearch\EnterpriseSearch\Request\GetStats
     */
    public function testGetVersion()
    {
        $result = $this->client->getVersion(new Request\GetVersion);
        
        $this->assertTrue(isset($result['number']));
        $this->assertTrue(isset($result['build_hash']));
        $this->assertTrue(isset($result['build_date']));
    }

    /**
     * @covers Elastic\EnterpriseSearch\Client::getVersion
     * @covers Elastic\EnterpriseSearch\EnterpriseSearch\Request\GetStats
     */
    public function testPutReadOnly()
    {
        $result = $this->client->putReadOnly(
            new Request\PutReadOnly(
                new ReadOnlyState(true)
            )
        );
        
        $this->assertTrue($result['enabled']);

        $result = $this->client->putReadOnly(
            new Request\PutReadOnly(
                new ReadOnlyState(false)
            )
        );

        $this->assertFalse($result['enabled']);
    }
}