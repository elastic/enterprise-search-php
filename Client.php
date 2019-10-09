<?php
/**
 * This file is part of the Elastic Enterprise Search PHP Client package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Elastic\EnterpriseSearch\Client;

/**
 * Client implementation.
 *
 * @package Elastic\EnterpriseSearch\Client
 */
class Client extends \Elastic\OpenApi\Codegen\AbstractClient
{
    // phpcs:disable

    /**
     * adds user permissions.
     *
     * @param string $contentSourceKey
     * @param string $user
     * @param array  $permissions
     *
     * @return array
     */
    public function addUserPermissions($contentSourceKey, $user, $permissions)
    {
        $params = [
            'content_source_key' => $contentSourceKey,
            'user' => $user,
        ];

        $endpoint = $this->getEndpoint('AddUserPermissions');
        $endpoint->setParams($params);
        $endpoint->setBody($permissions);

        return $this->performRequest($endpoint);
    }

    /**
     * destroys documents.
     *
     * @param string $contentSourceKey
     * @param array  $documentIds
     *
     * @return array
     */
    public function deleteDocuments($contentSourceKey, $documentIds)
    {
        $params = [
            'content_source_key' => $contentSourceKey,
        ];

        $endpoint = $this->getEndpoint('DeleteDocuments');
        $endpoint->setParams($params);
        $endpoint->setBody($documentIds);

        return $this->performRequest($endpoint);
    }

    /**
     * shows user permissions.
     *
     * @param string $contentSourceKey
     * @param string $user
     *
     * @return array
     */
    public function getUserPermissions($contentSourceKey, $user)
    {
        $params = [
            'content_source_key' => $contentSourceKey,
            'user' => $user,
        ];

        $endpoint = $this->getEndpoint('GetUserPermissions');
        $endpoint->setParams($params);

        return $this->performRequest($endpoint);
    }

    /**
     * creates documents.
     *
     * @param string $contentSourceKey
     * @param array  $documents
     *
     * @return array
     */
    public function indexDocuments($contentSourceKey, $documents)
    {
        $params = [
            'content_source_key' => $contentSourceKey,
        ];

        $endpoint = $this->getEndpoint('IndexDocuments');
        $endpoint->setParams($params);
        $endpoint->setBody($documents);

        return $this->performRequest($endpoint);
    }

    /**
     * lists permissions.
     *
     * @param string $contentSourceKey
     * @param int    $currentPage
     * @param int    $pageSize
     *
     * @return array
     */
    public function listAllPermissions($contentSourceKey, $currentPage = null, $pageSize = null)
    {
        $params = [
            'content_source_key' => $contentSourceKey,
            'page[current]' => $currentPage,
            'page[size]' => $pageSize,
        ];

        $endpoint = $this->getEndpoint('ListAllPermissions');
        $endpoint->setParams($params);

        return $this->performRequest($endpoint);
    }

    /**
     * removes user permissions.
     *
     * @param string $contentSourceKey
     * @param string $user
     * @param array  $permissionsObject
     *
     * @return array
     */
    public function removeUserPermissions($contentSourceKey, $user, $permissionsObject)
    {
        $params = [
            'content_source_key' => $contentSourceKey,
            'user' => $user,
        ];

        $endpoint = $this->getEndpoint('RemoveUserPermissions');
        $endpoint->setParams($params);
        $endpoint->setBody($permissionsObject);

        return $this->performRequest($endpoint);
    }

    /**
     * updates user permissions.
     *
     * @param string $contentSourceKey
     * @param string $user
     * @param array  $permissions
     *
     * @return array
     */
    public function updateUserPermissions($contentSourceKey, $user, $permissions)
    {
        $params = [
            'content_source_key' => $contentSourceKey,
            'user' => $user,
        ];

        $endpoint = $this->getEndpoint('UpdateUserPermissions');
        $endpoint->setParams($params);
        $endpoint->setBody($permissions);

        return $this->performRequest($endpoint);
    }

    // phpcs:enable
}
