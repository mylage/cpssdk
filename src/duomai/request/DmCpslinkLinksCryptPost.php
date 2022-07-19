<?php

namespace Mylarge\UnionSdk\duomai\request;

use Mylarge\UnionSdk\jingdong\RequestBase;

/**
 * 加密链接
 *
 * @link      https://open.duomai.com/zh/apis/cpslink/29/56
 **/
class DmCpslinkLinksCryptPost extends RequestBase
{

    /**
     * 接口名字
     *
     * @var string
     */
    protected $apiName = 'cps-mesh.cpslink.links.crypt.post';

    /**
     * 必填参数列表
     *
     * @var array
     */
    protected $mustParamList = ['url'];


    /**
     * 长链接
     *
     * @param  $url
     * @return DmCpslinkLinksCryptPost
     * @isMust       必填
     */
    public function setUrl($url): self
    {
        $this->params['url'] = $url;
        return $this;
    }


}