<?php

namespace Mylarge\UnionSdk\jingdong\request;

use Mylarge\UnionSdk\jingdong\RequestBase;

/**
 * 猜你喜欢商品推荐
 * @ApiDescr   输入频道id、userid即可获取个性化推荐的商品信息，目前联盟推荐的精选频道包含猜你喜欢、实时热销、大额券、9.9包邮等各种实时数据，适用于toc搭建频道页，千人千面商品推荐模块场景。建议使用clickURL转链长链接，千人千面推荐效果会更好。注意：请勿传入排序参数，以免影响推荐效果。
 * @createTime 2022-07-19 09:39:56
 * @link       https://union.jd.com/openplatform/api/v2?apiName=jd.union.open.goods.material.query
 **/
class JdUnionOpenGoodsMaterialQueryRequest extends RequestBase
{

    /**
     * 接口名字
     * @var string
     */
    Protected $apiName = 'jd.union.open.goods.material.query';
    
    /**
     * 必填参数列表
     * @var array
     */
    Protected $mustParamList = ['goodsReq.eliteId'];
    
    
    /**
     * 频道ID：1.猜你喜欢、2.实时热销、3.大额券、4.9.9包邮、1001.选品库
     * @param int  $eliteId
     * @isMust       必填
     * @exampleValue 1
     * @return JdUnionOpenGoodsMaterialQueryRequest
     */
    public function setEliteId(int $eliteId): self
    {
        $this->params['goodsReq']['eliteId'] = $eliteId;
        return $this;
    }

    /**
     * 页码
     * @param int  $pageIndex
     * @isMust       非必填
     * @exampleValue 1
     * @return JdUnionOpenGoodsMaterialQueryRequest
     */
    public function setPageIndex(int $pageIndex): self
    {
        $this->params['goodsReq']['pageIndex'] = $pageIndex;
        return $this;
    }

    /**
     * 每页数量，最大10
     * @param int  $pageSize
     * @isMust       非必填
     * @exampleValue 10
     * @return JdUnionOpenGoodsMaterialQueryRequest
     */
    public function setPageSize(int $pageSize): self
    {
        $this->params['goodsReq']['pageSize'] = $pageSize;
        return $this;
    }

    /**
     * 该字段无效，请勿传入
     * @param string  $sortName
     * @isMust       非必填
     * @exampleValue price
     * @return JdUnionOpenGoodsMaterialQueryRequest
     */
    public function setSortName(string $sortName): self
    {
        $this->params['goodsReq']['sortName'] = $sortName;
        return $this;
    }

    /**
     * 该字段无效，请勿传入
     * @param string  $sort
     * @isMust       非必填
     * @exampleValue asc
     * @return JdUnionOpenGoodsMaterialQueryRequest
     */
    public function setSort(string $sort): self
    {
        $this->params['goodsReq']['sort'] = $sort;
        return $this;
    }

    /**
     * 联盟id_应用id_推广位id，三段式，联盟子推客身份标识（不能传入接口调用者自己的pid）
     * @param string  $pid
     * @isMust       非必填
     * @exampleValue 无
     * @return JdUnionOpenGoodsMaterialQueryRequest
     */
    public function setPid(string $pid): self
    {
        $this->params['goodsReq']['pid'] = $pid;
        return $this;
    }

    /**
     * 子渠道标识，（需申请，申请方法请见https://union.jd.com/helpcenter/13246-13247-46301），该字段为自定义参数，仅支持传入字母、数字、下划线或中划线，最多80个字符 （不可包含空格）
     * @param string  $subUnionId
     * @isMust       非必填
     * @exampleValue 618_18_c35***e6a
     * @return JdUnionOpenGoodsMaterialQueryRequest
     */
    public function setSubUnionId(string $subUnionId): self
    {
        $this->params['goodsReq']['subUnionId'] = $subUnionId;
        return $this;
    }

    /**
     * 站点ID是指在联盟后台的推广管理中的网站Id、APPID（1、通用转链接口禁止使用社交媒体id入参；2、订单来源，即投放链接的网址或应用必须与传入的网站ID/AppID备案一致，否则订单会判“无效-来源与备案网址不符”）
     * @param string  $siteId
     * @isMust       非必填
     * @exampleValue 435676
     * @return JdUnionOpenGoodsMaterialQueryRequest
     */
    public function setSiteId(string $siteId): self
    {
        $this->params['goodsReq']['siteId'] = $siteId;
        return $this;
    }

    /**
     * 推广位id
     * @param string  $positionId
     * @isMust       非必填
     * @exampleValue 1
     * @return JdUnionOpenGoodsMaterialQueryRequest
     */
    public function setPositionId(string $positionId): self
    {
        $this->params['goodsReq']['positionId'] = $positionId;
        return $this;
    }

    /**
     * 系统扩展参数，无需传入
     * @param string  $ext1
     * @isMust       非必填
     * @exampleValue 100_618_618
     * @return JdUnionOpenGoodsMaterialQueryRequest
     */
    public function setExt1(string $ext1): self
    {
        $this->params['goodsReq']['ext1'] = $ext1;
        return $this;
    }

    /**
     * 预留字段，请勿传入
     * @param int  $skuId
     * @isMust       非必填
     * @exampleValue 1111
     * @return JdUnionOpenGoodsMaterialQueryRequest
     */
    public function setSkuId(int $skuId): self
    {
        $this->params['goodsReq']['skuId'] = $skuId;
        return $this;
    }

