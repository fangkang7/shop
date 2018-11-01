<?php

namespace app\admin\controller;

use think\Controller;
use data\model\user\User;
use data\service\UserService;
use Request;
use Db,Log;
use think\captcha\Captcha;

class Login extends Controller
{   
    // 定义逻辑层UserService
    private $userService;

    /**
     * 初始化
     */
    public function initialize()
    {
        $this->userService = new UserService;
    }
    /**
     * 登录
     * @return \think\Response
     */
    public function login()
    {
        if(Request::isPost()){
            $username = Request::param('username');
            $password = Request::param('password');
            return ajaxRuturn($this->userService->login($username,$password));
        }
        return $this->fetch();
    }

    /**
     * 验证码验证
     */
    public function verify()
    {
        $captcha = new Captcha();
        return $captcha->entry();
    }
}
