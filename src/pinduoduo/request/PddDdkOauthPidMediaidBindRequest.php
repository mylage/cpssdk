<?php

namespace Mylarge\UnionSdk\pinduoduo\request;

use Mylarge\UnionSdk\pinduoduo\RequestBase;

/**
 * 批量绑定推广位的媒体id
 * @ApiDescr   批量对pid与媒体id进行绑定
 * @link       https://open.pinduoduo.com/application/document/api?id=pdd.ddk.oauth.pid.mediaid.bind
 **/
class PddDdkOauthPidMediaidBindRequest extends RequestBase
{

    /**
     * 接口名字
     * @var string
     */
    Protected $apiName = 'pdd.ddk.oauth.pid.mediaid.bind';

    /**
     * 必填参数列表
     * @var array
     */
    Protected $mustParamList = ['media_id', 'pid_list'];
    
    
    /**
     * 媒体id
     * @return PddDdkOauthPidMediaidBindRequest
     * @var int 
     * @isMust 必填
     */
    public function setMediaId(int $mediaId): self
    {
        $this->params['media_id'] = $mediaId;
        return $this;
    }

    /**
     * 推广位列表，例如：["60005_612"]，最多支持同时传入1000个
     * @return PddDdkOauthPidMediaidBindRequest
     * @var array 
     * @isMust 必填
     */
    public function setPidList(array $pidList): self
    {
        $this->params['pid_list'] = $pidList;
        return $this;
    }

}