<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;
use data\service\test;

class Index extends Controller
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {

        $test = new test;
        dump( $test->userList());
    }
}
