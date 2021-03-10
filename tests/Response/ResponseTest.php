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

namespace Elastic\EnterpriseSearch\Tests\Response;

use ArrayIterator;
use Elastic\EnterpriseSearch\Exception\ArrayAccessException;
use Elastic\EnterpriseSearch\Response\Response;
use Elastic\Transport\Exception\UnknownContentTypeException;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;
use SimpleXMLElement;
use stdClass;

final class ResponseTest extends TestCase
{
    public function setUp(): void
    {
        $this->psr7Response = $this->createStub(ResponseInterface::class); 
        $this->response = new Response($this->psr7Response);
    }

    public function getContentTypeForArray()
    {
        return [
            ['application/json', '{}', []],
            ['application/json', '{"foo":"bar"}', ['foo' => 'bar']],
            ['application/x-ndjson', "{\"foo\":\"bar\"}\n{}\n", [['foo' => 'bar'], []]],
            ['text/csv', "1,2,3\n4,5,6", [[1,2,3], [4,5,6]]]
        ];
    }

    /**
     * @dataProvider getContentTypeForArray
     */
    public function testAsArray(string $type, string $body, array $asArray)
    {
        $this->psr7Response->method('hasHeader')
            ->with($this->equalTo('Content-Type'))
            ->willReturn(true);

        $this->psr7Response->method('getHeaderLine')
            ->with($this->equalTo('Content-Type'))
            ->willReturn($type);

        $this->psr7Response->method('getBody')
            ->willReturn($body);

        $this->assertEquals($asArray, $this->response->asArray());

    }

    public function testAsArrayWithoutContentTypeThrowsException()
    {
        $this->psr7Response->method('hasHeader')
            ->with($this->equalTo('Content-Type'))
            ->willReturn(false);

        $this->expectException(UnknownContentTypeException::class);
        $this->response->asArray();
    }

    public function testAsArrayWithUnknownContentTypeThrowsException()
    {
        $this->psr7Response->method('hasHeader')
            ->with($this->equalTo('Content-Type'))
            ->willReturn(true);

        $this->psr7Response->method('getHeaderLine')
            ->with($this->equalTo('Content-Type'))
            ->willReturn('xxx');

        $this->expectException(UnknownContentTypeException::class);
        $this->response->asArray();
    }

    public function getContentTypeForObject()
    {
        $obj1 = new stdClass;
        $obj1->foo = "bar";

        $obj2 = new ArrayIterator();
        $obj2[] = $obj1;
        $obj2[] = new stdClass();

        $xml = '<?xml version="1.0" encoding="UTF-8"?><root><foo>bar</foo></root>';
        $simpleXml = new SimpleXMLElement($xml);

        return [
            ['application/json', '{}', new stdClass()],
            ['application/json', '{"foo":"bar"}', $obj1],
            ['application/x-ndjson', "{\"foo\":\"bar\"}\n{}\n", $obj2],
            ['application/xml', $xml, $simpleXml]
        ];
    }

    /**
     * @dataProvider getContentTypeForObject
     */
    public function testAsObject(string $type, string $body, object $asObject)
    {
        $this->psr7Response->method('hasHeader')
            ->with($this->equalTo('Content-Type'))
            ->willReturn(true);

        $this->psr7Response->method('getHeaderLine')
            ->with($this->equalTo('Content-Type'))
            ->willReturn($type);

        $this->psr7Response->method('getBody')
            ->willReturn($body);

        $this->assertEquals($asObject, $this->response->asObject());
    }

    public function testAsObjectWithoutContentTypeThrowsException()
    {
        $this->psr7Response->method('hasHeader')
            ->with($this->equalTo('Content-Type'))
            ->willReturn(false);

        $this->expectException(UnknownContentTypeException::class);
        $this->response->asObject();
    }

    public function testAsObjectWithUnknownContentTypeThrowsException()
    {
        $this->psr7Response->method('hasHeader')
            ->with($this->equalTo('Content-Type'))
            ->willReturn(true);

        $this->psr7Response->method('getHeaderLine')
            ->with($this->equalTo('Content-Type'))
            ->willReturn('xxx');

        $this->expectException(UnknownContentTypeException::class);
        $this->response->asObject();
    }

    public function getContentTypeForString()
    {
        $xml = '<?xml version="1.0" encoding="UTF-8"?><root><foo>bar</foo></root>';

        return [
            ['application/json', '{}', '{}'],
            ['application/json', '{"foo":"bar"}', '{"foo":"bar"}'],
            ['application/x-ndjson', "{\"foo\":\"bar\"}\n{}\n", "{\"foo\":\"bar\"}\n{}\n"],
            ['text/plain', 'Hello World!', 'Hello World!'],
            ['text/csv', "1,2,3\n4,5,6", "1,2,3\n4,5,6"],
            ['application/xml', $xml, $xml],
            ['xxx', 'Hello World!', 'Hello World!']
        ];
    }

