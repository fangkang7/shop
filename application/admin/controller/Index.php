<?php

namespace app\admin\controller;

use think\Controller;
use Request;

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
    }

    public function hello()
    {
        return 'kkaa';
    }



}



