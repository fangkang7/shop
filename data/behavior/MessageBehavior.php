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
        $codes = Config::get('message.');
        // 获取出来是数据，我们需要将信息设置成为常量key，将索引设置成key
        foreach ($codes as $key => $value) {
            define($value['code'],$key);
        }
    }
}
