<?php

namespace Mylarge\UnionSdk\jingtuitui\request;

use Mylarge\UnionSdk\jingtuitui\RequestBase;

/**
 * http://japi.jingtuitui.com/api/jd_goods_query
 * @ApiDescr   
 * @createTime 2021-12-22 22:51:55
 * @link       http://www.jingtuitui.com/api_item?id=3
 **/
class JttJdGoodsQueryRequest extends RequestBase
{

    /**
     * 接口名字
     * @var string
     */
    Protected $apiName = 'jd_goods_query';
    
    /**
     * api版本
     * @var string
     */
    protected $version = 'v3';
    
    /**
     * 必填参数列表
     * @var array
     */
    Protected $mustParamList = [];
    
    
    /**
     * 一级类目id
     * @param int  $cid1
     * @isMust       非必填
     * @exampleValue 9855
     * @return JttJdGoodsQueryRequest
     */
    public function setCid1(int $cid1)
    {
        $this->params['cid1'] = $cid1;
        return $this;
    }

    /**
     * 二级类目id
     * @param int  $cid2
     * @isMust       非必填
     * @exampleValue 9858
     * @return JttJdGoodsQueryRequest
     */
    public function setCid2(int $cid2)
    {
        $this->params['cid2'] = $cid2;
        return $this;
    }

    /**
     * 三级类目id
     * @param int  $cid3
     * @isMust       非必填
     * @exampleValue 9924
     * @return JttJdGoodsQueryRequest
     */
    public function setCid3(int $cid3)
    {
        $this->params['cid3'] = $cid3;
        return $this;
    }

    /**
     * 页码
     * @param  $pageIndex
     * @isMust       非必填
     * @exampleValue 1
     * @return JttJdGoodsQueryRequest
     */
    public function setPageIndex($pageIndex)
    {
        $this->params['pageIndex'] = $pageIndex;
        return $this;
    }

    /**
     * 每页数量（单页数最大30，默认20）
     * @param  $pageSize
     * @isMust       非必填
     * @exampleValue 20
     * @return JttJdGoodsQueryRequest
     */
    public function setPageSize($pageSize)
    {
        $this->params['pageSize'] = $pageSize;
        return $this;
    }

    /**
     * 商品sku搜索，最高可输入100个，多sku搜索时请用英文逗号分割 （注：1、v1.0版本支持传商品链接；2、如果输入的sku串中某个skuID的商品不在推广中[就是没有佣金]，返回结果会自动过滤该商品）
     * @param string  $skuIds
     * @isMust       非必填
     * @exampleValue 56691428763,10191670419
     * @return JttJdGoodsQueryRequest
     */
    public function setSkuIds(string $skuIds)
    {
        $this->params['skuIds'] = $skuIds;
        return $this;
    }

    /**
     * 关键词搜索（可以输入关键词、SKU、商品链接、店铺名称）
     * @param string  $keyword
     * @isMust       非必填
     * @exampleValue 纸巾
     * @return JttJdGoodsQueryRequest
     */
    public function setKeyword(string $keyword)
    {
        $this->params['keyword'] = $keyword;
        return $this;
    }

    /**
     * 商品价格下限
     * @param  $pricefrom
     * @isMust       非必填
     * @exampleValue 1.9
     * @return JttJdGoodsQueryRequest
     */
    public function setPricefrom($pricefrom)
    {
        $this->params['pricefrom'] = $pricefrom;
        return $this;
    }

    /**
     * 商品价格上限
     * @param  $priceto
     * @isMust       非必填
     * @exampleValue 9.9
     * @return JttJdGoodsQueryRequest
     */
    public function setPriceto($priceto)
    {
        $this->params['priceto'] = $priceto;
        return $this;
    }

    /**
     * 佣金比例区间开始时间戳（java精确到毫秒，其他语言都可以精确到秒）
     * @param string  $commissionShareStart
     * @isMust       非必填
     * @exampleValue 10
     * @return JttJdGoodsQueryRequest
     */
    public function setCommissionShareStart(string $commissionShareStart)
    {
        $this->params['commissionShareStart'] = $commissionShareStart;
        return $this;
    }

