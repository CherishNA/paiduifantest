<?php
$config = [
// HTTP 请求的超时时间（秒）
    'timeout' => 5.0,

// 默认发送配置
    'default' => [
// 网关调用策略，默认：顺序调用
        'strategy' => \Overtrue\EasySms\Strategies\OrderStrategy::class,

// 默认可用的发送网关
        'gateways' => [
            'alidayu',
        ],
    ],
// 可用的网关配置
    'gateways' => [
        'errorlog' => [
            'file' => '/tmp/easy-sms.log',
        ],
        'aliyun' => [
            'access_key_id' => '',
            'access_key_secret' => '',
            'sign_name' => '',
        ],
        'alidayu' => [
            'app_key' => '24731880',
            'app_secret' => 'f71dcbc7050850759ff9412350d3eae0',
            'sign_name' => '花缘优美票务系统',
        ],
    ],
];