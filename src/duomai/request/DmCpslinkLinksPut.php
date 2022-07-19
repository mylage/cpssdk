<?php

namespace Mylarge\UnionSdk\duomai\request;

use Mylarge\UnionSdk\jingdong\RequestBase;

/**
 * url链接解析商品与计划
 *
 * @link      https://open.duomai.com/zh/apis/cpslink/29/56
 **/
class DmCpslinkLinksPut extends RequestBase
{

    /**
     * 接口名字
     *
     * @var string
     */
    protected $apiName = 'cps-mesh.cpslink.links.put';

    /**
     * 必填参数列表
     *
     * @var array
     */
    protected $mustParamList = [];


    /**
     * 待解析url
     *
     * @param  $url
     * @return DmCpslinkLinksPut
     * @isMust       必填
     */
    public function setUrl($url): self
    {
        $this->params['url'] = $url;
        return $this;
    }


}