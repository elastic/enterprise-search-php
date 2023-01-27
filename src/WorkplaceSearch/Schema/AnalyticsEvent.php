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

use InvalidArgumentException;

/**
 * Workplace Search analytics event
 *
 * @generated This file is generated, please do not edit
 */
class AnalyticsEvent
{
	public string $type;

	/** query identifier for the event */
	public string $query_id;

	/** page number of the document in the query result set */
	public int $page;

	/** content source identifier for the event document */
	public string $content_source_id;

	/** document identifier for the event */
	public string $document_id;

	/** rank of the document in the overall result set */
	public int $rank;

	/** the target identifier for a click event */
	public string $event;

	/** the feedback score, constrained to the values -1 or 1 */
	public int $score;


	public function __construct(
		string $type,
		string $query_id,
		int $page,
		string $content_source_id,
		string $document_id,
		int $rank,
	) {
		if (!in_array($type, ['click','feedback'])) {
			throw new InvalidArgumentException('The $type parameter must be one of these values: click,feedback');
		}
		$this->type = $type;
		$this->query_id = $query_id;
		$this->page = $page;
		$this->content_source_id = $content_source_id;
		$this->document_id = $document_id;
		$this->rank = $rank;
	}
}
