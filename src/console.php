<?php


namespace Mylarge\UnionSdk;

$autoloadFiles = [
    __DIR__ . '/../vendor/autoload.php',
    __DIR__ . '/../../../autoload.php',
    __DIR__ . '/../../../../vendor/autoload.php',
];
// $autoloaderFound = false;

foreach ($autoloadFiles as $autoloadFile) {
    if (!file_exists($autoloadFile)) {
        continue;
    }
    $loader    = require_once $autoloadFile;
    $vendorDir = $autoloadFile;
    // $autoloaderFound = true;
    break;
}
isset($vendorDir) or die(
    'Vendor dir is not exist !' . PHP_EOL .
    'You must set up the project dependencies, run the following commands:' . PHP_EOL .
    'curl -s http://getcomposer.org/installer | php' . PHP_EOL .
    'php composer.phar install' . PHP_EOL
);

use Mylarge\UnionSdk\command\Jingdong;
use Mylarge\UnionSdk\command\Jingtuitui;
use Mylarge\UnionSdk\command\Pinduoduo;
use Symfony\Component\Console\Application;

try {
    //$appPath = dirname(dirname(realpath($vendorDir)));
    //遍历加载的目录找出要加载的配置,函数,语言路径
    // $dirList  = Utils::getNamespacePathsFromPsr4($loader, 'app\\command\\');
    // $classMap = [];
    // foreach ($dirList as $value) {
    //     $classMap += Utils::getClassMap($value, 'app\\command\\');
    // }
    $classMap    = [
        Jingdong::class,
        Jingtuitui::class,
        Pinduoduo::class,
    ];
    $application = new Application();
    $application->setCatchExceptions(false);   //抛出异常
    $application->setName('Sdk Console');      // 设置应用名称
    $application->setVersion('version 1.0.0'); // 设置应用版本
    // ... register commands
    foreach ($classMap as $class) {
        // $obj = new $class;
        // if ($obj instanceof Command) {
        $application->add(new $class);
        // }
    }

    $application->run();
} catch (\Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
