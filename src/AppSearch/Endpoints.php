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

namespace Elastic\EnterpriseSearch\AppSearch;

use Elastic\EnterpriseSearch\AbstractEndpoints;
use Elastic\EnterpriseSearch\AppSearch\Request;
use Elastic\EnterpriseSearch\Response\Response;

/**
 * Elastic App Search API
 * @internal
 *
 * @see https://www.elastic.co/guide/en/app-search/current/index.html
 */
class Endpoints extends AbstractEndpoints
{
	/**
	 * Retrieves all engines with optional pagination support
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/engines.html#engines-list
	 */
	public function listEngines(Request\ListEngines $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Creates a new engine
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/engines.html#engines-create
	 */
	public function createEngine(Request\CreateEngine $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Delete an engine by name
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/engines.html#engines-delete
	 */
	public function deleteEngine(Request\DeleteEngine $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Retrieves an engine by name
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/engines.html#engines-get
	 */
	public function getEngine(Request\GetEngine $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Returns the number of clicks received by a document in descending order
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/clicks.html
	 */
	public function getTopClicksAnalytics(Request\GetTopClicksAnalytics $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Returns the number of clicks and total number of queries over a period
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/counts.html
	 */
	public function getCountAnalytics(Request\GetCountAnalytics $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Returns queries analytics by usage count
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/queries.html#queries-top-queries
	 */
	public function getTopQueriesAnalytics(Request\GetTopQueriesAnalytics $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Send data about clicked results
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/clickthrough.html
	 */
	public function logClickthrough(Request\LogClickthrough $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Retrieve available curations for the engine
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/curations.html#curations-read
	 */
	public function listCurations(Request\ListCurations $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Create a new curation
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/curations.html#curations-create
	 */
	public function createCuration(Request\CreateCuration $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Delete a curation by ID
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/curations.html#curations-destroy
	 */
	public function deleteCuration(Request\DeleteCuration $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Retrieve a curation by ID
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/curations.html#curations-read
	 */
	public function getCuration(Request\GetCuration $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Update an existing curation
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/curations.html#curations-update
	 */
	public function putCuration(Request\PutCuration $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Delete documents by ID
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/documents.html#documents-delete
	 */
	public function deleteDocuments(Request\DeleteDocuments $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Retrieves one or more documents by ID
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/documents.html#documents-get
	 */
	public function getDocuments(Request\GetDocuments $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Partial update of documents
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/documents.html#documents-partial
	 */
	public function putDocuments(Request\PutDocuments $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Create or update documents
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/documents.html#documents-create
	 */
	public function indexDocuments(Request\IndexDocuments $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * List all available documents with optional pagination support
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/documents.html#documents-list
	 */
	public function listDocuments(Request\ListDocuments $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * The API Log displays API request and response data at the Engine level
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/api-logs.html
	 */
	public function getApiLogs(Request\GetApiLogs $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Run several search in the same request
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/multi-search.html
	 */
	public function multiSearch(Request\MultiSearch $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Provide relevant query suggestions for incomplete queries
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/query-suggestion.html
	 */
	public function querySuggestion(Request\QuerySuggestion $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Retrieve current schema for the engine
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/schema.html#schema-read
	 */
	public function getSchema(Request\GetSchema $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Update schema for the current engine
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/schema.html#schema-patch
	 */
	public function putSchema(Request\PutSchema $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Allows you to search over, facet and filter your data
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/search.html
	 */
	public function search(Request\Search $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Retrieve current search settings for the engine
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/search-settings.html#search-settings-show
	 */
	public function getSearchSettings(Request\GetSearchSettings $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Update search settings for the engine
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/search-settings.html#search-settings-update
	 */
	public function putSearchSettings(Request\PutSearchSettings $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Reset search settings for the engine
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/search-settings.html#search-settings-reset
	 */
	public function resetSearchSettings(Request\ResetSearchSettings $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Delete a source engine from a meta engine
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/meta-engines.html#meta-engines-remove-source-engines
	 */
	public function deleteMetaEngineSource(Request\DeleteMetaEngineSource $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Add a source engine to an existing meta engine
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/meta-engines.html#meta-engines-add-source-engines
	 */
	public function addMetaEngineSource(Request\AddMetaEngineSource $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Retrieve available synonym sets for the engine
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/synonyms.html#synonyms-get
	 */
	public function listSynonymSets(Request\ListSynonymSets $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Create a new synonym set
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/synonyms.html#synonyms-create
	 */
	public function createSynonymSet(Request\CreateSynonymSet $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Delete a synonym set by ID
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/synonyms.html#synonyms-delete
	 */
	public function deleteSynonymSet(Request\DeleteSynonymSet $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Retrieve a synonym set by ID
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/synonyms.html#synonyms-list-one
	 */
	public function getSynonymSet(Request\GetSynonymSet $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Update a synonym set by ID
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/synonyms.html#synonyms-update
	 */
	public function putSynonymSet(Request\PutSynonymSet $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}
}
