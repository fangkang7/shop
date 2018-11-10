<?php

namespace app\admin\controller;

use app\admin\controller\Base;
use Requset;

class Auth extends Base
{
    protected $kaka;

    protected function initialize()
    {
        $this->kaka = 123;
    }

    public function userlist()
    {
        // return $this->kaka;
        return $this->fetch();
    }
}
