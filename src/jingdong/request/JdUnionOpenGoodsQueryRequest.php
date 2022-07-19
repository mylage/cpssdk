<?php

namespace Mylarge\UnionSdk\jingdong\request;

use Mylarge\UnionSdk\jingdong\RequestBase;

/**
 * 关键词商品查询接口【申请】
 * @ApiDescr   查询商品及优惠券信息，返回的结果可调用转链接口生成单品或二合一推广链接。支持按SKUID、关键词、优惠券基本属性、是否拼购、是否爆款等条件查询，建议不要同时传入SKUID和其他字段，以获得较多的结果。支持按价格、佣金比例、佣金、引单量等维度排序。用优惠券链接调用转链接口时，需传入搜索接口link字段返回的原始优惠券链接，切勿对链接进行任何encode、decode操作，否则将导致转链二合一推广链接时校验失败。
 * @createTime 2022-07-19 10:25:55
 * @link       https://union.jd.com/openplatform/api/v2?apiName=jd.union.open.goods.query
 **/
class JdUnionOpenGoodsQueryRequest extends RequestBase
{

    /**
     * 接口名字
     * @var string
     */
    Protected $apiName = 'jd.union.open.goods.query';
    
    /**
     * 必填参数列表
     * @var array
     */
    Protected $mustParamList = [];
    
    
    /**
     * 一级类目id
     * @param int  $cid1
     * @isMust       非必填
     * @exampleValue 737
     * @return JdUnionOpenGoodsQueryRequest
     */
    public function setCid1(int $cid1): self
    {
        $this->params['goodsReqDTO']['cid1'] = $cid1;
        return $this;
    }

    /**
     * 二级类目id
     * @param int  $cid2
     * @isMust       非必填
     * @exampleValue 738
     * @return JdUnionOpenGoodsQueryRequest
     */
    public function setCid2(int $cid2): self
    {
        $this->params['goodsReqDTO']['cid2'] = $cid2;
        return $this;
    }

    /**
     * 三级类目id
     * @param int  $cid3
     * @isMust       非必填
     * @exampleValue 739
     * @return JdUnionOpenGoodsQueryRequest
     */
    public function setCid3(int $cid3): self
    {
        $this->params['goodsReqDTO']['cid3'] = $cid3;
        return $this;
    }

    /**
     * 页码
     * @param int  $pageIndex
     * @isMust       非必填
     * @exampleValue 1
     * @return JdUnionOpenGoodsQueryRequest
     */
    public function setPageIndex(int $pageIndex): self
    {
        $this->params['goodsReqDTO']['pageIndex'] = $pageIndex;
        return $this;
    }

    /**
     * 每页数量，单页数最大30，默认20 
     * @param int  $pageSize
     * @isMust       非必填
     * @exampleValue 20
     * @return JdUnionOpenGoodsQueryRequest
     */
    public function setPageSize(int $pageSize): self
    {
        $this->params['goodsReqDTO']['pageSize'] = $pageSize;
        return $this;
    }

    /**
     * skuid集合(一次最多支持查询20个sku)，数组类型开发时记得加[]
     * @param array  $skuIds
     * @isMust       非必填
     * @exampleValue [5225346,7275691]
     * @return JdUnionOpenGoodsQueryRequest
     */
    public function setSkuIds(array $skuIds): self
    {
        $this->params['goodsReqDTO']['skuIds'] = $skuIds;
        return $this;
    }

    /**
     * 关键词，字数同京东商品名称一致，目前未限制
     * @param string  $keyword
     * @isMust       非必填
     * @exampleValue 手机
     * @return JdUnionOpenGoodsQueryRequest
     */
    public function setKeyword(string $keyword): self
    {
        $this->params['goodsReqDTO']['keyword'] = $keyword;
        return $this;
    }

