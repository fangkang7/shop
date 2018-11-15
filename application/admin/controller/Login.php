<?php

namespace app\admin\controller;

use think\Controller;
use data\model\user\User;
use data\service\UserService;
use Request;
use Db;
use think\captcha\Captcha;
use data\Validate\UserValidate;

class Login extends Controller
{
    // 定义逻辑层UserService
    private $userService;
    // 定义中间件规则
    protected $middleware = [
        'RepetitionMiddleware' => ['only' => ['verify']],
    ];

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
        if (Request::isPost()) {
            $username = Request::param('username');
            $password = Request::param('password');
            // $userVaildata = new UserValidate;
            // $data = [
            //     'verify' => Request::param('verify');
            // ];
            // 对验证类进行验证
            // if (!$userVaildata->check($data)) {
            //     return json([
            //         'code' => USER_LOGIN_VALIDATE_ERROR,
            //         //$userVaildata->getError()可以获取到具体的错误信息
            //         'msg' => $userVaildata->getError()
            //     ]);
            // }

            return ajaxRuturn($this->userService->login($username, $password));
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
