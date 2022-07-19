<?php

namespace Mylarge\UnionSdk\pinduoduo\request;

use Mylarge\UnionSdk\pinduoduo\RequestBase;

/**
 * 创建多多礼金
 * @ApiDescr   创建多多礼金
 * @link       https://open.pinduoduo.com/application/document/api?id=pdd.ddk.oauth.cashgift.create
 **/
class PddDdkOauthCashgiftCreateRequest extends RequestBase
{

    /**
     * 接口名字
     * @var string
     */
    Protected $apiName = 'pdd.ddk.oauth.cashgift.create';

    /**
     * 必填参数列表
     * @var array
     */
    Protected $mustParamList = ['acquire_end_time', 'acquire_start_time', 'validity_time_type'];
    
    
    /**
     * 券批次领取结束时间。note：此时间为时间戳，指格林威治时间 1970 年01 月 01 日 00 时 00 分 00 秒(北京时间 1970 年 01 月 01 日 08 时 00 分 00 秒)起至现在的总秒数
     * @return PddDdkOauthCashgiftCreateRequest
     * @var int 
     * @isMust 必填
     */
    public function setAcquireEndTime(int $acquireEndTime): self
    {
        $this->params['acquire_end_time'] = $acquireEndTime;
        return $this;
    }

    /**
     * 券批次领取开始时间。note：此时间为时间戳，指格林威治时间 1970 年01 月 01 日 00 时 00 分 00 秒(北京时间 1970 年 01 月 01 日 08 时 00 分 00 秒)起至现在的总秒数
     * @return PddDdkOauthCashgiftCreateRequest
     * @var int 
     * @isMust 必填
     */
    public function setAcquireStartTime(int $acquireStartTime): self
    {
        $this->params['acquire_start_time'] = $acquireStartTime;
        return $this;
    }

    /**
     * 是否自动领券，默认false不自动领券
     * @return PddDdkOauthCashgiftCreateRequest
     * @var bool 
     * @isMust 非必填
     */
    public function setAutoTake(bool $autoTake): self
    {
        $this->params['auto_take'] = $autoTake;
        return $this;
    }

    /**
     * 礼金券面额，单位为分，创建固定面额礼金券必填（创建灵活面额礼金券时，券面额 = 商品券后价 - 期望礼金券后价）
     * @return PddDdkOauthCashgiftCreateRequest
     * @var int 
     * @isMust 非必填
     */
    public function setCouponAmount(int $couponAmount): self
    {
        $this->params['coupon_amount'] = $couponAmount;
        return $this;
    }

    /**
     * 满减门槛，单位为分。满减门槛至少需为礼金券面额的2倍，仅对固定面额礼金券生效。
     * @return PddDdkOauthCashgiftCreateRequest
     * @var int 
     * @isMust 非必填
     */
    public function setCouponThresholdAmount(int $couponThresholdAmount): self
    {
        $this->params['coupon_threshold_amount'] = $couponThresholdAmount;
        return $this;
    }

    /**
     * 活动持续时间，validity_time_type为 1 时必填。相对时间类型为天级时，最大值为30，即领取后30天内有效；相对时间类型为小时级时，最大值为24，即领取后24小时内有效；相对时间类型为分钟级时，则最大值为60，即领取后60分钟内有效。
     * @return PddDdkOauthCashgiftCreateRequest
     * @var int 
     * @isMust 非必填
     */
    public function setDuration(int $duration): self
    {
        $this->params['duration'] = $duration;
        return $this;
    }

    /**
     * 期望礼金券后价，单位为分，最小值为1。创建灵活券 (generate_flexible_coupon为true) 时必填
     * @return PddDdkOauthCashgiftCreateRequest
     * @var int 
     * @isMust 非必填
     */
    public function setExceptAmount(int $exceptAmount): self
    {
        $this->params['except_amount'] = $exceptAmount;
        return $this;
    }

    /**
     * 领券是否过风控，默认true为过风控。
     * @return PddDdkOauthCashgiftCreateRequest
     * @var bool 
     * @isMust 非必填
     */
    public function setFetchRiskCheck(bool $fetchRiskCheck): self
    {
        $this->params['fetch_risk_check'] = $fetchRiskCheck;
        return $this;
    }

    /**
     * 收益保护开关开启(rate_decrease_monitor = true)时必填。0-监控项发生降低；1-监控项低于礼金面额，默认为0。
     * @return PddDdkOauthCashgiftCreateRequest
     * @var int 
     * @isMust 非必填
     */
    public function setFreezeCondition(int $freezeCondition): self
    {
        $this->params['freeze_condition'] = $freezeCondition;
        return $this;
    }

    /**
     * 收益保护开关开启(rate_decrease_monitor = true)时必填。0-佣金；1-补贴；2-佣金+补贴，默认为0。
     * @return PddDdkOauthCashgiftCreateRequest
     * @var int 
     * @isMust 非必填
     */
    public function setFreezeWatchType(int $freezeWatchType): self
    {
        $this->params['freeze_watch_type'] = $freezeWatchType;
        return $this;
    }

    /**
     * 是否为灵活面额礼金券，默认false为固定面额礼金券
     * @return PddDdkOauthCashgiftCreateRequest
     * @var bool 
     * @isMust 非必填
     */
    public function setGenerateFlexibleCoupon(bool $generateFlexibleCoupon): self
    {
        $this->params['generate_flexible_coupon'] = $generateFlexibleCoupon;
        return $this;
    }

