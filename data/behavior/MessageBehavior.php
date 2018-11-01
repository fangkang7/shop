<?php

namespace data\behavior;

use Config;

/**
 * 设置常量返回码
 */
class MessageBehavior
{
    public function run()
    {
        $codes = Config::get('message.code');
        foreach ($codes as $key => $value) {
            define($key,$value);
        }
    }
}
