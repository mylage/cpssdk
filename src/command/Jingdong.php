<?php


namespace Mylarge\UnionSdk\command;


use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Jingdong extends Command
{
    protected $apiUrl = 'http://api.m.jd.com/api?functionId=unionOpenMngApiDetail&appid=unionpc&loginType=3';

    protected function configure()
    {
        $this->setName('jd')
             ->setDescription('生成或更新京东接口, 帮助命令: php sdk jd -h')
             ->addOption('force', 'f', InputArgument::OPTIONAL, '是否强制生成,0/1 默认0')
             ->addArgument('name', InputArgument::REQUIRED, '接口名字');
    }

    /**
     * 执行命令
     * @param InputInterface  $input
     * @param OutputInterface $output
     * @return int
     */
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $apiName   = $input->getArgument('name');
        $isForce   = (bool)$input->getOption('force');
        $className = str_replace(' ', '', ucwords(str_replace('.', ' ', $apiName))) . 'Request';
        $filePath  = realpath(__DIR__ . '/../jingdong/request') . DIRECTORY_SEPARATOR . $className . '.php';
        if (!$isForce && is_file($filePath)) {
            $output->writeln('此类已经存在!,请删除后重试,或加强制覆盖参数');
            $output->writeln($filePath);
            return 0;
        }
        $createTime = date('Y-m-d H:i:s');
        $phpTpl     = <<<eot
<?php

namespace Mylarge\UnionSdk\jingdong\\request;

use Mylarge\UnionSdk\jingdong\\RequestBase;

/**
 * [API_TITLE]
 * @ApiDescr   [API_DESCR]
 * @createTime {$createTime}
 * @link       https://union.jd.com/openplatform/api/v2?apiName={$apiName}
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
            $params   = [
                '_'    => time(),
                'body' => json_encode(['apiName' => $apiName]),
            ];
            $response = $client->get($this->apiUrl . '&' . http_build_query($params), [
                'headers'              => [
                    'origin'     => 'https://union.jd.com',
                    'user-agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36',
                ],
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
        $data     = $response['data'] ?? [];
        $methods  = $data['method'] ?? [];
        if (!$data) {
            $output->writeln('接口信息获取失败');
            return 0;
        }
        $apiTitle = $data['apiInfoDTO']['znName'] ?? '';
        $apiDescr = $data['apiInfoDTO']['apiDesc'] ?? '';
        foreach ($methods['elements'] as $elementData) {
            if ($elementData['systemValue']) {
                continue;
            }
            $paramKeyName  = $elementData['webPamer'];
            $rawParamKey   = $paramKeyName;
            $paramKeyName  = $paramKeyName ? "['{$paramKeyName}']" : '';
            $requestParams = $elementData['elements'];
            if (!$requestParams) {
                // 这种情况下不需要加二维数组
                $requestParams = [$elementData];
                $rawParamKey   = '';
                $paramKeyName  = '';
            }
            $paramCode     = '';
            $mustParamList = [];

            $typeMap = [
                'LONG'      => 'int',
                'INTEGER'   => 'int',
                'NUMBER'    => 'int',
                'STRING'    => 'string',
                'NUMBER[]'  => 'array',
                'STRING[]'  => 'array',
                'INTEGER[]' => 'array',
                'BOOLEAN'   => 'bool',
            ];
            foreach ($requestParams as $params) {
                $paramName = $params['webPamer'];
                $name      = ucwords(str_replace('_', ' ', $paramName));
                $name1     = str_replace(' ', '', $name);
                $name2     = lcfirst($name1);
                $paramType = $typeMap[strtoupper($params['type'])] ?? '';
                $paramType = $paramType ? ($paramType . ' ') : '';
                $paramDesc = $params['desc'] ?? '';
                $mustText  = $params['required'] ? '必填' : '非必填';
                $example   = $params['value'] ?? '';
                if ($params['required']) {
                    $mustParamList[] = ($rawParamKey ? ($rawParamKey . '.') : '') . $paramName;
                }
                $paramCode .= <<<eot

    /**
     * {$paramDesc}
     * @param {$paramType} \${$name2}
     * @isMust       {$mustText}
     * @exampleValue {$example}
     * @return {$className}
     */
    public function set{$name1}({$paramType}\${$name2}): self
    {
        \$this->params{$paramKeyName}['{$paramName}'] = \${$name2};
        return \$this;
    }

eot;
            }
            $mustParamList = implode("', '", $mustParamList);
            if ($mustParamList) {
                $mustParamList = "'$mustParamList'";
            }
        }
        $code = strtr($phpTpl, [
            '[API_TITLE]'       => $apiTitle,
            '[API_DESCR]'       => $apiDescr,
            '[PARAM_LIST]'      => $paramCode,
            '[MUST_PARAM_LIST]' => $mustParamList,
            '[PARAM_KEY_NAME]'  => $paramKeyName,
        ]);
        file_put_contents($filePath, $code);
        $output->writeln('生成成功: ' . $apiTitle);
        $output->writeln('文件路径: ' . $filePath);
        $output->writeln('特别注意: 请加单元测试或检查生成的入参,一些特殊情况下可能有遗漏');
        return 0;
    }
}