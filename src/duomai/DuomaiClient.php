<?php

namespace Mylarge\UnionSdk\duomai;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Mylarge\UnionSdk\Request;
use Mylarge\UnionSdk\SdkClient;
use Mylarge\UnionSdk\traits\SingleInstance;

class DuomaiClient extends SdkClient
{
    use SingleInstance;

    public $serverUrl = "https://open.duomai.com/apis";

    public $appKey;

    public $appSecret;

    /**
     * 执行接口请求对象
     *
     * @param Request $request
     * @return array
     */
    public function execute(Request $request): array
    {
        //业务参数
        $params = $request->getParams();
        $body   = $params ? json_encode($request->getParams()) : "{}";

        //组装系统参数
        $appSecret = $this->appSecret;
        $header    = [
            "Content-Type" => "application/json",
        ];
        $query     = [
            "app_key"   => $this->appKey,
            "timestamp" => time(),
            "service"   => $request->getApiName(),
        ];
        ksort($query);
        $signStr = '';
        foreach ($query as $kev => $val) {
            $signStr .= $kev . $val;
        }
        $query["sign"] = strtoupper(md5($appSecret . $signStr . $body . $appSecret));
        try {
            $client   = new Client();
            $response = $client->request('POST', $this->serverUrl, [
                "verify"  => false,
                "headers" => $header,
                "query"   => $query,
                "body"    => $body,
            ]);
        } catch (ClientException $e) {
            return ['status' => 1001, 'message' => $e->getMessage()];
        }
        $response = $response->getBody()->getContents();
        $response = json_decode($response, true);
        if (empty($response)) {
            return ['status' => 1001, 'message' => '返回数据格式解析错误'];
        }
        return $response;
    }
}