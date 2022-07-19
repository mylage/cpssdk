<?php

namespace Mylarge\UnionSdk\jingtuitui;

use Mylarge\UnionSdk\exception\ParamException;
use Mylarge\UnionSdk\exception\UnionException;
use Mylarge\UnionSdk\Request;
use Mylarge\UnionSdk\SdkClient;
use Mylarge\UnionSdk\traits\SingleInstance;

class JingtuituiClient extends SdkClient
{
    use SingleInstance;

    public $serverUrl = "http://japi.jingtuitui.com/api/";

    public $appKey;

    public $appSecret;

    public $format = "json";

    protected function generateSign($params): string
    {
        ksort($params);
        $stringToBeSigned = $this->appSecret;
        foreach ($params as $k => $v) {
            if ("@" != substr($v, 0, 1)) {
                $stringToBeSigned .= "$k$v";
            }
        }
        unset($k, $v);
        $stringToBeSigned .= $this->appSecret;
        return strtoupper(md5($stringToBeSigned));
    }

    /**
     * 执行接口请求对象
     * @param Request $request
     * @return array
     * @throws ParamException
     * @throws UnionException
     */
    public function execute(Request $request): array
    {
        $request->verifyRequiredParams();
        //组装系统参数
        $sysParams["appkey"]      = $this->appKey;//
        $sysParams['appid']       = $this->appSecret;//
        $sysParams["v"]           = $request->getVersion();
        $sysParams["return_type"] = $this->format;
        //接口地址
        $method = $request->getApiName();


        //获取业务参数
        $params    = $request->getParams();
        $apiParams = array_merge($sysParams, $params);

        //系统参数放入GET请求串
        $requestUrl = $this->serverUrl . "{$method}?" . http_build_query($apiParams);
        $resp       = $this->get($requestUrl);

        //解析JD返回结果
        $respObject     = json_decode($resp, true);
        $respWellFormed = false;
        if (null !== $respObject) {
            $respWellFormed = true;
        }

        //返回的HTTP文本不是标准JSON
        if (false === $respWellFormed) {
            throw UnionException::build($sysParams["method"] . ' ' . $requestUrl . ' ' . "HTTP_RESPONSE_NOT_WELL_FORMED" . ' ' . $resp);
        }
        if (!($respObject = $respObject ?? [])) {
            throw UnionException::build('联盟数据为空');
        }
        return $respObject;
    }
}