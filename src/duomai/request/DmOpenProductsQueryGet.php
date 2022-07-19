<?php

namespace Mylarge\UnionSdk\duomai\request;

use Mylarge\UnionSdk\jingdong\RequestBase;

/**
 * 多麦爆品查询
 *
 * @link      https://open.duomai.com/zh/apis/openapi/146/309
 **/
class DmOpenProductsQueryGet extends RequestBase
{

    /**
     * 接口名字
     *
     * @var string
     */
    protected $apiName = 'cps-mesh.open.products.query.get';

    /**
     * 必填参数列表
     *
     * @var array
     */
    protected $mustParamList = ['channel_id'];


    /**
     * 爆品频道，咨询客服获取
     *
     * @param  $channelId
     * @return DmOpenProductsQueryGet
     * @isMust       必填
     */
    public function setChannelId($channelId): self
    {
        $this->params['channel_id'] = $channelId;
        return $this;
    }

    /**
     * 页码 默认1
     *
     * @param int $page
     * @isMust       选填
     * @exampleValue 1
     * @return DmOpenProductsQueryGet
     */
    public function setPage(int $page): self
    {
        $this->params['page'] = $page;
        return $this;
    }

    /**
     * 分页大小 默认20 最大200
     *
     * @param int $pageSize
     * @isMust       选填
     * @exampleValue 20
     * @return DmOpenProductsQueryGet
     */
    public function setPageSize(int $pageSize): self
    {
        $this->params['page_size'] = $pageSize;
        return $this;
    }


}