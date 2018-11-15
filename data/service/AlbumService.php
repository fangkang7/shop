<?php

namespace data\service;

use data\service\BaseServcie;
use Upload;

class AlbumService extends BaseServcie
{
    /**
     * 图片上传
     *
     * @return array
     */
    public function imageUpload($file,$type,$album_id)
    {
        // 确定图片上传的目录
       $path = config('upload'.$type);

       if(!Upload::move($file,$path)){
           return UPLOAD_FILE_ERROR;
       }

       // 获取图片上传名
        $imageName = Upload::getFileName();

       // 获取图片上传路径
        $imagePath = Upload::getPath();

       // 图片处理，生成不同大小的图片
        $album = AlbumImage::albumCreate($path, $imagePath, $album_id, $imageName['fileSuffix'], $imageName['saveName'], $imageName['formerlyName']);

        // 这里为了测试方便，后续需要给我们的错误码里边加进去
        if($album){
            return '保存成功';
        }else{
            return '保存失败';
        }

    }
}
