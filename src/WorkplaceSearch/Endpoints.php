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

namespace Elastic\EnterpriseSearch\WorkplaceSearch;

use Elastic\EnterpriseSearch\Response\Response;
use Elastic\Transport\Transport;

/**
 * Workplace Search API
 * @internal
 */
class Endpoints
{
	/** @var Transport */
	private $transport;


	public function __construct(Transport $transport)
	{
		$this->transport = $transport;
	}


	/**
	 * Indexes one or more new documents into a custom content source, or updates one or more existing documents
	 *
	 * @see https://www.elastic.co/guide/en/workplace-search/current/workplace-search-custom-sources-api.html#index-and-update
	 */
	public function indexDocuments(Request\IndexDocuments $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Deletes a list of documents from a custom content source
	 *
	 * @see https://www.elastic.co/guide/en/workplace-search/current/workplace-search-custom-sources-api.html#destroy
	 */
	public function deleteDocuments(Request\DeleteDocuments $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Retrieves all external identities
	 *
	 * @see https://www.elastic.co/guide/en/workplace-search/current/workplace-search-external-identities-api.html#list-external-identities
	 */
	public function listExternalIdentities(Request\ListExternalIdentities $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Adds a new external identity
	 *
	 * @see https://www.elastic.co/guide/en/workplace-search/current/workplace-search-external-identities-api.html#add-external-identity
	 */
	public function createExternalIdentity(Request\CreateExternalIdentity $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Retrieves an external identity
	 *
	 * @see https://www.elastic.co/guide/en/workplace-search/current/workplace-search-external-identities-api.html#show-external-identity
	 */
	public function getExternalIdentity(Request\GetExternalIdentity $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Updates an external identity
	 *
	 * @see https://www.elastic.co/guide/en/workplace-search/current/workplace-search-external-identities-api.html#update-external-identity
	 */
	public function putExternalIdentity(Request\PutExternalIdentity $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Deletes an external identity
	 *
	 * @see https://www.elastic.co/guide/en/workplace-search/current/workplace-search-external-identities-api.html#remove-external-identity
	 */
	public function deleteExternalIdentity(Request\DeleteExternalIdentity $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Lists all permissions for all users
	 *
	 * @see https://www.elastic.co/guide/en/workplace-search/current/workplace-search-document-permissions-api.html#list
	 */
	public function listPermissions(Request\ListPermissions $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Lists all permissions for one user
	 *
	 * @see https://www.elastic.co/guide/en/workplace-search/current/workplace-search-document-permissions-api.html#list-one
	 */
	public function getUserPermissions(Request\GetUserPermissions $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Creates a new set of permissions or over-writes all existing permissions
	 *
	 * @see https://www.elastic.co/guide/en/workplace-search/current/workplace-search-document-permissions-api.html#add-all
	 */
	public function putUserPermissions(Request\PutUserPermissions $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Adds one or more new permissions atop existing permissions
	 *
	 * @see https://www.elastic.co/guide/en/workplace-search/current/workplace-search-document-permissions-api.html#add-one
	 */
	public function addUserPermissions(Request\AddUserPermissions $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Removes one or more permissions from an existing set of permissions
	 *
	 * @see https://www.elastic.co/guide/en/workplace-search/current/workplace-search-document-permissions-api.html#remove-one
	 */
	public function removeUserPermissions(Request\RemoveUserPermissions $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Capture click and feedback analytic events
	 *
	 * @see https://www.elastic.co/guide/en/workplace-search/current/workplace-search-analytics-api.html
	 */
	public function createAnalyticsEvent(Request\CreateAnalyticsEvent $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Search across available sources with various query tuning options
	 *
	 * @see https://www.elastic.co/guide/en/workplace-search/current/workplace-search-search-api.html
	 */
	public function search(Request\Search $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}
}
