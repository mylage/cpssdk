<?php

namespace Mylarge\UnionSdk\duomai\request;

use Mylarge\UnionSdk\jingdong\RequestBase;

/**
 * 推广计划查询
 *
 * @link      https://open.duomai.com/zh/apis/openapi/81/112
 **/
class DmOpenStoresPlansGet extends RequestBase
{

    /**
     * 接口名字
     *
     * @var string
     */
    protected $apiName = 'cps-mesh.open.stores.plans.get';

    /**
     * 必填参数列表
     *
     * @var array
     */
    protected $mustParamList = ['page', 'page_size'];


    /**
     * 搜索关键字
     *
     * @param  $query
     * @isMust       非必填
     * @return DmOpenStoresPlansGet
     */
    public function setQuery( $query): self
    {
        $this->params['query'] = $query;
        return $this;
    }

    /**
     * 所属商城id，来自商城列表接口的id
     *
     * @param  $storeId
     * @isMust       非必填
     * @exampleValue 10000618
     * @return DmOpenStoresPlansGet
     */
    public function setStoreId( $storeId): self
    {
        $this->params['store_id'] = $storeId;
        return $this;
    }

    /**
     * 1查询已申请的计划 0查询全部
     *
     * @param int $isApply
     * @isMust       非必填
     * @exampleValue 0
     * @return DmOpenStoresPlansGet
     */
    public function setPositionId(int $isApply): self
    {
        $this->params['is_apply'] = $isApply;
        return $this;
    }

    /**
     * 页码 默认1
     *
     * @param int $page
     * @isMust       必填
     * @exampleValue 1
     * @return DmOpenStoresPlansGet
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
     * @isMust       必填
     * @exampleValue 20
     * @return DmOpenStoresPlansGet
     */
    public function setPageSize(int $pageSize): self
    {
        $this->params['page_size'] = $pageSize;

        return $this;
    }

    /**
     * @description:1查询已申请的计划 0查询全部
     * @param isApply
     * @param int $isApply
     * @return $this
     * @return isApply
     * @Time: 2022/2/25   15:48
     * @author: zh
     */
    public function isApply(int $isApply): self{
        $this->params['is_apply'] = $isApply;
        return $this;
    }


}