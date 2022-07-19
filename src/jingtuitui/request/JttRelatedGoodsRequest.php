<?php

namespace Mylarge\UnionSdk\jingtuitui\request;

use Mylarge\UnionSdk\jingtuitui\RequestBase;

/**
 * http://japi.jingtuitui.com/api/related_goods
 * @ApiDescr   
 * @createTime 2022-01-06 22:45:22
 * @link       http://www.jingtuitui.com/api_item?id=24
 **/
class JttRelatedGoodsRequest extends RequestBase
{

    /**
     * 接口名字
     * @var string
     */
    Protected $apiName = 'related_goods';
    
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
     * 商品id
     * @param int  $goodsId
     * @isMust       非必填
     * @exampleValue 56691428763
     * @return JttRelatedGoodsRequest
     */
    public function setGoodsId(int $goodsId)
    {
        $this->params['goods_id'] = $goodsId;
        return $this;
    }

    /**
     * 京东商品类型（1=POP；2=self自营；3=拼购）
     * @param  $jdType
     * @isMust       非必填
     * @exampleValue 1
     * @return JttRelatedGoodsRequest
     */
    public function setJdType($jdType)
    {
        $this->params['jd_type'] = $jdType;
        return $this;
    }

}