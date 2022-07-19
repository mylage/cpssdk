<?php

namespace Mylarge\UnionSdk\pinduoduo\request;

use Mylarge\UnionSdk\pinduoduo\RequestBase;

/**
 * 查询商品标签列表
 *
 * @ApiDescr   获得拼多多商品标签列表（非商品类目cat，当前仅开放给多多客使用）
 * @link       https://open.pinduoduo.com/application/document/api?id=pdd.goods.opt.get
 **/
class PddGoodsOptGetRequest extends RequestBase
{

    /**
     * 接口名字
     *
     * @var string
     */
    protected $apiName = 'pdd.goods.opt.get';

    /**
     * 必填参数列表
     *
     * @var array
     */
    protected $mustParamList = ['parent_opt_id'];


    /**
     * 值=0时为顶点opt_id,通过树顶级节点获取opt树
     *
     * @return PddGoodsOptGetRequest
     * @var int
     * @isMust 必填
     */
    public function setParentOptId(int $parentOptId): self
    {
        $this->params['parent_opt_id'] = $parentOptId;
        return $this;
    }

}