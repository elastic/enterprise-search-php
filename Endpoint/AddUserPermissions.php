<?php
/**
 * This file is part of the Elastic Enterprise Search PHP Client package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Elastic\EnterpriseSearch\Client\Endpoint;

/**
 * Implementation of the AddUserPermissions endpoint.
 *
 * @package Elastic\EnterpriseSearch\Client\Endpoint
 */
class AddUserPermissions extends \Elastic\OpenApi\Codegen\Endpoint\AbstractEndpoint
{
    // phpcs:disable
    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * @var string
     */
    protected $uri = '/sources/{content_source_key}/permissions/{user}/add';

    protected $routeParams = ['content_source_key', 'user'];
    // phpcs:enable
}
