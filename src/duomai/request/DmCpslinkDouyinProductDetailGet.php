<?php

namespace Mylarge\UnionSdk\duomai\request;

use Mylarge\UnionSdk\jingdong\RequestBase;

/**
 * 抖音商品详情
 *
 * @link      https://open.duomai.com/zh/apis/cpslink/426/1359
 **/
class DmCpslinkDouyinProductDetailGet extends RequestBase
{

    /**
     * 接口名字
     *
     * @var string
     */
    protected $apiName = 'cps-mesh.cpslink.douyin.product.detail.get';

    /**
     * 必填参数列表
     *
     * @var array
     */
    protected $mustParamList = ['ids'];

    /**
     * 商品id串，逗号分隔，最多20个
     *
     * @param  $ids
     * @isMust       必填
     * @exampleValue 1
     * @return DmCpslinkDouyinProductDetailGet
     */
    public function setIds($ids): self
    {
        $this->params['ids'] = $ids;
        return $this;
    }
}