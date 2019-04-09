<?php
/**
 * Create by PhpStorm
 * User:Admin
 * Date:2019/4/9
 * Time:17:34
 */

namespace Imooc;


class MaleUserStrategy implements UserStrategy
{
    public function showAd()
    {
        // TODO: Implement showaAd() method.
        return "Iphone";
    }
    public function showCategory()
    {
        // TODO: Implement showCategory() method.
        return "电子产品";
    }
}