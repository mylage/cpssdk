<?php


namespace Mylarge\UnionSdk\traits;


use Mylarge\UnionSdk\SdkClient;

trait SingleInstance
{
    /**
     * 唯一实例
     * @var SdkClient|null
     */
    protected static $instance = null;

    /**
     * 返回一个实例
     * @param string $appKey
     * @param string $appSecret
     * @param array  $options
     * @param bool   $newInstance
     * @return SdkClient|null
     */
    public static function getInstance(
        string $appKey = '',    //平台appKey
        string $appSecret = '', // 平台appSecret
        array  $options = [],    // 扩展或覆盖类的成员属性
        bool   $newInstance = false // 是否新建一个实例,默认为唯一实例
    ): ?SdkClient
    {
        if ($newInstance) {
            return new static($appKey, $appSecret, $options);
        }
        if (self::$instance === null) {
            self::$instance = new static($appKey, $appSecret, $options);
        }
        return self::$instance;
    }
}