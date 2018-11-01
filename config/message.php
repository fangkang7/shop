<?php
return [
    'code' => [
        'SUCCESS'                     => 1,
        'USER_LOGIN_VALIDATE_ERROR'   => -1000,
        'ERROR_NO_USER'               => -1001,
        'ERROR_USER_START'            => -1002,
        'ERROR_PASSWORD'              => -1003,
        'ERROR_LOGIN_EXCESS_TIME_OUT' => -1005,
    ],
    'info' => [
        1      => '操作成功',
        -1000  => '用户登录校验不成功',
        -1001  => '用户不存在',
        -1002  => '用户状态不对',
        -1003  => '用户密码错误',
        -1005  => '登录超过规定次数'
    ]
];


