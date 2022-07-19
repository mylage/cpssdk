<?php

namespace Mylarge\UnionSdk\pinduoduo\request;

use Mylarge\UnionSdk\pinduoduo\RequestBase;

/**
 * 多多进宝转链接口
 * @ApiDescr   本功能适用于采集群等场景。将其他推广者的推广链接转换成自己的；通过此api，可以将他人的招商推广链接，转换成自己的招商推广链接。
 * @link       https://open.pinduoduo.com/application/document/api?id=pdd.ddk.oauth.goods.zs.unit.url.gen
 **/
class PddDdkOauthGoodsZsUnitUrlGenRequest extends RequestBase
{

    /**
     * 接口名字
     * @var string
     */
    Protected $apiName = 'pdd.ddk.oauth.goods.zs.unit.url.gen';

    /**
     * 必填参数列表
     * @var array
     */
    Protected $mustParamList = ['pid', 'source_url'];
    
    
    /**
     * 自定义参数，为链接打上自定义标签；自定义参数最长限制64个字节；格式为：  {"uid":"11111","sid":"22222"} ，其中 uid 用户唯一标识，可自行加密后传入，每个用户仅且对应一个标识，必填； sid 上下文信息标识，例如sessionId等，非必填。该json字符串中也可以加入其他自定义的key。（如果使用GET请求，请使用URLEncode处理参数）
     * @return PddDdkOauthGoodsZsUnitUrlGenRequest
     * @var string 
     * @isMust 非必填
     */
    public function setCustomParameters(string $customParameters): self
    {
        $this->params['custom_parameters'] = $customParameters;
        return $this;
    }

    /**
     * 是否返回 schema URL
     * @return PddDdkOauthGoodsZsUnitUrlGenRequest
     * @var bool 
     * @isMust 非必填
     */
    public function setGenerateSchemaUrl(bool $generateSchemaUrl): self
    {
        $this->params['generate_schema_url'] = $generateSchemaUrl;
        return $this;
    }

    /**
     * 渠道id
     * @return PddDdkOauthGoodsZsUnitUrlGenRequest
     * @var string 
     * @isMust 必填
     */
    public function setPid(string $pid): self
    {
        $this->params['pid'] = $pid;
        return $this;
    }

    /**
     * 需转链的链接，支持拼多多商品链接、进宝长链/短链（即为pdd.ddk.goods.promotion.url.generate接口生成的长短链）
     * @return PddDdkOauthGoodsZsUnitUrlGenRequest
     * @var string 
     * @isMust 必填
     */
    public function setSourceUrl(string $sourceUrl): self
    {
        $this->params['source_url'] = $sourceUrl;
        return $this;
    }

}