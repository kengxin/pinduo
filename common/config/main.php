<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=master',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ],
        'sendMsg' => [
            'class' => 'common\components\WeChatSendMsg',
            'app_id' => 'ww7abfe03bc95bd124',
            'app_secret' => 'Rd2rf6sg_BMorZLa8le6r1lsggNqTr3EU8X2E2nyCBE'
        ],
        'redis' => [
            'class' => 'yii\redis\Connection',
            'hostname' => 'localhost',  //你的redis地址
            'port' => 6379, //端口
            'database' => 0,
        ],
        'weixinUser' => [
            'class' => 'common\components\AppletUser'
        ]
    ],
];
