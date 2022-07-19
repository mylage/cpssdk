<?php


namespace Mylarge\UnionSdk\command;


use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Jingtuitui extends Command
{
    protected $getVerUrl = 'http://www.jingtuitui.com/api_item?type=versions&id=1';
    protected $apiUrl    = 'http://www.jingtuitui.com/api_item?type=param&vid=8';

    protected function configure()
    {
        $this->setName('jtt')
             ->setDescription('生成或更新京推推接口,暂不支持自动生成, 帮助命令: php sdk jtt -h')
             ->addOption('force', 'f', InputArgument::OPTIONAL, '是否强制生成,0/1 默认0')
             ->addArgument('name', InputArgument::REQUIRED, '接口id');
    }

    /**
     * 执行命令
     *
     * @param InputInterface  $input
     * @param OutputInterface $output
     * @return int
     */
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $apiId   = (int)$input->getArgument('name');
        $isForce = (bool)$input->getOption('force');

        //复制接口数据
        $apiParamJson = require_once __DIR__ . '/../jingtuitui/apiJson.php';


        // 直接请求接口被屏蔽
        // $client = new Client();
        // try {
        //     $response = $client->get($this->apiUrl . $apiId, [
        //         'headers'              => [
        //             'origin'     => 'www.jingtuitui.com',
        //             'user-agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36',
        //         ],
        //         //不验证ssl
        //         CURLOPT_SSL_VERIFYHOST => 0,
        //         CURLOPT_SSL_VERIFYPEER => 0,
        //     ]);
        //
        //
        // } catch (GuzzleException $e) {
        //     $output->writeln($e->getMessage());
        //     return 0;
        // }
        // $response = $response->getBody()->getContents();
        // $response = json_decode($response, true);
        // $data     = $response['data'] ?? [];

        $response = json_decode(json_decode(json_encode($apiParamJson), true), true);

        $result = $response['result'] ?? [];
        if ($response['return'] != 0 || empty($result)) {
            $output->writeln('接口参数获取错误，或复制的格式有误');
            return 0;
        }
        $apiId      = $result['aid'];//接口的url地址参数
        $apiName    = str_replace(["http://japi.jingtuitui.com/api/", "https://japi.jingtuitui.com/api/"], '', $result['address']);
        $apiVersion = $result['identification'];

        $className = 'Jtt' . str_replace(' ', '', ucwords(str_replace('_', ' ', $apiName))) . 'Request';
        $filePath  = realpath(__DIR__ . '/../jingtuitui/request') . DIRECTORY_SEPARATOR . $className . '.php';
        if (!$isForce && is_file($filePath)) {
            $output->writeln('此类已经存在!,请删除后重试,或加强制覆盖参数');
            $output->writeln($filePath);
            return 0;
        }
        //业务参数
        $methods    = $result['request_param'] ?? [];
        $createTime = date('Y-m-d H:i:s');
        $phpTpl     = <<<eot
<?php

namespace Mylarge\UnionSdk\jingtuitui\\request;

use Mylarge\UnionSdk\jingtuitui\\RequestBase;

/**
 * [API_TITLE]
 * @ApiDescr   [API_DESCR]
 * @createTime {$createTime}
 * @link       http://www.jingtuitui.com/api_item?id={$apiId}
 **/
class {$className} extends RequestBase
{

    /**
     * 接口名字
     * @var string
     */
    Protected \$apiName = '{$apiName}';
    
    /**
     * api版本
     * @var string
     */
    protected \$version = '{$apiVersion}';
    
    /**
     * 必填参数列表
     * @var array
     */
    Protected \$mustParamList = [[MUST_PARAM_LIST]];
    
    [PARAM_LIST]
}
eot;


        $apiTitle      = $result['address'] ?? '';
        $apiDescr      = '';
        $mustParamList = [];
        $paramCode     = '';
        foreach ($methods as $method) {
            $paramName = trim($method['name'] ?? '');
            $paramName = str_replace(" ", '', $paramName);
            if (empty($paramName)) {
                continue;
            }

            $typeMap   = [
                'LONG'      => 'int',
                'INTEGER'   => 'int',
                'NUMBER'    => 'int',
                'STRING'    => 'string',
                'NUMBER[]'  => 'array',
                'STRING[]'  => 'array',
                'INTEGER[]' => 'array',
                'BOOLEAN'   => 'bool',
            ];
            $name      = ucwords(str_replace('_', ' ', $paramName));
            $name1     = str_replace(' ', '', $name);
            $name2     = lcfirst($name1);
            $paramType = $typeMap[strtoupper($method['type'])] ?? '';
            $paramType = $paramType ? ($paramType . ' ') : '';
            $paramDesc = $method['explain'] ?? '';
            $mustText  = $method['mandat'] == '是' ? '必填' : '非必填';
            $example   = $method['example'] ?? '';
            if ($mustText == '必填') {
                $mustParamList[] = $paramName;
            }
            $paramCode .= <<<eot

    /**
     * {$paramDesc}
     * @param {$paramType} \${$name2}
     * @isMust       {$mustText}
     * @exampleValue {$example}
     * @return {$className}
     */
    public function set{$name1}({$paramType}\${$name2})
    {
        \$this->params['{$paramName}'] = \${$name2};
        return \$this;
    }

eot;
        }
        $mustParamList = implode("', '", $mustParamList);
        if ($mustParamList) {
            $mustParamList = "'$mustParamList'";
        }

        $code = strtr($phpTpl, [
            '[API_TITLE]'       => $apiTitle,
            '[API_DESCR]'       => $apiDescr,
            '[PARAM_LIST]'      => $paramCode,
            '[MUST_PARAM_LIST]' => $mustParamList,
        ]);
        file_put_contents($filePath, $code);
        $output->writeln('生成成功: ' . $apiTitle);
        $output->writeln('文件路径: ' . $filePath);
        $output->writeln('特别注意: 请加单元测试或检查生成的入参,一些特殊情况下可能有遗漏');
        return 0;
    }
}