    /**
     * 商品券后价格下限
     * @param int  $pricefrom
     * @isMust       非必填
     * @exampleValue 16.88
     * @return JdUnionOpenGoodsQueryRequest
     */
    public function setPricefrom(int $pricefrom): self
    {
        $this->params['goodsReqDTO']['pricefrom'] = $pricefrom;
        return $this;
    }

    /**
     * 商品券后价格上限
     * @param int  $priceto
     * @isMust       非必填
     * @exampleValue 19.95
     * @return JdUnionOpenGoodsQueryRequest
     */
    public function setPriceto(int $priceto): self
    {
        $this->params['goodsReqDTO']['priceto'] = $priceto;
        return $this;
    }

    /**
     * 佣金比例区间开始
     * @param int  $commissionShareStart
     * @isMust       非必填
     * @exampleValue 10
     * @return JdUnionOpenGoodsQueryRequest
     */
    public function setCommissionShareStart(int $commissionShareStart): self
    {
        $this->params['goodsReqDTO']['commissionShareStart'] = $commissionShareStart;
        return $this;
    }

    /**
     * 佣金比例区间结束
     * @param int  $commissionShareEnd
     * @isMust       非必填
     * @exampleValue 50
     * @return JdUnionOpenGoodsQueryRequest
     */
    public function setCommissionShareEnd(int $commissionShareEnd): self
    {
        $this->params['goodsReqDTO']['commissionShareEnd'] = $commissionShareEnd;
        return $this;
    }

    /**
     * 商品类型：自营[g]，POP[p]
     * @param string  $owner
     * @isMust       非必填
     * @exampleValue g
     * @return JdUnionOpenGoodsQueryRequest
     */
    public function setOwner(string $owner): self
    {
        $this->params['goodsReqDTO']['owner'] = $owner;
        return $this;
    }

    /**
     * 排序字段(price：单价, commissionShare：佣金比例, commission：佣金， inOrderCount30Days：30天引单量， inOrderComm30Days：30天支出佣金)
     * @param string  $sortName
     * @isMust       非必填
     * @exampleValue price
     * @return JdUnionOpenGoodsQueryRequest
     */
    public function setSortName(string $sortName): self
    {
        $this->params['goodsReqDTO']['sortName'] = $sortName;
        return $this;
    }

    /**
     * asc,desc升降序,默认降序
     * @param string  $sort
     * @isMust       非必填
     * @exampleValue desc
     * @return JdUnionOpenGoodsQueryRequest
     */
    public function setSort(string $sort): self
    {
        $this->params['goodsReqDTO']['sort'] = $sort;
        return $this;
    }

    /**
     * 是否是优惠券商品，1：有优惠券
     * @param int  $isCoupon
     * @isMust       非必填
     * @exampleValue 1
     * @return JdUnionOpenGoodsQueryRequest
     */
    public function setIsCoupon(int $isCoupon): self
    {
        $this->params['goodsReqDTO']['isCoupon'] = $isCoupon;
        return $this;
    }

    /**
     * 是否是拼购商品，1：拼购商品
     * @param int  $isPG
     * @isMust       非必填
     * @exampleValue 1
     * @return JdUnionOpenGoodsQueryRequest
     */
    public function setIsPG(int $isPG): self
    {
        $this->params['goodsReqDTO']['isPG'] = $isPG;
        return $this;
    }

    /**
     * 拼购价格区间开始
     * @param int  $pingouPriceStart
     * @isMust       非必填
     * @exampleValue 16.88
     * @return JdUnionOpenGoodsQueryRequest
     */
    public function setPingouPriceStart(int $pingouPriceStart): self
    {
        $this->params['goodsReqDTO']['pingouPriceStart'] = $pingouPriceStart;
        return $this;
    }

    /**
     * 拼购价格区间结束
     * @param int  $pingouPriceEnd
     * @isMust       非必填
     * @exampleValue 19.95
     * @return JdUnionOpenGoodsQueryRequest
     */
    public function setPingouPriceEnd(int $pingouPriceEnd): self
    {
        $this->params['goodsReqDTO']['pingouPriceEnd'] = $pingouPriceEnd;
        return $this;
    }

