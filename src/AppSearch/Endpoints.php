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

namespace Elastic\EnterpriseSearch\AppSearch;

use Elastic\EnterpriseSearch\AbstractEndpoints;
use Elastic\EnterpriseSearch\Response\Response;

/**
 * A set of product-specific APIs for Elastic App Search
 *
 * @generated This file is generated, please do not edit
 */
class Endpoints extends AbstractEndpoints
{
	/**
	 * Retrieve adaptive relevance settings
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/adaptive-relevance-api-reference.html#adaptive-relevance-api-get-engine-adaptive-relevance-settings
	 */
	public function getAdaptiveRelevanceSettings(Request\GetAdaptiveRelevanceSettings $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Update adaptive relevance settings
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/adaptive-relevance-api-reference.html#adaptive-relevance-api-put-engine-adaptive-relevance-settings
	 */
	public function putAdaptiveRelevanceSettings(Request\PutAdaptiveRelevanceSettings $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Retrieve adaptive relevance
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/adaptive-relevance-api-reference.html#adaptive-relevance-api-get-engine-adaptive-relevance-suggestions
	 */
	public function listAdaptiveRelevanceSuggestions(Request\ListAdaptiveRelevanceSuggestions $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Update adaptive relevance
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/adaptive-relevance-api-reference.html#adaptive-relevance-api-put-engine-adaptive-relevance-suggestions
	 */
	public function putAdaptiveRelevanceSuggestions(Request\PutAdaptiveRelevanceSuggestions $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Retrieve adaptive relevance
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/adaptive-relevance-api-reference.html#adaptive-relevance-api-get-engine-adaptive-relevance-suggestions-query
	 */
	public function getAdaptiveRelevanceSuggestions(Request\GetAdaptiveRelevanceSuggestions $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Retrieve adaptive relevance settings
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/adaptive-relevance-api-reference.html#adaptive-relevance-api-post-engine-adaptive-relevance-suggestions-update-process-refresh
	 */
	public function refreshAdaptiveRelevanceUpdateProcess(Request\RefreshAdaptiveRelevanceUpdateProcess $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Query for analytics click data
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/clicks.html
	 */
	public function getTopClicksAnalytics(Request\GetTopClicksAnalytics $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Query for analytics counts data
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/counts.html
	 */
	public function getCountAnalytics(Request\GetCountAnalytics $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Query for analytics query data
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/queries.html#queries-top-queries
	 */
	public function getTopQueriesAnalytics(Request\GetTopQueriesAnalytics $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Tracks results that were clicked after a query
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/clickthrough.html
	 */
	public function logClickthrough(Request\LogClickthrough $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Extract content from a URL
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/web-crawler-api-reference.html#web-crawler-apis-post-crawler-extract-url
	 */
	public function getCrawlerUrlExtractionResult(Request\GetCrawlerUrlExtractionResult $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Create a crawl request
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/web-crawler-api-reference.html#web-crawler-apis-post-crawler-crawl-requests
	 */
	public function createCrawlerCrawlRequest(Request\CreateCrawlerCrawlRequest $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * List crawl requests
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/web-crawler-api-reference.html#web-crawler-apis-get-crawler-crawl-requests
	 */
	public function listCrawlerCrawlRequests(Request\ListCrawlerCrawlRequests $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Get crawl request details
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/web-crawler-api-reference.html#web-crawler-apis-get-crawler-crawl-requests-id
	 */
	public function getCrawlerCrawlRequest(Request\GetCrawlerCrawlRequest $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Get active crawl request details
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/web-crawler-api-reference.html#web-crawler-apis-get-crawler-crawl-requests-active
	 */
	public function getCrawlerActiveCrawlRequest(Request\GetCrawlerActiveCrawlRequest $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Cancel an active crawl request
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/web-crawler-api-reference.html#web-crawler-apis-post-crawler-crawl-requests-active-cancel
	 */
	public function deleteCrawlerActiveCrawlRequest(Request\DeleteCrawlerActiveCrawlRequest $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Create a crawl rule
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/web-crawler-api-reference.html#web-crawler-apis-post-crawl-rules
	 */
	public function createCrawlerCrawlRule(Request\CreateCrawlerCrawlRule $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Update a crawl rule
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/web-crawler-api-reference.html#web-crawler-apis-put-crawl-rule
	 */
	public function putCrawlerCrawlRule(Request\PutCrawlerCrawlRule $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Delete a crawl rule
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/web-crawler-api-reference.html#web-crawler-apis-delete-crawl-rule
	 */
	public function deleteCrawlerCrawlRule(Request\DeleteCrawlerCrawlRule $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Get crawl schedule
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/web-crawler-api-reference.html#web-crawler-apis-get-crawler-crawl-schedule
	 */
	public function getCrawlerCrawlSchedule(Request\GetCrawlerCrawlSchedule $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Set crawl schedule
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/web-crawler-api-reference.html#web-crawler-apis-put-crawler-crawl-schedule
	 */
	public function putCrawlerCrawlSchedule(Request\PutCrawlerCrawlSchedule $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Delete a crawl schedule
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/web-crawler-api-reference.html#web-crawler-apis-delete-crawler-crawl-schedule
	 */
	public function deleteCrawlerCrawlSchedule(Request\DeleteCrawlerCrawlSchedule $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * View denied urls for Process Crawl
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/web-crawler-api-reference.html#web-crawler-apis-get-crawler-process-crawls-id-denied-urls
	 */
	public function getCrawlerProcessCrawlDeniedUrls(Request\GetCrawlerProcessCrawlDeniedUrls $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * List crawler domains
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/web-crawler-api-reference.html#web-crawler-apis-get-crawler-domain
	 */
	public function listCrawlerDomains(Request\ListCrawlerDomains $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Create a crawler domain
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/web-crawler-api-reference.html#web-crawler-apis-post-crawler-domains
	 */
	public function createCrawlerDomain(Request\CreateCrawlerDomain $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Get domain configuration
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/web-crawler-api-reference.html#web-crawler-apis-get-crawler-domain
	 */
	public function getCrawlerDomain(Request\GetCrawlerDomain $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Update domain configuration
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/web-crawler-api-reference.html#web-crawler-apis-put-crawler-domain
	 */
	public function putCrawlerDomain(Request\PutCrawlerDomain $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Delete domain configuration
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/web-crawler-api-reference.html#web-crawler-apis-delete-crawler-domain
	 */
	public function deleteCrawlerDomain(Request\DeleteCrawlerDomain $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Create a crawler entry point
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/web-crawler-api-reference.html#web-crawler-apis-post-entry-points
	 */
	public function createCrawlerEntryPoint(Request\CreateCrawlerEntryPoint $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Update a crawler entry point
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/web-crawler-api-reference.html#web-crawler-apis-put-entry-point
	 */
	public function putCrawlerEntryPoint(Request\PutCrawlerEntryPoint $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Delete an entry point
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/web-crawler-api-reference.html#web-crawler-apis-delete-crawler-domain
	 */
	public function deleteCrawlerEntryPoint(Request\DeleteCrawlerEntryPoint $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Retrieve a snapshot of crawler metrics
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/web-crawler-api-reference.html
	 */
	public function getCrawlerMetrics(Request\GetCrawlerMetrics $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Retrieve crawler configuration overview
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/web-crawler-api-reference.html#web-crawler-apis-get-crawler
	 */
	public function getCrawlerOverview(Request\GetCrawlerOverview $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Create a process crawl
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/web-crawler-api-reference.html#web-crawler-apis-post-crawler-process-crawls
	 */
	public function createCrawlerProcessCrawl(Request\CreateCrawlerProcessCrawl $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * List process crawls
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/web-crawler-api-reference.html#web-crawler-apis-get-crawler-process-crawls
	 */
	public function listCrawlerProcessCrawls(Request\ListCrawlerProcessCrawls $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Get process crawl details
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/web-crawler-api-reference.html#web-crawler-apis-get-crawler-process-crawls-id
	 */
	public function getCrawlerProcessCrawl(Request\GetCrawlerProcessCrawl $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Create a crawler sitemap
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/web-crawler-api-reference.html#web-crawler-apis-post-sitemaps
	 */
	public function createCrawlerSitemap(Request\CreateCrawlerSitemap $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Update a sitemap
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/web-crawler-api-reference.html#web-crawler-apis-put-sitemap
	 */
	public function putCrawlerSitemap(Request\PutCrawlerSitemap $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Delete a sitemap
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/web-crawler-api-reference.html#web-crawler-apis-delete-sitemap
	 */
	public function deleteCrawlerSitemap(Request\DeleteCrawlerSitemap $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Trace a history of a crawled URL
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/web-crawler-api-reference.html#web-crawler-apis-post-crawler-trace-url
	 */
	public function getCrawlerUrlTracingResult(Request\GetCrawlerUrlTracingResult $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Validate URL with Crawler
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/web-crawler-api-reference.html#web-crawler-apis-post-crawler-validate-url
	 */
	public function getCrawlerUrlValidationResult(Request\GetCrawlerUrlValidationResult $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Validate Domain with Crawler
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/web-crawler-api-reference.html#web-crawler-apis-post-crawler-validate-domain
	 */
	public function getCrawlerDomainValidationResult(Request\GetCrawlerDomainValidationResult $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Get the User-Agent header value for the crawler
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/web-crawler-api-reference.html#web-crawler-apis-user-agent
	 */
	public function getCrawlerUserAgent(Request\GetCrawlerUserAgent $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Retrieve all API keys
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/credentials.html#credentials-all
	 */
	public function listApiKeys(Request\ListApiKeys $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Create an API key
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/credentials.html#credentials-create
	 */
	public function createApiKey(Request\CreateApiKey $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Retrieve an API key
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/credentials.html#credentials-single
	 */
	public function getApiKey(Request\GetApiKey $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Update an API key
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/credentials.html#credentials-update
	 */
	public function putApiKey(Request\PutApiKey $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Delete an API key
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/credentials.html#credentials-destroy
	 */
	public function deleteApiKey(Request\DeleteApiKey $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Retrieve all curations
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
	 * Retrieve a curation
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/curations.html#curations-read
	 */
	public function getCuration(Request\GetCuration $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Update a curation
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/curations.html#curations-update
	 */
	public function putCuration(Request\PutCuration $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Delete a curation
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/curations.html#curations-destroy
	 */
	public function deleteCuration(Request\DeleteCuration $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Retrieve one or more documents
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/documents.html#documents-get
	 */
	public function getDocuments(Request\GetDocuments $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Create a new document
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/documents.html#documents-create
	 */
	public function indexDocuments(Request\IndexDocuments $request): Response
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
	 * Partial update of documents
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/documents.html#documents-partial
	 */
	public function putDocuments(Request\PutDocuments $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Retrieve all documents
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/documents.html#documents-list
	 */
	public function listDocuments(Request\ListDocuments $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Retrieve all engines
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/engines.html#engines-list
	 */
	public function listEngines(Request\ListEngines $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Create an Engine
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/engines.html#engines-create
	 */
	public function createEngine(Request\CreateEngine $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Retrieve an engine
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/engines.html#engines-get
	 */
	public function getEngine(Request\GetEngine $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Delete an Engine
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/engines.html#engines-delete
	 */
	public function deleteEngine(Request\DeleteEngine $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Delete a source engine
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/meta-engines.html#meta-engines-remove-source-engines
	 */
	public function deleteMetaEngineSource(Request\DeleteMetaEngineSource $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Add a source engine
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/meta-engines.html#meta-engines-add-source-engines
	 */
	public function addMetaEngineSource(Request\AddMetaEngineSource $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Retrieve API logs
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/api-logs.html
	 */
	public function getApiLogs(Request\GetApiLogs $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Retrieve query suggestions
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/query-suggestion.html
	 */
	public function querySuggestion(Request\QuerySuggestion $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Retrieve engine schema
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/schema.html#schema-read
	 */
	public function getSchema(Request\GetSchema $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Update engine schema
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/schema.html#schema-patch
	 */
	public function putSchema(Request\PutSchema $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Submit a search
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/search.html
	 */
	public function search(Request\Search $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Retrieve search settings
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/search-settings.html#search-settings-show
	 */
	public function getSearchSettings(Request\GetSearchSettings $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Update search settings
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/search-settings.html#search-settings-update
	 */
	public function putSearchSettings(Request\PutSearchSettings $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Reset search settings
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/search-settings.html#search-settings-reset
	 */
	public function resetSearchSettings(Request\ResetSearchSettings $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Retrieve all synonym sets
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/synonyms.html#synonyms-get
	 */
	public function listSynonymSets(Request\ListSynonymSets $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Create a synonym set
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/synonyms.html#synonyms-create
	 */
	public function createSynonymSet(Request\CreateSynonymSet $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Retrieve a synonym set
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/synonyms.html#synonyms-list-one
	 */
	public function getSynonymSet(Request\GetSynonymSet $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Update a synonym set
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/synonyms.html#synonyms-update
	 */
	public function putSynonymSet(Request\PutSynonymSet $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Delete a synonym set
	 *
	 * @see https://www.elastic.co/guide/en/app-search/current/synonyms.html#synonyms-delete
	 */
	public function deleteSynonymSet(Request\DeleteSynonymSet $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}
}
