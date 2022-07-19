<?php

namespace Mylarge\UnionSdk\duomai\request;

use Mylarge\UnionSdk\jingdong\RequestBase;

/**
 * 推广计划查询
 *
 * @link      https://open.duomai.com/zh/apis/openapi/81/112
 **/
class DmOpenStoresQueryGet extends RequestBase
{

    /**
     * 接口名字
     *
     * @var string
     */
    protected $apiName = 'cps-mesh.open.stores.query.get';

    /**
     * 必填参数列表
     *
     * @var array
     */
    protected $mustParamList = [];


    /**
     * 商城名称
     *
     * @param  $name
     * @isMust       非必填
     * @return DmOpenStoresQueryGet
     */
    public function setName($name): self
    {
        $this->params['name'] = $name;
        return $this;
    }

    /**
     * 商城域名/网址
     *
     * @param  $url
     * @isMust       非必填
     * @return DmOpenStoresQueryGet
     */
    public function setUrl($url): self
    {
        $this->params['url'] = $url;
        return $this;
    }

    /**
     * 是否国内：0所有（默认），-1非国内，1国内
     *
     * @param int $isDomestic
     * @isMust       非必填
     * @return DmOpenStoresQueryGet
     */
    public function setIsDomestic(int $isDomestic): self
    {
        $this->params['is_domestic'] = $isDomestic;
        return $this;
    }

    /**
     * 推荐商家：0所有（默认），-1不推荐，1推荐
     *
     * @param int $recommend
     * @isMust       非必填
     * @return DmOpenStoresQueryGet
     */
    public function setRecommend(int $recommend): self
    {
        $this->params['recommend'] = $recommend;
        return $this;
    }

    /**
     * 页码 默认1
     *
     * @param int $page
     * @isMust       必填
     * @exampleValue 1
     * @return DmOpenStoresQueryGet
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
     * @return DmOpenStoresQueryGet
     */
    public function setPageSize(int $pageSize): self
    {
        $this->params['page_size'] = $pageSize;
        return $this;
    }


}