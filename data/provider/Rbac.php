<?php

namespace data\provider;

use app\common\model\admin\RoleModel;
use Request,SC,Config,Log;
use data\model\Module;
use data\model\user\UserRole;

class Rbac
{
    // 模块名
    private $module;
    // 控制器名
    private $controller;
    // 方法名
    private $action;
    // 需要检验的模块
    private $authModule = [
        'admin',
        'test'
    ];

    /**
     * Rbac constructor.
     * 在Rbac初始化的时候，获取用户请求的url  从而校验权限
     * 模块名    module
     * 控制器名  controller
     * 方法名    action
     */
    public function __construct()
    {
        $this->module     = strtolower(request()->module());
        $this->controller = strtolower(request()->controller());
        $this->action     = strtolower(request()->action());


        // 定义测试数据
        // $this->module     = 'admin';
        // $this->controller = 'order';
        // $this->action     = 'orderlist';
    }

    /**
     * 做权限校验，校验用户访问的模块是否在自定义的模块里
     */
    public function check()
    {
        // 需要检验用户是否登录成功,在登录成功之后在做校验
        Log::write(SC::getLogin());
        if(!SC::getLogin()){
            return false;
        }
        /**
         * 判断用户访问的模块是否在需要校验的模块
         */
        if(in_array($this->module,$this->authModule)){
            /**
             * 如果用户不是系统后台用户那就需要权限验证
             */
            if(!SC::getIsSystem()){
                return false;
            }
            /**
             * 用户为非后台用户需要做全面校验
             * 1.首先通过url判断用户是否需要权限
             * 2.如果需要权限，判断用户是否为权限用户
             * 3.进行权限校验
             */
            return $this->checkModule();
        }
        return true;
    }

    /**
     * 获取所有权限信息
     */
    public function getModuleGroup($where = '1 = 1',$whereOr = null)
    {
        if($whereOr){
            return Module::where([$where])->whereOr([$whereOr])->order('pid,sort')->select()->toArray();
        }else{
            return Module::where($where)->order('pid,sort')->select()->toArray();
        }
    }


    public function checkModule()
    {
        $whereModule = [
            'module' => $this->module,
            'controller' => $this->controller,
            'method' => $this->action
        ];

        // 获取请求的路径对应的权限
        $module = ($this->getModuleGroup($whereModule))[0];
        // 判断当模块不存在，或者is_control_auth为0时返回true，为0是不控制权限，直接请求
        if(empty($module) || $module['is_control_auth'] == 0){
            return true;
        }
        // 获取用户所拥有的权限  json串
        $roleModule = explode(',', SC::getUserRole());
        // 查看访问的权限是否在用户权限列表中
        return in_array($module['module_id'],$roleModule);
    }

    /**
     * 验证白名单用户
     */
    public function checkWhite()
    {
        // 获取白名单模块
        $white = Config::get('white.');
        /**
         * empty 检查一个变量是否为空  为空时返回true
         * isset 检测变量是否设置  不存在返回false
         * 当白名单都没有用户输入的url时需要进行校验
         */

        /**
         * 当module存在白名单时返回false，进行action的验证
         * 当module不存在的时候返回true，进入iif判断
         * 在继续验证controller，当controller不存在白名单时返回true，进入if判断返回false
         * 当验证controller存在时返回false，进行action的验证
         * 当module和controller都存在时返回的都是false，就进行action的验证
         */
        if (empty($white[$this->module]) || empty($white[$this->module][$this->controller])) {
            // 先判断访问地址是否白名单中
            return false; //需要权限校验
        }
        if (in_array($this->action, $white[$this->module][$this->controller])) { //判断方法是否在白名单列表中
            return true;
        } else {
            return false; //需要权限校验
        }
    }

    /**
     * 获取用户权限
     */
    public function getRoleModule($role_id)
    {
        $role = UserRole::with([
            'UserGroup' => function($userGroup){
                // 这里可以对查询字段和查询条件做过滤
                $userGroup->field('group_id,module_id_array')->where('group_status', 1);
            }
        ])->where([
            'role_id'=>$role_id,
            'role_status' => 1
        ])->find()->toArray();
        /*
         * '120,121,122,123,129,126,127,144,360,128,133,149,139,169,151,171,172,210,334,478,516,517,179,180,186,187,195,196,197,198,199,200,201,202,203,446,469,184,185,190,194,189,191,192,487,533,534,471,472,528,529,530,218,418,474,678,679,680,10006,409,403,405,454,457,459,462,463,460,684,726,727,729,730,732,467,515'
         * 返回用户所拥有的权限
         * */
        return $role['user_group']['module_id_array'];

    }

}
