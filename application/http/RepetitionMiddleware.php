<?php

namespace app\http;

use Session,Log;

/**
 * 规避短时间的重复请求
 */
class RepetitionMiddleware
{
    public function handle($request, \Closure $next)
    {
        //获取最后一次的请求时间
        Session::get('LAST_TIEM');
        //对第一次请求没有LAST_TIEM这个值做处理
        $lastTime = (Session::get('LAST_TIME')) ? Session::get('LAST_TIME') : 0;
        $nowTime = time();
        if($nowTime - $lastTime < 1){
            Log::write('频繁请求');
            //不做任何请求
            return response('');
        }else{
            Log::write('正常操作');
            Session::set('LAST_TIME',$nowTime);
            return $next($request);
        }
    }
}
