<?php

namespace Mylarge\UnionSdk\jingtuitui\request;

use Mylarge\UnionSdk\jingtuitui\RequestBase;

/**
 * http://japi.jingtuitui.com/api/get_ware_style
 * @ApiDescr   
 * @createTime 2021-12-22 22:48:52
 * @link       http://www.jingtuitui.com/api_item?id=4
 **/
class JttGetWareStyleRequest extends RequestBase
{

    /**
     * 接口名字
     * @var string
     */
    Protected $apiName = 'get_ware_style';
    
    /**
     * api版本
     * @var string
     */
    protected $version = 'v2';
    
    /**
     * 必填参数列表
     * @var array
     */
    Protected $mustParamList = ['skuIds'];
    
    
    /**
     * 商品sku搜索，最高可输入10个，多sku搜索时请用英文逗号分割
     * @param string  $skuIds
     * @isMust       必填
     * @exampleValue 10191670419,56691428763
     * @return JttGetWareStyleRequest
     */
    public function setSkuIds(string $skuIds)
    {
        $this->params['skuIds'] = $skuIds;
        return $this;
    }

}