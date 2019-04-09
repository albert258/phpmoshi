<?php
/**
 * Create by PhpStorm
 * User:Admin
 * Date:2019/4/9
 * Time:18:31
 */

namespace Imooc;


abstract class EventGenerator
{
    protected $observers;
    public function addObserver(Observer $observer)
    {
        $this->observers[] = $observer;
    }
    public function notify()
    {
        foreach ($this->observers as $observer){
            $observer->update();
        }
    }
}