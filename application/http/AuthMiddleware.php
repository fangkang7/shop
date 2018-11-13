<?php

namespace app\http;

use SC,OnlyLogin,Rbac,Log;

class AuthMiddleware
{
    public function handle($request, \Closure $next)
    {
        Log::write('进入了权限验证');
        //规避单元测试模块的正常访问
        if(request()->module() == 'test'){
            return $next($request);
        }
        /**
         * 使用中间件进行白名单判断，判断用户是否权限需要校验
         * Rbac::checkWhite()返回的是boolean
         * true不需要校验直接返回请求
         */
        if(Rbac::checkWhite()){
            Log::write('白名单验证通过');
            return $next($request);
        }

        /**
         * 检测用户是否是唯一登录
         */
         if (OnlyLogin::onlyCheck()) {
             Log::write('唯一登录进入了');
             /**
              * 检测用户是否有权限
              */
             if(Rbac::check()){
                 Log::write('权限不需要校验');
                 return $next($request);
             }else{
                 return redirect($request->module().'/login/login');
             }
         }else{
             return redirect('你被T了');
         }
    }
}
