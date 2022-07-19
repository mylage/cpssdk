<?php

namespace Mylarge\UnionSdk\jingtuitui\request;

use Mylarge\UnionSdk\jingtuitui\RequestBase;

/**
 * http://japi.jingtuitui.com/api/today_top
 * @ApiDescr   
 * @createTime 2022-01-09 22:29:27
 * @link       http://www.jingtuitui.com/api_item?id=9
 **/
class JttTodayTopRequest extends RequestBase
{

    /**
     * 接口名字
     * @var string
     */
    Protected $apiName = 'today_top';
    
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
     * @return JttTodayTopRequest
     */
    public function setPageIndex($pageIndex)
    {
        $this->params['pageIndex'] = $pageIndex;
        return $this;
    }

    /**
     * 单页面显示条数(最大100条最少10条)
     * @param  $pageSize
     * @isMust       非必填
     * @exampleValue 20
     * @return JttTodayTopRequest
     */
    public function setPageSize($pageSize)
    {
        $this->params['pageSize'] = $pageSize;
        return $this;
    }

    /**
     * 频道ID discountReal实时爆单榜；inOrderCount30Days 30天销量榜；inOrderComm30Days 30天收益榜；discountCount总领券
     * @param string  $eliteId
     * @isMust       非必填
     * @exampleValue discountReal
     * @return JttTodayTopRequest
     */
    public function setEliteId(string $eliteId)
    {
        $this->params['eliteId'] = $eliteId;
        return $this;
    }

    /**
     * 京推推商品一级类目： 1居家日用；2食品；3生鲜；4图书；5美妆个护；6母婴；7数码家电；8内衣；9配饰；10女装；11男装；12鞋品；13家装家纺；14文娱车品；15箱包；16户外运动（支持多类目筛选，如1,2获取类目为居家日用、食品的所有商品，请用英文都好隔开，不传则为全部商品）
     * @param  $goodsType
     * @isMust       非必填
     * @exampleValue 1
     * @return JttTodayTopRequest
     */
    public function setGoodsType($goodsType)
    {
        $this->params['goods_type'] = $goodsType;
        return $this;
    }

    /**
     * 京推推二级分类
     * @param  $goodsSecondType
     * @isMust       非必填
     * @exampleValue 13
     * @return JttTodayTopRequest
     */
    public function setGoodsSecondType($goodsSecondType)
    {
        $this->params['goods_second_type'] = $goodsSecondType;
        return $this;
    }

}