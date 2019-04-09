<?php


namespace Imooc;


class Loader
{
    static function autoload($class)
    {
        $file = BASEDIR .'/'. str_replace('\\','/',$class) . '.php';
//        var_dump($file);
        if (is_file($file)) {
            require_once $file;
        }else{
            die("no file");
        }
    }
}