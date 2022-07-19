<?php

namespace Mylarge\UnionSdk\jingtuitui\request;

use Mylarge\UnionSdk\jingtuitui\RequestBase;

/**
 * http://japi.jingtuitui.com/api/get_goods_list
 * @ApiDescr   
 * @createTime 2021-12-22 22:47:36
 * @link       http://www.jingtuitui.com/api_item?id=1
 **/
class JttGetGoodsListRequest extends RequestBase
{

    /**
     * 接口名字
     * @var string
     */
    Protected $apiName = 'get_goods_list';
    
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
     * @return JttGetGoodsListRequest
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
     * @return JttGetGoodsListRequest
     */
    public function setPageSize($pageSize)
    {
        $this->params['pageSize'] = $pageSize;
        return $this;
    }

    /**
     * 关键词搜索（可以输入关键词、SKU、商品链接、店铺名称）
     * @param string  $keyword
     * @isMust       非必填
     * @exampleValue 纸巾
     * @return JttGetGoodsListRequest
     */
    public function setKeyword(string $keyword)
    {
        $this->params['keyword'] = $keyword;
        return $this;
    }

    /**
     * 京推推商品一级类目： 1居家日用；2食品；3生鲜；4图书；5美妆个护；6母婴；7数码家电；8内衣；9配饰；10女装；11男装；12鞋品；13家装家纺；14文娱车品；15箱包；16户外运动（支持多类目筛选，如1,2获取类目为居家日用、食品的所有商品，请用英文都好隔开，不传则为全部商品）
     * @param  $goodsType
     * @isMust       非必填
     * @exampleValue 1
     * @return JttGetGoodsListRequest
     */
    public function setGoodsType($goodsType)
    {
        $this->params['goods_type'] = $goodsType;
        return $this;
    }

    /**
     * 京推推二级分类（可通过超级分类API获取全部的二级分类id，本接口也有返回）
     * @param  $goodsSecondType
     * @isMust       非必填
     * @exampleValue 8
     * @return JttGetGoodsListRequest
     */
    public function setGoodsSecondType($goodsSecondType)
    {
        $this->params['goods_second_type'] = $goodsSecondType;
        return $this;
    }

    /**
     * 频道id： sift精选好货；nineSift“9块9”精选；collage京东拼购；self京东自营；wtype京东配送；goodShop京东好店；flagShop官方旗舰店；giftGoods奖励商品；import京东国际；jdMarket京东超市；bugGoods漏洞单；remotePost偏远地区包邮
     * @param string  $eliteId
     * @isMust       非必填
     * @exampleValue sift
     * @return JttGetGoodsListRequest
     */
    public function setEliteId(string $eliteId)
    {
        $this->params['eliteId'] = $eliteId;
        return $this;
    }

    /**
     * 排序字段：finally券后价；brokerage佣金比例；sale折扣力度；OrderCount30Days 30天引入订单量；inOrderComm30Days 30天支出佣金；getCouponNum领券量；comments评论数；goodComments好评数
     * @param string  $sortName
     * @isMust       非必填
     * @exampleValue finally
     * @return JttGetGoodsListRequest
     */
    public function setSortName(string $sortName)
    {
        $this->params['sortName'] = $sortName;
        return $this;
    }

    /**
     * 排序：asc,desc升降序
     * @param string  $sort
     * @isMust       非必填
     * @exampleValue desc
     * @return JttGetGoodsListRequest
     */
    public function setSort(string $sort)
    {
        $this->params['sort'] = $sort;
        return $this;
    }

    /**
     * 价格筛选:最低价格
     * @param  $priceStart
     * @isMust       非必填
     * @exampleValue 1.9
     * @return JttGetGoodsListRequest
     */
    public function setPriceStart($priceStart)
    {
        $this->params['price_start'] = $priceStart;
        return $this;
    }

    /**
     * 价格筛选:最高价格
     * @param  $priceEnd
     * @isMust       非必填
     * @exampleValue 9.9
     * @return JttGetGoodsListRequest
     */
    public function setPriceEnd($priceEnd)
    {
        $this->params['price_end'] = $priceEnd;
        return $this;
    }

    /**
     * 京推推品牌ID筛选
     * @param string  $brandId
     * @isMust       非必填
     * @exampleValue 1
     * @return JttGetGoodsListRequest
     */
    public function setBrandId(string $brandId)
    {
        $this->params['brand_id'] = $brandId;
        return $this;
    }

    /**
     * 店铺id筛选
     * @param  $shopId
     * @isMust       非必填
     * @exampleValue 1000016561
     * @return JttGetGoodsListRequest
     */
    public function setShopId($shopId)
    {
        $this->params['shop_id'] = $shopId;
        return $this;
    }

    /**
     * 京东商品类型（1=POP；2=self自营；3=拼购）
     * @param  $jdType
     * @isMust       非必填
     * @exampleValue 1
     * @return JttGetGoodsListRequest
     */
    public function setJdType($jdType)
    {
        $this->params['jd_type'] = $jdType;
        return $this;
    }

}