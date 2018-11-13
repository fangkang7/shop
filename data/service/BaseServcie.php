<?php

namespace data\service;


class BaseServcie
{
    /**
    * 对于分页数据返回处理
    *
    * $param array $info  需要 处理的数据
    * $param int $count  总的数据量
    * $param int $page_size  每页显示的条数
    * @return array
    */
    public function setReturnList($info, $count, $page_size)
    {
        if($page_size == 0){
            // 每页显示的数据
            // $page_size = 5;
            // 总页数
            $page_count = 1;
        }else{
            if($count % $page_size == 0){
                $page_count = $count / $page_size;
            }else{
                $page_count = (int)($count / $page_size);
            }
        }

        return [
            // 角色数据
            'data' => $info,
            // 角色总的数据
            'total_count' => $count,
            // 当前在第几页
            // 'now_index' => $page_index,
            // 每页显示的数据
            // 'page_size' => $page_size,
            // 共几页
            'page_count' => $page_count
        ];
    }
}
