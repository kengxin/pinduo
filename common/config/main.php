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
        'yearUser' => [
            'class' => 'common\components\YearUser'
        ],
        'weixinPay' => [
            'class' => 'common\components\WeixinPay',
            'appid' => 'wxbbcb5bf09c262a61',
            'mch_id' => '1295216701',
            'key' => 'cb4e9e76eb725267ad9712c7dead1ec1',
            'notify_url' => 'https://80oz2.cn/applet-game/pay-result'
        ],
        'yearWeixinPay' => [
            'class' => 'common\components\WeixinPay',
            'appid' => 'wxd871b73404029273',
            'mch_id' => '1295216701',
            'key' => 'cb4e9e76eb725267ad9712c7dead1ec1',
            'notify_url' => 'https://80oz2.cn/active-game/pay-result'
        ]
    ],
];