    /**
     * 1：只查询有最优券商品，不传值不做限制
     * @param int  $hasCoupon
     * @isMust       非必填
     * @exampleValue 1
     * @return JdUnionOpenGoodsMaterialQueryRequest
     */
    public function setHasCoupon(int $hasCoupon): self
    {
        $this->params['goodsReq']['hasCoupon'] = $hasCoupon;
        return $this;
    }

    /**
     * 用户ID类型，传入此参数可获得个性化推荐结果。当前userIdType支持的枚举值包括：8、16、32、64、128、32768。userIdType和userId需同时传入，且一一对应。userIdType各枚举值对应的userId含义如下：8(安卓移动设备Imei); 16(苹果移动设备Openudid)；32(苹果移动设备idfa); 64(安卓移动设备imei的md5编码，32位，大写，匹配率略低);128(苹果移动设备idfa的md5编码，32位，大写，匹配率略低); 32768(安卓移动设备oaid); 131072(安卓移动设备oaid的md5编码，32位，大写)
     * @param int  $userIdType
     * @isMust       非必填
     * @exampleValue 32
     * @return JdUnionOpenGoodsMaterialQueryRequest
     */
    public function setUserIdType(int $userIdType): self
    {
        $this->params['goodsReq']['userIdType'] = $userIdType;
        return $this;
    }

    /**
     * userIdType对应的用户设备ID，传入此参数可获得个性化推荐结果，userIdType和userId需同时传入
     * @param string  $userId
     * @isMust       非必填
     * @exampleValue 示例1： userIdType设置为8时，此时userId需要设置为安卓移动设备Imei，如861794042953717 示例2： userIdType设置为16时，此时userId需要设置为苹果移动设备Openudid，如f99dbd2ba8de45a65cd7f08b7737bc919d6c87f7 示例3： userIdType设置为32时，此时userId需要设置为苹果移动设备idfa，如DCC77BDA-C2CA-4729-87D6-B7F65C8014D6 示例4： userIdType设置为64时，此时userId需要设置为安卓移动设备imei的32位大写的MD5编码，如1097787632DB8876D325C356285648D0（原始imei：861794042953717） 示例5： userIdType设置为128时，此时userId需要设置为苹果移动设备idfa的32位大写的MD5编码，如38D7C90186B1328F9418816DCC762A27（原始idfa：DCC77BDA-C2CA-4729-87D6-B7F65C8014D6） 示例6： userIdType设置为32768时，此时userId需要设置为安卓移动设备oaid，如7dafe7ff-bffe-a28b-fdf5-7fefdf7f7e85 示例7： userIdType设置为131072时，此时userId需要设置为安卓移动设备oaid的32位大写的MD5编码，如4967357D630E32E312A3A3EE0C5A128B（原始oaid：7dafe7ff-bffe-a28b-fdf5-7fefdf7f7e85）
     * @return JdUnionOpenGoodsMaterialQueryRequest
     */
    public function setUserId(string $userId): self
    {
        $this->params['goodsReq']['userId'] = $userId;
        return $this;
    }

    /**
     * 支持出参数据筛选，逗号','分隔，目前可用：videoInfo(视频信息),hotWords(热词),similar(相似推荐商品),documentInfo(段子信息)，skuLabelInfo（商品标签），promotionLabelInfo（商品促销标签）
     * @param string  $fields
     * @isMust       非必填
     * @exampleValue videoInfo
     * @return JdUnionOpenGoodsMaterialQueryRequest
     */
    public function setFields(string $fields): self
    {
        $this->params['goodsReq']['fields'] = $fields;
        return $this;
    }

    /**
     * 10微信京东购物小程序禁售，11微信京喜小程序禁售
     * @param string  $forbidTypes
     * @isMust       非必填
     * @exampleValue 10,11
     * @return JdUnionOpenGoodsMaterialQueryRequest
     */
    public function setForbidTypes(string $forbidTypes): self
    {
        $this->params['goodsReq']['forbidTypes'] = $forbidTypes;
        return $this;
    }

    /**
     * 该字段无效，请勿传入
     * @param string  $orderId
     * @isMust       非必填
     * @exampleValue 108618000005
     * @return JdUnionOpenGoodsMaterialQueryRequest
     */
    public function setOrderId(string $orderId): self
    {
        $this->params['goodsReq']['orderId'] = $orderId;
        return $this;
    }

    /**
     * 选品库id（仅对eliteId=1001有效，且必传）
     * @param int  $groupId
     * @isMust       非必填
     * @exampleValue 1
     * @return JdUnionOpenGoodsMaterialQueryRequest
     */
    public function setGroupId(int $groupId): self
    {
        $this->params['goodsReq']['groupId'] = $groupId;
        return $this;
    }

    /**
     * groupId创建者的UnionId
     * @param int  $ownerUnionId
     * @isMust       非必填
     * @exampleValue 5227
     * @return JdUnionOpenGoodsMaterialQueryRequest
     */
    public function setOwnerUnionId(int $ownerUnionId): self
    {
        $this->params['goodsReq']['ownerUnionId'] = $ownerUnionId;
        return $this;
    }

    /**
     * 类型 0:选品库
     * @param int  $benefitType
     * @isMust       非必填
     * @exampleValue 1
     * @return JdUnionOpenGoodsMaterialQueryRequest
     */
    public function setBenefitType(int $benefitType): self
    {
        $this->params['goodsReq']['benefitType'] = $benefitType;
        return $this;
    }

}