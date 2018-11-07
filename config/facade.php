<?php
return [
    'facade' => [
        // 代理类                          实际类
        data\facade\SC::class        =>   data\util\SC::class,
        data\facade\OnlyLogin::class =>   data\provider\OnlyLogin::class,
        data\facade\Rbac::class      =>   data\provider\Rbac::class
    ],
    'alias' => [
        'SC'        => data\facade\SC::class,
        'OnlyLogin' => data\facade\OnlyLogin::class,
        'Rbac'      => data\facade\Rbac::class,
    ]
];