<?php

namespace Mylarge\UnionSdk\pinduoduo\request;

use Mylarge\UnionSdk\pinduoduo\RequestBase;

/**
 * 创建多多进宝推广位
 * @ApiDescr   查询已经生成的推广位信息
 * @link       https://open.pinduoduo.com/application/document/api?id=pdd.ddk.goods.pid.query
 **/
class PddDdkGoodsPidQueryRequest extends RequestBase
{

    /**
     * 接口名字
     * @var string
     */
    Protected $apiName = 'pdd.ddk.goods.pid.query';

    /**
     * 必填参数列表
     * @var array
     */
    Protected $mustParamList = [];


    /**
     * 返回的页数
     * @return PddDdkGoodsPidQueryRequest
     * @var int
     * @isMust 非必填
     */
    public function setPage(int $page): self
    {
        $this->params['page'] = $page;
        return $this;
    }

    /**
     * 返回的每页推广位数量
     * @return PddDdkGoodsPidQueryRequest
     * @var int
     * @isMust 非必填
     */
    public function setPageSize(int $pageSize): self
    {
        $this->params['page_size'] = $pageSize;
        return $this;
    }

    /**
     * 推广位列表，例如：["60005_612"]
     * @return PddDdkGoodsPidQueryRequest
     * @var int
     * @isMust 非必填
     */
    public function setPidList(int $pidList): self
    {
        $this->params['pid_list'] = $pidList;
        return $this;
    }
    /**
     * 推广位状态：0-正常，1-封禁
     * @return PddDdkGoodsPidQueryRequest
     * @var int
     * @isMust 非必填
     */
    public function setStatus(int $status): self
    {
        $this->params['status'] = $status;
        return $this;
    }

}