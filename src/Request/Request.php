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

namespace Elastic\EnterpriseSearch\Request;

use Elastic\Transport\Serializer\CsvSerializer;
use Elastic\Transport\Serializer\JsonSerializer;
use Elastic\Transport\Serializer\NDJsonSerializer;
use Elastic\Transport\Serializer\TextSerializer;
use GuzzleHttp\Psr7\Request as Psr7Request;
use Psr\Http\Message\RequestInterface as MessageRequestInterface;

class Request implements RequestInterface
{
    protected string $method = 'GET';

    protected string $path = '';

    protected array $headers = [];

    protected array $queryParams = [];

    /**
     * @var mixed
     */
    protected $body;

    /**
     * Returns a PSR-7 request
     */
    public function getRequest(): MessageRequestInterface
    {
        $path = $this->path;
        if (!empty($this->queryParams)) {
           $path .= '?' . http_build_query($this->queryParams);
        }
        $content = empty($this->body) ?: $this->serializeBody($this->body);
        return new Psr7Request($this->method, $path, $this->headers, $content);
    }

    /**
     * Serialize the body into a string
     * 
     * @param mixed $body
     */
    protected function serializeBody($body): string
    {
        if (empty($body)) {
            return '';
        }
        if (is_string($body)) {
            return $body;
        }
        $contentType = $this->headers['Content-Type'] ?? '';
        switch ($contentType) {
            case 'application/json':
                return JsonSerializer::serialize($this->body, ['remove_null' => true]);
            case 'application/x-ndjson':
                return NDJsonSerializer::serialize($this->body, ['remove_null' => true]);
            case 'text/csv':
                return CsvSerializer::serialize($this->body);
            default:
                return TextSerializer::serialize($this->body);
        }
    }

    /**
     * Set the header for the endpoint
     */
    public function setHeader(string $name, string $value): self
    {
        $this->headers[$name] = $value;
        return $this;
    }
}