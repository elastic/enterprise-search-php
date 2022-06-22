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

namespace Elastic\EnterpriseSearch\Response;

use Psr\Http\Message\ResponseInterface as MessageResponseInterface;

interface ResponseInterface
{
    /**
     * Get the HTTP response as PSR-7 ResponseInterface
     * 
     * @see https://www.php-fig.org/psr/psr-7/#33-psrhttpmessageresponseinterface
     */
    public function getResponse(): MessageResponseInterface;
}