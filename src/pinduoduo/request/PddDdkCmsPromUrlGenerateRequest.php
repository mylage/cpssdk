<?php

namespace Mylarge\UnionSdk\pinduoduo\request;

use Mylarge\UnionSdk\pinduoduo\RequestBase;

/**
 * 生成商城-频道推广链接
 * @ApiDescr   生成商城推广链接接口
 * @link       https://open.pinduoduo.com/application/document/api?id=pdd.ddk.cms.prom.url.generate
 **/
class PddDdkCmsPromUrlGenerateRequest extends RequestBase
{

    /**
     * 接口名字
     * @var string
     */
    Protected $apiName = 'pdd.ddk.cms.prom.url.generate';

    /**
     * 必填参数列表
     * @var array
     */
    Protected $mustParamList = ['p_id_list'];
    
    
    /**
     * 0, "1.9包邮"；1, "今日爆款"； 2, "品牌清仓"； 4,"PC端专属商城"；不传值为默认商城
     * @return PddDdkCmsPromUrlGenerateRequest
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
     * @return PddDdkCmsPromUrlGenerateRequest
     * @var string 
     * @isMust 非必填
     */
    public function setCustomParameters(string $customParameters): self
    {
        $this->params['custom_parameters'] = $customParameters;
        return $this;
    }

    /**
     * 是否生成手机跳转链接。true-是，false-否，默认false
     * @return PddDdkCmsPromUrlGenerateRequest
     * @var bool 
     * @isMust 非必填
     */
    public function setGenerateMobile(bool $generateMobile): self
    {
        $this->params['generate_mobile'] = $generateMobile;
        return $this;
    }

    /**
     * 是否返回 schema URL
     * @return PddDdkCmsPromUrlGenerateRequest
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
     * @return PddDdkCmsPromUrlGenerateRequest
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
     * @return PddDdkCmsPromUrlGenerateRequest
     * @var bool 
     * @isMust 非必填
     */
    public function setGenerateWeApp(bool $generateWeApp): self
    {
        $this->params['generate_we_app'] = $generateWeApp;
        return $this;
    }

    /**
     * 搜索关键词
     * @return PddDdkCmsPromUrlGenerateRequest
     * @var string 
     * @isMust 非必填
     */
    public function setKeyword(string $keyword): self
    {
        $this->params['keyword'] = $keyword;
        return $this;
    }

    /**
     * 单人团多人团标志。true-多人团，false-单人团 默认false
     * @return PddDdkCmsPromUrlGenerateRequest
     * @var bool 
     * @isMust 非必填
     */
    public function setMultiGroup(bool $multiGroup): self
    {
        $this->params['multi_group'] = $multiGroup;
        return $this;
    }

    /**
     * 推广位列表，例如：["60005_612"]
     * @return PddDdkCmsPromUrlGenerateRequest
     * @var array 
     * @isMust 必填
     */
    public function setPIdList(array $pIdList): self
    {
        $this->params['p_id_list'] = $pIdList;
        return $this;
    }

}