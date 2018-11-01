<?php

namespace data\validate;

use think\Validate;

/**
 * 对用户输入登录数据进行验证
 */
class UserValidate extends Validate
{
    /**
     * 定义验证规则
     * 格式：'字段名'	=>	['规则1','规则2'...]
     *
     * @var array
     */	
	protected $rule = [
	    'vertify' => 'require|captcha'
    ];
    
    /**
     * 定义错误信息
     * 格式：'字段名.规则名'	=>	'错误信息'
     *
     * @var array
     */	
    protected $message = [
        'vertify' => [
            'require' => '验证码必须有',
            'captcha' =>'验证码错误'
        ]
    ];
}
