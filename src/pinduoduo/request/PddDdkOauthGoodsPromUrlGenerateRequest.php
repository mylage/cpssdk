<?php

namespace Mylarge\UnionSdk\pinduoduo\request;

use Mylarge\UnionSdk\pinduoduo\RequestBase;

/**
 * 生成多多进宝推广链接
 * @ApiDescr   生成普通商品推广链接
 * @link       https://open.pinduoduo.com/application/document/api?id=pdd.ddk.oauth.goods.prom.url.generate
 **/
class PddDdkOauthGoodsPromUrlGenerateRequest extends RequestBase
{

    /**
     * 接口名字
     * @var string
     */
    Protected $apiName = 'pdd.ddk.oauth.goods.prom.url.generate';

    /**
     * 必填参数列表
     * @var array
     */
    Protected $mustParamList = ['p_id'];
    
    
    /**
     * 多多礼金ID
     * @return PddDdkOauthGoodsPromUrlGenerateRequest
     * @var int 
     * @isMust 非必填
     */
    public function setCashGiftId(int $cashGiftId): self
    {
        $this->params['cash_gift_id'] = $cashGiftId;
        return $this;
    }

    /**
     * 自定义礼金标题，用于向用户展示渠道专属福利，不超过12个字
     * @return PddDdkOauthGoodsPromUrlGenerateRequest
     * @var string 
     * @isMust 非必填
     */
    public function setCashGiftName(string $cashGiftName): self
    {
        $this->params['cash_gift_name'] = $cashGiftName;
        return $this;
    }

    /**
     * 自定义参数，为链接打上自定义标签；自定义参数最长限制64个字节；格式为：  {"uid":"11111","sid":"22222"} ，其中 uid 用户唯一标识，可自行加密后传入，每个用户仅且对应一个标识，必填； sid 上下文信息标识，例如sessionId等，非必填。该json字符串中也可以加入其他自定义的key。（如果使用GET请求，请使用URLEncode处理参数）
     * @return PddDdkOauthGoodsPromUrlGenerateRequest
     * @var string 
     * @isMust 非必填
     */
    public function setCustomParameters(string $customParameters): self
    {
        $this->params['custom_parameters'] = $customParameters;
        return $this;
    }

    /**
     * 是否使用多多客专属推广计划
     * @return PddDdkOauthGoodsPromUrlGenerateRequest
     * @var bool 
     * @isMust 非必填
     */
    public function setForceDuoId(bool $forceDuoId): self
    {
        $this->params['force_duo_id'] = $forceDuoId;
        return $this;
    }

    /**
     * 是否生成带授权的单品链接。如果未授权，则会走授权流程
     * @return PddDdkOauthGoodsPromUrlGenerateRequest
     * @var bool 
     * @isMust 非必填
     */
    public function setGenerateAuthorityUrl(bool $generateAuthorityUrl): self
    {
        $this->params['generate_authority_url'] = $generateAuthorityUrl;
        return $this;
    }

    /**
     * 是否生成店铺收藏券推广链接
     * @return PddDdkOauthGoodsPromUrlGenerateRequest
     * @var bool 
     * @isMust 非必填
     */
    public function setGenerateMallCollectCoupon(bool $generateMallCollectCoupon): self
    {
        $this->params['generate_mall_collect_coupon'] = $generateMallCollectCoupon;
        return $this;
    }

    /**
     * 是否生成qq小程序
     * @return PddDdkOauthGoodsPromUrlGenerateRequest
     * @var bool 
     * @isMust 非必填
     */
    public function setGenerateQqApp(bool $generateQqApp): self
    {
        $this->params['generate_qq_app'] = $generateQqApp;
        return $this;
    }

    /**
     * 是否返回 schema URL
     * @return PddDdkOauthGoodsPromUrlGenerateRequest
     * @var bool 
     * @isMust 非必填
     */
    public function setGenerateSchemaUrl(bool $generateSchemaUrl): self
    {
        $this->params['generate_schema_url'] = $generateSchemaUrl;
        return $this;
    }

    /**
     * 是否生成短链接，true-是，false-否
     * @return PddDdkOauthGoodsPromUrlGenerateRequest
     * @var bool 
     * @isMust 非必填
     */
    public function setGenerateShortUrl(bool $generateShortUrl): self
    {
        $this->params['generate_short_url'] = $generateShortUrl;
        return $this;
    }

    /**
     * 是否生成拼多多福利券微信小程序推广信息
     * @return PddDdkOauthGoodsPromUrlGenerateRequest
     * @var bool 
     * @isMust 非必填
     */
    public function setGenerateWeApp(bool $generateWeApp): self
    {
        $this->params['generate_we_app'] = $generateWeApp;
        return $this;
    }

    /**
     * 商品goodsSign列表，例如：["c9r2omogKFFAc7WBwvbZU1ikIb16_J3CTa8HNN"]，支持批量生链。goodsSign是加密后的goodsId, goodsId已下线，请使用goodsSign来替代。使用说明：https://jinbao.pinduoduo.com/qa-system?questionId=252
     * @return PddDdkOauthGoodsPromUrlGenerateRequest
     * @var array 
     * @isMust 非必填
     */
    public function setGoodsSignList(array $goodsSignList): self
    {
        $this->params['goods_sign_list'] = $goodsSignList;
        return $this;
    }

    /**
     * 素材ID，可以通过商品详情接口获取商品素材信息
     * @return PddDdkOauthGoodsPromUrlGenerateRequest
     * @var string 
     * @isMust 非必填
     */
    public function setMaterialId(string $materialId): self
    {
        $this->params['material_id'] = $materialId;
        return $this;
    }

    /**
     * true--生成多人团推广链接 false--生成单人团推广链接（默认false）1、单人团推广链接：用户访问单人团推广链接，可直接购买商品无需拼团。2、多人团推广链接：用户访问双人团推广链接开团，若用户分享给他人参团，则开团者和参团者的佣金均结算给推手
     * @return PddDdkOauthGoodsPromUrlGenerateRequest
     * @var bool 
     * @isMust 非必填
     */
    public function setMultiGroup(bool $multiGroup): self
    {
        $this->params['multi_group'] = $multiGroup;
        return $this;
    }

    /**
     * 推广位ID
     * @return PddDdkOauthGoodsPromUrlGenerateRequest
     * @var string 
     * @isMust 必填
     */
    public function setPId(string $pId): self
    {
        $this->params['p_id'] = $pId;
        return $this;
    }

    /**
     * 搜索id，建议填写，提高收益。来自pdd.ddk.goods.recommend.get、pdd.ddk.goods.search、pdd.ddk.top.goods.list.query等接口
     * @return PddDdkOauthGoodsPromUrlGenerateRequest
     * @var string 
     * @isMust 非必填
     */
    public function setSearchId(string $searchId): self
    {
        $this->params['search_id'] = $searchId;
        return $this;
    }

    /**
     * 招商多多客ID
     * @return PddDdkOauthGoodsPromUrlGenerateRequest
     * @var int 
     * @isMust 非必填
     */
    public function setZsDuoId(int $zsDuoId): self
    {
        $this->params['zs_duo_id'] = $zsDuoId;
        return $this;
    }

}