<?php

namespace Mylarge\UnionSdk\pinduoduo\request;

use Mylarge\UnionSdk\pinduoduo\RequestBase;

/**
 * 生成营销工具推广链接
 * @ApiDescr   生成营销工具推广链接
 * @link       https://open.pinduoduo.com/application/document/api?id=pdd.ddk.oauth.rp.prom.url.generate
 **/
class PddDdkOauthRpPromUrlGenerateRequest extends RequestBase
{

    /**
     * 接口名字
     * @var string
     */
    Protected $apiName = 'pdd.ddk.oauth.rp.prom.url.generate';

    /**
     * 必填参数列表
     * @var array
     */
    Protected $mustParamList = ['p_id_list'];
    
    
    /**
     * 初始金额（单位分），有效金额枚举值：300、500、700、1100和1600，默认300
     * @return PddDdkOauthRpPromUrlGenerateRequest
     * @var int 
     * @isMust 非必填
     */
    public function setAmount(int $amount): self
    {
        $this->params['amount'] = $amount;
        return $this;
    }

    /**
     * 营销工具类型，必填：-1-活动列表，0-红包(需申请推广权限)，2–新人红包，3-刮刮卡，5-员工内购，10-生成绑定备案链接，12-砸金蛋，13-一元购C端页面，14-千万补贴B端页面，15-充值中心B端页面，16-千万补贴C端页面，17-千万补贴投票页面，18-一元购B端页面，19-多多品牌星选B端页面，20-多多品牌星选C端页面，23-超级红包，24-礼金全场N折活动B端页面，25-品牌优选B端页面，26-品牌优选C端页面，27-带货赢千万，28-满减券活动B端页面，29-满减券活动C端页面，30-免单B端页面，31-免单C端页面，32-转盘得现金B端页面，33-转盘得现金C端页面；红包推广权限申请流程链接：https://jinbao.pinduoduo.com/qa-system?questionId=289
     * @return PddDdkOauthRpPromUrlGenerateRequest
     * @var int 
     * @isMust 非必填
     */
    public function setChannelType(int $channelType): self
    {
        $this->params['channel_type'] = $channelType;
        return $this;
    }

    /**
     * 自定义参数，为链接打上自定义标签；自定义参数最长限制64个字节；格式为：  {"uid":"11111","sid":"22222"} ，其中 uid 用户唯一标识，可自行加密后传入，每个用户仅且对应一个标识，必填； sid 上下文信息标识，例如sessionId等，非必填。该json字符串中也可以加入其他自定义的key。（如果使用GET请求，请使用URLEncode处理参数）
     * @return PddDdkOauthRpPromUrlGenerateRequest
     * @var string 
     * @isMust 非必填
     */
    public function setCustomParameters(string $customParameters): self
    {
        $this->params['custom_parameters'] = $customParameters;
        return $this;
    }

    /**
     * 一元购自定义参数，json格式，例如:{"goods_sign":"Y9b2_0uSWMFPGSaVwvfZAlm_y2ADLWZl_JQ7UYaS80K"}
     * @return PddDdkOauthRpPromUrlGenerateRequest
     * @var 
     * @isMust 非必填
     */
    public function setDiyOneYuanParam($diyOneYuanParam): self
    {
        $this->params['diy_one_yuan_param'] = $diyOneYuanParam;
        return $this;
    }

    /**
     * 商品goodsSign，支持通过goodsSign查询商品。goodsSign是加密后的goodsId, goodsId已下线，请使用goodsSign来替代。使用说明：https://jinbao.pinduoduo.com/qa-system?questionId=252
     * @return PddDdkOauthRpPromUrlGenerateRequest
     * @var string 
     * @isMust 非必填
     */
    public function setGoodsSign(string $goodsSign): self
    {
        $this->params['goods_sign'] = $goodsSign;
        return $this;
    }

    /**
     * 红包自定义参数，json格式
     * @return PddDdkOauthRpPromUrlGenerateRequest
     * @var 
     * @isMust 非必填
     */
    public function setDiyRedPacketParam($diyRedPacketParam): self
    {
        $this->params['diy_red_packet_param'] = $diyRedPacketParam;
        return $this;
    }

