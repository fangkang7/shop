<?php

namespace data\util;

use Session;
/**
 * 工具类
 * 用户缓存 facade代理 SC
 */
class SC
{
      /**
       * 用户登录的session key
       */
      CONST LOGIN_MARK_SESSION_KEY = 'LOGIN_MARK_SESSION';
      /**
       * 权限信息
       * @var string
       */
      CONST USER_ROLE_SESSION      = 'USER_ROLE_SESSION';
      /**
       * USER用户信息
       * @var string1
       */
      CONST USER_INFO_SESSION      = 'USER_INFO_SESSION';

     /**
      * 用户是否是系统后台用户
      */
      CONST USER_IS_SYSTEM_SESSION = 'USER_IS_SYSTEM_SESSION';
      // /**
      //  * 是否设置用户登入的有效时间
      //  * @var string
      //  */
      // CONST CHECK_TIME_SESSION = 'CHECK_TIME_SESSION';
      //
      // private $checkTime = false;

      //---------------------------设置和判断用户的是否登入
      // 设置用户登入token
      public function setLogin($value)
      {
          Session::set(self::LOGIN_MARK_SESSION_KEY, password_hash($value, 1));
      }
      // 判断用户是否登入成功
      public function getLogin()
      {
          Session::get(self::LOGIN_MARK_SESSION_KEY);
      }
      //---------------------------设置用户和获取用户的登入信息
      // 设置用户的信息
      public function setUserInfo($value)
      {
          Session::set(self::USER_INFO_SESSION, $value);
      }
      // 获取用户的信息
      public function getUserInfo($value = null)
      {
          $userInfo = Session::get(self::USER_INFO_SESSION);
          // 这里做这个判断是因为在验证token时需要用户的id
          return ($value) ? $userInfo[$value] : $userInfo;
      }
      //--------------------------设置和获取用户的权限
      // 设置用户的角色
      public function setUserRole($value)
      {
          Session::set(self::USER_ROLE_SESSION, $value);
      }
      // 获取用户的角色
      public function getUserRole()
      {
          Session::get(self::USER_ROLE_SESSION);
      }

      //--------------------------设置和获取用户是否是系统后台用户

    /**
     * 设置用户是否为后台系统用户
     * @access public
     * @param boolean $value 用户是后台用户为true，反正false
     */
      public function setIsSystem($value)
      {
          Session::set(self::USER_IS_SYSTEM_SESSION,$value);
      }

    /**
     * 获取用户是否是后台用户
     * @access public
     * @return array
     */
      public function getIsSystem($value)
      {
          Session::set(self::USER_IS_SYSTEM_SESSION,$value);
      }

      //-------------------------用户退出清空用户缓存信息
      // 退出登入
      public function clear()
      {
          Session::del(self::USER_INFO_SESSION);
          Session::del(self::USER_ROLE_SESSION);
          Session::del(self::LOGIN_MARK_SESSION_KEY);
      }
}
