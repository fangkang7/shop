<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------


Route::rule('login','admin/login/login');

Route::rule('admin/:controller/:action', 'admin/:controller/:action')->middleware(\app\http\AuthMiddleware::class);

/**
 * 使用全局中间件进行校验的话，是所有的路径都会进行校验，需要权限的进行校验，不需要权限的从白名单获取
 *
 * 使用路由中间件进行权限校验，只会校验带有中间件路由的路径
 */

