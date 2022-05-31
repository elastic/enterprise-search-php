<?php

/**
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

namespace Elastic\EnterpriseSearch\WorkplaceSearch\Schema;

/**
 * Returned when an update request partially updated a content source, but failed to fully configure it as requested
 *
 * @generated This file is generated, please do not edit
 */
class ContentSourcePartialUpdateResponse
{
	/** The state of the updated content source */
	public ContentSource $updated;

	/** Errors that occurred while attempting to configure and finalize the content source. Correct these errors, and follow up with another "update" request. */
	public array $errors;


	/**
	 * @param string[] $errorsReturned when an update request partially updated a content source, but failed to fully configure it as requested
	 */
	public function __construct(ContentSource $updated, array $errors)
	{
		$this->updated = $updated;
		$this->errors = $errors;
	}
}
