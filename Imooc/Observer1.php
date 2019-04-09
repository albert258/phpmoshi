<?php
/**
 * Create by PhpStorm
 * User:Admin
 * Date:2019/4/9
 * Time:18:38
 */

namespace Imooc;


class Observer1 implements Observer
{
    public function update($event_info = null)
    {
        // TODO: Implement update() method.
        echo "逻辑1";
    }
}