    /**
     * 红包金额列表，200、300、500、1000、2000，单位分。红包金额和红包抵后价设置只能二选一，默认设置了红包金额会忽略红包抵后价设置
     * @return PddDdkOauthRpPromUrlGenerateRequest
     * @var 
     * @isMust 非必填
     */
    public function setAmountProbability($amountProbability): self
    {
        $this->params['amount_probability'] = $amountProbability;
        return $this;
    }

    /**
     * 设置玩法，false-现金红包, true-现金券
     * @return PddDdkOauthRpPromUrlGenerateRequest
     * @var bool 
     * @isMust 非必填
     */
    public function setDisText(bool $disText): self
    {
        $this->params['dis_text'] = $disText;
        return $this;
    }

    /**
     * 推广页设置，false-红包开启页, true-红包领取页
     * @return PddDdkOauthRpPromUrlGenerateRequest
     * @var bool 
     * @isMust 非必填
     */
    public function setNotShowBackground(bool $notShowBackground): self
    {
        $this->params['not_show_background'] = $notShowBackground;
        return $this;
    }

    /**
     * 优先展示类目
     * @return PddDdkOauthRpPromUrlGenerateRequest
     * @var int 
     * @isMust 非必填
     */
    public function setOptId(int $optId): self
    {
        $this->params['opt_id'] = $optId;
        return $this;
    }

    /**
     * 自定义红包抵后价和商品佣金区间对象数组
     * @return PddDdkOauthRpPromUrlGenerateRequest
     * @var 
     * @isMust 非必填
     */
    public function setRangeItems($rangeItems): self
    {
        $this->params['range_items'] = $rangeItems;
        return $this;
    }

    /**
     * 区间的开始值
     * @return PddDdkOauthRpPromUrlGenerateRequest
     * @var int 
     * @isMust 非必填
     */
    public function setRangeFrom(int $rangeFrom): self
    {
        $this->params['range_from'] = $rangeFrom;
        return $this;
    }

    /**
     * range_id为1表示红包抵后价（单位分）， range_id为2表示佣金比例（单位千分之几)
     * @return PddDdkOauthRpPromUrlGenerateRequest
     * @var int 
     * @isMust 非必填
     */
    public function setRangeId(int $rangeId): self
    {
        $this->params['range_id'] = $rangeId;
        return $this;
    }

    /**
     * 区间的结束值
     * @return PddDdkOauthRpPromUrlGenerateRequest
     * @var int 
     * @isMust 非必填
     */
    public function setRangeTo(int $rangeTo): self
    {
        $this->params['range_to'] = $rangeTo;
        return $this;
    }

    /**
     * 是否生成qq小程序
     * @return PddDdkOauthRpPromUrlGenerateRequest
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
     * @return PddDdkOauthRpPromUrlGenerateRequest
     * @var bool 
     * @isMust 非必填
     */
    public function setGenerateSchemaUrl(bool $generateSchemaUrl): self
    {
        $this->params['generate_schema_url'] = $generateSchemaUrl;
        return $this;
    }

    /**
     * 是否生成短链接。true-是，false-否，默认false
     * @return PddDdkOauthRpPromUrlGenerateRequest
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
     * @return PddDdkOauthRpPromUrlGenerateRequest
     * @var bool 
     * @isMust 非必填
     */
    public function setGenerateWeApp(bool $generateWeApp): self
    {
        $this->params['generate_we_app'] = $generateWeApp;
        return $this;
    }

    /**
     * 推广位列表，长度最大为1，例如：["60005_612"]。活动页生链要求传入授权备案信息，不支持批量生链。
     * @return PddDdkOauthRpPromUrlGenerateRequest
     * @var array 
     * @isMust 必填
     */
    public function setPIdList(array $pIdList): self
    {
        $this->params['p_id_list'] = $pIdList;
        return $this;
    }

    /**
     * 刮刮卡指定金额（单位分），可指定2-100元间数值，即有效区间为：[200,10000]
     * @return PddDdkOauthRpPromUrlGenerateRequest
     * @var int 
     * @isMust 非必填
     */
    public function setScratchCardAmount(int $scratchCardAmount): self
    {
        $this->params['scratch_card_amount'] = $scratchCardAmount;
        return $this;
    }

}