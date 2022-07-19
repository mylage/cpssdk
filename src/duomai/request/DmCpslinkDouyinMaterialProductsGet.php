<?php

namespace Mylarge\UnionSdk\duomai\request;

use Mylarge\UnionSdk\jingdong\RequestBase;

/**
 * 抖音精选联盟商品库
 *
 * @link      https://open.duomai.com/zh/apis/cpslink/426/1349
 **/
class DmCpslinkDouyinMaterialProductsGet extends RequestBase
{

    /**
     * 接口名字
     *
     * @var string
     */
    protected $apiName = 'cps-mesh.cpslink.douyin.material-products.get';

    /**
     * 必填参数列表
     *
     * @var array
     */
    protected $mustParamList = [];

    /**
     * 关键词
     *
     * @param    $query
     * @isMust       选填
     * @exampleValue 1
     * @return DmCpslinkDouyinMaterialProductsGet
     */
    public function setQuery($query): self
    {
        $this->params['query'] = $query;
        return $this;
    }

    /**
     * 获取商品分销状态。1:仅返回可分销商品(默认)；0:返回全量商品
     *
     * @param    $shareStatus
     * @isMust       选填
     * @exampleValue 1
     * @return DmCpslinkDouyinMaterialProductsGet
     */
    public function setShareStatus($shareStatus): self
    {
        $this->params['share_status'] = $shareStatus;
        return $this;
    }

    /**
     * 作者电商等级，0-7，多个等级用逗号分隔，例：1, 2
     *
     * @param    $authorLevels
     * @isMust       选填
     * @exampleValue 1
     * @return DmCpslinkDouyinMaterialProductsGet
     */
    public function setAuthorLevels($authorLevels): self
    {
        $this->params['author_levels'] = $authorLevels;
        return $this;
    }

    /**
     * 一级类目,多个逗号分隔，例:1,2
     *
     * @param    $categoryId
     * @isMust       选填
     * @exampleValue 1
     * @return DmCpslinkDouyinMaterialProductsGet
     */
    public function setCategoryId($categoryId): self
    {
        $this->params['category_id'] = $categoryId;
        return $this;
    }

    /**
     * 二级类目,多个逗号分隔，例:1,2
     *
     * @param    $categoryId
     * @isMust       选填
     * @exampleValue 1
     * @return DmCpslinkDouyinMaterialProductsGet
     */
    public function setCategoryId2($categoryId): self
    {
        $this->params['category_id2'] = $categoryId;
        return $this;
    }

    /**
     * 三级类目,多个逗号分隔，例:1,2
     *
     * @param    $categoryId
     * @isMust       选填
     * @exampleValue 1
     * @return DmCpslinkDouyinMaterialProductsGet
     */
    public function setCategoryId3($categoryId): self
    {
        $this->params['category_id3'] = $categoryId;
        return $this;
    }

    /**
     * 起始价格, 1.00
     *
     * @param    $startPrice
     * @isMust       选填
     * @exampleValue 1
     * @return DmCpslinkDouyinMaterialProductsGet
     */
    public function setStartPrice($startPrice): self
    {
        $this->params['start_price'] = $startPrice;
        return $this;
    }

    /**
     * 结束价格, 1.00
     *
     * @param    $endPrice
     * @isMust       选填
     * @exampleValue 1
     * @return DmCpslinkDouyinMaterialProductsGet
     */
    public function setEndPrice($endPrice): self
    {
        $this->params['end_price'] = $endPrice;
        return $this;
    }

    /**
     * 起始佣金, 1.00
     *
     * @param    $startCommission
     * @isMust       选填
     * @exampleValue 1
     * @return DmCpslinkDouyinMaterialProductsGet
     */
    public function setStartCommission($startCommission): self
    {
        $this->params['start_commission'] = $startCommission;
        return $this;
    }

    /**
     * 结束佣金, 1.00
     *
     * @param    $endCommission
     * @isMust       选填
     * @exampleValue 1
     * @return DmCpslinkDouyinMaterialProductsGet
     */
    public function setEndCommission($endCommission): self
    {
        $this->params['end_commission'] = $endCommission;
        return $this;
    }

    /**
     *  0默认排序,1历史销量排序,2价格排序,3佣金金额排序,4佣金比例排序；
     *
     * @param    $orderField
     * @isMust       选填
     * @exampleValue 1
     * @return DmCpslinkDouyinMaterialProductsGet
     */
    public function setOrderField($orderField): self
    {
        $this->params['order_field'] = $orderField;
        return $this;
    }

    /**
     *  排序方式：asc-升序(默认)；desc-降序
     *
     * @param    $orderType
     * @isMust       选填
     * @exampleValue 1
     * @return DmCpslinkDouyinMaterialProductsGet
     */
    public function setOrderType($orderType): self
    {
        $this->params['order_type'] = $orderType;
        return $this;
    }


    /**
     * 页码 默认1
     *
     * @param int $page
     * @isMust       选填
     * @exampleValue 1
     * @return DmCpslinkDouyinMaterialProductsGet
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
     * @isMust       选填
     * @exampleValue 20
     * @return DmCpslinkDouyinMaterialProductsGet
     */
    public function setPageSize(int $pageSize): self
    {
        $this->params['page_size'] = $pageSize;
        return $this;
    }

}