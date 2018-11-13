<?php

namespace data\service;

use data\model\User;
use data\service\BaseServcie;

class UserRoleService extends BaseServcie
{
    /**
    * 角色列表
    *
    * @return array
    */
    public function userRoleList($page_index = 1, $page_size = 5, $where = '1 = 1')
    {
        // 查询用户信息
        // 明确需要的模型都有谁？ user userRole
        $info = User::where($where)->with([
            'userRole' => function($userRole){
                $userRole->with('userGroup');
            }
        ])->page($page_index,$page_size)->select()->toArray();

        $count = User::where($where)->count();

        return $this->setReturnList($info, $count, $page_size);
    }
}
