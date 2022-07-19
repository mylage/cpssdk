<?php

namespace Mylarge\UnionSdk\pinduoduo\request;

use Mylarge\UnionSdk\pinduoduo\RequestBase;

/**
 * 查询是否绑定备案
 * @ApiDescr   通过pid和自定义参数来查询是否已经绑定备案
 * @link       https://open.pinduoduo.com/application/document/api?id=pdd.ddk.oauth.member.authority.query
 **/
class PddDdkOauthMemberAuthorityQueryRequest extends RequestBase
{

    /**
     * 接口名字
     * @var string
     */
    Protected $apiName = 'pdd.ddk.oauth.member.authority.query';

    /**
     * 必填参数列表
     * @var array
     */
    Protected $mustParamList = [];
    
    
    /**
     * 推广位id
     * @return PddDdkOauthMemberAuthorityQueryRequest
     * @var string 
     * @isMust 非必填
     */
    public function setPid(string $pid): self
    {
        $this->params['pid'] = $pid;
        return $this;
    }

    /**
     * 自定义参数，为链接打上自定义标签；自定义参数最长限制64个字节；格式为： {"uid":"11111","sid":"22222"} ，其中 uid 用户唯一标识，可自行加密后传入，每个用户仅且对应一个标识，必填； sid 上下文信息标识，例如sessionId等，非必填。该json字符串中也可以加入其他自定义的key
     * @return PddDdkOauthMemberAuthorityQueryRequest
     * @var string 
     * @isMust 非必填
     */
    public function setCustomParameters(string $customParameters): self
    {
        $this->params['custom_parameters'] = $customParameters;
        return $this;
    }

}