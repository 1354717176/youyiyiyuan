<?php

namespace app\console\basics\controller;

use api\common\BaseLogin;


/**
 * 按钮
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/5/6
 * Time: 10:25
 */
class Button extends BaseLogin
{
    public function index()
    {
        return $this->fetch();
    }
}