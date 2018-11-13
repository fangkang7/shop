<?php

namespace data\service;

use SC,Rbac,Tree,Log;

class ModuleService
{
    /**
     * 获取一级导航栏
     * 在这个项目中，所有的导航都是有权限的
     * 导航的显示是根据用户的权限来的
     * 而用户的权限我们在用户登录后是直接存储到SC::getUserRole()中的
     */
    public function getModuleRoot()
    {
        $where = [
            // 判断用户的全权限是否在权限列表中
            ['module_id','in',SC::getUserRole()],
            // 查找的是一级
            ['pid','=',0],
            // 数据库设置的时候有一个admin模块，还有一个平台方模块，现在我们在做admin模块，还需要使用test单元测试，后期这里是需要使用request()->module();来获取这个参数的
            ['module','=','admin']
        ];
        return Rbac::getModuleGroup($where);
    }


    /**
     * 获取二级导航
     */
    public function getModuleRootAndSecond($module_id)
    {
        // 首先需要判断点击的是一级还是二级，虽然现在的项目只有二级，为了后期的扩展性
        $moduleInfo = $this->getModuleByModuleId($module_id);

        // 判断点击的是一级还是二级
        $pid = ($moduleInfo['pid'] == 0) ? $moduleInfo['module_id'] : $moduleInfo['pid'];

        // 查找用户所拥有的权限列表
        $where = [
            ['module_id','in',SC::getUserRole()],
            ['module','=','admin'],
            ['pid','=',$pid]
        ];

        // 查找不需要验证的全局权限列表
        $whereOr = [
            ['module','=','admin'],
            ['is_control_auth','=',0]
        ];

        // 获取的二级权限
        $second = Rbac::getModuleGroup($where,$whereOr);

        // 如果点击的是头部导航栏，那么左边导航的二级导航就是显示的是第一个的内容
        $moduleId = ($moduleInfo['pid'] == 0) ? $second[0]['module_id'] : $moduleInfo['module_id'];

        return [
            'pid'       => $pid,
            'module_id' => $moduleId,
            'second'    => $second
        ];
    }

    /**
     * 获取用户所有的权限
     * 第一个条件是获取用户所拥有的权限列表
     * 第二个条件是获取全网用户都可以访问的列表
     */
    public function getModuleList()
    {
        // 获取需要校验的权限
        $where = [
            ['module_id','in',SC::getUserRole()],
            ['module','=','admin']
        ];
        // 获取不需要校验的权限
        $whereOr = [
            ['module','=','admin'],
            ['is_control_auth','=',0]
        ];
        // 获取用户所有的权限
        return Tree::recursive_make_tree(Rbac::getModuleGroup($where,$whereOr),'module_id');
    }


    /**
     * 根据用户访问的路径，在数据库查找这条路径的信息，用来传递这个权限的module_id
     *
     * @access public
     * @param $module  模块名
     * @param $controller  控制器名
     * @param $action  方法名
     * @return array
     */
    public function getModuleQuery($module,$controller,$action)
    {
        $where = [
            'module'     => $module,
            'controller' => $controller,
            'method'     => $action
        ];
        return (Rbac::getModuleGroup($where))[0];
    }

    /**
     * 根据权限id，查询
     * 这个id有可能会是一级的，也会是二级的，查出来的结果会是多条，所以我们需要取第一条数据
     *
     * @access public
     * @param $value 权限id
     * @return array
     */
    public function getModuleByModuleId($value)
    {
        $where = [
            'module_id' => $value
        ];
        return (Rbac::getModuleGroup($where))[0];
    }


}
