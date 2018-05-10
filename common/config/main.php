<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=jujia',
            'username' => 'root',
            'password' => 'root',
            'charset' => 'utf8',
        ],
        'redis' => [
            'class' => 'yii\redis\Connection',
            'hostname' => '127.0.0.1',
            'port' => 6379,
            'database' => 2,
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        "urlManager" => [
            //用于表明 urlManager 是否启用URL美化功能
            "enablePrettyUrl" => true,
            // 是否在URL中显示入口脚本
            "showScriptName" => false,
        ],
        'wxsdk' => [
            'class' => 'common\components\wechat\wxSdk',//::className(),
        ],
        'formatter'=>[
            'class'=>'common\components\format\formatter',
            'datetimeFormat'=>'yyyy-MM-dd HH:mm:ss',
        ]
    ],
];