    /**
     * 是否开启全场景推广，默认false不开启全场景推广，仅支持固定面额且限定商品的礼金活动。
     * @return PddDdkOauthCashgiftCreateRequest
     * @var bool 
     * @isMust 非必填
     */
    public function setGenerateGlobal(bool $generateGlobal): self
    {
        $this->params['generate_global'] = $generateGlobal;
        return $this;
    }

    /**
     * 商品goodsSign列表，例如：["c9r2omogKFFAc7WBwvbZU1ikIb16_J3CTa8HNN"]，最多可支持传20个商品；若传空，则为不限商品礼金，不支持创建不限商品灵活礼金。goodsSign使用说明：https://jinbao.pinduoduo.com/qa-system?questionId=252
     * @return PddDdkOauthCashgiftCreateRequest
     * @var array 
     * @isMust 非必填
     */
    public function setGoodsSignList(array $goodsSignList): self
    {
        $this->params['goods_sign_list'] = $goodsSignList;
        return $this;
    }

    /**
     * 活动单链接可领券数量，默认无限制，最小值为1。
     * @return PddDdkOauthCashgiftCreateRequest
     * @var int 
     * @isMust 非必填
     */
    public function setLinkAcquireLimit(int $linkAcquireLimit): self
    {
        $this->params['link_acquire_limit'] = $linkAcquireLimit;
        return $this;
    }

    /**
     * 礼金名称
     * @return PddDdkOauthCashgiftCreateRequest
     * @var string 
     * @isMust 非必填
     */
    public function setName(string $name): self
    {
        $this->params['name'] = $name;
        return $this;
    }

    /**
     * 可使用推广位列表，例如：["60005_612"]。(列表中的PID方可推广该礼金)
     * @return PddDdkOauthCashgiftCreateRequest
     * @var 
     * @isMust 非必填
     */
    public function setPIdList($pIdList): self
    {
        $this->params['p_id_list'] = $pIdList;
        return $this;
    }

    /**
     * 礼金券数量，创建固定面额礼金券必填（创建灵活面额礼金券时，礼金券数量不固定，礼金总预算用完为止）
     * @return PddDdkOauthCashgiftCreateRequest
     * @var int 
     * @isMust 非必填
     */
    public function setQuantity(int $quantity): self
    {
        $this->params['quantity'] = $quantity;
        return $this;
    }

    /**
     * 收益保护开关，默认false表示关闭，仅支持固定面额且限定商品的礼金活动。开启状态下，系统将根据设置内容进行监控，当监控项满足冻结条件时，系统自动冻结礼金暂停推广，防止资金损失。（可通过多多礼金状态更新接口自行恢复推广）
     * @return PddDdkOauthCashgiftCreateRequest
     * @var bool 
     * @isMust 非必填
     */
    public function setRateDecreaseMonitor(bool $rateDecreaseMonitor): self
    {
        $this->params['rate_decrease_monitor'] = $rateDecreaseMonitor;
        return $this;
    }

    /**
     * 相对时间类型：1-天级；2-小时级；3-分钟级，有效期类型validityTimeType = 1时必填，默认为1。 例如: relative_time_type = 2, duration = 15, 表示领取后15小时内有效。
     * @return PddDdkOauthCashgiftCreateRequest
     * @var int 
     * @isMust 非必填
     */
    public function setRelativeTimeType(int $relativeTimeType): self
    {
        $this->params['relative_time_type'] = $relativeTimeType;
        return $this;
    }

    /**
     * 礼金总预算，单位为分，创建灵活券 (generate_flexible_coupon为true) 时必填。默认情况，总金额 = 礼金券数量 * 礼金券面额
     * @return PddDdkOauthCashgiftCreateRequest
     * @var int 
     * @isMust 非必填
     */
    public function setTotalAmount(int $totalAmount): self
    {
        $this->params['total_amount'] = $totalAmount;
        return $this;
    }

    /**
     * 单用户可领券数量，可设置范围为1~10张，默认为1张。
     * @return PddDdkOauthCashgiftCreateRequest
     * @var int 
     * @isMust 非必填
     */
    public function setUserLimit(int $userLimit): self
    {
        $this->params['user_limit'] = $userLimit;
        return $this;
    }

    /**
     * 券批次使用结束时间, validity_time_type为 2 时必填。note：此时间为时间戳，指格林威治时间 1970 年01 月 01 日 00 时 00 分 00 秒(北京时间 1970 年 01 月 01 日 08 时 00 分 00 秒)起至现在的总秒数
     * @return PddDdkOauthCashgiftCreateRequest
     * @var int 
     * @isMust 非必填
     */
    public function setValidityEndTime(int $validityEndTime): self
    {
        $this->params['validity_end_time'] = $validityEndTime;
        return $this;
    }

    /**
     * 券批次使用开始时间, validity_time_type为 2 时必填。note：此时间为时间戳，指格林威治时间 1970 年01 月 01 日 00 时 00 分 00 秒(北京时间 1970 年 01 月 01 日 08 时 00 分 00 秒)起至现在的总秒数
     * @return PddDdkOauthCashgiftCreateRequest
     * @var int 
     * @isMust 非必填
     */
    public function setValidityStartTime(int $validityStartTime): self
    {
        $this->params['validity_start_time'] = $validityStartTime;
        return $this;
    }

    /**
     * 有效期类型：1-领取后几天内有效；2-固定时间内有效
     * @return PddDdkOauthCashgiftCreateRequest
     * @var int 
     * @isMust 必填
     */
    public function setValidityTimeType(int $validityTimeType): self
    {
        $this->params['validity_time_type'] = $validityTimeType;
        return $this;
    }

}