<?php

namespace Mylarge\UnionSdk\pinduoduo\request;

use Mylarge\UnionSdk\pinduoduo\RequestBase;

/**
 * 运营频道商品查询API
 * @ApiDescr   运营频道商品查询
 * @link       https://open.pinduoduo.com/application/document/api?id=pdd.ddk.oauth.goods.recommend.get
 **/
class PddDdkOauthGoodsRecommendGetRequest extends RequestBase
{

    /**
     * 接口名字
     * @var string
     */
    Protected $apiName = 'pdd.ddk.oauth.goods.recommend.get';

    /**
     * 必填参数列表
     * @var array
     */
    Protected $mustParamList = [];
    
    
    /**
     * 活动商品标记数组，例：[4,7]，4-秒杀，7-百亿补贴，10851-千万补贴，10913-招商礼金商品，31-品牌黑标，10564-精选爆品-官方直推爆款，10584-精选爆品-团长推荐，24-品牌高佣，其他的值请忽略
     * @return PddDdkOauthGoodsRecommendGetRequest
     * @var array 
     * @isMust 非必填
     */
    public function setActivityTags(array $activityTags): self
    {
        $this->params['activity_tags'] = $activityTags;
        return $this;
    }

    /**
     * 猜你喜欢场景的商品类目，20100-百货，20200-母婴，20300-食品，20400-女装，20500-电器，20600-鞋包，20700-内衣，20800-美妆，20900-男装，21000-水果，21100-家纺，21200-文具,21300-运动,21400-虚拟,21500-汽车,21600-家装,21700-家具,21800-医药;
     * @return PddDdkOauthGoodsRecommendGetRequest
     * @var int 
     * @isMust 非必填
     */
    public function setCatId(int $catId): self
    {
        $this->params['cat_id'] = $catId;
        return $this;
    }

    /**
     * 进宝频道推广商品: 1-今日销量榜,3-相似商品推荐,4-猜你喜欢(和进宝网站精选一致),5-实时热销榜,6-实时收益榜。默认值5
     * @return PddDdkOauthGoodsRecommendGetRequest
     * @var int 
     * @isMust 非必填
     */
    public function setChannelType(int $channelType): self
    {
        $this->params['channel_type'] = $channelType;
        return $this;
    }

    /**
     * 自定义参数，为链接打上自定义标签；自定义参数最长限制64个字节；格式为： {"uid":"11111","sid":"22222"} ，其中 uid 为用户唯一标识，可自行加密后传入，每个用户仅且对应一个标识，必填； sid 为上下文信息标识，例如sessionId等，非必填。该json字符串中也可以加入其他自定义的key。
     * @return PddDdkOauthGoodsRecommendGetRequest
     * @var string 
     * @isMust 非必填
     */
    public function setCustomParameters(string $customParameters): self
    {
        $this->params['custom_parameters'] = $customParameters;
        return $this;
    }

    /**
     * 是否使用工具商专属推广计划，默认为false
     * @return PddDdkOauthGoodsRecommendGetRequest
     * @var bool 
     * @isMust 非必填
     */
    public function setForceAuthDuoId(bool $forceAuthDuoId): self
    {
        $this->params['force_auth_duo_id'] = $forceAuthDuoId;
        return $this;
    }

    /**
     * 商品主图类型：1-场景图，2-白底图，默认为0
     * @return PddDdkOauthGoodsRecommendGetRequest
     * @var int 
     * @isMust 非必填
     */
    public function setGoodsImgType(int $goodsImgType): self
    {
        $this->params['goods_img_type'] = $goodsImgType;
        return $this;
    }

    /**
     * 商品goodsSign列表，相似商品推荐场景时必传，仅取数组的第一位，例如：["c9r2omogKFFAc7WBwvbZU1ikIb16_J3CTa8HNN"]。goodsSign是加密后的goodsId, goodsId已下线，请使用goodsSign来替代。使用说明：https://jinbao.pinduoduo.com/qa-system?questionId=252
     * @return PddDdkOauthGoodsRecommendGetRequest
     * @var array 
     * @isMust 非必填
     */
    public function setGoodsSignList(array $goodsSignList): self
    {
        $this->params['goods_sign_list'] = $goodsSignList;
        return $this;
    }

    /**
     * 一页请求数量；默认值 ： 20
     * @return PddDdkOauthGoodsRecommendGetRequest
     * @var int 
     * @isMust 非必填
     */
    public function setLimit(int $limit): self
    {
        $this->params['limit'] = $limit;
        return $this;
    }

    /**
     * 翻页时建议填写前页返回的list_id值
     * @return PddDdkOauthGoodsRecommendGetRequest
     * @var string 
     * @isMust 非必填
     */
    public function setListId(string $listId): self
    {
        $this->params['list_id'] = $listId;
        return $this;
    }

    /**
     * 从多少位置开始请求；默认值 ： 0
     * @return PddDdkOauthGoodsRecommendGetRequest
     * @var int 
     * @isMust 非必填
     */
    public function setOffset(int $offset): self
    {
        $this->params['offset'] = $offset;
        return $this;
    }

    /**
     * 推广位id
     * @return PddDdkOauthGoodsRecommendGetRequest
     * @var string 
     * @isMust 非必填
     */
    public function setPid(string $pid): self
    {
        $this->params['pid'] = $pid;
        return $this;
    }

}