<?php
/**
 * Create by PhpStorm
 * User:Admin
 * Date:2019/4/9
 * Time:18:35
 */

namespace Imooc;


class Event extends EventGenerator
{
    public function trigger()
    {
        echo "Event" . "<br/>";
        $this->notify();
    }
}