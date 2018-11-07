<?php
namespace app\index\controller;

use Config;

class Index
{

    public function index()
    {
        return json(Config::get());
    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }
}
