<?php

namespace Mylarge\UnionSdk\jingtuitui\request;

use Mylarge\UnionSdk\jingtuitui\RequestBase;

/**
 * http://japi.jingtuitui.com/api/get_goods_link
 * @ApiDescr   
 * @createTime 2021-12-22 22:27:09
 * @link       http://www.jingtuitui.com/api_item?id=14
 **/
class JttGetGoodsLinkRequest extends RequestBase
{

    /**
     * 接口名字
     * @var string
     */
    Protected $apiName = 'get_goods_link';
    
    /**
     * api版本
     * @var string
     */
    protected $version = 'v1';
    
    /**
     * 必填参数列表
     * @var array
     */
    Protected $mustParamList = ['unionid', 'gid'];
    
    
    /**
     * 联盟ID
     * @param int  $unionid
     * @isMust       必填
     * @exampleValue 1002135924
     * @return JttGetGoodsLinkRequest
     */
    public function setUnionid(int $unionid)
    {
        $this->params['unionid'] = $unionid;
        return $this;
    }

    /**
     * 推广位ID （可自定义推广位id，也可自由填写京东联盟账号下已经创建的任一推广位ID，若未填写，则默认生成一个唯一此接口推广位-名称：微信手Q短链接，20位数以内的整数型）
     * @param int  $positionid
     * @isMust       非必填
     * @exampleValue 123456
     * @return JttGetGoodsLinkRequest
     */
    public function setPositionid(int $positionid)
    {
        $this->params['positionid'] = $positionid;
        return $this;
    }

    /**
     * 落地页、商品ID(支持传入会场链接,二合一链接，当只传单品落地页或SKU时，自动匹配有效最优券，进行二合一转链， 建议转链后检查跟单)
     * @param string  $gid
     * @isMust       必填
     * @exampleValue 72101883976
     * @return JttGetGoodsLinkRequest
     */
    public function setGid(string $gid)
    {
        $this->params['gid'] = $gid;
        return $this;
    }

    /**
     * 优惠券链接(1.为空则自动匹配最优券自动转链；2.优惠券链接需要urlencode；3.一个商品在联盟可能有多个优惠券，可通过填写该参数的方式选择使用的优惠券，请确认正确的优惠券，否则无法正常跳转)
     * @param string  $couponUrl
     * @isMust       非必填
     * @exampleValue http://coupon.m.jd.com/coupons/show.action?key=9bdbf07731dc4df6a714cb009e68af19&roleId=45493742&to=item.jd.com/72101883976.html
     * @return JttGetGoodsLinkRequest
     */
    public function setCouponUrl(string $couponUrl)
    {
        $this->params['coupon_url'] = $couponUrl;
        return $this;
    }

    /**
     * 您的sub子渠道标识，您可自定义传入字母、数字或下划线，最多支持80个字符，该参数会在订单行查询接口中展示（需向京东联盟申请权限，申请方法请见https://union.jd.com/helpcenter/13246-13247-46301），与positionid只传入一处即可
     * @param string  $subUnionId
     * @isMust       非必填
     * @exampleValue 11695632
     * @return JttGetGoodsLinkRequest
     */
    public function setSubUnionId(string $subUnionId)
    {
        $this->params['subUnionId'] = $subUnionId;
        return $this;
    }

    /**
     * 礼金批次号
     * @param string  $giftCouponKey
     * @isMust       非必填
     * @exampleValue efb58d44af7185c7
     * @return JttGetGoodsLinkRequest
     */
    public function setGiftCouponKey(string $giftCouponKey)
    {
        $this->params['giftCouponKey'] = $giftCouponKey;
        return $this;
    }

    /**
     * 转链类型，1：长链， 2 ：短链 （不传则默认短链）
     * @param  $chainType
     * @isMust       非必填
     * @exampleValue 1
     * @return JttGetGoodsLinkRequest
     */
    public function setChainType($chainType)
    {
        $this->params['chainType'] = $chainType;
        return $this;
    }

}