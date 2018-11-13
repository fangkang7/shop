<?php

namespace app\admin\controller;

use think\Controller;
use Request;
use think\captcha\Captcha;

class Index extends Base
{

    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {

        // return json($this->view->data);
        return $this->fetch();
        // $captcha = new Captcha();
        // return $captcha->entry();
    }

    public function hello()
    {
        return 'kkaa';
    }



}



