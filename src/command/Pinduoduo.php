<?php


namespace Mylarge\UnionSdk\command;


use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Pinduoduo extends Command
{
    protected $apiUrl = 'https://open-api.pinduoduo.com/pop/doc/info/get';

    protected function configure()
    {
        $this
            ->setName('pdd')
            ->setDescription('生成或更新拼多多接口，帮助命令: php sdk pdd -h')
            ->addOption('force', 'f', InputArgument::OPTIONAL, '是否强制生成,0/1 默认0')
            ->addArgument('name', InputArgument::REQUIRED, '接口名字');
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
        $apiName   = $input->getArgument('name');
        $isForce   = (bool)$input->getOption('force');
        $className = str_replace(' ', '', ucwords(str_replace('.', ' ', $apiName))) . 'Request';
        $filePath  = realpath(__DIR__ . '/../pinduoduo/request') . DIRECTORY_SEPARATOR . $className . '.php';
        if (!$isForce && is_file($filePath)) {
            $output->writeln('此类已经存在!,请删除后重试,或加强制覆盖参数');
            $output->writeln($filePath);
            return 0;
        }
        $phpTpl = <<<eot
<?php

namespace Mylarge\UnionSdk\pinduoduo\\request;

use Mylarge\UnionSdk\pinduoduo\\RequestBase;

/**
 * [API_TITLE]
 * @ApiDescr   [API_DESCR]
 * @link       https://open.pinduoduo.com/application/document/api?id={$apiName}
 **/
class {$className} extends RequestBase
{

    /**
     * 接口名字
     * @var string
     */
    Protected \$apiName = '{$apiName}';

    /**
     * 必填参数列表
     * @var array
     */
    Protected \$mustParamList = [[MUST_PARAM_LIST]];
    
    [PARAM_LIST]
}
eot;

        $client = new Client();
        try {
            $response = $client->post($this->apiUrl, [
                'headers'              => [
                    'Content-Type' => 'application/json',
                    'origin'       => 'https://open.pinduoduo.com',
                    'user-agent'   => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36',
                ],
                'body'                 => json_encode(['id' => $apiName]),
                //不验证ssl
                CURLOPT_SSL_VERIFYHOST => 0,
                CURLOPT_SSL_VERIFYPEER => 0,
            ]);
        } catch (GuzzleException $e) {
            $output->writeln($e->getMessage());
            return 0;
        }
        $response = $response->getBody()->getContents();
        $response = json_decode($response, true);
        if (!$response['success']) {
            $output->writeln($response['errorMsg']);
            return 0;
        }
        $response = $response['result'] ?? [];
        if (empty($response)) {
            $output->writeln('获取接口数据错误');
            return 0;
        }

        //复制接口数据
        // $response = require_once __DIR__ . '/../pinduoduo/ajaxJson.php';
        // print_r(json_decode(json_encode($response)));
        // $response = json_decode(json_decode(json_encode($response), true), true);
        // print_r(json_decode($response, true));
        // return 0;

        $requestParams = $response['requestParamList'] ?? [];
        $apiTitle      = $response['apiName'] ?? '';
        $apiDescr      = $response['usageScenarios'] ?? '';
        if (!$apiTitle) {
            $output->writeln('接口信息获取失败');
            return 0;
        }
        $paramCode     = '';
        $mustParamList = [];

        $typeMap = [
            'LONG'      => 'int',
            'INTEGER'   => 'int',
            'NUMBER'    => 'int',
            'NUMBER[]'  => 'array',
            'STRING'    => 'string',
            'STRING[]'  => 'array',
            'INTEGER[]' => 'array',
            'BOOLEAN'   => 'bool',
        ];
        foreach ($requestParams as $params) {
            $paramName = $params['paramName'];
            $name      = ucwords(str_replace('_', ' ', $paramName));
            $name1     = str_replace(' ', '', $name);
            $name2     = lcfirst($name1);
            $paramType = $typeMap[strtoupper($params['paramType'])] ?? '';
            $paramType = $paramType ? ($paramType . ' ') : '';
            $paramDesc = $params['paramDesc'] ?? '';
            $mustText  = $params['isMust'] ? '必填' : '非必填';
            if ($params['isMust']) {
                $mustParamList[] = $paramName;
            }
            $paramCode .= <<<eot

    /**
     * {$paramDesc}
     * @return {$className}
     * @var {$paramType}
     * @isMust {$mustText}
     */
    public function set{$name1}({$paramType}\${$name2}): self
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
        $output->writeln('生成接口: ' . $apiTitle);
        $output->writeln('文件路径: ' . $filePath);
        $output->writeln('特别注意: 请加单元测试或检查生成的入参,一些特殊情况下可能有遗漏');
        return 0;
    }
}