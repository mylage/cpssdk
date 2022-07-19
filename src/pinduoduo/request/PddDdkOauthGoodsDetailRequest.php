<?php

namespace Mylarge\UnionSdk\pinduoduo\request;

use Mylarge\UnionSdk\pinduoduo\RequestBase;

/**
 * 多多进宝商品详情查询
 * @ApiDescr   查询多多进宝商品详情
 * @link       https://open.pinduoduo.com/application/document/api?id=pdd.ddk.oauth.goods.detail
 **/
class PddDdkOauthGoodsDetailRequest extends RequestBase
{

    /**
     * 接口名字
     * @var string
     */
    Protected $apiName = 'pdd.ddk.oauth.goods.detail';

    /**
     * 必填参数列表
     * @var array
     */
    Protected $mustParamList = [];
    
    
    /**
     * 自定义参数，为链接打上自定义标签；自定义参数最长限制64个字节；格式为：  {"uid":"11111","sid":"22222"} ，其中 uid 用户唯一标识，可自行加密后传入，每个用户仅且对应一个标识，必填； sid 上下文信息标识，例如sessionId等，非必填。该json字符串中也可以加入其他自定义的key。（如果使用GET请求，请使用URLEncode处理参数）
     * @return PddDdkOauthGoodsDetailRequest
     * @var string 
     * @isMust 非必填
     */
    public function setCustomParameters(string $customParameters): self
    {
        $this->params['custom_parameters'] = $customParameters;
        return $this;
    }

    /**
     * 商品主图类型：1-场景图，2-白底图，默认为0
     * @return PddDdkOauthGoodsDetailRequest
     * @var int 
     * @isMust 非必填
     */
    public function setGoodsImgType(int $goodsImgType): self
    {
        $this->params['goods_img_type'] = $goodsImgType;
        return $this;
    }

    /**
     * 商品goodsSign，支持通过goodsSign查询商品。goodsSign是加密后的goodsId, goodsId已下线，请使用goodsSign来替代。使用说明：https://jinbao.pinduoduo.com/qa-system?questionId=252
     * @return PddDdkOauthGoodsDetailRequest
     * @var string 
     * @isMust 非必填
     */
    public function setGoodsSign(string $goodsSign): self
    {
        $this->params['goods_sign'] = $goodsSign;
        return $this;
    }

    /**
     * 是否获取sku信息，默认false不返回。（特殊渠道权限，需额外申请）
     * @return PddDdkOauthGoodsDetailRequest
     * @var bool 
     * @isMust 非必填
     */
    public function setNeedSkuInfo(bool $needSkuInfo): self
    {
        $this->params['need_sku_info'] = $needSkuInfo;
        return $this;
    }

    /**
     * 推广位id
     * @return PddDdkOauthGoodsDetailRequest
     * @var string 
     * @isMust 非必填
     */
    public function setPid(string $pid): self
    {
        $this->params['pid'] = $pid;
        return $this;
    }

    /**
     * 搜索id，建议填写，提高收益。来自pdd.ddk.goods.recommend.get、pdd.ddk.goods.search、pdd.ddk.top.goods.list.query等接口
     * @return PddDdkOauthGoodsDetailRequest
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
     * @return PddDdkOauthGoodsDetailRequest
     * @var int 
     * @isMust 非必填
     */
    public function setZsDuoId(int $zsDuoId): self
    {
        $this->params['zs_duo_id'] = $zsDuoId;
        return $this;
    }

}