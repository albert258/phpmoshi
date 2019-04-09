<?php
/**
 * Create by PhpStorm
 * User:Admin
 * Date:2019/4/9
 * Time:16:24
 */

namespace Imooc;


interface IDatabase
{
    public function connect($host,$user,$pass,$dbname);
    public function close();
}