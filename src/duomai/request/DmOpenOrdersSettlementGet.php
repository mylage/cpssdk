<?php

namespace Mylarge\UnionSdk\duomai\request;

use Mylarge\UnionSdk\jingdong\RequestBase;

/**
 * 结算变动查询
 *
 * @link      https://open.duomai.com/zh/apis/openapi/79/111
 **/
class DmOpenOrdersSettlementGet extends RequestBase
{

    /**
     * 接口名字
     *
     * @var string
     */
    protected $apiName = 'cps-mesh.open.orders.settlement.get';

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
     * 计划id
     *
     * @param  $adsId
     * @return DmOpenOrdersSettlementGet
     * @isMust       非必填
     * @exampleValue 10000618
     */
    public function setAdsId($adsId): self
    {
        $this->params['ads_id'] = $adsId;
        return $this;
    }


    /**
     * 订单号
     *
     * @param  $orderSn
     * @return DmOpenOrdersSettlementGet
     * @isMust       非必填
     * @exampleValue 10000618
     */
    public function setOrderSn($orderSn): self
    {
        $this->params['order_sn'] = $orderSn;
        return $this;
    }


    /**
     * 反馈标签
     *
     * @param  $euid
     * @return DmOpenOrdersSettlementGet
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
     * @return DmOpenOrdersSettlementGet
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
     * @return DmOpenOrdersSettlementGet
     */
    public function setPageSize(int $pageSize): self
    {
        $this->params['page_size'] = $pageSize;
        return $this;
    }


}