<?php

namespace Mylarge\UnionSdk\jingdong\request;

use Mylarge\UnionSdk\jingdong\RequestBase;

/**
 * 活动查询接口
 * @ApiDescr   提供联盟官方活动查询，支持分别查询联盟PC端、京粉APP、大促营销日历的活动，可查询活动链接、图片、规则等素材。建议按日期依次查询当天及未来的活动。
 * @createTime 2021-12-20 22:10:58
 * @link       https://union.jd.com/openplatform/api/v2?apiName=jd.union.open.activity.query
 **/
class JdUnionOpenActivityQueryRequest extends RequestBase
{

    /**
     * 接口名字
     * @var string
     */
    Protected $apiName = 'jd.union.open.activity.query';
    
    /**
     * 必填参数列表
     * @var array
     */
    Protected $mustParamList = [];
    
    
    /**
     * 页码，默认1
     * @param int  $pageIndex
     * @isMust       非必填
     * @exampleValue 1
     * @return JdUnionOpenActivityQueryRequest
     */
    public function setPageIndex(int $pageIndex): self
    {
        $this->params['activityReq']['pageIndex'] = $pageIndex;
        return $this;
    }

    /**
     * 每页数量，默认20，上限50
     * @param int  $pageSize
     * @isMust       非必填
     * @exampleValue 20
     * @return JdUnionOpenActivityQueryRequest
     */
    public function setPageSize(int $pageSize): self
    {
        $this->params['activityReq']['pageSize'] = $pageSize;
        return $this;
    }

    /**
     * 活动物料ID，1：营销日历热门会场；2：营销日历热门榜单；6：PC站长端官方活动
     * @param int  $poolId
     * @isMust       非必填
     * @exampleValue 1
     * @return JdUnionOpenActivityQueryRequest
     */
    public function setPoolId(int $poolId): self
    {
        $this->params['activityReq']['poolId'] = $poolId;
        return $this;
    }

    /**
     * 按单个日期查询活动，查询日期范围为过去或未来15天。建议按日期依次查询当天及未来的活动
     * @param string  $activeDate
     * @isMust       非必填
     * @exampleValue 20200918
     * @return JdUnionOpenActivityQueryRequest
     */
    public function setActiveDate(string $activeDate): self
    {
        $this->params['activityReq']['activeDate'] = $activeDate;
        return $this;
    }

}