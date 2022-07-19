<?php

namespace Mylarge\UnionSdk\pinduoduo\request;

use Mylarge\UnionSdk\pinduoduo\RequestBase;

/**
 * 多多客已生成推广位信息查询
 * @ApiDescr   查询已经生成的推广位信息
 * @link       https://open.pinduoduo.com/application/document/api?id=pdd.ddk.oauth.goods.pid.query
 **/
class PddDdkOauthGoodsPidQueryRequest extends RequestBase
{

    /**
     * 接口名字
     * @var string
     */
    Protected $apiName = 'pdd.ddk.oauth.goods.pid.query';

    /**
     * 必填参数列表
     * @var array
     */
    Protected $mustParamList = [];
    
    
    /**
     * 返回的页数
     * @return PddDdkOauthGoodsPidQueryRequest
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
     * @return PddDdkOauthGoodsPidQueryRequest
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
     * @return PddDdkOauthGoodsPidQueryRequest
     * @var array 
     * @isMust 非必填
     */
    public function setPidList(array $pidList): self
    {
        $this->params['pid_list'] = $pidList;
        return $this;
    }

}