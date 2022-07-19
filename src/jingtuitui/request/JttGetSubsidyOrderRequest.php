<?php

namespace Mylarge\UnionSdk\jingtuitui\request;

use Mylarge\UnionSdk\jingtuitui\RequestBase;

/**
 * http://japi.jingtuitui.com/api/get_subsidy_order
 * @ApiDescr   
 * @createTime 2022-01-05 21:26:43
 * @link       http://www.jingtuitui.com/api_item?id=30
 **/
class JttGetSubsidyOrderRequest extends RequestBase
{

    /**
     * 接口名字
     * @var string
     */
    Protected $apiName = 'get_subsidy_order';
    
    /**
     * api版本
     * @var string
     */
    protected $version = 'v2';
    
    /**
     * 必填参数列表
     * @var array
     */
    Protected $mustParamList = ['key', 'type', 'startTime', 'endTime'];
    
    
    /**
     * 分页获取数据（默认第1页）
     * @param  $pageIndex
     * @isMust       非必填
     * @exampleValue 1
     * @return JttGetSubsidyOrderRequest
     */
    public function setPageIndex($pageIndex)
    {
        $this->params['pageIndex'] = $pageIndex;
        return $this;
    }

    /**
     * 单页面显示条数(最大100条最少10条)
     * @param  $pageSize
     * @isMust       非必填
     * @exampleValue 20
     * @return JttGetSubsidyOrderRequest
     */
    public function setPageSize($pageSize)
    {
        $this->params['pageSize'] = $pageSize;
        return $this;
    }

    /**
     * 请在京东联盟->我的工具->我的API->领取授权KEY中获取key（查询工具商订单需要填写此项，联盟key有效日期为365天）
     * @param string  $key
     * @isMust       必填
     * @exampleValue b57733a7028b090149977ea5e218c80314587eaf4afddc03572ed255e56f55a143bdaf04635af30e
     * @return JttGetSubsidyOrderRequest
     */
    public function setKey(string $key)
    {
        $this->params['key'] = $key;
        return $this;
    }

    /**
     * 订单时间查询类型 1=下单时间；2=完成时间；3=更新时间（注:默认为1）
     * @param  $type
     * @isMust       必填
     * @exampleValue 1
     * @return JttGetSubsidyOrderRequest
     */
    public function setType($type)
    {
        $this->params['type'] = $type;
        return $this;
    }

    /**
     * 开始时间（格式yyyy-MM-dd HH:mm:ss 例2020-01-02 21:23:00，与endTime间隔不超过1小时）
     * @param string  $startTime
     * @isMust       必填
     * @exampleValue 2020-01-02 21:00:00
     * @return JttGetSubsidyOrderRequest
     */
    public function setStartTime(string $startTime)
    {
        $this->params['startTime'] = $startTime;
        return $this;
    }

    /**
     * 结束时间（格式yyyy-MM-dd HH:mm:ss 例2020-01-02 21:23:00，与startTime间隔不超过1小时）
     * @param string  $endTime
     * @isMust       必填
     * @exampleValue 2020-01-02 21:59:00
     * @return JttGetSubsidyOrderRequest
     */
    public function setEndTime(string $endTime)
    {
        $this->params['endTime'] = $endTime;
        return $this;
    }

}