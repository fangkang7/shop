<?php

namespace app\admin\controller;

use think\Controller;
use Request;
use Config;
use SC;


class Index extends Controller
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public static function index()
    {
        return SC::getUserRole();
    }

    public function hello()
    {
        return 'kkaa';
    }

}
