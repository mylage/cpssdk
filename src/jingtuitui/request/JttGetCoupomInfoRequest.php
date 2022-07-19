<?php

namespace Mylarge\UnionSdk\jingtuitui\request;

use Mylarge\UnionSdk\jingtuitui\RequestBase;

/**
 * http://japi.jingtuitui.com/api/get_coupom_info
 * @ApiDescr   
 * @createTime 2022-01-05 21:41:27
 * @link       http://www.jingtuitui.com/api_item?id=6
 **/
class JttGetCoupomInfoRequest extends RequestBase
{

    /**
     * 接口名字
     * @var string
     */
    Protected $apiName = 'get_coupom_info';
    
    /**
     * api版本
     * @var string
     */
    protected $version = 'v3';
    
    /**
     * 必填参数列表
     * @var array
     */
    Protected $mustParamList = ['couponUrls'];
    
    
    /**
     * 优惠券链接查询，支持优惠券链接集合： 上限10（GET请求）；上限50（POST请求或SDK调用）
     * @param string  $couponUrls
     * @isMust       必填
     * @exampleValue https://coupon.m.jd.com/coupons/show.action?.......
     * @return JttGetCoupomInfoRequest
     */
    public function setCouponUrls(string $couponUrls)
    {
        $this->params['couponUrls'] = $couponUrls;
        return $this;
    }

}