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
use PHPUnit\Framework\TestCase;
use Psr\Log\NullLogger;

final class EnterpriseSearchTest extends TestCase
{
    /**
     * @var Client
     */
    private $client;
    
    public function setUp(): void
    {
        $this->client = new Client([
            'host'     => 'localhost:9200',
            'enterprise-search' => [
                'username' => 'my username',
                'password' => 'my password'
            ]
        ]);
    }

    public function testSetLogger()
    {
        $logger = new NullLogger();
        $es = $this->client->enterpriseSearch([
            'logger' => $logger
        ]);
        $this->assertEquals($logger, $es->getTransport()->getLogger());
    }
}