<?php


namespace Imooc;


class DB
{
    protected static $db;
    private function __construct()
    {

    }
    public static function getInstance()
    {
        if (self::$db) {
            return self::$db;
        }else{
            self::$db = new self();
            return self::$db;
        }
    }
}