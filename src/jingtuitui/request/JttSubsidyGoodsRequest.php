<?php

namespace Mylarge\UnionSdk\jingtuitui\request;

use Mylarge\UnionSdk\jingtuitui\RequestBase;

/**
 * http://japi.jingtuitui.com/api/subsidy_goods
 * @ApiDescr   
 * @createTime 2022-01-10 23:42:26
 * @link       http://www.jingtuitui.com/api_item?id=27
 **/
class JttSubsidyGoodsRequest extends RequestBase
{

    /**
     * 接口名字
     * @var string
     */
    Protected $apiName = 'subsidy_goods';
    
    /**
     * api版本
     * @var string
     */
    protected $version = 'v2';
    
    /**
     * 必填参数列表
     * @var array
     */
    Protected $mustParamList = [];
    
    
    /**
     * 分页获取数据（默认第1页）
     * @param  $pageIndex
     * @isMust       非必填
     * @exampleValue 1
     * @return JttSubsidyGoodsRequest
     */
    public function setPageIndex($pageIndex)
    {
        $this->params['pageIndex'] = $pageIndex;
        return $this;
    }

    /**
     * 单页面显示条数(最大100条最少15条)
     * @param  $pageSize
     * @isMust       非必填
     * @exampleValue 20
     * @return JttSubsidyGoodsRequest
     */
    public function setPageSize($pageSize)
    {
        $this->params['pageSize'] = $pageSize;
        return $this;
    }

    /**
     * 京推推商品ID搜索
     * @param  $jID
     * @isMust       非必填
     * @exampleValue 3224823
     * @return JttSubsidyGoodsRequest
     */
    public function setJID($jID)
    {
        $this->params['JID'] = $jID;
        return $this;
    }

    /**
     * 关键词搜索（可以输入关键词、SKU、店铺名称）
     * @param string  $keyword
     * @isMust       非必填
     * @exampleValue 洗衣粉
     * @return JttSubsidyGoodsRequest
     */
    public function setKeyword(string $keyword)
    {
        $this->params['keyword'] = $keyword;
        return $this;
    }

    /**
     * "京推推商品一级类目： 0全部；1居家日用；2食品；3生鲜；4图书；5美妆个护；6母婴；7数码家电；8内衣；9配饰；10女装；11男装；12鞋品；13家装家纺；14文娱车品；15箱包；16户外运动（支持多类目筛选，如1,2获取类目为女装、男装的商品，逗号仅限英文逗号）"
     * @param  $goodsType
     * @isMust       非必填
     * @exampleValue 1
     * @return JttSubsidyGoodsRequest
     */
    public function setGoodsType($goodsType)
    {
        $this->params['goods_type'] = $goodsType;
        return $this;
    }

}