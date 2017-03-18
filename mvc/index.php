<?php


header("Content-Type:text/html;charset=utf-8");

include './controllers/TestController.php';

$classname = 'TestController';
$controller = new $classname();


$controller -> test();