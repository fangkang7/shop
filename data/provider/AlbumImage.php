<?php

namespace data\provider;

use data\model\album\AlbumPicture;
use think\Image;

class AlbumImage
{
    /**
     * 函数的含义说明
     * $param $upFilePath  图片上传路径
     * $param $imagePath   图片路径
     * $param $album_id    图片相册id
     * $param $ext         图片扩展
     * $param $pic_name    图片名
     * $param $pic_tag     图片原名
     * @return array
     */
    public function albumCreat($upFilePath,$imagePath,$album_id,$ext,$pic_name,$pic_tag)
    {
        $image = Image::open($imagePath);
        $photoArray = [
            "bigPath" => [
                "path"   => $upFilePath.'/' . $pic_tag . "1." . $ext,
                "width"  => 700,
                "height" => 700,
            ],
            "middlePath" => [
                "path"   => $upFilePath.'/' . $pic_tag . "2." . $ext,
                "width"  => 360,
                "height" => 360,
            ],
            // "smallPath" => [
            //     "path" => $upFilePath . md5(time() . $pic_tag) . "3" . $ext,
            //     "width" => 240,
            //     "height" => 240,
            // ],
            // "littlePath" => [
            //     "path" => $upFilePath . md5(time() . $pic_tag) . "4" . $ext,
            //     "width" => 60,
            //     "height" => 60,
            // ]
        ];
        foreach ($photoArray as $key => $value){
            $image->thubm($value['width'],$value['height'],Image::THUMB_CENTER)->save($value['path']);
        }
        // 添加数据
        return AlbumPicture::create([
            'pic_cover_big' => $photoArray["bigPath"]["path"],
            'pic_size_big'  => $photoArray["bigPath"]["width"] . "," . $photoArray["bigPath"]["height"],
            'pic_cover_mid' => $photoArray["middlePath"]["path"],
            'pic_size_mid'  => $photoArray["middlePath"]["width"] . "," . $photoArray["middlePath"]["height"],
            'album_id'      => $album_id,
            'pic_name'      => $pic_name,
            'pic_tag'       => $pic_tag,
            // 'upload_time'   => date('y-m-d h:i:s', time())
        ]);
    }
}
