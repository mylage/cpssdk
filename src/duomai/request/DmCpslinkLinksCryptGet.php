<?php

namespace Mylarge\UnionSdk\duomai\request;

use Mylarge\UnionSdk\jingdong\RequestBase;

/**
 * 解密链接
 *
 * @link      https://open.duomai.com/zh/apis/cpslink/29/60
 **/
class DmCpslinkLinksCryptGet extends RequestBase
{

    /**
     * 接口名字
     *
     * @var string
     */
    protected $apiName = 'cps-mesh.cpslink.links.crypt.get';

    /**
     * 必填参数列表
     *
     * @var array
     */
    protected $mustParamList = ['url'];


    /**
     * 待解密链接
     *
     * @param  $url
     * @return DmCpslinkLinksCryptGet
     * @isMust       必填
     */
    public function setUrl($url): self
    {
        $this->params['url'] = $url;
        return $this;
    }


}