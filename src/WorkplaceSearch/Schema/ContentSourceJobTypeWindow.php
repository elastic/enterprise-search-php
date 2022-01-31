<?php

/**
 * Elastic Enterprise Search
 *
 * @link      https://github.com/elastic/enterprise-search-php
 * @copyright Copyright (c) Elasticsearch B.V (https://www.elastic.co)
 * @license   http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @generated This file is generated, please do not edit
 *
 * Licensed to Elasticsearch B.V under one or more agreements
 * Elasticsearch B.V licenses this file to you under the Apache 2.0 License
 * See the LICENSE file in the project root for more information
 */

declare(strict_types=1);

namespace Elastic\EnterpriseSearch\WorkplaceSearch\Schema;

use InvalidArgumentException;

/**
 * A time window that applies to a specific type of job
 */
class ContentSourceJobTypeWindow
{
	public string $job_type;
	public string $day;

	/** The start of the time window, in the format of HH:mm:ssZ */
	public string $start;

	/** The end of the time window, in the format of HH:mm:ssZ */
	public string $end;


	public function __construct(string $job_type, string $day)
	{
		if (!in_array($job_type, ['full','incremental','delete','permissions','all'])) {
			throw new InvalidArgumentException('The $job_type parameter must be one of these values: full,incremental,delete,permissions,all');
		}
		$this->job_type = $job_type;
		if (!in_array($day, ['all','sunday','monday','tuesday','wednesday','thursday','friday','saturday'])) {
			throw new InvalidArgumentException('The $day parameter must be one of these values: all,sunday,monday,tuesday,wednesday,thursday,friday,saturday');
		}
		$this->day = $day;
	}
}
