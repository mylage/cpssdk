<?php

namespace Mylarge\UnionSdk\jingtuitui\request;

use Mylarge\UnionSdk\jingtuitui\RequestBase;

/**
 * http://japi.jingtuitui.com/api/hot_search
 * @ApiDescr   
 * @createTime 2022-01-06 21:39:01
 * @link       http://www.jingtuitui.com/api_item?id=7
 **/
class JttHotSearchRequest extends RequestBase
{

    /**
     * 接口名字
     * @var string
     */
    Protected $apiName = 'hot_search';
    
    /**
     * api版本
     * @var string
     */
    protected $version = 'v1';
    
    /**
     * 必填参数列表
     * @var array
     */
    Protected $mustParamList = [];
    
    
}