# 联盟对接sdk
<!-- TOC -->

- [联盟对接sdk](#联盟对接sdk)
  - [SDK规范](#sdk规范)
  - [接口调用示例](#接口调用示例)
  - [命令行工具](#命令行工具)
    - [拼多多文档](#拼多多文档)
    - [京东文档](#京东文档)
<!-- /TOC -->
> 禁止把平台的sdk，直接全部复制进来,所有类必须整理为符合psr4加载规范的要求

## SDK规范

>此sdk包为各项目独立引用包，不要在里面写默认配置, 类似site('xxx_app_key')等。

- 接口添加完后要至少加一个单元测试,做为用法示例

- 各平台的类名字或命名空间，为了跟其它原有项目中做区分，使用全拼， ，比如 京东 命名使用 jingdong

- 各平台客户端要继承 **Mylarge\UnionSdk\SdkClient** 抽象类，实现里面的execute方法，用到http请求的使用继承的方法post,get，满足不了的可直接使用GuzzleHttp包提供的方法,
- 一个接口对应一个请求类，同样要继承**Mylarge\UnionSdk\Request**类，满足不了的可自定义一个基类，可参考其它平台对接示例
- 各平台涉及到**appKey,key,appid,appSecret,client_id,client_secret accessToken,sessionKey**等，统一为 **appKey,appSecret,accessToken,[options](其它项)**
- 客户端实例化时传入**appKey,appSecret,options**,全为非必传，扩展配置可使用**options**传入，详细处理逻辑可看**Mylarge\UnionSdk\SdkClient**构造方法

## 接口调用示例

接口调用封装成统一的调用流程(视情况而定),如下，构造函数接收三个入参，第三个入参为数组，且可覆盖类成员属性(扩展用)

```php
// 创建联盟客户端
$client=JingdongClient::getInstance(self::$jdAppKey, self::$jdAppSecret,[]);
// 创建接口请求对象
$request = new UnionOpenStatisticsRedpacketQueryRequest();
// 设置对应的入参
$request->setKey('abcd');
// 执行请求返回结果
$response = $client->execute($request,self::$jdAccessToken);
```

execute 执行完成返回的数据是预期结果则正常返回数组,非预期则抛异常UnionException ，错误信息和数据可加入异常类中来获取
>注意这里并不要求成功返回code为0，错误非0，主要用于发现联盟返回的未知的异常信息，视具体的业务逻辑而定

```php
  throw UnionException::build('联盟数据为空',1,['data'=>'aaaa']);
```

一个接口处理完成后，除了抛出 **ParamException/UnionException** 外，应该返回正常的结果(一个数组)

## 命令行工具

如果安装为其它项目依赖之后可用下面命令生成或查看
尽量到本项目根目录下生成需要的接口请求类,然后打版本,更新sdk包时都可使用

```base
php ./vendor/bin/sdk
```

本项目使用

```bash
php sdk
```

查看指定平台的帮助详情

```bash
php sdk pdd -h
```

下面是已经支持自动生成sdk的平台命令行

### 拼多多文档

文档地址：<https://open.pinduoduo.com/application/document/api?id=pdd.erp.order.sync>  
生成工具只是按默认规则把官方文档相关数据给下载下来，生成一个请求类，还需人工检查测试参数必填项，返回值等

如果不存在则不会生成

```bash
php sdk pdd pdd.ddk.oauth.goods.search

```

强制覆盖生成

```bash
php sdk pdd pdd.ddk.oauth.goods.search -f=1
```

### 京东文档

文档地址 <https://union.jd.com/openplatform/api>  
生成工具只是按默认规则把官方文档相关数据给下载下来，生成一个请求类，最后还需人工测试参数必填项，返回值等

如果不存在则不会生成

```bash
php sdk jd jd.union.open.goods.bigfield.query

```

强制覆盖生成

```bash
php sdk jd jd.union.open.goods.bigfield.query -f=1
```
