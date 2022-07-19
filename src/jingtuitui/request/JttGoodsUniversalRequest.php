<?php

namespace Mylarge\UnionSdk\jingtuitui\request;

use Mylarge\UnionSdk\jingtuitui\RequestBase;

/**
 * http://japi.jingtuitui.com/api/universal
 * @ApiDescr
 * @createTime 2021-12-22 22:48:52
 * @link       http://www.jingtuitui.com/api_item?id=18
 **/
class JttGoodsUniversalRequest extends RequestBase
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
    Protected $mustParamList = ['unionid','content'];


    /**
     * 联盟ID
     * @param int  $unionid
     * @isMust       必填
     * @exampleValue 1002135924
     * @return JttGoodsUniversalRequest
     */
    public function setUnionid(int $unionid)
    {
        $this->params['unionid'] = $unionid;
        return $this;
    }
    /**
     * 推广位ID （可自定义推广位id，也可自由填写京东联盟账号下已经创建的任一推广位ID，若未填写，则默认生成一个唯一此接口推广位-名称：微信手Q短链接，20位数以内的整数型）
     * @param int  $positionid
     * @isMust       非必填
     * @exampleValue 123456
     * @return JttGoodsUniversalRequest
     */
    public function setPositionid(int $positionid)
    {
        $this->params['positionid'] = $positionid;
        return $this;
    }

    /**
     * 文案(1.优惠券链接需要urlencode；2.一个商品在联盟可能有多个优惠券，可通过填写该参数的方式选择使用的优惠券，请确认正确的优惠券，否则无法正常跳转；3.线报需用英文分号隔开)
     * @param string $content
     * @isMust       必填
     * @exampleValue 1002135924
     * @return JttGoodsUniversalRequest
     */
    public function setContent(string $content){
        $this->params['content'] = $content;
        return $this;
    }

}