<?php

namespace Elasticsearch24\Endpoints\Indices;

use Elasticsearch24\Endpoints\AbstractEndpoint;

/**
 * Class ForceMerge
 *
 * @category Elasticsearch
 * @package  Elasticsearch24\Endpoints\Indices
 * @author   Zachary Tong <zachary.tong@elasticsearch.com>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elasticsearch.org
 */
class ForceMerge extends AbstractEndpoint
{
    /**
     * @return string
     */
    protected function getURI()
    {
        $index = $this->index;
        $uri = "/_forcemerge";

        if (isset($index) === true) {
            $uri = "/$index/_forcemerge";
        }

        return $uri;
    }

    /**
     * @return string[]
     */
    protected function getParamWhitelist()
    {
        return [
            'flush',
            'ignore_unavailable',
            'allow_no_indices',
            'expand_wildcards',
            'max_num_segments',
            'only_expunge_deletes',
            'operation_threading',
            'wait_for_merge',
        ];
    }

    /**
     * @return string
     */
    protected function getMethod()
    {
        return 'POST';
    }
}