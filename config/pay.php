<?php

return [
    'alipay' => [
        'app_id'         => env('ALI_APP_ID', ''),
        'ali_public_key' => env('ALI_public_key',''),
        'private_key'    => env('ALI_private_key',''),
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];
