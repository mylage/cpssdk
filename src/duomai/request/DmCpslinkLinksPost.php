<?php

namespace Mylarge\UnionSdk\duomai\request;

use Mylarge\UnionSdk\jingdong\RequestBase;

/**
 * 获取推广链接
 *
 * @link      https://open.duomai.com/zh/apis/cpslink/29/57
 **/
class DmCpslinkLinksPost extends RequestBase
{

    /**
     * 接口名字
     *
     * @var string
     */
    protected $apiName = 'cps-mesh.cpslink.links.post';

    /**
     * 必填参数列表
     *
     * @var array
     */
    protected $mustParamList = [];


    /**
     * 待转链链接，和ads_id、product_id必传一个
     *
     * @param  $url
     * @return DmCpslinkLinksPost
     * @isMust       非必填
     */
    public function setUrl($url): self
    {
        $this->params['url'] = $url;
        return $this;
    }

    /**
     * 计划id
     *
     * @param  $adsId
     * @return DmCpslinkLinksPost
     * @isMust       非必填
     */
    public function setAdsId($adsId): self
    {
        $this->params['ads_id'] = $adsId;
        return $this;
    }

    /**
     * 商品id，多麦商品库特有参数，供内部使用
     *
     * @param  $productId
     * @return DmCpslinkLinksPost
     * @isMust       非必填
     */
    public function setProductId($productId): self
    {
        $this->params['product_id'] = $productId;
        return $this;
    }

    /**
     * 推广位id
     *
     * @param  $siteId
     * @return DmCpslinkLinksPost
     * @isMust       非必填
     */
    public function setSiteId($siteId): self
    {
        $this->params['site_id'] = $siteId;
        return $this;
    }

    /**
     * 是否需要商家原始链接
     *
     * @param  $original
     * @return DmCpslinkLinksPost
     * @isMust       非必填
     */
    public function setOriginal($original): self
    {
        $this->params['original'] = $original;
        return $this;
    }

    /**
     * 优惠券 淘宝为优惠券id 京东为优惠券链接
     *
     * @param  $coupon
     * @return DmCpslinkLinksPost
     * @isMust       非必填
     */
    public function setCoupon($coupon): self
    {
        $this->params['ext']['coupon'] = $coupon;
        return $this;
    }

    /**
     * euid 反馈标签,淘系类暂不支持，建议必填，跟单用
     *
     * @param  $euid
     * @return DmCpslinkLinksPost
     * @isMust       非必填
     */
    public function setEuid($euid): self
    {
        $this->params['ext']['euid'] = $euid;
        return $this;
    }

    /**
     * 礼金批次号
     *
     * @param  $giftCouponKey
     * @return DmCpslinkLinksPost
     * @isMust       非必填
     */
    public function setGiftCouponKey($giftCouponKey): self
    {
        $this->params['ext']['gift_coupon_key'] = $giftCouponKey;
        return $this;
    }


    /**
     * 用户id 用于一些免登场景
     *
     * @param  $uid
     * @return DmCpslinkLinksPost
     * @isMust       非必填
     */
    public function setUid($uid): self
    {
        $this->params['ext']['uid'] = $uid;
        return $this;
    }

    /**
     * 用户昵称 用于一些免登场景
     *
     * @param  $uname
     * @return DmCpslinkLinksPost
     * @isMust       非必填
     */
    public function setUname($uname): self
    {
        $this->params['ext']['uname'] = $uname;
        return $this;
    }

    /**
     * 抖音直播间open_id，来自抖音接口-分销直播间列表，直播间计划推广使用,此时url传空
     *
     * @param  $douyinOpenid
     * @return DmCpslinkLinksPost
     * @isMust       非必填
     */
    public function setDouyinOpenid($douyinOpenid): self
    {
        $this->params['ext']['douyin_openid'] = $douyinOpenid;
        return $this;
    }

}