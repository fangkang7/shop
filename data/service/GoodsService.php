<?php

namespace data\service;

use data\service\BaseServcie;
use data\model\goods\Goods;

class GoodsService extends BaseServcie
{

    /**
     * 商品列表
     *
     * @return array
     */
    public function getGoodsList($page_index = 1,$page_size = 0,$where = '1 = 1')
    {
        // page的第一个参数是第几页，page的第二个参数为查询几条数据
        $info = Goods::where($where)->with('album')->page($page_index,$page_size)->select()->toArray();
        $count = Goods::where($where)->count();
        return $this->setReturnList($info,$count,$page_size);
    }

    /**
     * 函数的含义说明
     *
     * @return array
     */
    public function updategoodsqrcode($goods_id = 382)
    {
        if(empty($goods_id)){
            return GOODS_ERROR;
        }
        // 需要生成二维码的地址
        $url = 'http://localhost/goods/goodinfo/goodsid=382';
        // 二维码保存地址
        $path = ROOT.'upload\goods_qrcode\goods_qrcode_'.$goods_id.time().'.png';
    }
}
