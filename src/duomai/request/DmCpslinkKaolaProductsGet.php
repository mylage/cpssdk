<?php

namespace Mylarge\UnionSdk\duomai\request;

use Mylarge\UnionSdk\jingdong\RequestBase;

/**
 * 考拉商品库搜索接口
 *
 * @link      https://open.duomai.com/zh/apis/cpslink/45/49
 **/
class DmCpslinkKaolaProductsGet extends RequestBase
{

    /**
     * 接口名字
     *
     * @var string
     */
    protected $apiName = 'cps-mesh.cpslink.kaola.products.get';

    /**
     * 必填参数列表
     *
     * @var array
     */
    protected $mustParamList = ['query'];

    /**
     * 关键词
     *
     * @param    $query
     * @isMust       必填
     * @exampleValue 1
     * @return DmCpslinkKaolaProductsGet
     */
    public function setQuery($query): self
    {
        $this->params['query'] = $query;
        return $this;
    }

    /**
     *  排序字段 commission_rate 佣金比例 price价格 volume 销量
     *
     * @param    $orderField
     * @isMust       选填
     * @exampleValue 1
     * @return DmCpslinkKaolaProductsGet
     */
    public function setOrderField($orderField): self
    {
        $this->params['order_field'] = $orderField;
        return $this;
    }

    /**
     * 页码 默认1
     *
     * @param int $page
     * @isMust       选填
     * @exampleValue 1
     * @return DmCpslinkKaolaProductsGet
     */
    public function setPage(int $page): self
    {
        $this->params['page'] = $page;
        return $this;
    }

    /**
     * 分页大小 最大200
     *
     * @param int $pageSize
     * @isMust       选填
     * @exampleValue 20
     * @return DmCpslinkKaolaProductsGet
     */
    public function setPageSize(int $pageSize): self
    {
        $this->params['page_size'] = $pageSize;
        return $this;
    }

}