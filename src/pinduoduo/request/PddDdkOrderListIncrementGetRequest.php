<?php

namespace Mylarge\UnionSdk\pinduoduo\request;

use Mylarge\UnionSdk\pinduoduo\RequestBase;

/**
 * 最后更新时间段增量同步推广订单信息
 * @ApiDescr   按照时间段获取授权多多客下面所有多多客的推广订单信息
 * @link       https://open.pinduoduo.com/application/document/api?id=pdd.ddk.order.list.increment.get
 **/
class PddDdkOrderListIncrementGetRequest extends RequestBase
{

    /**
     * 接口名字
     * @var string
     */
    Protected $apiName = 'pdd.ddk.order.list.increment.get';

    /**
     * 必填参数列表
     * @var array
     */
    Protected $mustParamList = ['end_update_time', 'start_update_time'];
    
    
    /**
     * 是否为礼金订单，查询礼金订单时，订单类型不填（默认推广订单）。
     * @return PddDdkOrderListIncrementGetRequest
     * @var bool 
     * @isMust 非必填
     */
    public function setCashGiftOrder(bool $cashGiftOrder): self
    {
        $this->params['cash_gift_order'] = $cashGiftOrder;
        return $this;
    }

    /**
     * 查询结束时间，和开始时间相差不能超过24小时。note：此时间为时间戳，指格林威治时间 1970 年01 月 01 日 00 时 00 分 00 秒(北京时间 1970 年 01 月 01 日 08 时 00 分 00 秒)起至现在的总秒数
     * @return PddDdkOrderListIncrementGetRequest
     * @var int 
     * @isMust 必填
     */
    public function setEndUpdateTime(int $endUpdateTime): self
    {
        $this->params['end_update_time'] = $endUpdateTime;
        return $this;
    }

    /**
     * 第几页，从1到10000，默认1，注：使用最后更新时间范围增量同步时，必须采用倒序的分页方式（从最后一页往回取）才能避免漏单问题。
     * @return PddDdkOrderListIncrementGetRequest
     * @var int 
     * @isMust 非必填
     */
    public function setPage(int $page): self
    {
        $this->params['page'] = $page;
        return $this;
    }

    /**
     * 返回的每页结果订单数，默认为100，范围为10到100，建议使用40~50，可以提高成功率，减少超时数量。
     * @return PddDdkOrderListIncrementGetRequest
     * @var int 
     * @isMust 非必填
     */
    public function setPageSize(int $pageSize): self
    {
        $this->params['page_size'] = $pageSize;
        return $this;
    }

    /**
     * 订单类型：1-推广订单；2-直播间订单
     * @return PddDdkOrderListIncrementGetRequest
     * @var int 
     * @isMust 非必填
     */
    public function setQueryOrderType(int $queryOrderType): self
    {
        $this->params['query_order_type'] = $queryOrderType;
        return $this;
    }

    /**
     * 是否返回总数，默认为true，如果指定false, 则返回的结果中不包含总记录数，通过此种方式获取增量数据，效率在原有的基础上有80%的提升。
     * @return PddDdkOrderListIncrementGetRequest
     * @var bool 
     * @isMust 非必填
     */
    public function setReturnCount(bool $returnCount): self
    {
        $this->params['return_count'] = $returnCount;
        return $this;
    }

    /**
     * 最近90天内多多进宝商品订单更新时间--查询时间开始。note：此时间为时间戳，指格林威治时间 1970 年01 月 01 日 00 时 00 分 00 秒(北京时间 1970 年 01 月 01 日 08 时 00 分 00 秒)起至现在的总秒数
     * @return PddDdkOrderListIncrementGetRequest
     * @var int 
     * @isMust 必填
     */
    public function setStartUpdateTime(int $startUpdateTime): self
    {
        $this->params['start_update_time'] = $startUpdateTime;
        return $this;
    }

}