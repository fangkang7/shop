<?php

namespace data\util;

use Request,SC,Config,Log;

class Rbac
{
    // 模块名
    private $module;
    // 控制器名
    private $controller;
    // 方法名
    private $action;
    // 需要检验的模块
    private $authModule = [
        'admin'
    ];

    /**
     * Rbac constructor.
     * 在Rbac初始化的时候，获取用户请求的url  从而校验权限
     * 模块名    module
     * 控制器名  controller
     * 方法名    action
     */
    public function __construct()
    {
        $this->module     = strtolower(request()->module());
        $this->controller = strtolower(request()->controller());
        $this->action     = strtolower(request()->action());
    }

    /**
     * 做权限校验，校验用户访问的模块是否在自定义的模块里
     */
    public function check()
    {
        // 需要检验用户是否登录成功,在登录成功之后在做校验
        if(!SC::getLogin()){
            return false;
        }
        /**
         * 判断用户访问的模块是否在需要校验的模块
         */
        if(in_array($this->module,$this->authModule)){
            /**
             * 如果用户不是系统后台用户那就需要权限验证
             */
            if(!SC::getIsSystem()){
                return false;
            }
            /**
             * 用户为非后台用户需要做全面校验
             * 1.首先通过url判断用户是否需要权限
             * 2.如果需要权限，判断用户是否为权限用户
             * 3.进行权限校验
             */
        }
        return true;
    }

    /**
     * 验证白名单用户
     */
    public function checkWhite()
    {
        // 获取白名单模块
        $white = config::get('white');
        /**
         * empty 检查一个变量是否为空  为空时返回true
         * isset 检测变量是否设置  不存在返回false
         * 当白名单都没有用户输入的url时需要进行校验
         */
        /*if(empty($white[$this->module]) || empty($white[$this->module][$this->controller])){
            return false;
        }

        if(empty($white[$this->module][$this->controller][$this->action])){
            return false;//需要校验
        }else{
            return true;//不需要检验
        }*/

        if(empty($white[$this->module]) && empty($white[$this->module][$this->controller]) && empty($white[$this->module][$this->controller][$this->action])){
            return false;//需要校验
        }else{
            return true;//不需要检验
        }
    }

}
