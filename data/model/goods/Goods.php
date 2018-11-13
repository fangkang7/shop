<?php

namespace data\model\goods;

use think\Model;

class Goods extends Model
{
    protected $pk = 'good_id';

    /**
     * 关联商品图片管理
     *
     * @return array
     */
    public function album()
    {
        /**
         * 这里解释一下，如果原模型需要关联的模型在同一个文件夹下，直接使用模型名即可
         * 反之需要使用模型的全地址
         */
        return $this->hasOne(\data\model\album\AlbumPicture::class,'pic_id','picture');
    }
}


