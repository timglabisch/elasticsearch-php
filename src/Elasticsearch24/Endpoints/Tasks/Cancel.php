<?php

namespace Elasticsearch24\Endpoints\Tasks;

use Elasticsearch24\Common\Exceptions;
use Elasticsearch24\Endpoints\AbstractEndpoint;

/**
 * Class Cancel
 *
 * @category Elasticsearch
 * @package Elasticsearch24\Endpoints\Tasks *
 * @author   Zachary Tong <zachary.tong@elasticsearch.com>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elasticsearch.org
 */
class Cancel extends AbstractEndpoint
{
    // Cancel the task with specified task id (node_id:task_number)
    private $task_id;


    /**
     * @param $task_id
     *
     * @return $this
     */
    public function setTaskId($task_id)
    {
        if (isset($task_id) !== true) {
            return $this;
        }

        $this->task_id = $task_id;

        return $this;
    }


    /**
     * @return string
     */
    protected function getURI()
    {
        $task_id = $this->task_id;
        $uri = "/_tasks/_cancel";
        if (isset($task_id) === true) {
            $uri = "/_tasks/$task_id/_cancel";
        }

        return $uri;
    }


    /**
     * @return string[]
     */
    protected function getParamWhitelist()
    {
        return [
            'node_id',
            'actions',
            'parent_node',
            'parent_task',
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