    /**
     * @dataProvider getContentTypeForString
     */
    public function testAsString(string $type, string $body, string $asString)
    {
        $this->psr7Response->method('hasHeader')
            ->with($this->equalTo('Content-Type'))
            ->willReturn(true);

        $this->psr7Response->method('getHeaderLine')
            ->with($this->equalTo('Content-Type'))
            ->willReturn($type);

        $this->psr7Response->method('getBody')
            ->willReturn($body);

        $this->assertEquals($asString, $this->response->asString());
    }

    public function testAsStringCastingTheObject()
    {
        $body = 'Hello World!';

        $this->psr7Response->method('hasHeader')
            ->with($this->equalTo('Content-Type'))
            ->willReturn(true);

        $this->psr7Response->method('getHeaderLine')
            ->with($this->equalTo('Content-Type'))
            ->willReturn('xxx');

        $this->psr7Response->method('getBody')
            ->willReturn($body);

        $this->assertEquals($body, (string) $this->response);
    }

    public function testGetResponse()
    {
        $psr7Response = $this->response->getResponse();
        $this->assertInstanceOf(ResponseInterface::class, $psr7Response);
        $this->assertEquals($psr7Response, $this->psr7Response);
    }

    public function getArrayAccessData()
    {
        return [
            ['application/json', '{ "foo" : "bar" }', function($res){
                return $res['foo'];
            }, 'bar'],
            ['application/json', '{ "foo" : "bar", "baz" : { "bug": "bao"}}', function($res){
                return $res['baz']['bug'];
            }, 'bao'],
            ['application/x-ndjson', "{\"foo\":\"bar\"}\n{}\n", function($res){
                return $res[0]['foo'];
            }, 'bar'],
            ['text/csv', "1,2,3\n4,5,6", function($res){
                return $res[1][0];
            }, '4']
        ];
    }
    
    /**
     * @dataProvider getArrayAccessData
     */
    public function testArrayAccessWithValidContentType(string $type, string $body, callable $return, string $value)
    {
        $this->psr7Response->method('hasHeader')
            ->with($this->equalTo('Content-Type'))
            ->willReturn(true);

        $this->psr7Response->method('getHeaderLine')
            ->with($this->equalTo('Content-Type'))
            ->willReturn($type);

        $this->psr7Response->method('getBody')
            ->willReturn($body);
        
        $this->assertEquals($return($this->response), $value);
    }

    public function testArrayAccessWithUnknownContentTypeThrowsException()
    {
        $this->psr7Response->method('hasHeader')
            ->with($this->equalTo('Content-Type'))
            ->willReturn(true);

        $this->psr7Response->method('getHeaderLine')
            ->with($this->equalTo('Content-Type'))
            ->willReturn('xxx');

        $this->psr7Response->method('getBody')
            ->willReturn('yyy: zzz');
        
        $this->expectException(UnknownContentTypeException::class);
        $this->response['yyy'];
    }

    public function testExistsArrayAccess()
    {
        $this->psr7Response->method('hasHeader')
            ->with($this->equalTo('Content-Type'))
            ->willReturn(true);

        $this->psr7Response->method('getHeaderLine')
            ->with($this->equalTo('Content-Type'))
            ->willReturn('application/json');

        $this->psr7Response->method('getBody')
            ->willReturn('{"foo":"bar"}');

        $this->assertFalse(isset($this->response['baz']));
        $this->assertTrue(isset($this->response['foo']));
    }

    public function testSetArrayAccessThrowsException()
    {
        $this->expectException(ArrayAccessException::class);
        $this->response['foo'] = 'bar';
    }

    public function testUnsetArrayAccessThrowsException()
    {
        $this->expectException(ArrayAccessException::class);
        unset($this->response['foo']);
    }

    public function testObjectAccess()
    {
        $this->psr7Response->method('hasHeader')
            ->with($this->equalTo('Content-Type'))
            ->willReturn(true);

        $this->psr7Response->method('getHeaderLine')
            ->with($this->equalTo('Content-Type'))
            ->willReturn('application/json');

        $this->psr7Response->method('getBody')
            ->willReturn('{ "foo" : "bar" }');

        $this->assertEquals($this->response->foo, 'bar');
    }

    public function testObjectAccessUndefinedPropertyExceptionReturnsNull()
    {
        $this->psr7Response->method('hasHeader')
            ->with($this->equalTo('Content-Type'))
            ->willReturn(true);

        $this->psr7Response->method('getHeaderLine')
            ->with($this->equalTo('Content-Type'))
            ->willReturn('application/json');

        $this->psr7Response->method('getBody')
            ->willReturn('{ "foo" : "bar" }');

        $value = $this->response->bar;
        $this->assertNull($value);
    }
}