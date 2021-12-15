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
use PHPUnit\Framework\TestCase;
use Psr\Log\NullLogger;

final class AppSearchTest extends TestCase
{
    public function setUp(): void
    {
        $this->client = new Client([
            'host'     => 'localhost:9200',
            'app-search' => [
                'token' => 'my token'
            ]
        ]);
    }

    public function testSetLogger()
    {
        $logger = new NullLogger();
        $app = $this->client->appSearch([
            'logger' => $logger
        ]);
        $this->assertEquals($logger, $app->getTransport()->getLogger());
    }
}