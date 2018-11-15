<?php

namespace app\admin\controller;

use data\service\AlbumService;
use data\service\GoodsService;
use Request;

class Goods extends Base
{
    /**
     * @var 商品服务
     */
    protected $goodsService;
    /**
     * @var 图片上传服务
     */
    protected $albumService;

    // 其他控制器初始化方法
    protected function init()
    {
        $this->goodsService = new GoodsService;
        $this->albumService = new AlbumService;
    }

    /**
     * 商品列表
     *
     * @return array
     */
    public function goodslist()
    {
        if(Request::isPost()){
            $page_index = Request::param('page_index');
            $page_size  = Request::param('page_size');

            // 下面就是查询商品，属于业务了，所以我们就需要开始创建模型和service来处理
            return json($this->goodsService->getGoodsList($page_index,$page_size));
        }
        return $this->fetch();
    }

    /**
     * 修改商品二维码
     *
     * @return array
     */
    public function updategoodsqrcode()
    {
        $goods_id = Request::param('good_id');

        // 更新二维码
        return json($this->goodsService->updategoodsqrcode($goods_id));
    }

    /**
     * 添加商品，这里暂时只做图片上传
     *
     * @param $file 返回think\file这个类
     * @param $type 生成文件的目录
     * @param $album_id 后台有相册功能，所以设置成固定的
     * @return array
     */
    public function addgoods()
    {
        if(Request::isPost()){
            $file = Request::file('image');
            $album_id = 30;
            $type = 'goods';
            return $this->albumService->imageUpload($file,$type,$album_id);
        }
        return $this->fetch();
    }

}
