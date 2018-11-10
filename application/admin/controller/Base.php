<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;
use data\service\ModuleService;


class Base extends Controller
{
    private $ModuleService;

    /**
     * 应用初始化
     * 导航设置
     */
    public function __construct()
    {
        parent::__construct();

        // 获取访问路径
        $module     = request()->module();
        $controller = request()->controller();
        $action     = request()->action();

        $this->ModuleService = new ModuleService;

        // 获取用户访问的这条路径在数据库的信息，用来查找二级导航给传递条件
        $module = $this->ModuleService->getModuleQuery($module,$controller,$action);

        // 获取一级导航栏
        $root = $this->ModuleService->getModuleRoot();

        // 获取二级导航栏
        $rootSecond = $this->ModuleService->getModuleRootAndSecond($module['module_id']);

        // 获取用户所有的权限
        $moduleList = $this->ModuleService->getModuleList();

        // 试图的渲染
        $this->assign([
            'module_root'       => $root,
            'module_root_secode' => $rootSecond['second'],
            'module_list'       => $moduleList, // 登入用户的权限
            'pid'               => $rootSecond['pid'],
            'module_id'         => $rootSecond['module_id'],
        ]);

        $this->init();
    }

    protected function init()
    {

    }
}


