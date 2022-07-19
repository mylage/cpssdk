<?php

namespace Mylarge\UnionSdk\duomai\request;

use Mylarge\UnionSdk\jingdong\RequestBase;

/**
 * 获取短链接
 *
 * @link      https://open.duomai.com/zh/apis/cpslink/29/59
 **/
class DmCpslinkLinksShortPost extends RequestBase
{

    /**
     * 接口名字
     *
     * @var string
     */
    protected $apiName = 'cps-mesh.cpslink.links.short.post';

    /**
     * 必填参数列表
     *
     * @var array
     */
    protected $mustParamList = ['url'];


    /**
     * 待解析url
     *
     * @param  $url
     * @return DmCpslinkLinksShortPost
     * @isMust       必填
     */
    public function setUrl($url): self
    {
        $this->params['url'] = $url;
        return $this;
    }


    /**
     * 0 多麦默认链接 1 多麦微博防拼搏 2 url.cn短链
     *
     * @param  $type
     * @return DmCpslinkLinksShortPost
     * @isMust       非必填
     */
    public function setType($type): self
    {
        $this->params['type'] = $type;
        return $this;
    }


}