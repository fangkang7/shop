<?php
namespace data\service;

use data\model\user\UserRole;
use data\model\user\User;
use think\Request;

class test
{
    // 测试
    public function userList()
    {
        // User -> UserRole role_id
        $kaka = User::with([
            'userRole' => function($userRole){
                $userRole->with([
                    'UserGroup'=> function($userGroup){
                    }
                ]);
            }
        ])->select()->toArray();
        return $kaka;
    }
}


