<?php
/**
 * Create by PhpStorm
 * User:Admin
 * Date:2019/4/9
 * Time:16:08
 */

namespace Imooc;
use PDO;

class MyPDO implements IDatabase
{
    protected $conn;
    public function connect($host, $user, $pass, $dbname)
    {
        // TODO: Implement connect() method.
        $conn = new PDO("mysql:host=$host;dbname=$dbname",$user,$pass);
        $this->conn = $conn;
        return $conn;
    }
    public function close()
    {
        // TODO: Implement close() method.
        unset($this->conn);
    }
}