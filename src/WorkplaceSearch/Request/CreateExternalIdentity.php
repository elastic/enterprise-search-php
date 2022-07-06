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

namespace Elastic\EnterpriseSearch\WorkplaceSearch\Request;

use Elastic\EnterpriseSearch\Request\Request;
use Elastic\EnterpriseSearch\WorkplaceSearch\Schema\ExternalIdentityCreateDefinition;

/**
 * Adds a new external identity
 *
 * @see https://www.elastic.co/guide/en/workplace-search/current/workplace-search-external-identities-api.html#add-external-identity
 * @generated This file is generated, please do not edit
 */
class CreateExternalIdentity extends Request
{
	/**
	 * @param string $contentSourceId Unique ID for a Custom API source, provided upon creation of a Custom API Source
	 * @param ExternalIdentityCreateDefinition $external_identity_create_definition
	 */
	public function __construct(
		string $contentSourceId,
		ExternalIdentityCreateDefinition $external_identity_create_definition
	) {
		$this->method = 'POST';
		$content_source_id = urlencode($contentSourceId);
		$this->path = "/api/ws/v1/sources/$content_source_id/external_identities";
		$this->headers['Content-Type'] = 'application/json';
		$this->body = $external_identity_create_definition;
	}
}
