<?php

namespace Mylarge\UnionSdk\duomai\request;

use Mylarge\UnionSdk\jingdong\RequestBase;

/**
 * 订单详情
 *
 * @link      https://open.duomai.com/zh/apis/openapi/79/110
 **/
class DmOpenStoresPlanDetailGet extends RequestBase
{

    /**
     * 接口名字
     *
     * @var string
     */
    protected $apiName = 'cps-mesh.open.stores.plan.detail.get';

    /**
     * 必填参数列表
     *
     * @var array
     */
    protected $mustParamList = ['ads_id'];


    /**
     * 计划id
     *
     * @param  $adsId
     * @return DmOpenStoresPlanDetailGet
     * @isMust       必填
     * @exampleValue 10000618
     */
    public function setAdsId($adsId): self
    {
        $this->params['ads_id'] = $adsId;
        return $this;
    }
}