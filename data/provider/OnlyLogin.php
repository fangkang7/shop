<?php

namespace data\provider;

use Cookie,Cache,Log;


/**
 * 唯一登录的服务类
 */
class OnlyLogin
{
    /**
     * 验证用户是否唯一登录
     * @return array
     */
    public function onlyCheck()
    {
        Log::write('进入了唯一登录');
        // 获取本地的token
        $cookieToken = Cookie::get('TOKEN63');
        // 获取服务端缓存
        $cacheToken = Cache::get('TOKEN63');
        // 当服务端或者本地的token为空时允许登录，只可以有一个人登陆进去，所以不管是否异地
        if(empty($cookieToken) || empty($cacheToken)){
            return true;
        }
        if($cacheToken != $cookieToken){
            return false;
        }
        return true;
    }

    /**
     * 生成唯一key
     * @param $user_id  用户id
     */
    public function onlyRecord($user_id)
    {
        Log::write('你进来了'.$user_id);
        // 获取已经创建好的token
        $token = $this->creatToken($user_id);
        // 本地设置token
        Cookie::set('TOKEN'.$user_id,$token);
        // 服务端设置token
        Cache::set('TOKEN'.$user_id,$token);
    }

    /**
     * 生成唯一的token
     * @param $user_id 用户id
     * @return string
     */
    public function creatToken($user_id)
    {
        //时间戳
        $time = time();
        //10到1000的随机数
        $nonce = mt_rand(10,1000);
        //按照字典序排序
        $array = array($time,$nonce,'ONLY_USER_TOKEN',$user_id);
        sort($array);
        //转为字符串
        $token = implode($array);
        return sha1($token);
    }

    /**
     * 清除用户登录的信息
     */
    public function clear()
    {

    }
}


