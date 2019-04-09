<?php


namespace Imooc;


class Factory
{
    public static function create()
    {
        $db = DB::getInstance();
        Register::set('db',$db);
        return $db;
    }
}