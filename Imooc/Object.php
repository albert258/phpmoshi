<?php
namespace Imooc;
class Object
{
    public $foo;
    protected $array = array();
    public function __construct($foo = "hello")
    {
        $this->foo = $foo;
    }

    public function __set($name, $value)
    {
        // TODO: Implement __set() method.
        var_dump(__METHOD__);
        $this->array[$name] = $value;
    }
    public function __get($name)
    {
        // TODO: Implement __get() method.
        var_dump(__METHOD__);
        return $this->array[$name];
    }
    public function __call($name, $arguments)
    {
        // TODO: Implement __call() method.
        var_dump($name, $arguments);
        return "magic function";
    }
    public static function __callStatic($name, $arguments)
    {
        // TODO: Implement __callStatic() method.
        var_dump($name, $arguments);
        return "magic function";
    }
    public function __toString()
    {
        // TODO: Implement __toString() method.
        return $this->foo;
    }
    public function __invoke($params)
    {
        // TODO: Implement __invoke() method.
        var_dump($params);
        return 'magic invoke';
    }
}