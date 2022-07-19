<?php

namespace Mylarge\UnionSdk\pinduoduo\request;

use Mylarge\UnionSdk\pinduoduo\RequestBase;

/**
 * 多多礼金状态更新
 * @ApiDescr   多多客授权工具商暂停或恢复多多礼金推广
 * @link       https://open.pinduoduo.com/application/document/api?id=pdd.ddk.oauth.cashgift.status.update
 **/
class PddDdkOauthCashgiftStatusUpdateRequest extends RequestBase
{

    /**
     * 接口名字
     * @var string
     */
    Protected $apiName = 'pdd.ddk.oauth.cashgift.status.update';

    /**
     * 必填参数列表
     * @var array
     */
    Protected $mustParamList = ['cash_gift_id', 'update_type'];
    
    
    /**
     * 多多礼金ID
     * @return PddDdkOauthCashgiftStatusUpdateRequest
     * @var int 
     * @isMust 必填
     */
    public function setCashGiftId(int $cashGiftId): self
    {
        $this->params['cash_gift_id'] = $cashGiftId;
        return $this;
    }

    /**
     * 礼金更新类型：0-停止礼金推广，1-恢复礼金推广
     * @return PddDdkOauthCashgiftStatusUpdateRequest
     * @var int 
     * @isMust 必填
     */
    public function setUpdateType(int $updateType): self
    {
        $this->params['update_type'] = $updateType;
        return $this;
    }

}