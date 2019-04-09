<?php
/**
 * Create by PhpStorm
 * User:Admin
 * Date:2019/4/9
 * Time:17:32
 */

namespace Imooc;


class FemaleUserStrategy implements UserStrategy
{
    public function showAd()
    {
        // TODO: Implement showaAd() method.
        return "女装";
    }
    public function showCategory()
    {
        // TODO: Implement showCategory() method.
        return "2014女装";
    }
}