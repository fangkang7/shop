<?php

namespace data\service;

use data\service\BaseServcie;
use data\model\user\UserGroup;

class UserGroupService extends BaseServcie
{
    /**
     * 获取用户组信息
     *
     * @return array
     */
    public function userGroupList($page_index = 1, $page_size = 5,$where = '1 = 1')
    {
        // 查询用户信息
        // 明确需要的模型都有谁？UserGroup
        $info = UserGroup::where($where)->page($page_index,$page_size)->select()->toArray();

        $count = UserGroup::where($where)->count();

        return $this->setReturnList($info, $count, $page_size);
    }


    /**
     * 添加用户组
     * @param array $module_id  权限id
     * @param string $group_name  用户组名
     * @return array
     */
    public function addUserGroup($module_id,$group_name)
    {
        // 判断用户组名是否重名
        $count = UserGroup::where('group_name',$group_name)->count();
        if($count > 0){
            // 用户组名重复
            return false;
        }
        $data = [
            'group_name' => $group_name,
            'module_id_array' => $module_id,
            'is_system' => 0
        ];
        $userGroup = new UserGroup;
        $userGroup->save($data);
    }

    /**
     * 修改权限组
     *
     * 修改会传进来三个参数
     * @param group_id  用户组的id
     * @param module_id 权限id
     * @param group_name 权限组名字
     * @return array
     */
    public function updateUserGrop($group_id,$module_id,$group_name)
    {
        // 根据用户组的id获取用户组名，验证用户组名不能冲复
        $update_group_name = UserGroup::where('group_id',$group_id)->value('group_name');

        // 当原名和修改后的名字不一样的时候，进行判断是否与其他用户组的名字重复
        if($update_group_name != $group_name){
            $count = UserGroup::where('group_name',$update_group_name)->count();
            if($count > 0){
                return false;
            }
        }
        $data = [
            'group_name' => $update_group_name,
            'module_id_array' => $module_id,
            'is_system' => 0
        ];
        $userGroup = new UserGroup;
        $userGroup->save($data, ['group_id'=> $group_id]);
    }

}
