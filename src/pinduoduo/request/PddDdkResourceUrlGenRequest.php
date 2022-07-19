<?php

namespace Mylarge\UnionSdk\pinduoduo\request;

use Mylarge\UnionSdk\pinduoduo\RequestBase;

/**
 * 生成多多进宝频道推广
 * @ApiDescr   生成拼多多主站频道推广
 * @link       https://open.pinduoduo.com/application/document/api?id=pdd.ddk.resource.url.gen
 **/
class PddDdkResourceUrlGenRequest extends RequestBase
{

    /**
     * 接口名字
     * @var string
     */
    Protected $apiName = 'pdd.ddk.resource.url.gen';

    /**
     * 必填参数列表
     * @var array
     */
    Protected $mustParamList = ['pid'];
    
    
    /**
     * 自定义参数，为链接打上自定义标签；自定义参数最长限制64个字节；格式为： {"uid":"11111","sid":"22222"} ，其中 uid 用户唯一标识，可自行加密后传入，每个用户仅且对应一个标识，必填； sid 上下文信息标识，例如sessionId等，非必填。该json字符串中也可以加入其他自定义的key
     * @return PddDdkResourceUrlGenRequest
     * @var string 
     * @isMust 非必填
     */
    public function setCustomParameters(string $customParameters): self
    {
        $this->params['custom_parameters'] = $customParameters;
        return $this;
    }

    /**
     * 是否生成拼多多福利券微信小程序推广信息
     * @return PddDdkResourceUrlGenRequest
     * @var bool 
     * @isMust 非必填
     */
    public function setGenerateWeApp(bool $generateWeApp): self
    {
        $this->params['generate_we_app'] = $generateWeApp;
        return $this;
    }

    /**
     * 推广位
     * @return PddDdkResourceUrlGenRequest
     * @var string 
     * @isMust 必填
     */
    public function setPid(string $pid): self
    {
        $this->params['pid'] = $pid;
        return $this;
    }

    /**
     * 频道来源：4-限时秒杀,39997-充值中心, 39998-活动转链，39996-百亿补贴，39999-电器城，40000-领券中心，50005-火车票
     * @return PddDdkResourceUrlGenRequest
     * @var int 
     * @isMust 非必填
     */
    public function setResourceType(int $resourceType): self
    {
        $this->params['resource_type'] = $resourceType;
        return $this;
    }

    /**
     * 原链接
     * @return PddDdkResourceUrlGenRequest
     * @var string 
     * @isMust 非必填
     */
    public function setUrl(string $url): self
    {
        $this->params['url'] = $url;
        return $this;
    }

}