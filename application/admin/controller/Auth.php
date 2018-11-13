<?php

namespace app\admin\controller;

use app\admin\controller\Base;
use data\service\UserGroupService;
use Request;

use data\service\UserRoleService;

class Auth extends Base
{
    protected $userRole;
    protected $userGroup;

    protected function init()
    {
        $this->userRole = new UserRoleService;
        $this->userGroup = new UserGroupService;
    }

    /**
     * 获取用户角色列表
     *
     * @return array
     */
    public function userlist()
    {
        if(Request::isPost()){
            /**
             * 在做分页之前呢！我们需要知道从前台给我们发起的请求时都有什么参数
             * 'page_index' => '1',  用户当前的分页是第几页
             * 'page_size' => '20',  当前页面显示的数据
             * 'search_text' => '',  查询的条件
             * 'controller' => 'auth',
             * 'action' => 'userlist',
             */
            $page_index  = Request::param('page_index');
            $page_size   = Request::param('page_size');
            $search_text = Request::param('search_text');
            $where = [
                ['user_name', 'like', '%'.$search_text.'%']
            ];
            $user_list = $this->userRole->userRoleList($page_index,$page_size,$where);
            return json($user_list);
        }
        return $this->fetch();
    }

    /**
     * 用户组
     *
     * @return array
     */
    public function authgrouplist()
    {
        if(Request::isPost()){
            /**
             * 在做分页之前呢！我们需要知道从前台给我们发起的请求时都有什么参数
             * 'page_index' => '1',  用户当前的分页是第几页
             * 'page_size' => '20',  当前页面显示的数据
             */
            $page_index  = Request::param('page_index');
            $page_size   = Request::param('page_size');
            return json($this->userGroup->userGroupList($page_index, $page_size));
        }

        // 在这里需要获取全部的权限，后期完善

        return $this->fetch();
    }

    /**
     * 添加用户组
     *
     * @return array
     */
    public function addusergroup()
    {
        // 是权限id
        $module_id  = Request::param('array'); // 120,121
        // 用户组的名称
        $group_name   = Request::param('roleName');

        return json($this->userGroup->addUserGroup($module_id,$group_name));
    }
}
