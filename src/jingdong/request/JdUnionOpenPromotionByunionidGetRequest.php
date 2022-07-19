<?php

namespace Mylarge\UnionSdk\jingdong\request;

use Mylarge\UnionSdk\jingdong\RequestBase;

/**
 * 工具商获取推广链接接口【申请】
 * @ApiDescr   工具商媒体帮助子站长获取普通推广链接和优惠券二合一推广链接，可传入PID参数以区分子站长的推广位，该参数可在订单查询接口返回。接口和subunionid参数需向cps-qxsq@jd.com申请权限。
 * @createTime 2021-12-20 22:19:51
 * @link       https://union.jd.com/openplatform/api/v2?apiName=jd.union.open.promotion.byunionid.get
 **/
class JdUnionOpenPromotionByunionidGetRequest extends RequestBase
{

    /**
     * 接口名字
     * @var string
     */
    Protected $apiName = 'jd.union.open.promotion.byunionid.get';
    
    /**
     * 必填参数列表
     * @var array
     */
    Protected $mustParamList = ['promotionCodeReq.materialId', 'promotionCodeReq.unionId'];
    
    
    /**
     * 推广物料url，例如活动链接、商品链接等；不支持仅传入skuid
     * @param string  $materialId
     * @isMust       必填
     * @exampleValue https://item.m.jd.com/product/100010793716.html
     * @return JdUnionOpenPromotionByunionidGetRequest
     */
    public function setMaterialId(string $materialId): self
    {
        $this->params['promotionCodeReq']['materialId'] = $materialId;
        return $this;
    }

    /**
     * 目标推客的联盟ID
     * @param int  $unionId
     * @isMust       必填
     * @exampleValue 10000618
     * @return JdUnionOpenPromotionByunionidGetRequest
     */
    public function setUnionId(int $unionId): self
    {
        $this->params['promotionCodeReq']['unionId'] = $unionId;
        return $this;
    }

    /**
     * 新增推广位id （不填的话，为其默认生成一个唯一此接口推广位-名称：微信手Q短链接）
     * @param int  $positionId
     * @isMust       非必填
     * @exampleValue 6
     * @return JdUnionOpenPromotionByunionidGetRequest
     */
    public function setPositionId(int $positionId): self
    {
        $this->params['promotionCodeReq']['positionId'] = $positionId;
        return $this;
    }

    /**
     * 联盟子推客身份标识（不能传入接口调用者自己的pid）
     * @param string  $pid
     * @isMust       非必填
     * @exampleValue 618_618_6018
     * @return JdUnionOpenPromotionByunionidGetRequest
     */
    public function setPid(string $pid): self
    {
        $this->params['promotionCodeReq']['pid'] = $pid;
        return $this;
    }

    /**
     * 优惠券领取链接，在使用优惠券、商品二合一功能时入参，且materialId须为商品详情页链接
     * @param string  $couponUrl
     * @isMust       非必填
     * @exampleValue http://coupon.jd.com/ilink/get/get_coupon.action?XXXXXXX
     * @return JdUnionOpenPromotionByunionidGetRequest
     */
    public function setCouponUrl(string $couponUrl): self
    {
        $this->params['promotionCodeReq']['couponUrl'] = $couponUrl;
        return $this;
    }

    /**
     * 子渠道标识，仅支持传入字母、数字、下划线或中划线，最多80个字符（不可包含空格），该参数会在订单行查询接口中展示（需申请权限，申请方法请见https://union.jd.com/helpcenter/13246-13247-46301）
     * @param string  $subUnionId
     * @isMust       非必填
     * @exampleValue 618_18_c35***e6a
     * @return JdUnionOpenPromotionByunionidGetRequest
     */
    public function setSubUnionId(string $subUnionId): self
    {
        $this->params['promotionCodeReq']['subUnionId'] = $subUnionId;
        return $this;
    }

    /**
     * 转链类型，1：长链， 2 ：短链 ，3： 长链+短链，默认短链，短链有效期60天
     * @param int  $chainType
     * @isMust       非必填
     * @exampleValue 1
     * @return JdUnionOpenPromotionByunionidGetRequest
     */
    public function setChainType(int $chainType): self
    {
        $this->params['promotionCodeReq']['chainType'] = $chainType;
        return $this;
    }

    /**
     * 礼金批次号
     * @param string  $giftCouponKey
     * @isMust       非必填
     * @exampleValue xxx_coupon_key
     * @return JdUnionOpenPromotionByunionidGetRequest
     */
    public function setGiftCouponKey(string $giftCouponKey): self
    {
        $this->params['promotionCodeReq']['giftCouponKey'] = $giftCouponKey;
        return $this;
    }

    /**
     * 渠道关系ID
     * @param int  $channelId
     * @isMust       非必填
     * @exampleValue 12345
     * @return JdUnionOpenPromotionByunionidGetRequest
     */
    public function setChannelId(int $channelId): self
    {
        $this->params['promotionCodeReq']['channelId'] = $channelId;
        return $this;
    }

}