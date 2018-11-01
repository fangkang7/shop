<?php

namespace data\service;

use data\model\user\User;
use Session;
use SC,OnlyLogin;

class UserService
{
    // 定义多种登录方式
    private $loginWay = [
        // 用户名
        'user_name',
        // 邮箱
        'user_email',
        // 电话
        'user_tel'
    ];

    public function login($username,$password)
    {
        // 使用循环方式判断用户名是否存在
        foreach($this->loginWay as $k=>$v){
            $user = User::where([$v=>$username])->find();
            // 如果存在就有这个用户，跳出
            if($user){
                break;
            }
        }
        if(!$user){
            //用户名不存在
           return ERROR_NO_USER;
        }
        if($user->user_status != 1){
            // 用户是否被封
            return ERROR_USER_START;
        }
        if(!password_verify($password,$user->user_password)){
            // 密码错误，登录失败
            return ERROR_PASSWORD;
        }
        // 用户登录后的操作
        $this->initLogin($user);
        // 生成唯一token
        OnlyLogin::onlyRecord($user->uid);
        //登录成功
        return SUCCESS;
    }


    // 登入初始化
    public function initLogin($user)
    {
        // 用户登录成功后操作存储用户信息
        $data = [
            'uid' => $user->uid,
            'user_name'=>$user->user_name,
            'is_system'=>$user->is_system,
            'nick_name'=>$user->user_name,
            'role_id'=>$user->role_id
        ];

        // 存储是否是系统后台的用户
        // if($user->is_system == 1){
        //     //判断是否是系统后台的用户
        // }

        //用户登录token值
        SC::setLogin(true);
        // 存储用户信息
        SC::setUserInfo($data);
        // Session::set('USER_INFO_SESSION',$data);
        // 存储用户角色
        SC::setUserRole($user->role_id);
        // Session::set('USER_ROLE_SESSION',$user->role_id);

        // 用户登录后信息记录
        $data = [
            //当前登录ip
            'current_login_ip' => request()->ip(),
            // 当前登录时间
            'current_login_time' => date('Y-m-d H-i-s',time()),
            // 上次登录时间
            'last_login_time' =>$user->last_login_time
        ];

        // 用户登录后信息记录
        User::where('uid',$user->uid)->update($data);
    }

}
