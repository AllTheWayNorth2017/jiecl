<?php 

session_start();
//定义一个常量，用来授权调用includes里的文件
define('IN_TG', true);
//引入公共文件
require dirname(__FILE__).'/includes/common_inc.php';
//转成硬路径，速度更快
_code(75,25);

?>