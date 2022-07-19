<?php

namespace Mylarge\UnionSdk\tests;


use Mylarge\UnionSdk\exception\ParamException;
use Mylarge\UnionSdk\exception\UnionException;
use Mylarge\UnionSdk\jingdong\JingdongClient;
use Mylarge\UnionSdk\jingdong\request\JdUnionOpenActivityQueryRequest;
use Mylarge\UnionSdk\jingdong\request\JdUnionOpenCategoryGoodsGetRequest;
use Mylarge\UnionSdk\jingdong\request\JdUnionOpenCouponQueryRequest;
use Mylarge\UnionSdk\jingdong\request\JdUnionOpenGoodsQueryRequest;
use Mylarge\UnionSdk\jingdong\request\JdUnionOpenPromotionByunionidGetRequest;
use Mylarge\UnionSdk\jingtuitui\JingtuituiClient;

class JingTuituiTest extends TestBaseCase
{
    /**
     * @var JingtuituiClient|null
     */
    protected static $instance = null;

    /**
     * 初始化
     */
    public static function setUpBeforeClass(): void
    {
        parent::setUpBeforeClass();
        if (empty(self::$instance)) {
            self::$instance = JingdongClient::getInstance(self::$jdAppKey, self::$jdAppSecret, ['accessToken' => self::$jdAccessToken]);
        }
    }

    /**
     * @throws UnionException|ParamException
     */
    public function testJdUnionOpenActivityQueryRequest()
    {
        $request  = new JdUnionOpenActivityQueryRequest();
        $response = self::$instance->execute($request);
        self::assertNotEmpty($response);
    }

    /**
     * @throws UnionException|ParamException
     */
    public function testJdUnionOpenCategoryGoodsGet()
    {
        $request = new JdUnionOpenCategoryGoodsGetRequest();
        $request->setParentId(0);
        $request->setGrade(0);
        $response = self::$instance->execute($request);
        self::assertNotEmpty($response);
    }

    /**
     * @throws UnionException|ParamException
     */
    public function testJdUnionOpenCouponQueryRequest()
    {
        $request  = new JdUnionOpenCouponQueryRequest();
        $response = self::$instance->execute($request);
        self::assertNotEmpty($response);
    }

    /**
     * 测试京东全网搜索传数组值
     * @throws UnionException|ParamException
     */
    public function testJdUnionOpenGoodsQueryRequest()
    {
        $request = new JdUnionOpenGoodsQueryRequest();
        $request->setKeyword('女装')
                ->setSkuIds(["10026617963322", "10026680108181"]);
        $response = self::$instance->execute($request);
        self::assertNotEmpty($response);
    }

    /**
     * 转链测试
     * @throws ParamException
     * @throws UnionException
     */
    public function testJdUnionOpenPromotionByunionidGetRequest()
    {
        $request = new JdUnionOpenPromotionByunionidGetRequest();
        $request->setUnionId(self::$jdUnionId)
                ->setPositionId(self::$jdPid)
                ->setMaterialId('https://m.jingxi.com/item/view?_fd=jx&sku=200146970051&jxsid=16232266630048397423&cu=true&utm_source=kong&utm_medium=jingfen&utm_campaign=t_1000840862_&utm_term=36ed233473b842fe86c800f1007be31e&rid=123456&test=adsf');
        $response = self::$instance->execute($request);
        self::assertNotEmpty($response);
    }
}