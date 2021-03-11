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
use PHPUnit\Framework\TestCase;

/**
 * @group integration
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
    
    /**
     * @var string
     */
    private $id;

    public function setUp(): void
    {
        if (!getenv('ENTERPRISE_SEARCH_URL')) {
            $this->markTestSkipped('Cannot execute integration test without ENTERPRISE_SEARCH_URL');
        }
        if (!getenv('WORKPLACE_SEARCH_ID')) {
            $this->markTestSkipped('Cannot execute integration test without WORKPLACE_SEARCH_ID');
        }
        if (!getenv('WORKPLACE_SEARCH_TOKEN')) {
            $this->markTestSkipped('Cannot execute integration test without WORKPLACE_SEARCH_TOKEN');
        }
        $this->client = new Client([
            'host'     => getenv('ENTERPRISE_SEARCH_URL'),
            'workplace-search' => [
                'token' => getenv('WORKPLACE_SEARCH_TOKEN')
            ]
        ]);
        $this->id = getenv('WORKPLACE_SEARCH_ID');
        $this->workplaceSearch = $this->client->workplaceSearch();
    }

    /**
     * @covers Elastic\EnterpriseSearch\WorkplaceSearch\Endpoints::indexDocuments
     * @covers Elastic\EnterpriseSearch\WorkplaceSearch\Request\IndexDocuments
     */
    public function testIndexDocuments()
    {
        $doc = new Schema\Document();
        $doc->id = '1234';
        $doc->title = "The Meaning of Time";
        $doc->body = "Not much. It is a made up thing.";

        $result = $this->workplaceSearch->indexDocuments(new Request\IndexDocuments($this->id, [$doc]));
        
        $this->assertTrue(isset($result['results']));
        $this->assertEquals($doc->id, $result['results'][0]['id']);
        $this->assertEmpty($result['results'][0]['errors']);

        return $doc;
    }

    /**
     * @covers Elastic\EnterpriseSearch\WorkplaceSearch\Endpoints::deleteDocuments
     * @covers Elastic\EnterpriseSearch\WorkplaceSearch\Request\DeleteDocuments
     * @depends testIndexDocuments
     */
    public function testDeleteDocuments(Schema\Document $doc)
    {
        $result = $this->workplaceSearch->deleteDocuments(new Request\DeleteDocuments($this->id, [$doc->id]));
        
        $this->assertTrue(isset($result['results']));
        $this->assertEquals($doc->id, $result['results'][0]['id']);
        $this->assertTrue($result['results'][0]['success']);
    }    
}