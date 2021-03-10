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

use Elastic\EnterpriseSearch\Request\Request;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\RequestInterface;

final class RequestTest extends TestCase
{
    public function setUp(): void
    {
        $this->request = new Request;
    }

    public function testGetRequestReturnPsr7Interface()
    {
        $this->assertInstanceOf(RequestInterface::class, $this->request->getRequest());
    }

    public function testSetHeader()
    {
        $this->request->setHeader('X-Foo', 'Bar');
        $request = $this->request->getRequest();

        $headers = $request->getHeaders();
        $this->assertIsArray($headers['X-Foo']);
        $this->assertEquals($headers['X-Foo'][0], 'Bar');
    }
}