<?php

namespace app\http;

use SC,OnlyLogin;

class AuthMiddleware
{
    public function handle($request, \Closure $next)
    {
         if (OnlyLogin::onlyCheck()) {
             return $next($request);
         }
         return redirect('你被T了');
    }
}
