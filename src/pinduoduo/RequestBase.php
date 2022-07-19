<?php


namespace Mylarge\UnionSdk\pinduoduo;


use Mylarge\UnionSdk\Request;

class RequestBase extends Request
{
    /**
     * api版本
     *
     * @var string
     */
    protected $version = 'V1';

    /**
     * 预解析入参
     */
    protected function preParseParam()
    {
        foreach ($this->params as &$value) {
            switch (gettype($value)) {
                case 'bool':
                case 'boolean':
                    $value = $value ? 'true' : 'false';
                    break;
                case 'array':
                    $value = json_encode($value);
                    break;
            }
        }
    }
}