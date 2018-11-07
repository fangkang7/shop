<?php
return [
    1 => [
        'code' => 'SUCCESS',
        'msg'  => '操作成功',
        //...
    ],
    // user信息
    -1000 => [
        'code' => 'USER_LOGIN_VALIDATE_ERROR',
        'msg'  => '用户登入校验不成功',
    ],
    -1001 => [
        'code' => 'ERROR_NO_USER',
        'msg'  => '用户不存在',
    ],
    -1002 => [
        'code' => 'ERROR_USER_START',
        'msg'  => '用户状态不对',
    ],
    -1003 => [
        'code' => 'ERROR_PASSWORD',
        'msg'  => '用户密码错误',
    ],
    -1005 => [
        'code' => 'ERROR_LOGIN_EXCESS_TIME_OUT',
        'msg'  => '登入超过规定次数',
    ],
    // 用户组信息
    -2001 => [
        'code' => 'ERROR_USER_GROUP_REPEAT',
        'msg'  => '用户组名重复'
    ],
    -2002 => [
        'code' => 'ERROR_USER_GROUP',
        'msg'  => '用户组名操作失败'
    ]
    // 'code' => [
    //     'SUCCESS'                     => 1,
    //     'USER_LOGIN_VALIDATE_ERROR'   => -1000,
    //     'ERROR_NO_USER'               => -1001,
    //     'ERROR_USER_START'            => -1002,
    //     'ERROR_PASSWORD'              => -1003,
    //     'ERROR_LOGIN_EXCESS_TIME_OUT' => -1005,
    // ],
    // 'info' => [
    //     1      => '操作成功',
    //     -1000  => '用户登录校验不成功',
    //     -1001  => '用户不存在',
    //     -1002  => '用户状态不对',
    //     -1003  => '用户密码错误',
    //     -1005  => '登录超过规定次数'
    // ]
];