    /**
     * 佣金比例区间结束时间戳（java精确到毫秒，其他语言都可以精确到秒）
     * @param string  $commissionShareEnd
     * @isMust       非必填
     * @exampleValue 20
     * @return JttJdGoodsQueryRequest
     */
    public function setCommissionShareEnd(string $commissionShareEnd)
    {
        $this->params['commissionShareEnd'] = $commissionShareEnd;
        return $this;
    }

    /**
     * 商品类型 ：（g:自营；p:POP）
     * @param string  $owner
     * @isMust       非必填
     * @exampleValue g
     * @return JttJdGoodsQueryRequest
     */
    public function setOwner(string $owner)
    {
        $this->params['owner'] = $owner;
        return $this;
    }

    /**
     * 排序字段 price单价； commissionShare佣金比例； commission佣金；inOrderCount30Days 30天引单量；inOrderComm30Days 30天支出佣金
     * @param string  $sortName
     * @isMust       非必填
     * @exampleValue price
     * @return JttJdGoodsQueryRequest
     */
    public function setSortName(string $sortName)
    {
        $this->params['sortName'] = $sortName;
        return $this;
    }

    /**
     * asc=升降序；desc=默认降序
     * @param string  $sort
     * @isMust       非必填
     * @exampleValue desc
     * @return JttJdGoodsQueryRequest
     */
    public function setSort(string $sort)
    {
        $this->params['sort'] = $sort;
        return $this;
    }

    /**
     * 是否是优惠券商品 1=有优惠券
     * @param  $isCoupon
     * @isMust       非必填
     * @exampleValue 1
     * @return JttJdGoodsQueryRequest
     */
    public function setIsCoupon($isCoupon)
    {
        $this->params['isCoupon'] = $isCoupon;
        return $this;
    }

    /**
     * 是否是拼购商品 1=拼购商品；0=非拼购商品
     * @param  $isPG
     * @isMust       非必填
     * @exampleValue 1
     * @return JttJdGoodsQueryRequest
     */
    public function setIsPG($isPG)
    {
        $this->params['isPG'] = $isPG;
        return $this;
    }

    /**
     * 拼购价格区间开始（java精确到毫秒，其他语言都可以精确到秒）
     * @param  $pingouPriceStart
     * @isMust       非必填
     * @exampleValue 1611226317495
     * @return JttJdGoodsQueryRequest
     */
    public function setPingouPriceStart($pingouPriceStart)
    {
        $this->params['pingouPriceStart'] = $pingouPriceStart;
        return $this;
    }

    /**
     * 拼购价格区间结束（java精确到毫秒，其他语言都可以精确到秒）
     * @param  $pingouPriceEnd
     * @isMust       非必填
     * @exampleValue 1611226339495
     * @return JttJdGoodsQueryRequest
     */
    public function setPingouPriceEnd($pingouPriceEnd)
    {
        $this->params['pingouPriceEnd'] = $pingouPriceEnd;
        return $this;
    }

    /**
     * 京东品牌code筛选
     * @param string  $brandCode
     * @isMust       非必填
     * @exampleValue 569951
     * @return JttJdGoodsQueryRequest
     */
    public function setBrandCode(string $brandCode)
    {
        $this->params['brandCode'] = $brandCode;
        return $this;
    }

    /**
     * 店铺id筛选
     * @param string  $shopId
     * @isMust       非必填
     * @exampleValue 1000016561
     * @return JttJdGoodsQueryRequest
     */
    public function setShopId(string $shopId)
    {
        $this->params['shop_id'] = $shopId;
        return $this;
    }

    /**
     * 1:查询内容商品；其他值过滤掉此入参条件
     * @param  $hasContent
     * @isMust       非必填
     * @exampleValue 1
     * @return JttJdGoodsQueryRequest
     */
    public function setHasContent($hasContent)
    {
        $this->params['hasContent'] = $hasContent;
        return $this;
    }

