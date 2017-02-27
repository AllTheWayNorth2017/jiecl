<?php
require substr(dirname(__FILE__),0,-6).'/template.inc.php';
require ROOT_PATH.'/model/manage.class.php';

global $_tpl;

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PWD', '123456');
define('DB_NAME', 'sys'); 

//入口
new Manage($_tpl);







?>