<?php

namespace Mylarge\UnionSdk\jingtuitui\request;

use Mylarge\UnionSdk\jingtuitui\RequestBase;

/**
 * http://japi.jingtuitui.com/api/new_positionid
 * @ApiDescr   
 * @createTime 2022-01-06 22:15:26
 * @link       http://www.jingtuitui.com/api_item?id=20
 **/
class JttNewPositionidRequest extends RequestBase
{

    /**
     * 接口名字
     * @var string
     */
    Protected $apiName = 'new_positionid';
    
    /**
     * api版本
     * @var string
     */
    protected $version = 'v1';
    
    /**
     * 必填参数列表
     * @var array
     */
    Protected $mustParamList = ['unionid', 'key', 'unionType', 'type', 'name'];
    
    
    /**
     * 联盟ID
     * @param int  $unionid
     * @isMust       必填
     * @exampleValue 1002135924
     * @return JttNewPositionidRequest
     */
    public function setUnionid(int $unionid)
    {
        $this->params['unionid'] = $unionid;
        return $this;
    }

    /**
     * 京东联盟key。请在京东联盟->我的工具->我的API->领取授权KEY中获取key（联盟key有效日期为365天）
     * @param string  $key
     * @isMust       必填
     * @exampleValue b57733a7028b090149977ea5e218c80314587eaf4afddc03572ed255e56f55a143bdaf04635af30e
     * @return JttNewPositionidRequest
     */
    public function setKey(string $key)
    {
        $this->params['key'] = $key;
        return $this;
    }

    /**
     * 1cps推广位；2cpc推广位；3私域推广位，上限5000个，不在联盟后台展示，无对应 PID；4联盟后台推广位，上限500个，会在推客联盟后台展示，自动生成对应PID，可用于内容平台推广
     * @param  $unionType
     * @isMust       必填
     * @exampleValue 1
     * @return JttNewPositionidRequest
     */
    public function setUnionType($unionType)
    {
        $this->params['unionType'] = $unionType;
        return $this;
    }

    /**
     * 站点类型 1网站推广位；2APP推广位；3社交媒体推广位；4聊天工具推广位；5二维码推广
     * @param  $type
     * @isMust       必填
     * @exampleValue 1
     * @return JttNewPositionidRequest
     */
    public function setType($type)
    {
        $this->params['type'] = $type;
        return $this;
    }

    /**
     * 推广位名称集合，请用英文逗号进行分割，上限50个（开放平台创建的推广位在联盟官网不展示，最多可以创建5000个推广位）
     * @param string  $name
     * @isMust       必填
     * @exampleValue 测试1
     * @return JttNewPositionidRequest
     */
    public function setName(string $name)
    {
        $this->params['name'] = $name;
        return $this;
    }

    /**
     * 站点ID：网站的ID/app ID/snsID ，当type非4(聊天工具)时，siteId必填
     * @param int  $siteId
     * @isMust       非必填
     * @exampleValue 
     * @return JttNewPositionidRequest
     */
    public function setSiteId(int $siteId)
    {
        $this->params['siteId'] = $siteId;
        return $this;
    }

}