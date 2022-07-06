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

namespace Elastic\EnterpriseSearch\WorkplaceSearch\Schema;

/**
 * @generated This file is generated, please do not edit
 */
class SearchApiEndpointResponseMeta
{
	public Page $page;

	/** Internal request ID for this query instance */
	public string $request_id;

	/** Any warnings that the query generated */
	public array $warnings;
	public SearchApiQueryRefinement $query_refinements;
	public SearchApiMetaContentSources $content_sources;

	/** Remote source query timeout value used */
	public int $timeout;


	public function __construct(Page $page, string $request_id)
	{
		$this->page = $page;
		$this->request_id = $request_id;
	}
}
