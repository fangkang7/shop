<?php

namespace app\http;

use SC,OnlyLogin,Rbac,Log;

class AuthMiddleware
{
    public function handle($request, \Closure $next)
    {
        /**
         * 使用中间件进行白名单判断，判断用户是否权限需要校验
         * Rbac::checkWhite()返回的是boolean
         * true不需要校验直接返回请求
         */
        if(Rbac::checkWhite()){
            return $next($request);
        }

        /**
         * 检测用户是否是唯一登录
         */
         if (OnlyLogin::onlyCheck()) {
             /**
              * 检测用户是否有权限
              */
             if(Rbac::check()){
                 return $next($request);
             }else{
                 return response('');
                 // return redirect($request->module().'/login/login');
             }
         }else{
             return redirect('你被T了');
         }
    }
}
