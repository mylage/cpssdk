<?php


namespace Mylarge\UnionSdk;

use Mylarge\UnionSdk\exception\UnionException;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

/**
 * sdk客户端
 * Class SdkClient
 * @package Mylarge\UnionSdk
 */
abstract class SdkClient
{
    /**
     * 服务器地址
     * @var string
     */
    Protected $serverUrl = '';

    /**
     * 超时时间
     * @var int
     */
    Protected $timeout = 10;
    /**
     * apppKey/client_id/...
     * @var string
     */
    Protected $appKey = '';

    /**
     * appSecret/client_secret/...
     * @var string
     */
    Protected $appSecret = '';

    /**
     * accesstoken/sessionkey/...
     * @var string
     */
    Protected $accessToken = '';


    /**
     * http默认请求配置
     * @var array
     */
    Protected $defaultOptions = [];

    /**
     * 执行接口请求对象
     * @param Request $request
     * @return array
     */
    abstract public function execute(Request $request): array;

    /**
     * 初始化配置
     * SdkClient constructor.
     * @param string $appKey
     * @param string $appSecret
     * @param array  $options // 扩展或覆盖类的成员属性
     */
    protected function __construct(string $appKey = '', string $appSecret = '', array $options = [])
    {
        $this->defaultOptions = [
            'timeout' => $this->timeout,
            'verify'  => false,
            // 'proxy'   => 'http://127.0.0.1:8889',
            'headers' => [
                'content-type' => ' application/x-www-form-urlencoded; charset=UTF-8',
                'Accept'       => 'application/json; charset=UTF-8',
            ],
        ];
        $this->appKey         = $appKey;
        $this->appSecret      = $appSecret;
        foreach ($options as $name => $option) {
            $this->$name = $option;
        }
    }

    /**
     * @param string $url
     * @param mixed  $postData
     * @param array  $options GuzzleHttp 请求项
     * @return string
     * @throws UnionException
     */
    protected function post(string $url, $postData = null, array $options = []): string
    {
        if (!$options) {
            $options = $this->defaultOptions;
        }
        $client   = new Client($options);
        $postData = $postData ?: '';
        if (is_array($postData)) {
            $postData = http_build_query($postData);
        }
        try {
            $response = $client->request('POST', $url, array_merge(['body' => $postData], $options));
        } catch (GuzzleException $e) {
            throw UnionException::build($e->getMessage(), $e->getCode());
        }
        return $response->getBody()->getContents();
    }

    /**
     * @param string $url
     * @param array  $options GuzzleHttp 请求项
     * @return string
     * @throws UnionException
     */
    protected function get(string $url, array $options = []): string
    {
        if (!$options) {
            $options = $this->defaultOptions;
        }
        $client = new Client($options);
        try {
            $response = $client->request('GET', $url, $options);
        } catch (GuzzleException $e) {
            throw UnionException::build($e->getMessage(), $e->getCode());
        }
        return $response->getBody()->getContents();
    }
}