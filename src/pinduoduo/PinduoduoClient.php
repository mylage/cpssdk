<?php


namespace Mylarge\UnionSdk\pinduoduo;


use Mylarge\UnionSdk\exception\ParamException;
use Mylarge\UnionSdk\exception\UnionException;
use Mylarge\UnionSdk\Request;
use Mylarge\UnionSdk\SdkClient;
use Mylarge\UnionSdk\traits\SingleInstance;

class PinduoduoClient extends SdkClient
{
    use SingleInstance;

    /**
     * 服务器地址
     *
     * @var string
     */
    protected $serverUrl = 'https://gw-api.pinduoduo.com/api/router';
    /**
     * 接口地址
     */
    protected $serverUrlToken = 'https://open-api.pinduoduo.com/oauth/token';

    public $dataType = 'JSON';


    /**
     * 通过code 获取 access_token
     *
     * @param string $code
     * @param string $state
     * @param string $redirectUrl
     * @return array
     * @throws UnionException
     */
    public function createAccessToken(string $code, string $state = '', string $redirectUrl = ''): array
    {
        $params                  = [];
        $params['client_id']     = $this->appKey;
        $params['client_secret'] = $this->appSecret;
        $params['redirect_uri']  = $redirectUrl;
        $params['grant_type']    = 'authorization_code';
        $params['code']          = $code;
        if ($state) {
            $params['state'] = $state;
        }
        $result = $this->post($this->serverUrlToken, json_encode($params), ['headers' => ['Content-Type' => 'application/json']]);
        return json_decode($result, 1);
    }

    /**
     * 通过 refresh_token 获取access_token
     *
     * @param $refreshToken
     * @return array
     * @throws UnionException
     */
    public function refreshAccessToken($refreshToken): array
    {
        $params                  = [];
        $params['client_id']     = $this->appKey;
        $params['client_secret'] = $this->appSecret;
        $params['grant_type']    = 'refresh_token';
        $params['refresh_token'] = $refreshToken;
        $result                  = $this->post($this->serverUrlToken, json_encode($params), ['headers' => ['Content-Type' => 'application/json']]);
        return json_decode($result, true);
    }

    /**
     * 签名
     *
     * @param array $params
     * @return string
     */
    protected function sign(array $params = []): string
    {
        ksort($params);
        $stringToBeSigned = $this->appSecret;
        foreach ($params as $k => $v) {
            if (!is_array($v) && "@" != substr($v, 0, 1)) {
                $stringToBeSigned .= "$k$v";
            }
        }
        unset($k, $v);
        $stringToBeSigned .= $this->appSecret;

        return strtoupper(md5($stringToBeSigned));
    }

    /**
     * 执行接口请求对象
     *
     * @param Request $request
     * @return array
     * @throws ParamException
     * @throws UnionException
     */
    public function execute(Request $request): array
    {
        $request->verifyRequiredParams();
        $sysParams = [
            'type'      => $request->getApiName(),
            'client_id' => $this->appKey,
            'timestamp' => time(),
            'data_type' => $this->dataType,
            'version'   => $request->getVersion(),
        ];

        // 如果传的有就直接用，没有就用客户端的
        if ($this->accessToken) {
            $sysParams['access_token'] = $this->accessToken;
        }

        $apiParams = $request->getParams();

        $params         = array_merge($sysParams, $apiParams);
        $params['sign'] = $this->sign($params);
        $response       = $this->post($this->serverUrl, json_encode($params), ['headers' => ['Content-Type' => 'application/json']]);
        $data           = json_decode($response, true);
        if (!empty($data['error_response'])) {
            throw UnionException::build($data['error_response']['sub_msg'], 1, $data);
        }
        return $data;
    }
}