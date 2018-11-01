<?php

namespace data\model\user;

use think\Model;

class UserRole extends Model
{
    // 设置主键
    protected $pk = 'role_id';

    /**
     * 用户角色表关联用户组
     */
    public function UserGroup()
    {
        /*
         * 第一个参数是关联的模型
         * 第二个是关联的主键
         * 第三个是本表关联的字段
         * */
        return $this->hasOne('UserGroup','group_id','group_id_array');
    }
}
