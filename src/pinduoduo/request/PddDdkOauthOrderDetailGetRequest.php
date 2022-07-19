<?php

namespace Mylarge\UnionSdk\pinduoduo\request;

use Mylarge\UnionSdk\pinduoduo\RequestBase;

/**
 * 获取订单详情
 * @ApiDescr   查询订单详情
 * @link       https://open.pinduoduo.com/application/document/api?id=pdd.ddk.oauth.order.detail.get
 **/
class PddDdkOauthOrderDetailGetRequest extends RequestBase
{

    /**
     * 接口名字
     * @var string
     */
    Protected $apiName = 'pdd.ddk.oauth.order.detail.get';

    /**
     * 必填参数列表
     * @var array
     */
    Protected $mustParamList = ['order_sn'];
    
    
    /**
     * 订单号
     * @return PddDdkOauthOrderDetailGetRequest
     * @var string 
     * @isMust 必填
     */
    public function setOrderSn(string $orderSn): self
    {
        $this->params['order_sn'] = $orderSn;
        return $this;
    }

    /**
     * 订单类型：1-推广订单；2-直播间订单
     * @return PddDdkOauthOrderDetailGetRequest
     * @var int 
     * @isMust 非必填
     */
    public function setQueryOrderType(int $queryOrderType): self
    {
        $this->params['query_order_type'] = $queryOrderType;
        return $this;
    }

}