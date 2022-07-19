<?php

namespace Mylarge\UnionSdk\pinduoduo\request;

use Mylarge\UnionSdk\pinduoduo\RequestBase;

/**
 * 多多进宝推广位创建接口
 * @ApiDescr   创建多多进宝推广位
 * @link       https://open.pinduoduo.com/application/document/api?id=pdd.ddk.oauth.goods.pid.generate
 **/
class PddDdkOauthGoodsPidGenerateRequest extends RequestBase
{

    /**
     * 接口名字
     * @var string
     */
    Protected $apiName = 'pdd.ddk.oauth.goods.pid.generate';

    /**
     * 必填参数列表
     * @var array
     */
    Protected $mustParamList = ['number'];
    
    
    /**
     * 媒体id
     * @return PddDdkOauthGoodsPidGenerateRequest
     * @var int 
     * @isMust 非必填
     */
    public function setMediaId(int $mediaId): self
    {
        $this->params['media_id'] = $mediaId;
        return $this;
    }

    /**
     * 要生成的推广位数量，默认为10，范围为：1~100
     * @return PddDdkOauthGoodsPidGenerateRequest
     * @var int 
     * @isMust 必填
     */
    public function setNumber(int $number): self
    {
        $this->params['number'] = $number;
        return $this;
    }

    /**
     * 推广位名称，例如["1","2"]
     * @return PddDdkOauthGoodsPidGenerateRequest
     * @var array 
     * @isMust 非必填
     */
    public function setPIdNameList(array $pIdNameList): self
    {
        $this->params['p_id_name_list'] = $pIdNameList;
        return $this;
    }

}