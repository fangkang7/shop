<?php
return [
    'facade' => [
        // 代理类                          实际类
        data\facade\SC::class         => data\util\SC::class,
        data\facade\OnlyLogin::class  => data\provider\OnlyLogin::class,
        data\facade\Rbac::class       => data\provider\Rbac::class,
        data\facade\TreeUtil::class   => data\util\TreeUtil::class,
        data\facade\QrcodeUtil::class => data\util\QrcodeUtil::class,
        data\facade\Upload::class => data\util\Upload::class
    ],
    'alias' => [
        'Upload'    => data\facade\Upload::class,
        'Qrcode'    => data\facade\QrcodeUtil::class,
        'Tree'      => data\facade\TreeUtil::class,
        'SC'        => data\facade\SC::class,
        'OnlyLogin' => data\facade\OnlyLogin::class,
        'Rbac'      => data\facade\Rbac::class,
    ]
];