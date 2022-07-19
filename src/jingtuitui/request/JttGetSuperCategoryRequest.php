<?php

namespace Mylarge\UnionSdk\jingtuitui\request;

use Mylarge\UnionSdk\jingtuitui\RequestBase;

/**
 * http://japi.jingtuitui.com/api/get_super_category
 * @ApiDescr   
 * @createTime 2022-01-06 20:15:16
 * @link       http://www.jingtuitui.com/api_item?id=25
 **/
class JttGetSuperCategoryRequest extends RequestBase
{

    /**
     * 接口名字
     * @var string
     */
    Protected $apiName = 'get_super_category';
    
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
     * 京推推商品一级类目： 0全部，1居家日用，2食品，3生鲜，4图书，5美妆个护，6母婴，7数码家电，8内衣，9配饰，10女装，11男装，12鞋品，13家装家纺，14文娱车品，15箱包，16户外运动（支持多类目筛选，如1,2获取类目为女装、男装的商品，逗号仅限英文逗号）
     * @param  $goodsType
     * @isMust       非必填
     * @exampleValue 1
     * @return JttGetSuperCategoryRequest
     */
    public function setGoodsType($goodsType)
    {
        $this->params['goods_type'] = $goodsType;
        return $this;
    }

}