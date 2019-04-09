<?php
/**
 * Create by PhpStorm
 * User:Admin
 * Date:2019/4/9
 * Time:16:08
 */

namespace Imooc;


class MySQLi implements IDatabase
{
    protected $conn;
    public function connect($host, $user, $pass, $dbname)
    {
        // TODO: Implement connect() method.
        $conn = mysqli_connect($host, $user, $pass, $dbname);
        $this->conn = $conn;
    }
    public function close()
    {
        // TODO: Implement close() method.
        mysqli_close($this->conn);
    }
}