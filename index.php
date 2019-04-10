<?php
defined('BASEDIR') or define('BASEDIR',__DIR__);

require_once BASEDIR . '/Imooc/Loader.php';

spl_autoload_register('\\Imooc\\Loader::autoload');

//$obj = new Imooc\Object();
//$obj->title = 'hello';
//echo $obj->title;
//echo $obj->test('hello','12222');
//echo Imooc\Object::test('hello',1234);
//echo $obj("hahahh");

//$db = Imooc\Factory::create();
//$db = new Imooc\MyPDO();
//$db = $db->connect('127.0.0.1','root','root','test');
//$sql = "select `id`,`username`,`created_at` from `test`";
//foreach ($db->query($sql) as $row) {
//    print $row['id'] . "\t";
//    print $row['username'] . "\t";
//    print $row['created_at'] . "\n";
//}
//$page = new Imooc\Page();
//if (isset($_GET['female'])) {
//    $strategy = new Imooc\FemaleUserStrategy();
//}else{
//    $strategy = new Imooc\MaleUserStrategy();
//}
//$page->setStrategy($strategy);
//$page->index();
//testtesttest
$event = new Imooc\Event();
$event->addObserver(new Imooc\Observer1());
$event->trigger();
