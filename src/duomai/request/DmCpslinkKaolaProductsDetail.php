<?php

namespace Mylarge\UnionSdk\duomai\request;

use Mylarge\UnionSdk\jingdong\RequestBase;

/**
 * 考拉商品详情
 *
 * @link      https://open.duomai.com/zh/apis/cpslink/45/50
 **/
class DmCpslinkKaolaProductsDetail extends RequestBase
{

    /**
     * 接口名字
     *
     * @var string
     */
    protected $apiName = 'cps-mesh.cpslink.kaola.products.detail';

    /**
     * 必填参数列表
     *
     * @var array
     */
    protected $mustParamList = ['ids'];

    /**
     * 商品ID
     *
     * @param  $id
     * @isMust       必填
     * @exampleValue 1
     * @return DmCpslinkKaolaProductsDetail
     */
    public function setId($id): self
    {
        $this->params['id'] = $id;
        return $this;
    }
}