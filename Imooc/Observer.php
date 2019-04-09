<?php
/**
 * Create by PhpStorm
 * User:Admin
 * Date:2019/4/9
 * Time:18:32
 */

namespace Imooc;


interface Observer
{
    public function update($event_info = null);
}