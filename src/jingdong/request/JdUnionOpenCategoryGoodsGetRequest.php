<?php

namespace Mylarge\UnionSdk\jingdong\request;

use Mylarge\UnionSdk\jingdong\RequestBase;

/**
 * 商品类目查询接口
 * @ApiDescr   根据商品的父类目id查询子类目id信息，通常用获取各级类目对应关系，以便将推广商品归类。业务参数parentId、grade都输入0可查询所有一级类目ID，之后再用其作为parentId查询其子类目。
 * @createTime 2021-12-20 22:11:25
 * @link       https://union.jd.com/openplatform/api/v2?apiName=jd.union.open.category.goods.get
 **/
class JdUnionOpenCategoryGoodsGetRequest extends RequestBase
{

    /**
     * 接口名字
     * @var string
     */
    Protected $apiName = 'jd.union.open.category.goods.get';
    
    /**
     * 必填参数列表
     * @var array
     */
    Protected $mustParamList = ['req.parentId', 'req.grade'];
    
    
    /**
     * 父类目id(一级父类目为0) 
     * @param int  $parentId
     * @isMust       必填
     * @exampleValue 1342
     * @return JdUnionOpenCategoryGoodsGetRequest
     */
    public function setParentId(int $parentId): self
    {
        $this->params['req']['parentId'] = $parentId;
        return $this;
    }

    /**
     * 类目级别(类目级别 0，1，2 代表一、二、三级类目)
     * @param int  $grade
     * @isMust       必填
     * @exampleValue 2
     * @return JdUnionOpenCategoryGoodsGetRequest
     */
    public function setGrade(int $grade): self
    {
        $this->params['req']['grade'] = $grade;
        return $this;
    }

}