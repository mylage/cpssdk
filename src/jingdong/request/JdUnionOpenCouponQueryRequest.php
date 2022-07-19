<?php

namespace Mylarge\UnionSdk\jingdong\request;

use Mylarge\UnionSdk\jingdong\RequestBase;

/**
 * 优惠券领取情况查询接口【申请】
 * @ApiDescr   通过领券链接查询优惠券的平台、面额、期限、可用状态、剩余数量等详细信息，通常用于和商品信息一起展示优惠券券信息。需向cps-qxsq@jd.com申请权限。
 * @createTime 2021-12-20 22:11:51
 * @link       https://union.jd.com/openplatform/api/v2?apiName=jd.union.open.coupon.query
 **/
class JdUnionOpenCouponQueryRequest extends RequestBase
{

    /**
     * 接口名字
     * @var string
     */
    Protected $apiName = 'jd.union.open.coupon.query';
    
    /**
     * 必填参数列表
     * @var array
     */
    Protected $mustParamList = ['couponUrls'];
    
    
    /**
     * 优惠券链接集合；上限10（GET请求）；上限50（POST请求或SDK调用）
     * @param array  $couponUrls
     * @isMust       必填
     * @exampleValue ["http://coupon.jd.com/ilink/get/get_coupon.action?XXXXXXX"]
     * @return JdUnionOpenCouponQueryRequest
     */
    public function setCouponUrls(array $couponUrls): self
    {
        $this->params['couponUrls'] = $couponUrls;
        return $this;
    }

}