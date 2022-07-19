<?php

namespace Mylarge\UnionSdk\duomai\request;

use Mylarge\UnionSdk\jingdong\RequestBase;

/**
 * 考拉商品库搜索接口
 *
 * @link      https://open.duomai.com/zh/apis/cpslink/45/48
 **/
class DmCpslinkKaolaRecommendProductsGet extends RequestBase
{

    /**
     * 接口名字
     *
     * @var string
     */
    protected $apiName = 'cps-mesh.cpslink.kaola.recommend-products.get';

    /**
     * 必填参数列表
     *
     * @var array
     */
    protected $mustParamList = ['query'];

    /**
     *  分类id
     *
     * @param    $categoryId
     * @isMust       选填
     * @exampleValue 1
     * @return DmCpslinkKaolaRecommendProductsGet
     */
    public function setCategoryId($categoryId): self
    {
        $this->params['category_id'] = $categoryId;
        return $this;
    }

    /**
     * 页码 默认1
     *
     * @param int $page
     * @isMust       选填
     * @exampleValue 1
     * @return DmCpslinkKaolaRecommendProductsGet
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
     * @return DmCpslinkKaolaRecommendProductsGet
     */
    public function setPageSize(int $pageSize): self
    {
        $this->params['page_size'] = $pageSize;
        return $this;
    }

}