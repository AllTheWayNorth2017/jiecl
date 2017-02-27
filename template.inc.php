<?php
//定义一个常量，用来授权调用includes里的文件
define('IN_TG', true);

//设置utf-8
header('Content-Type:text/html;charset=utf-8');
//设置网站根目录
define('ROOT_PATH', dirname(__FILE__));

require ROOT_PATH.'/includes/common_inc.php';
//引入配置信息
require ROOT_PATH.'/config/profile.inc.php';
//引入模板类
require ROOT_PATH.'/includes/templates.class.php';

//引入工具类
require ROOT_PATH.'/includes/tool.class.php';
//实例化模板类
$_tpl=new Templates();
//是否开启缓冲区
define('IS_CACHE', false);
//判断是否开启缓存区
IS_CACHE ? ob_start() : null;

?>