<?php
namespace app\index\controller;

use Config;
use Request,Log;
use think\Controller;
use data\service\AlbumService;

class Index extends Controller
{

    public function index()
    {
        if(Request::isPost()){
            $file = Request::file('image'); // 返回的是 think\File
            $album_id = 30; // goods
            $type = 'goods'; // 图片的类型
            $ablumService = new AlbumService;
            dump($ablumService->imageUpload($file, $type, $album_id));
        }

        return $this->fetch();
    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }


}
