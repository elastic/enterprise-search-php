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
use Elastic\Transport\Transport;
use PHPUnit\Framework\TestCase;

/**
 * @group app-search
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
        if (!getenv('APP_SEARCH_USER')) {
            $this->markTestSkipped('Cannot execute integration test without ENTERPRISE_SEARCH_USER');
        }
        if (!getenv('APP_SEARCH_PASSWORD')) {
            $this->markTestSkipped('Cannot execute integration test without ENTERPRISE_SEARCH_PASSWORD');
        }
        $this->client = new Client([
            'host'     => getenv('ENTERPRISE_SEARCH_URL'),
            'app-search' => [
                'username' => getenv('APP_SEARCH_USER'),
                'password' => getenv('APP_SEARCH_PASSWORD'),
            ]
        ]);
        $this->appSearch = $this->client->appSearch();
    }

    /**
     * @covers Elastic\EnterpriseSearch\AppSearch\Endpoints::getTransport
     */
    public function testGetTransport()
    {
        $this->assertInstanceOf(Transport::class, $this->appSearch->getTransport());
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
        $id = 'park_death-valley';
        $doc = new Schema\Document($id);
        $doc->description = 'Death Valley is the hottest, lowest, and driest place in the United States. Daytime temperatures have topped 130 °F (54 °C) and it is home to Badwater Basin, the lowest elevation in North America. The park contains canyons, badlands, sand dunes, and mountain ranges, while more than 1000 species of plants grow in this geologic graben. Additional points of interest include salt flats, historic mines, and springs.';
        $doc->states = [
            'California',
            'Nevada'
        ];
        $doc->title = 'Death Valley';
        $doc->visitors = 1296283;
        $doc->world_heritage_site = false;

        $result = $this->appSearch->indexDocuments(new Request\IndexDocuments('test', [$doc]));
        
        $this->assertCount(1, $result->asArray());
        $this->assertEquals($id, $result[0]['id']);
        $this->assertEmpty($result[0]['errors']);
        
        // Sleep some times because the index is asynchronously
        // There will be a processing delay before they are available to your Engine
        sleep(5);

        return $id;
    }

    /**
     * @covers Elastic\EnterpriseSearch\AppSearch\Endpoints::getDocuments
     * @covers Elastic\EnterpriseSearch\AppSearch\Request\GetDocuments
     * @depends testIndexDocuments
     */
    public function testGetDocuments(string $id)
    {
        $result = $this->appSearch->getDocuments(new Request\GetDocuments('test', [$id]));
        
        $this->assertCount(1, $result->asArray());
        $this->assertEquals($result[0]['id'], $id);
    }

    /**
     * @covers Elastic\EnterpriseSearch\AppSearch\Endpoints::search
     * @covers Elastic\EnterpriseSearch\AppSearch\Request\Search
     * @depends testIndexDocuments
     */
    public function testSearch(string $id)
    {
        $search = new Schema\SearchRequestParams();
        $search->query = 'valley';

        $result = $this->appSearch->search(
            new Request\Search('test', $search)
        );
        
        $this->assertCount(1, $result['results']);
        $this->assertEquals($id, $result['results'][0]['id']['raw']);
    }

    /**
     * @covers Elastic\EnterpriseSearch\AppSearch\Endpoints::search
     * @covers Elastic\EnterpriseSearch\AppSearch\Request\Search
     * @depends testIndexDocuments
     */
    public function testSearchFields(string $id)
    {
        $search = new Schema\SearchRequestParams();
        $search->query = 'valley';
        $search->search_fields = new Schema\SearchFields;
        $search->search_fields->title = new Schema\SimpleObject;
        
        $result = $this->appSearch->search(
            new Request\Search('test', $search)
        );
        
        $this->assertCount(1, $result['results']);
        $this->assertEquals($id, $result['results'][0]['id']['raw']);
    }

    /**
     * @covers Elastic\EnterpriseSearch\AppSearch\Endpoints::deleteDocuments
     * @covers Elastic\EnterpriseSearch\AppSearch\Request\DeleteDocuments
     * @depends testIndexDocuments
     */
    public function testDeleteDocuments(string $id)
    {
        $result = $this->appSearch->deleteDocuments(new Request\DeleteDocuments('test', [$id]));

        $this->assertCount(1, $result->asArray());
        $this->assertEquals($id, $result[0]['id']);
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