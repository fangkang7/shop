<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

use think\Loader;
use think\Facade;
use think\facade\Log;


// 定义data命名空间
Loader::addNamespace('data', Loader::getRootPath() . 'data' . DIRECTORY_SEPARATOR);

define('ROOT', __DIR__.'\../');

// 应用公共文件
function ajaxRuturn($code,$data=[]){
    $result = ['code' => $code , 'msg' => getMessage($code)];
    $result = (!empty($data)) ? $result['data'] = $data : $result;
    return json($result);
}
function getMessage($code){
    $info = config('message.');

    return (array_key_exists($code,$info) ? $info[$code]['msg'] : '操作失败');
}
