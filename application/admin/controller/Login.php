<?php

namespace app\admin\controller;

use think\Controller;
use data\model\user\User;
use data\service\UserService;
use Request;
use Db, Log;
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
            $userVaildata = new UserValidate;
            // 对验证类进行验证
            // if (!$userVaildata->check(Request::param())) {
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
        $config = [
            // 验证码字体大小
            'fontSize' => 30,
            // 验证码位数
            'length' => 3,
            // 关闭验证码杂点
            'useNoise' => false,
        ];
        $captcha = new Captcha($config);
        return $captcha->entry();
    }

}
