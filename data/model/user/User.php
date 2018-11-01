<?php

namespace data\model\user;

use think\Model;

class User extends Model
{
    protected $pk = 'uid';

    /**
     * 创建user跟userrole关联模型
     */
    public function userRole()
    {
        return $this->hasOne(\data\model\user\UserRole::class,'role_id','role_id');
    }
}
