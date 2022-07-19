<?php


namespace Mylarge\UnionSdk\jingdong;


use Mylarge\UnionSdk\Request;

class RequestBase extends Request
{
    /**
     * api版本
     * @var string
     */
    protected $version = '1.0';

    /**
     * 预解析入参
     */
    protected function preParseParam()
    {
        foreach ($this->params as &$value) {
            switch (gettype($value)) {
                case 'bool':
                    $value = (int)$value;
                    break;
            }
        }
    }

}