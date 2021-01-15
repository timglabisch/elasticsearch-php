<?php

namespace Elasticsearch24\Endpoints\Template;

use Elasticsearch24\Common\Exceptions;
use Elasticsearch24\Endpoints\AbstractEndpoint;

/**
 * Class Delete
 *
 * @category Elasticsearch
 * @package  Elasticsearch24\Endpoints\Template
 * @author   Zachary Tong <zachary.tong@elasticsearch.com>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elasticsearch.org
 */
class Delete extends AbstractEndpoint
{
    /**
     * @throws \Elasticsearch24\Common\Exceptions\RuntimeException
     * @return string
     */
    protected function getURI()
    {
        if (isset($this->id) !== true) {
            throw new Exceptions\RuntimeException(
                'id is required for Delete'
            );
        }
        $templateId = $this->id;
        $uri = "/_search/template/$templateId";

        return $uri;
    }

    /**
     * @return string[]
     */
    protected function getParamWhitelist()
    {
        return [
            'version',
            'version_type',
        ];
    }

    /**
     * @return string
     */
    protected function getMethod()
    {
        return 'DELETE';
    }
}