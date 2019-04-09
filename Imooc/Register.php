<?php
/**
 * Create by PhpStorm
 * User:Admin
 * Date:2019/4/9
 * Time:14:59
 */

namespace Imooc;


class Register
{
    protected static $objects;
    public static function set($name,$object)
    {
        self::$objects[$name] = $object;
    }
    public static function get($name)
    {
        return self::$objects[$name];
    }
    public function _unset($name)
    {
        unset(self::$objects[$name]);
    }
}