<?php  

session_start();

//定义一个常量，用来授权调用includes里的文件

define('IN_TG', true);
//引入公共文件
require dirname(__FILE__).'/includes/common_inc.php';
//转成硬路径，速度更快

//开始处理登录状态
if($_GET['action']=='login'){
	//为了防止恶意注册，跨站攻击
	_check_code($_POST['code'],$_SESSION['code']);
	//引入验证文件
	include ROOT_PATH.'includes/login_func.php';
	//接受数据

	$_clean=array();
	$_clean['username']=_check_username($_POST['username'],5,25);
	$_clean['password']=_check_password($_POST['password'],6,26);
	//到数据库验证消息
	if(!!$_row=_fetch_array("SELECT * FROM user WHERE username='{$_clean['username']}' and password='{$_clean['password']}'LIMIT 1")){
		_close();
		_session_destory();
		_setcookies($_row['username']);
		_location('登录成功！','index.php');
	}else{
		_close();
		_session_destory();
		_location('密码错误或用户名不存在','login.php');
	}

}


?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>哔哩哔哩弹幕视频网 - ( ゜- ゜)つロ  乾杯~  - bilibili</title>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<link rel="icon" href="img/icon/favicon.ico">
	<link rel="stylesheet" type="text/css" href="css/common.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="stylesheet" type="text/css" href="css/header_bf.css">
</head>
<body>
<?php
require ROOT_PATH.'includes/header_bf_inc.php';

?>


<div class="box">
	<div class="line"></div>
	<div class="zhuce"></div>
	<div class="container">
		<form action="login.php?action=login" method="post" name="login">
			<div class="user">
				<label for="">
					<input type="text" class="text" placeholder="你的用户名" name="username">
				</label>
				<p class="msg"></p>
			</div>
			<div class="pwd">
				<label for="">
					<input class="text" type="password" placeholder="密码" name="password">					
				</label>
				<p class="msg"></p>
			</div>
			<!-- 验证码 -->
			<div class="yanzhengma">
				<label for="">
					<input type="text" class="text yzm" placeholder="验证码" name="code">
					<div class="yanzheng"><img src="code.php" onclick="javascript:this.src='code.php?tm='+Math.random()" /></div>
				</label>
			</div>
			<div class="btn">
				<input type="submit" class="submit-btn" value="登陆"	>
				<a href="register.php" class="in">注册</a>
			</div>
		</form>
	</div>
</div>
<script src="js/login.js"></script>
</body>
</html>



<?php

require ROOT_PATH.'includes/footer_inc.php';

?>