    /**
     * 已废弃，请勿使用
     * @param int  $isHot
     * @isMust       非必填
     * @exampleValue 1
     * @return JdUnionOpenGoodsQueryRequest
     */
    public function setIsHot(int $isHot): self
    {
        $this->params['goodsReqDTO']['isHot'] = $isHot;
        return $this;
    }

    /**
     * 品牌code
     * @param string  $brandCode
     * @isMust       非必填
     * @exampleValue 7998
     * @return JdUnionOpenGoodsQueryRequest
     */
    public function setBrandCode(string $brandCode): self
    {
        $this->params['goodsReqDTO']['brandCode'] = $brandCode;
        return $this;
    }

    /**
     * 店铺Id
     * @param int  $shopId
     * @isMust       非必填
     * @exampleValue 45619
     * @return JdUnionOpenGoodsQueryRequest
     */
    public function setShopId(int $shopId): self
    {
        $this->params['goodsReqDTO']['shopId'] = $shopId;
        return $this;
    }

    /**
     * 1：查询内容商品；其他值过滤掉此入参条件。
     * @param int  $hasContent
     * @isMust       非必填
     * @exampleValue 1
     * @return JdUnionOpenGoodsQueryRequest
     */
    public function setHasContent(int $hasContent): self
    {
        $this->params['goodsReqDTO']['hasContent'] = $hasContent;
        return $this;
    }

    /**
     * 1：查询有最优惠券商品；其他值过滤掉此入参条件。（查询最优券需与isCoupon同时使用）
     * @param int  $hasBestCoupon
     * @isMust       非必填
     * @exampleValue 1
     * @return JdUnionOpenGoodsQueryRequest
     */
    public function setHasBestCoupon(int $hasBestCoupon): self
    {
        $this->params['goodsReqDTO']['hasBestCoupon'] = $hasBestCoupon;
        return $this;
    }

    /**
     * 联盟id_应用iD_推广位id
     * @param string  $pid
     * @isMust       非必填
     * @exampleValue 618_618_618
     * @return JdUnionOpenGoodsQueryRequest
     */
    public function setPid(string $pid): self
    {
        $this->params['goodsReqDTO']['pid'] = $pid;
        return $this;
    }

    /**
     * 支持出参数据筛选，逗号','分隔，目前可用：videoInfo(视频信息),hotWords(热词),similar(相似推荐商品),documentInfo(段子信息),skuLabelInfo（商品标签）,promotionLabelInfo（商品促销标签）,stockState（商品库存）
     * @param string  $fields
     * @isMust       非必填
     * @exampleValue videoInfo
     * @return JdUnionOpenGoodsQueryRequest
     */
    public function setFields(string $fields): self
    {
        $this->params['goodsReqDTO']['fields'] = $fields;
        return $this;
    }

    /**
     * 10微信京东购物小程序禁售，11微信京喜小程序禁售
     * @param string  $forbidTypes
     * @isMust       非必填
     * @exampleValue 10,11
     * @return JdUnionOpenGoodsQueryRequest
     */
    public function setForbidTypes(string $forbidTypes): self
    {
        $this->params['goodsReqDTO']['forbidTypes'] = $forbidTypes;
        return $this;
    }

    /**
     * 京喜商品类型，1京喜、2京喜工厂直供、3京喜优选，入参多个值表示或条件查询
     * @param array  $jxFlags
     * @isMust       非必填
     * @exampleValue [1,2,3]
     * @return JdUnionOpenGoodsQueryRequest
     */
    public function setJxFlags(array $jxFlags): self
    {
        $this->params['goodsReqDTO']['jxFlags'] = $jxFlags;
        return $this;
    }

