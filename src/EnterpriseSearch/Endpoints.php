<?php

/**
 * NOTE: THIS FILE IS AUTO-GENERATED, DO NOT EDIT
 *
 * Elastic Enterprise Search
 *
 * @link      https://github.com/elastic/enterprise-search-php
 * @copyright Copyright (c) Elasticsearch B.V (https://www.elastic.co)
 * @license   http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 *
 * Licensed to Elasticsearch B.V under one or more agreements
 * Elasticsearch B.V licenses this file to you under the Apache 2.0 License
 * See the LICENSE file in the project root for more information
 */

declare(strict_types=1);

namespace Elastic\EnterpriseSearch\EnterpriseSearch;

use Elastic\EnterpriseSearch\AbstractEndpoints;
use Elastic\EnterpriseSearch\Response\Response;

/**
 * Enterprise Search API
 * @internal
 */
class Endpoints extends AbstractEndpoints
{
	/**
	 * Get information on the health of a deployment and basic statistics around resource usage
	 *
	 * @see https://www.elastic.co/guide/en/enterprise-search/current/monitoring-apis.html#health-api-example
	 */
	public function getHealth(Request\GetHealth $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Get the read-only flag's state
	 *
	 * @see https://www.elastic.co/guide/en/enterprise-search/current/read-only-api.html#getting-read-only-state
	 */
	public function getReadOnly(Request\GetReadOnly $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Update the read-only flag's state
	 *
	 * @see https://www.elastic.co/guide/en/enterprise-search/current/read-only-api.html#setting-read-only-state
	 */
	public function putReadOnly(Request\PutReadOnly $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Get information about the resource usage of the application, the state of different internal queues, etc.
	 *
	 * @see https://www.elastic.co/guide/en/enterprise-search/current/monitoring-apis.html#stats-api-example
	 */
	public function getStats(Request\GetStats $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Get version information for this server
	 *
	 * @see https://www.elastic.co/guide/en/enterprise-search/current/management-apis.html
	 */
	public function getVersion(Request\GetVersion $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}
}
