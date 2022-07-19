<?php

namespace Mylarge\UnionSdk\jingtuitui\request;

use Mylarge\UnionSdk\jingtuitui\RequestBase;

/**
 * http://japi.jingtuitui.com/api/get_brand_list
 * @ApiDescr   
 * @createTime 2022-01-09 22:46:58
 * @link       http://www.jingtuitui.com/api_item?id=11
 **/
class JttGetBrandListRequest extends RequestBase
{

    /**
     * 接口名字
     * @var string
     */
    Protected $apiName = 'get_brand_list';
    
    /**
     * api版本
     * @var string
     */
    protected $version = 'v3';
    
    /**
     * 必填参数列表
     * @var array
     */
    Protected $mustParamList = [];
    
    
    /**
     * 分页获取数据 默认1
     * @param  $pageIndex
     * @isMust       非必填
     * @exampleValue 1
     * @return JttGetBrandListRequest
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
     * @return JttGetBrandListRequest
     */
    public function setPageSize($pageSize)
    {
        $this->params['pageSize'] = $pageSize;
        return $this;
    }

    /**
     * 京推推商品一级类目： 0全部；1居家日用；2食品；3生鲜；4图书；5美妆个护；6母婴；7数码家电；8内衣；9配饰；10女装；11男装；12鞋品；13家装家纺；14文娱车品；15箱包；16户外运动（支持多类目筛选，如1,2获取类目为女装、男装的商品，逗号仅限英文逗号）
     * @param  $goodsType
     * @isMust       非必填
     * @exampleValue 1
     * @return JttGetBrandListRequest
     */
    public function setGoodsType($goodsType)
    {
        $this->params['goods_type'] = $goodsType;
        return $this;
    }

    /**
     * 品牌数据类型 item-详情（构建品牌内商品列表清单需加此参数。例type=item&brand_id=1）
     * @param  $type
     * @isMust       非必填
     * @exampleValue item
     * @return JttGetBrandListRequest
     */
    public function setType($type)
    {
        $this->params['type'] = $type;
        return $this;
    }

    /**
     * 京推推品牌id
     * @param  $brandId
     * @isMust       非必填
     * @exampleValue 1
     * @return JttGetBrandListRequest
     */
    public function setBrandId($brandId)
    {
        $this->params['brand_id'] = $brandId;
        return $this;
    }

    /**
     * 品牌名称搜索
     * @param string  $brandName
     * @isMust       非必填
     * @exampleValue 三只松鼠
     * @return JttGetBrandListRequest
     */
    public function setBrandName(string $brandName)
    {
        $this->params['brand_name'] = $brandName;
        return $this;
    }

}