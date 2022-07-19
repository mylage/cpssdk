<?php

namespace Mylarge\UnionSdk\jingtuitui\request;

use Mylarge\UnionSdk\jingtuitui\RequestBase;

/**
 * http://japi.jingtuitui.com/api/sekill
 * @ApiDescr   
 * @createTime 2022-01-10 23:26:00
 * @link       http://www.jingtuitui.com/api_item?id=19
 **/
class JttSekillRequest extends RequestBase
{

    /**
     * 接口名字
     * @var string
     */
    Protected $apiName = 'sekill';
    
    /**
     * api版本
     * @var string
     */
    protected $version = 'v4';
    
    /**
     * 必填参数列表
     * @var array
     */
    Protected $mustParamList = ['h'];
    
    
    /**
     * 当前时段（秒杀时间段：6、8、10、12、14、16、18、20、22）
     * @param  $h
     * @isMust       必填
     * @exampleValue 10
     * @return JttSekillRequest
     */
    public function setH($h)
    {
        $this->params['h'] = $h;
        return $this;
    }

    /**
     * 分页页码
     * @param  $pageIndex
     * @isMust       非必填
     * @exampleValue 1
     * @return JttSekillRequest
     */
    public function setPageIndex($pageIndex)
    {
        $this->params['pageIndex'] = $pageIndex;
        return $this;
    }

    /**
     * 单页面显示条数
     * @param  $pageSize
     * @isMust       非必填
     * @exampleValue 20
     * @return JttSekillRequest
     */
    public function setPageSize($pageSize)
    {
        $this->params['pageSize'] = $pageSize;
        return $this;
    }

}