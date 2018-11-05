<?php
/**
 * 设置白名单模块，无需校验权限都可访问
 */
return [
    'admin' => [
        'login' => [
            'login',
            'execute'
        ]
    ],
    'test' => [
        'index' => [
            'index',
        ]
    ]
];