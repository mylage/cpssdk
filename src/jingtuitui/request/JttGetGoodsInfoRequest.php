<?php

namespace Mylarge\UnionSdk\jingtuitui\request;

use Mylarge\UnionSdk\jingtuitui\RequestBase;

/**
 * http://japi.jingtuitui.com/api/get_goods_info
 * @ApiDescr   
 * @createTime 2021-12-22 22:39:48
 * @link       http://www.jingtuitui.com/api_item?id=2
 **/
class JttGetGoodsInfoRequest extends RequestBase
{

    /**
     * 接口名字
     * @var string
     */
    Protected $apiName = 'get_goods_info';
    
    /**
     * api版本
     * @var string
     */
    protected $version = 'v3';
    
    /**
     * 必填参数列表
     * @var array
     */
    Protected $mustParamList = ['skuIds'];
    
    
    /**
     * 商品sku搜索，最高可输入100个，多sku搜索时请用英文逗号分割 （注：1、v1.0版本支持传商品链接；2、如果输入的sku串中某个skuID的商品不在推广中[就是没有佣金]，返回结果会自动过滤该商品）
     * @param string  $skuIds
     * @isMust       必填
     * @exampleValue 
     * @return JttGetGoodsInfoRequest
     */
    public function setSkuIds(string $skuIds)
    {
        $this->params['skuIds'] = $skuIds;
        return $this;
    }

}