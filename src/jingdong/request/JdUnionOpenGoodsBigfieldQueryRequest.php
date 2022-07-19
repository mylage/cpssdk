<?php

namespace Mylarge\UnionSdk\jingdong\request;

use Mylarge\UnionSdk\jingdong\RequestBase;

/**
 * 商品详情查询接口
 * @ApiDescr   商品详情查询接口,大字段信息
 * @createTime 2022-07-19 09:36:14
 * @link       https://union.jd.com/openplatform/api/v2?apiName=jd.union.open.goods.bigfield.query
 **/
class JdUnionOpenGoodsBigfieldQueryRequest extends RequestBase
{

    /**
     * 接口名字
     * @var string
     */
    Protected $apiName = 'jd.union.open.goods.bigfield.query';
    
    /**
     * 必填参数列表
     * @var array
     */
    Protected $mustParamList = ['goodsReq.skuIds'];
    
    
    /**
     * skuId集合，最多支持批量入参10个sku
     * @param array  $skuIds
     * @isMust       必填
     * @exampleValue 29357345299
     * @return JdUnionOpenGoodsBigfieldQueryRequest
     */
    public function setSkuIds(array $skuIds): self
    {
        $this->params['goodsReq']['skuIds'] = $skuIds;
        return $this;
    }

    /**
     * 查询域集合，不填写则查询全部，目目前支持：categoryInfo（类目信息）,imageInfo（图片信息）,baseBigFieldInfo（基础大字段信息）,bookBigFieldInfo（图书大字段信息）,videoBigFieldInfo（影音大字段信息）,detailImages（商详图）
     * @param array  $fields
     * @isMust       非必填
     * @exampleValue categoryInfo
     * @return JdUnionOpenGoodsBigfieldQueryRequest
     */
    public function setFields(array $fields): self
    {
        $this->params['goodsReq']['fields'] = $fields;
        return $this;
    }

}