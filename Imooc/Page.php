<?php
/**
 * Create by PhpStorm
 * User:Admin
 * Date:2019/4/9
 * Time:17:37
 */

namespace Imooc;

class Page
{
    protected $strategy;
    public function index()
    {
        echo "AD:" . "<br/>";
        echo $this->strategy->showAd();
        echo "<br/>";
        echo "Category:" . "<br/>";
        echo $this->strategy->showCategory();
    }
    public function setStrategy(UserStrategy $strategy)
    {
        $this->strategy = $strategy;
    }
}