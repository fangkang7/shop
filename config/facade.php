<?php
return [
    'facade' => [
        // 代理类                          实际类
        data\facade\SC::class        =>   data\util\SC::class,
        data\facade\OnlyLogin::class =>   data\util\OnlyLogin::class
    ],
    'alias' => [
        'SC'        => data\facade\SC::class,
        'OnlyLogin' => data\facade\OnlyLogin::class
    ]
];