<?php


namespace Mylarge\UnionSdk;


use Mylarge\UnionSdk\exception\ParamException;

class Request
{
    /**
     * api 参数
     * @var array
     */
    Protected $params = [];

    /**
     * api版本
     * @var string
     */
    Protected $version = '1.0.0';

    /**
     * api名字，必配置
     * @var string
     */
    Protected $apiName = '';

    /**
     * 必填参数列表
     * @var array
     */
    Protected $mustParamList = [];

    /**
     * 必填参数列表错误信息,键值对
     * @var array
     */
    Protected $mustParamListErrorMsg = [];

    /**
     * 取api名字
     * @return string
     */
    public function getApiName(): string
    {
        return $this->apiName;
    }

    /**
     * 返回接口入参
     * @return array
     */
    public function getParams(): array
    {
        return $this->params;
    }

    /**
     * 返回版本号
     * @return string
     */
    public function getVersion(): string
    {
        return $this->version;
    }

    /**
     * 设置版本号
     * @param string $version
     * @return Request
     */
    public function setVersion(string $version): self
    {
        $this->version = $version;
        return $this;
    }

    /**
     * 验证必填参数,处理数组bool值等,根据不同平台，处理方法如果不同，可以继承此类后重写此方法
     * @throws ParamException
     */
    public function verifyRequiredParams()
    {
        foreach ($this->mustParamList as $name) {
            $arr = explode('.', $name);

            if (count($arr) === 1 && (!isset($this->params[$name]) || $this->params[$name] === '')) {
                throw new ParamException($this->mustParamListErrorMsg[$name] ?? "参数[{$name}]必填!");
            }
            if (count($arr) === 2 && (!isset($this->params[$arr[0]][$arr[1]]) || $this->params[$arr[0]][$arr[1]] === '')) {
                throw new ParamException($this->mustParamListErrorMsg[$name] ?? "参数[{$name}]必填!");
            }
        }

        $this->preParseParam();
    }

    /**
     * 预解析入参
     */
    protected function preParseParam()
    {
        foreach ($this->params as &$value) {
            switch (gettype($value)) {
                case 'bool':
                    $value = (int)$value;
                    break;
                case 'array':
                    $value = json_encode($value);
                    break;
            }
        }
    }

}