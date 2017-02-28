<?php
require substr(dirname(__FILE__),0,-6).'/template.inc.php';
require ROOT_PATH.'/action/Action.class.php';
require ROOT_PATH.'/action/ManageAction.class.php';
require ROOT_PATH.'/model/manage.class.php';
global $_tpl;

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PWD', '123456');
define('DB_NAME', 'sys'); 

new ManageAction($_tpl);  //入口







?>