<?php

namespace data\model\album;

use think\Model;

class AlbumPicture extends Model
{
    protected $pk = 'id';
    /**
     * 是否需要自动写入时间戳 如果设置为字符串 则表示时间字段的类型
     * @var bool|string
     */
    protected $autoWriteTimestamp = 'datetime'; // 默认是时间戳

    /**
     * 创建时间字段 false表示关闭
     * @var false|string
     */
    protected $createTime = 'upload_time';

    /**
     * 更新时间字段 false表示关闭
     * @var false|string
     */
    protected $updateTime = 'upload_time';
}
