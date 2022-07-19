<?php

namespace Mylarge\UnionSdk\duomai\request;

use Mylarge\UnionSdk\jingdong\RequestBase;

/**
 * 抖音分销直播间列表
 *
 * @link      https://open.duomai.com/zh/apis/cpslink/426/1304
 **/
class DmCpslinkDouyinSelfLiveMaterialGet extends RequestBase
{

    /**
     * 接口名字
     *
     * @var string
     */
    protected $apiName = 'cps-mesh.cpslink.douyinSelf.liveMaterial.get';

    /**
     * 必填参数列表
     *
     * @var array
     */
    protected $mustParamList = [];

    /**
     * 1品牌，2达人（默认）
     *
     * @param    $authorType 1品牌，2达人（默认）
     * @isMust       选填
     * @exampleValue 1
     * @return DmCpslinkDouyinSelfLiveMaterialGet
     */
    public function setAuthorType($authorType): self
    {
        $this->params['author_type'] = $authorType;
        return $this;
    }

    /**
     * 达人账号或UID
     *
     * @param    $authorInfo
     * @isMust       选填
     * @exampleValue 1
     * @return DmCpslinkDouyinSelfLiveMaterialGet
     */
    public function setAuthorInfo($authorInfo): self
    {
        $this->params['author_info'] = $authorInfo;
        return $this;
    }

    /**
     * 作者电商等级，0-7，多个等级用逗号分隔，例：1, 2
     *
     * @param    $authorLevels
     * @isMust       选填
     * @exampleValue 1
     * @return DmCpslinkDouyinSelfLiveMaterialGet
     */
    public function setAuthorLevels($authorLevels): self
    {
        $this->params['author_levels'] = $authorLevels;
        return $this;
    }

    /**
     * 商品类目，来自类目列表接口，多个等级用逗号分隔，例：1, 2
     *
     * @param    $categoryId
     * @isMust       选填
     * @exampleValue 1
     * @return DmCpslinkDouyinSelfLiveMaterialGet
     */
    public function setCategoryId($categoryId): self
    {
        $this->params['category_id'] = $categoryId;
        return $this;
    }

    /**
     *  排序字段: 1-综合；2-销量；3-佣金率；4-粉丝数
     *
     * @param    $orderField
     * @isMust       选填
     * @exampleValue 1
     * @return DmCpslinkDouyinSelfLiveMaterialGet
     */
    public function setOrderField($orderField): self
    {
        $this->params['order_field'] = $orderField;
        return $this;
    }

    /**
     *  排序方式：0-降序；1-升序
     *
     * @param    $orderType
     * @isMust       选填
     * @exampleValue 1
     * @return DmCpslinkDouyinSelfLiveMaterialGet
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
     * @return DmCpslinkDouyinSelfLiveMaterialGet
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
     * @return DmCpslinkDouyinSelfLiveMaterialGet
     */
    public function setPageSize(int $pageSize): self
    {
        $this->params['page_size'] = $pageSize;
        return $this;
    }

}