<?php

namespace Mylarge\UnionSdk\jingtuitui\request;

use Mylarge\UnionSdk\jingtuitui\RequestBase;

/**
 * http://japi.jingtuitui.com/api/universal
 * @ApiDescr   
 * @createTime 2022-01-09 18:11:10
 * @link       http://www.jingtuitui.com/api_item?id=18
 **/
class JttUniversalRequest extends RequestBase
{

    /**
     * 接口名字
     * @var string
     */
    Protected $apiName = 'universal';
    
    /**
     * api版本
     * @var string
     */
    protected $version = 'v2';
    
    /**
     * 必填参数列表
     * @var array
     */
    Protected $mustParamList = ['unionid', 'content'];
    
    
    /**
     * 联盟ID
     * @param int  $unionid
     * @isMust       必填
     * @exampleValue 1002135924
     * @return JttUniversalRequest
     */
    public function setUnionid(int $unionid)
    {
        $this->params['unionid'] = $unionid;
        return $this;
    }

    /**
     * 推广位ID （可自定义推广位id，自定义推广位ID可以是您的用户id，也可自由填写京东联盟账号下已经创建的任一推广位ID，若未填写，则默认生成一个唯一此接口推广位-名称：微信手Q短链接）
     * @param int  $positionid
     * @isMust       非必填
     * @exampleValue 123456
     * @return JttUniversalRequest
     */
    public function setPositionid(int $positionid)
    {
        $this->params['positionid'] = $positionid;
        return $this;
    }

    /**
     * 文案(1.优惠券链接需要urlencode；2.一个商品在联盟可能有多个优惠券，可通过填写该参数的方式选择使用的优惠券，请确认正确的优惠券，否则无法正常跳转；3.线报需用英文分号隔开)
     * @param string  $content
     * @isMust       必填
     * @exampleValue 国民大品牌，洽洽瓜子来啦?48元12袋‼️洽洽 网红年货瓜子98g/袋 12袋（藤椒+海盐各6袋） 京东价：72元 券后价：48元 领券： http://coupon.m.jd.com/......抢购： http://item.jd.com/63286782841.html
     * @return JttUniversalRequest
     */
    public function setContent(string $content)
    {
        $this->params['content'] = $content;
        return $this;
    }

}