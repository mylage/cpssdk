<?php

namespace Mylarge\UnionSdk\duomai\request;

use Mylarge\UnionSdk\jingdong\RequestBase;

/**
 * 订单列表
 *
 * @link      https://open.duomai.com/zh/apis/openapi/79/109
 **/
class DmOpenOrdersQueryGet extends RequestBase
{

    /**
     * 接口名字
     *
     * @var string
     */
    protected $apiName = 'cps-mesh.open.orders.query.get';

    /**
     * 必填参数列表
     *
     * @var array
     */
    protected $mustParamList = ['stime', 'etime'];


    /**
     * 下单开始时间，秒时间戳，注：时间跨度不能超过1天
     *
     * @param int $sTime
     * @isMust       必填
     */
    public function setStime(int $sTime): self
    {
        $this->params['stime'] = $sTime;
        return $this;
    }

    /**
     * 下下单结束时间，秒时间戳，注：时间跨度不能超过1天
     *
     * @param int $eTime
     * @isMust       必填
     */
    public function setEtime(int $eTime): self
    {
        $this->params['etime'] = $eTime;
        return $this;
    }

    /**
     * 推广位id
     *
     * @param  $siteId
     * @return DmOpenOrdersQueryGet
     * @isMust       非必填
     * @exampleValue 10000618
     */
    public function setSiteId($siteId): self
    {
        $this->params['site_id'] = $siteId;
        return $this;
    }

    /**
     * 计划id
     *
     * @param  $adsId
     * @return DmOpenOrdersQueryGet
     * @isMust       非必填
     * @exampleValue 10000618
     */
    public function setAdsId($adsId): self
    {
        $this->params['ads_id'] = $adsId;
        return $this;
    }


    /**
     * 时间维度 update_time:更新时间 charge_datatime:结算时间 order_datatime:创建时间 默认update_time
     *
     * @param  $orderField
     * @return DmOpenOrdersQueryGet
     * @isMust       非必填
     * @exampleValue 10000618
     */
    public function setOrderField($orderField): self
    {
        $this->params['order_field'] = $orderField;
        return $this;
    }


    /**
     * 查询在多麦联盟结算状态的订单 可选值： -1 无效 0 未确认 1 确认 2 结算 查看订单状态说明
     *
     * @param  $status
     * @return DmOpenOrdersQueryGet
     * @isMust       非必填
     * @exampleValue 10000618
     */
    public function setStatus($status): self
    {
        $this->params['status'] = $status;
        return $this;
    }


    /**
     * 反馈标签
     *
     * @param  $euid
     * @return DmOpenOrdersQueryGet
     * @isMust       非必填
     * @exampleValue 10000618
     */
    public function setEuid($euid): self
    {
        $this->params['euid'] = $euid;
        return $this;
    }

    /**
     * 页码 默认1
     *
     * @param int $page
     * @isMust       非必填
     * @exampleValue 1
     * @return DmOpenOrdersQueryGet
     */
    public function setPage(int $page): self
    {
        $this->params['page'] = $page;
        return $this;
    }

    /**
     * 分页大小 默认20 最大200
     *
     * @param int $pageSize
     * @isMust       非必填
     * @exampleValue 20
     * @return DmOpenOrdersQueryGet
     */
    public function setPageSize(int $pageSize): self
    {
        $this->params['page_size'] = $pageSize;
        return $this;
    }


}