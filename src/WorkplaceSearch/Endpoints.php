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

namespace Elastic\EnterpriseSearch\WorkplaceSearch;

use Elastic\EnterpriseSearch\AbstractEndpoints;
use Elastic\EnterpriseSearch\Response\Response;

/**
 * A set of product-specific APIs for Elastic Workplace Search
 *
 * @generated This file is generated, please do not edit
 */
class Endpoints extends AbstractEndpoints
{
	/**
	 * Create a content source
	 *
	 * @see https://www.elastic.co/guide/en/workplace-search/current/workplace-search-content-sources-api.html#create-content-source-api
	 */
	public function createContentSource(Request\CreateContentSource $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Retrieves all content sources
	 *
	 * @see https://www.elastic.co/guide/en/workplace-search/current/workplace-search-content-sources-api.html#list-content-sources-api
	 */
	public function listContentSources(Request\ListContentSources $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Retrieves a content source by ID
	 *
	 * @see https://www.elastic.co/guide/en/workplace-search/current/workplace-search-content-sources-api.html#get-content-source-api
	 */
	public function getContentSource(Request\GetContentSource $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Update a content source
	 *
	 * @see https://www.elastic.co/guide/en/workplace-search/current/workplace-search-content-sources-api.html#update-content-source-api
	 */
	public function putContentSource(Request\PutContentSource $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Deletes a content source by ID
	 *
	 * @see https://www.elastic.co/guide/en/workplace-search/current/workplace-search-content-sources-api.html#remove-content-source-api
	 */
	public function deleteContentSource(Request\DeleteContentSource $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Upload content source icons
	 *
	 * @see https://www.elastic.co/guide/en/workplace-search/current/workplace-search-content-sources-api.html#upload-content-source-icon-api
	 */
	public function putContentSourceIcons(Request\PutContentSourceIcons $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Deletes documents by query in a custom content source
	 *
	 * @see https://www.elastic.co/guide/en/workplace-search/current/workplace-search-custom-sources-api.html#delete-documents-by-query
	 */
	public function deleteDocumentsByQuery(Request\DeleteDocumentsByQuery $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Lists documents from a custom content source
	 *
	 * @see https://www.elastic.co/guide/en/workplace-search/current/workplace-search-custom-sources-api.html#list-documents
	 */
	public function listDocuments(Request\ListDocuments $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
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
	 * @see https://www.elastic.co/guide/en/workplace-search/current/workplace-search-custom-sources-api.html#delete-by-id
	 */
	public function deleteDocuments(Request\DeleteDocuments $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Retrieves a document by ID from the specified content source
	 *
	 * @see https://www.elastic.co/guide/en/workplace-search/current/workplace-search-content-sources-api.html#get-document-by-id-api
	 */
	public function getDocument(Request\GetDocument $request): Response
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
	 * Issue commands to a Content Source's sync jobs
	 *
	 * @see https://www.elastic.co/guide/en/workplace-search/current/workplace-search-sync-jobs-api.html#command-sync-jobs-api
	 */
	public function commandSyncJobs(Request\CommandSyncJobs $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Retrieve a synonym set by ID
	 *
	 * @see https://www.elastic.co/guide/en/workplace-search/current/workplace-synonyms-api.html#show-synonym
	 */
	public function getSynonymSet(Request\GetSynonymSet $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Update a synonym set
	 *
	 * @see https://www.elastic.co/guide/en/workplace-search/current/workplace-synonyms-api.html#update-synonym
	 */
	public function putSynonymSet(Request\PutSynonymSet $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Delete a synonym set
	 *
	 * @see https://www.elastic.co/guide/en/workplace-search/current/workplace-synonyms-api.html#delete-synonym
	 */
	public function deleteSynonymSet(Request\DeleteSynonymSet $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Retrieves all synonym sets
	 *
	 * @see https://www.elastic.co/guide/en/workplace-search/current/workplace-synonyms-api.html#list-synonyms
	 */
	public function listSynonymSets(Request\ListSynonymSets $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Create a batch of synonym sets
	 *
	 * @see https://www.elastic.co/guide/en/workplace-search/current/workplace-synonyms-api.html#create-synonyms
	 */
	public function createBatchSynonymSets(Request\CreateBatchSynonymSets $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Get current triggers blocklist
	 *
	 * @see https://www.elastic.co/guide/en/workplace-search/current/automatic-query-refinement-blocklist.html
	 */
	public function getTriggersBlocklist(Request\GetTriggersBlocklist $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Update current triggers blocklist
	 *
	 * @see https://www.elastic.co/guide/en/workplace-search/current/automatic-query-refinement-blocklist.html
	 */
	public function putTriggersBlocklist(Request\PutTriggersBlocklist $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Retrieves a content source's automatic query refinement details
	 *
	 * @see https://www.elastic.co/guide/en/workplace-search/current/workplace-search-content-sources-api.html#get-automatic-query-refinement-details-api
	 */
	public function getAutoQueryRefinementDetails(Request\GetAutoQueryRefinementDetails $request): Response
	{
		return new Response($this->transport->sendRequest($request->getRequest()));
	}


	/**
	 * Get the authenticated user
	 *
	 * @see https://www.elastic.co/guide/en/workplace-search/current/workplace-search-user-api.html#get-current-user-api
	 */
	public function getCurrentUser(Request\GetCurrentUser $request): Response
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
