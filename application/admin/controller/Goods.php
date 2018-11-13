<?php

namespace app\admin\controller;

use data\service\GoodsService;
use Request;

class Goods extends Base
{
    protected $goodsService;
    // 其他控制器初始化方法
    protected function init()
    {
        $this->goodsService = new GoodsService;
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
    }


}
