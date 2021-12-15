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
use Elastic\EnterpriseSearch\AppSearch\Request\GetApiLogs;
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
        $result = $this->appSearch->createEngine(
            new Request\CreateEngine(
                new Schema\Engine('test')
            )
        );
        
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
        $result = $this->appSearch->getEngine(
            new Request\GetEngine('test')
        );
        
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

        $result = $this->appSearch->indexDocuments(
            new Request\IndexDocuments('test', [$doc])
        );
        
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
        $result = $this->appSearch->getDocuments(
            new Request\GetDocuments('test', [$id])
        );
        
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
        $search = new Schema\SearchRequestParams('valley');

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
        $search = new Schema\SearchRequestParams('valley');
        
        $search->search_fields = new Schema\SearchFields;
        $search->search_fields->title = new Schema\SimpleObject;
        
        $result = $this->appSearch->search(
            new Request\Search('test', $search)
        );
        
        $this->assertCount(1, $result['results']);
        $this->assertEquals($id, $result['results'][0]['id']['raw']);
    }

    /**
     * @covers Elastic\EnterpriseSearch\AppSearch\Endpoints::logClickthrough
     * @covers Elastic\EnterpriseSearch\AppSearch\Request\LogClickthrough
     * @depends testIndexDocuments
     */
    public function testLogClickthrough(string $id)
    {
        $request = new Request\LogClickthrough('test', 'search', $id);
        $request->setTags(['tag1', 'tag2']);

        $result =  $this->appSearch->logClickthrough($request);
        $this->assertEquals(200, $result->getResponse()->getStatusCode());
    }

    /**
     * @covers Elastic\EnterpriseSearch\AppSearch\Endpoints::getApiLogs
     * @covers Elastic\EnterpriseSearch\AppSearch\Request\GetApiLogs
     */
    public function testGetApiLogs()
    {
        $from = '2018-10-15T00:00:00+00:00';
        $to = '2018-10-16T00:00:00+00:00';

        $result = $this->appSearch->getApiLogs(
            new GetApiLogs('test', $from, $to)
        );

        $this->assertTrue(isset($result['results']));
        $this->assertEquals($from, $result['meta']['filters']['date']['from']);
        $this->assertEquals($to, $result['meta']['filters']['date']['to']);
    }
    /**
     * @covers Elastic\EnterpriseSearch\AppSearch\Endpoints::deleteDocuments
     * @covers Elastic\EnterpriseSearch\AppSearch\Request\DeleteDocuments
     * @depends testIndexDocuments
     */
    public function testDeleteDocuments(string $id)
    {
        $result = $this->appSearch->deleteDocuments(
            new Request\DeleteDocuments('test', [$id])
        );

        $this->assertCount(1, $result->asArray());
        $this->assertEquals($id, $result[0]['id']);
        $this->assertTrue($result[0]['deleted']);
    }

    /**
     * @covers Elastic\EnterpriseSearch\AppSearch\Endpoints::createCrawlerDomain
     * @covers Elastic\EnterpriseSearch\AppSearch\Request\CreateCrawlerDomain
     * @depends testCreateEngine
     */
    public function testCreateCrawlerDomain()
    {
        $name = 'https://www.elastic.co';
        $domain = new Schema\Domain;
        $domain->name = $name;

        $result = $this->appSearch->createCrawlerDomain(
            new Request\CreateCrawlerDomain(
                'test', 
                $domain
            )
        );

        $this->assertTrue(isset($result['id']));
        $this->assertTrue(isset($result['entry_points']));
        $this->assertTrue(isset($result['default_crawl_rule']));

        $this->assertEquals($name, $result->name);
        $this->assertEquals(0, $result->document_count);

        return $result['id'];
    }

    /**
     * @covers Elastic\EnterpriseSearch\AppSearch\Endpoints::createCrawlerCrawlRequest
     * @covers Elastic\EnterpriseSearch\AppSearch\Request\CreateCrawlerCrawlRequest
     * @depends testCreateEngine
     */
    public function testCreateCrawlerCrawlRequest()
    {
        $result = $this->appSearch->createCrawlerCrawlRequest(
            new Request\CreateCrawlerCrawlRequest('test')
        );

        $this->assertTrue(isset($result['id']));
        $this->assertTrue(isset($result['status']));

        return $result['id'];
    }

    /**
     * @covers Elastic\EnterpriseSearch\AppSearch\Endpoints::getCrawlerCrawlRequest
     * @covers Elastic\EnterpriseSearch\AppSearch\Request\GetCrawlerCrawlRequest
     * @depends testCreateCrawlerCrawlRequest
     */
    public function testGetCrawlerCrawlRequest(string $id)
    {
        $result = $this->appSearch->getCrawlerCrawlRequest(
            new Request\GetCrawlerCrawlRequest('test', $id)
        );

        $this->assertTrue(isset($result['id']));
        $this->assertTrue(isset($result['status']));
    }

    /**
     * @covers Elastic\EnterpriseSearch\AppSearch\Endpoints::getCrawlerActiveCrawlRequest
     * @covers Elastic\EnterpriseSearch\AppSearch\Request\GetCrawlerActiveCrawlRequest
     * @depends testCreateCrawlerCrawlRequest
     */
    public function testGetCrawlerActiveCrawlRequest(string $id)
    {
        $result = $this->appSearch->getCrawlerActiveCrawlRequest(
            new Request\GetCrawlerActiveCrawlRequest('test')
        );

        $this->assertTrue(isset($result['id']));
        $this->assertTrue(isset($result['status']));
    }

    /**
     * @covers Elastic\EnterpriseSearch\AppSearch\Endpoints::listCrawlerCrawlRequests
     * @covers Elastic\EnterpriseSearch\AppSearch\Request\ListCrawlerCrawlRequests
     * @depends testGetCrawlerActiveCrawlRequest
     */
    public function testListCrawlerCrawlRequest()
    {
        $result = $this->appSearch->listCrawlerCrawlRequests(
            new Request\ListCrawlerCrawlRequests('test')
        );

        $this->assertTrue(isset($result[0]));
    }

    /**
     * @covers Elastic\EnterpriseSearch\AppSearch\Endpoints::deleteCrawlerActiveCrawlReques
     * @covers Elastic\EnterpriseSearch\AppSearch\Request\DeleteCrawlerActiveCrawlRequest
     * @depends testListCrawlerCrawlRequest
     */
    public function testDeleteCrawlerCrawlRequest()
    {
        $result = $this->appSearch->deleteCrawlerActiveCrawlRequest(
            new Request\DeleteCrawlerActiveCrawlRequest('test')
        );

        $this->assertTrue(isset($result['id']));
        $this->assertEquals('canceling', $result['status']);
    }

    /**
     * @covers Elastic\EnterpriseSearch\AppSearch\Endpoints::deleteCrawlerDomain
     * @covers Elastic\EnterpriseSearch\AppSearch\Request\DeleteCrawlerDomain
     * @depends testCreateCrawlerDomain
     */
    public function testDeleteCrawlerDomain(string $id)
    {
        $result = $this->appSearch->deleteCrawlerDomain(
            new Request\DeleteCrawlerDomain('test', $id)
        );

        $this->assertTrue($result['deleted']);
    }

    /**
     * @covers Elastic\EnterpriseSearch\AppSearch\Endpoints::deleteEngine
     * @covers Elastic\EnterpriseSearch\AppSearch\Request\DeleteEngine
     * @depends testCreateEngine
     */
    public function testDeleteEngine()
    {
        $result = $this->appSearch->deleteEngine(
            new Request\DeleteEngine('test')
        );

        $this->assertTrue($result['deleted']);
    }
}