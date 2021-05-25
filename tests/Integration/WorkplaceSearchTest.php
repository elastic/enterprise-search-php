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
use Elastic\EnterpriseSearch\WorkplaceSearch\Endpoints;
use Elastic\EnterpriseSearch\WorkplaceSearch\Request;
use Elastic\EnterpriseSearch\WorkplaceSearch\Schema;
use Elastic\EnterpriseSearch\WorkplaceSearch\Schema\ContentSourceCreateDefinition;
use PHPUnit\Framework\TestCase;

/**
 * @group workplace
 */
final class WorkplaceSearchTest extends TestCase
{
    /**
     * @var Endpoints
     */
    private $workplaceSearch;

    /**
     * @var Client
     */
    private $client;
    
    public function setUp(): void
    {
        if (!getenv('ENTERPRISE_SEARCH_URL')) {
            $this->markTestSkipped('Cannot execute integration test without ENTERPRISE_SEARCH_URL');
        }
        if (!getenv('WORKPLACE_SEARCH_USER')) {
            $this->markTestSkipped('Cannot execute integration test without WORKPLACE_SEARCH_USER');
        }
        if (!getenv('WORKPLACE_SEARCH_PASSWORD')) {
            $this->markTestSkipped('Cannot execute integration test without WORKPLACE_SEARCH_PASSWORD');
        }
        $this->client = new Client([
            'host'     => getenv('ENTERPRISE_SEARCH_URL'),
            'workplace-search' => [
                'username' => getenv('WORKPLACE_SEARCH_USER'),
                'password' => getenv('WORKPLACE_SEARCH_PASSWORD')
            ]
        ]);
        $this->workplaceSearch = $this->client->workplaceSearch();
    }

    /**
     * @covers Elastic\EnterpriseSearch\WorkplaceSearch\Endpoints::createContentSource
     * @covers Elastic\EnterpriseSearch\WorkplaceSearch\Request\CreateContentSource
     * @return string
     */
    public function testCreateContentSource()
    {
        $content = new ContentSourceCreateDefinition('php_client_test');
        $result = $this->workplaceSearch->createContentSource(new Request\CreateContentSource($content));
        
        $this->assertEquals(200, $result->getResponse()->getStatusCode());
        return $result['id'];
    }

    /**
     * @covers Elastic\EnterpriseSearch\WorkplaceSearch\Endpoints::indexDocuments
     * @covers Elastic\EnterpriseSearch\WorkplaceSearch\Request\IndexDocuments
     * @depends testCreateContentSource
     * @return Schema\Document
     */
    public function testIndexDocuments(string $id)
    {
        $doc = new Schema\Document();
        $doc->id = '1234';
        $doc->title = "The Meaning of Time";
        $doc->body = "Not much. It is a made up thing.";

        $result = $this->workplaceSearch->indexDocuments(new Request\IndexDocuments($id, [$doc]));
        
        $this->assertTrue(isset($result['results']));
        $this->assertEquals($doc->id, $result['results'][0]['id']);
        $this->assertEmpty($result['results'][0]['errors']);

        return $doc;
    }

    /**
     * @covers Elastic\EnterpriseSearch\WorkplaceSearch\Endpoints::deleteDocuments
     * @covers Elastic\EnterpriseSearch\WorkplaceSearch\Request\DeleteDocuments
     * @depends testCreateContentSource
     * @depends testIndexDocuments
     */
    public function testDeleteDocuments(string $id, Schema\Document $doc)
    {
        $result = $this->workplaceSearch->deleteDocuments(new Request\DeleteDocuments($id, [$doc->id]));
        
        $this->assertTrue(isset($result['results']));
        $this->assertEquals($doc->id, $result['results'][0]['id']);
        $this->assertTrue($result['results'][0]['success']);
    }    
}