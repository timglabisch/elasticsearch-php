<?php

namespace Elasticsearch24\Endpoints\Cat;

use Elasticsearch24\Endpoints\AbstractEndpoint;

/**
 * Class Shards
 *
 * @category Elasticsearch
 * @package  Elasticsearch24\Endpoints\Cat
 * @author   Zachary Tong <zachary.tong@elasticsearch.com>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elasticsearch.org
 */
class Shards extends AbstractEndpoint
{
    /**
     * @return string
     */
    protected function getURI()
    {
        $index = $this->index;
        $uri = "/_cat/shards";

        if (isset($index) === true) {
            $uri = "/_cat/shards/$index";
        }

        return $uri;
    }

    /**
     * @return string[]
     */
    protected function getParamWhitelist()
    {
        return [
            'local',
            'bytes',
            'master_timeout',
            'h',
            'help',
            'v',
        ];
    }

    /**
     * @return string
     */
    protected function getMethod()
    {
        return 'GET';
    }
}