    /**
     * 1:查询有最优惠券商品；其他值过滤掉此入参条件
     * @param  $hasBestCoupon
     * @isMust       非必填
     * @exampleValue 1
     * @return JttJdGoodsQueryRequest
     */
    public function setHasBestCoupon($hasBestCoupon)
    {
        $this->params['hasBestCoupon'] = $hasBestCoupon;
        return $this;
    }

    /**
     * 联盟id_应用iD_推广位id
     * @param string  $pid
     * @isMust       非必填
     * @exampleValue 1002135924_0_3000722708
     * @return JttJdGoodsQueryRequest
     */
    public function setPid(string $pid)
    {
        $this->params['pid'] = $pid;
        return $this;
    }

    /**
     * 支持出参数据筛选，多个参数以英文逗号分割，目前可用： videoInfo视频信息；hotWords热词；similar相似推荐商品；documentInfo段子信息
     * @param string  $fields
     * @isMust       非必填
     * @exampleValue videoInfo
     * @return JttJdGoodsQueryRequest
     */
    public function setFields(string $fields)
    {
        $this->params['fields'] = $fields;
        return $this;
    }

    /**
     * 微信京东购物小程序禁售商品过滤规则，入参：forbidTypes=true（ios同样适用，建议做客户端识别）
     * @param string  $forbidTypes
     * @isMust       非必填
     * @exampleValue true
     * @return JttJdGoodsQueryRequest
     */
    public function setForbidTypes(string $forbidTypes)
    {
        $this->params['forbidTypes'] = $forbidTypes;
        return $this;
    }

    /**
     * 京喜商品类型 1京喜；2京喜工厂直供；3京喜优选（包含3时可在京东APP购买），入参多个值表示或条件查询
     * @param  $jxFlags
     * @isMust       非必填
     * @exampleValue 1
     * @return JttJdGoodsQueryRequest
     */
    public function setJxFlags($jxFlags)
    {
        $this->params['jxFlags'] = $jxFlags;
        return $this;
    }

    /**
     * 店铺评分 支持传入0.0、2.5、3.0、3.5、4.0、4.5、4.9，默认为空表示不筛选评分
     * @param  $shopLevelFrom
     * @isMust       非必填
     * @exampleValue 0.0
     * @return JttJdGoodsQueryRequest
     */
    public function setShopLevelFrom($shopLevelFrom)
    {
        $this->params['shopLevelFrom'] = $shopLevelFrom;
        return $this;
    }

    /**
     * 京东配送  1:是；0:不是
     * @param  $deliveryType
     * @isMust       非必填
     * @exampleValue 1
     * @return JttJdGoodsQueryRequest
     */
    public function setDeliveryType($deliveryType)
    {
        $this->params['deliveryType'] = $deliveryType;
        return $this;
    }

    /**
     * 图书编号
     * @param int  $isbn
     * @isMust       非必填
     * @exampleValue 
     * @return JttJdGoodsQueryRequest
     */
    public function setIsbn(int $isbn)
    {
        $this->params['isbn'] = $isbn;
        return $this;
    }

    /**
     * 主商品spuId
     * @param int  $spuId
     * @isMust       非必填
     * @exampleValue 100005471838
     * @return JttJdGoodsQueryRequest
     */
    public function setSpuId(int $spuId)
    {
        $this->params['spuId'] = $spuId;
        return $this;
    }

    /**
     * 优惠券链接
     * @param string  $couponUrl
     * @isMust       非必填
     * @exampleValue https://coupon.m.jd.com/coupons/show.action?linkKey=AAROH_xIpeffAs......
     * @return JttJdGoodsQueryRequest
     */
    public function setCouponUrl(string $couponUrl)
    {
        $this->params['couponUrl'] = $couponUrl;
        return $this;
    }

    /**
     * 资源位17：极速版商品
     * @param  $eliteType
     * @isMust       非必填
     * @exampleValue 17
     * @return JttJdGoodsQueryRequest
     */
    public function setEliteType($eliteType)
    {
        $this->params['eliteType'] = $eliteType;
        return $this;
    }

}