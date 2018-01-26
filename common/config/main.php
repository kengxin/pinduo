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
            'hostname' => 'localhost',
            'port' => 6379,
            'database' => 0,
        ],
        'weixinUser' => [
            'class' => 'common\components\AppletUser'
        ],
        'weixinPay' => [
            'class' => 'common\components\WeixinPay',
            'appid' => 'wx8d8046dfbff8a92c',
            'mch_id' => '1336595701',
            'key' => 'cb4e9e76eb725267ad9712c7dead1ec1',
        ]
    ],
];
