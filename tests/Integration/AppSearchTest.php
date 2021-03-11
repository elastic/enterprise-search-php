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
use Elastic\EnterpriseSearch\AppSearch\Request;
use Elastic\EnterpriseSearch\AppSearch\Schema;
use Elastic\EnterpriseSearch\EnterpriseSearch\Endpoints;
use PHPUnit\Framework\TestCase;

/**
 * @group integration
 */
final class AppSearchTest extends TestCase
{
    /**
     * @var Endpoints
     */
    private $appSearch;

    /**
     * @var Client
     */
    private $client;

    public function setUp(): void
    {
        if (!getenv('ENTERPRISE_SEARCH_URL')) {
            $this->markTestSkipped('Cannot execute integration test without ENTERPRISE_SEARCH_URL');
        }
        if (!getenv('APP_SEARCH_API_KEY')) {
            $this->markTestSkipped('Cannot execute integration test without APP_SEARCH_API_KEY');
        }
        $this->client = new Client([
            'host'     => getenv('ENTERPRISE_SEARCH_URL'),
            'app-search' => [
                'api-key' => getenv('APP_SEARCH_API_KEY')
            ]
        ]);
        $this->appSearch = $this->client->appSearch();
    }

    /**
     * @covers Elastic\EnterpriseSearch\AppSearch\Endpoints::createEngine
     * @covers Elastic\EnterpriseSearch\AppSearch\Request\CreateEngine
     */
    public function testCreateEngine()
    {
        $result = $this->appSearch->createEngine(new Request\CreateEngine('test'));
        
        $this->assertEquals('test', $result['name']);
        $this->assertEquals(0, $result['document_count']);
        $this->assertTrue(isset($result['type']));
    }

    /**
     * @covers Elastic\EnterpriseSearch\AppSearch\Endpoints::getEngine
     * @covers Elastic\EnterpriseSearch\AppSearch\Request\GetEngine
     * @depends testCreateEngine
     */
    public function testGetEngine()
    {
        $result = $this->appSearch->getEngine(new Request\GetEngine('test'));
        
        $this->assertEquals('test', $result['name']);
        $this->assertEquals(0, $result['document_count']);
        $this->assertTrue(isset($result['type']));
    }

    /**
     * @covers Elastic\EnterpriseSearch\AppSearch\Endpoints::indexDocuments
     * @covers Elastic\EnterpriseSearch\AppSearch\Request\IndexDocuments
     * @depends testCreateEngine
     */
    public function testIndexDocuments()
    {
        $doc = new Schema\Document('id1');
        $doc->foo = 'bar';

        $result = $this->appSearch->indexDocuments(new Request\IndexDocuments('test', [$doc]));
        
        $this->assertCount(1, $result->asArray());
        $this->assertEquals('id1', $result[0]['id']);
        $this->assertEmpty($result[0]['errors']);
    }

    /**
     * @covers Elastic\EnterpriseSearch\AppSearch\Endpoints::deleteDocuments
     * @covers Elastic\EnterpriseSearch\AppSearch\Request\DeleteDocuments
     * @depends testIndexDocuments
     */
    public function testDeleteDocuments()
    {
        $result = $this->appSearch->deleteDocuments(new Request\DeleteDocuments('test', ['id1']));

        $this->assertCount(1, $result->asArray());
        $this->assertEquals('id1', $result[0]['id']);
        $this->assertTrue($result[0]['deleted']);
    }

    /**
     * @covers Elastic\EnterpriseSearch\AppSearch\Endpoints::deleteEngine
     * @covers Elastic\EnterpriseSearch\AppSearch\Request\DeleteEngine
     * @depends testCreateEngine
     */
    public function testDeleteEngine()
    {
        $result = $this->appSearch->deleteEngine(new Request\DeleteEngine('test'));

        $this->assertTrue($result['deleted']);
    }
}