    /**
     * 支持传入0.0、2.5、3.0、3.5、4.0、4.5、4.9，默认为空表示不筛选评分
     * @param int  $shopLevelFrom
     * @isMust       非必填
     * @exampleValue 3.5
     * @return JdUnionOpenGoodsQueryRequest
     */
    public function setShopLevelFrom(int $shopLevelFrom): self
    {
        $this->params['goodsReqDTO']['shopLevelFrom'] = $shopLevelFrom;
        return $this;
    }

    /**
     * 图书编号
     * @param string  $isbn
     * @isMust       非必填
     * @exampleValue 9787515515564
     * @return JdUnionOpenGoodsQueryRequest
     */
    public function setIsbn(string $isbn): self
    {
        $this->params['goodsReqDTO']['isbn'] = $isbn;
        return $this;
    }

    /**
     * 主商品spuId
     * @param int  $spuId
     * @isMust       非必填
     * @exampleValue 11144230
     * @return JdUnionOpenGoodsQueryRequest
     */
    public function setSpuId(int $spuId): self
    {
        $this->params['goodsReqDTO']['spuId'] = $spuId;
        return $this;
    }

    /**
     * 优惠券链接
     * @param string  $couponUrl
     * @isMust       非必填
     * @exampleValue http://coupon.m.jd.com/coupons/show.action?key=4fd004d7bd594ca4975db6bc8fecdd1b
     * @return JdUnionOpenGoodsQueryRequest
     */
    public function setCouponUrl(string $couponUrl): self
    {
        $this->params['goodsReqDTO']['couponUrl'] = $couponUrl;
        return $this;
    }

    /**
     * 京东配送 1：是，0：不是
     * @param int  $deliveryType
     * @isMust       非必填
     * @exampleValue 1
     * @return JdUnionOpenGoodsQueryRequest
     */
    public function setDeliveryType(int $deliveryType): self
    {
        $this->params['goodsReqDTO']['deliveryType'] = $deliveryType;
        return $this;
    }

    /**
     * 资源位17：极速版商品
     * @param array  $eliteType
     * @isMust       非必填
     * @exampleValue [17]
     * @return JdUnionOpenGoodsQueryRequest
     */
    public function setEliteType(array $eliteType): self
    {
        $this->params['goodsReqDTO']['eliteType'] = $eliteType;
        return $this;
    }

    /**
     * 是否秒杀商品。1：是
     * @param int  $isSeckill
     * @isMust       非必填
     * @exampleValue 1
     * @return JdUnionOpenGoodsQueryRequest
     */
    public function setIsSeckill(int $isSeckill): self
    {
        $this->params['goodsReqDTO']['isSeckill'] = $isSeckill;
        return $this;
    }

    /**
     * 是否预售商品。1：是
     * @param int  $isPresale
     * @isMust       非必填
     * @exampleValue 1
     * @return JdUnionOpenGoodsQueryRequest
     */
    public function setIsPresale(int $isPresale): self
    {
        $this->params['goodsReqDTO']['isPresale'] = $isPresale;
        return $this;
    }

    /**
     * 是否预约商品。1:是
     * @param int  $isReserve
     * @isMust       非必填
     * @exampleValue 1
     * @return JdUnionOpenGoodsQueryRequest
     */
    public function setIsReserve(int $isReserve): self
    {
        $this->params['goodsReqDTO']['isReserve'] = $isReserve;
        return $this;
    }

    /**
     * 奖励活动ID
     * @param int  $bonusId
     * @isMust       非必填
     * @exampleValue 1
     * @return JdUnionOpenGoodsQueryRequest
     */
    public function setBonusId(int $bonusId): self
    {
        $this->params['goodsReqDTO']['bonusId'] = $bonusId;
        return $this;
    }

    /**
     * 区域
     * @param string  $area
     * @isMust       非必填
     * @exampleValue 1-2802-54745
     * @return JdUnionOpenGoodsQueryRequest
     */
    public function setArea(string $area): self
    {
        $this->params['goodsReqDTO']['area'] = $area;
        return $this;
    }

}