<?php

namespace Mylarge\UnionSdk\jingdong;

use Mylarge\UnionSdk\exception\ParamException;
use Mylarge\UnionSdk\exception\UnionException;
use Mylarge\UnionSdk\Request;
use Mylarge\UnionSdk\SdkClient;
use Mylarge\UnionSdk\traits\SingleInstance;

class JingdongClient extends SdkClient
{
    use SingleInstance;

    public $serverUrl = "https://api.jd.com/routerjson";

    public $appKey;

    public $appSecret;

    public $format = "json";

    private $json_param_key = "360buy_param_json";


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
        $sysParams["app_key"]   = $this->appKey;
        $sysParams["v"]         = $request->getVersion();
        $sysParams["method"]    = $request->getApiName();
        $sysParams["timestamp"] = date("Y-m-d H:i:s");
        if (null != $this->accessToken) {
            $sysParams["access_token"] = $this->accessToken;
        }

        //获取业务参数
        $params                           = $request->getParams();
        $apiParams                        = $params ? json_encode($request->getParams()) : "{}";
        $sysParams[$this->json_param_key] = $apiParams;

        //签名
        $sysParams["sign"] = $this->generateSign($sysParams);
        //系统参数放入GET请求串
        $requestUrl = $this->serverUrl . "?";
        foreach ($sysParams as $sysParamKey => $sysParamValue) {
            $requestUrl .= "$sysParamKey=" . urlencode($sysParamValue) . "&";
        }

        $resp = $this->post($requestUrl, $apiParams, [
            'timeout' => $this->timeout,
            'verify'  => false,
            'headers' => [
                'Content-Type' => 'application/json',
            ],
        ]);

        //解析JD返回结果
        $respWellFormed = false;
        if ("json" == $this->format) {
            $respObject = json_decode($resp, true);
            if (null !== $respObject) {
                $respWellFormed = true;
            }
        } else if ("xml" == $this->format) {
            $respObject = @simplexml_load_string($resp);
            if (false !== $respObject) {
                $respWellFormed = true;
            }
        }

        //返回的HTTP文本不是标准JSON或者XML，记下错误日志
        if (false === $respWellFormed) {
            throw UnionException::build($sysParams["method"] . ' ' . $requestUrl . ' ' . "HTTP_RESPONSE_NOT_WELL_FORMED" . ' ' . $resp);
        }
        if (!($respObject = $respObject ?? [])) {
            throw UnionException::build('联盟数据为空');
        }
        return $this->parseResponse($respObject, $request->getApiName());
    }

    /**
     * 解决京东响应数据
     * @param        $srcData
     * @param string $apiName
     * @return array
     * @throws UnionException
     */
    private function parseResponse($srcData, string $apiName): array
    {
        $apiArr      = explode('.', $apiName);
        $responseKey = implode('_', $apiArr) . '_responce';
        $resultKey   = end($apiArr) . 'Result';
        $resp        = $srcData;

        // 这个错误，文档上没有，但接口会返回，真坑 2021-05-07 17:04:27
        if (!empty($resp['error_response'])) {
            throw UnionException::build($resp['error_response']['zh_desc'] ?? '');
        }
        $code = (int)($resp['code'] ?? 0);
        if ($code !== 0) {
            throw UnionException::build($resp['errorMessage'] ?? '');
        }
        $res = $resp[$responseKey][$resultKey] ?? '';
        if (!$res) {
            // trace('京东联盟数据为空' . json_encode($srcData, JSON_THROW_ON_ERROR), Constcfg::LOG_TYPE_WARNING);
            throw UnionException::build('京东联盟数据为空' . json_encode($srcData));
        }
        // 这个结果有时会是json字符串
        if (!is_array($res)) {
            $res = json_decode($res, true);
        }
        $code = (int)($res['code'] ?? 0);
        if ($code !== 200) {
            throw UnionException::build($res['errorMessage'] ?? $res['message']);
        }
        return $res;
    }
}