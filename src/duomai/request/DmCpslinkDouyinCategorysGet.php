<?php

namespace Mylarge\UnionSdk\duomai\request;

use Mylarge\UnionSdk\jingdong\RequestBase;

/**
 * 抖音类目列表
 *
 * @link      https://open.duomai.com/zh/apis/cpslink/426/1354
 **/
class DmCpslinkDouyinCategorysGet extends RequestBase
{

    /**
     * 接口名字
     *
     * @var string
     */
    protected $apiName = 'cps-mesh.cpslink.douyin.categorys.get';

    /**
     * 必填参数列表
     *
     * @var array
     */
    protected $mustParamList = [];

    /**
     * 父类目id(一级父类目为0)
     *
     * @param  $parentId
     * @isMust       选填
     * @exampleValue 1
     * @return DmCpslinkDouyinCategorysGet
     */
    public function setIds($parentId): self
    {
        $this->params['parent_id'] = $parentId;
        return $this;
    }
}