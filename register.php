<?php
session_start();


//定义一个常量，用来授权调用includes里的文件

define('IN_TG', true);
//引入公共文件
require dirname(__FILE__).'/includes/common_inc.php';
//转成硬路径，速度更快
//登录状态
_login_state();


//判断是否提交了
if($_GET['action']=='register'){
	//为了防止恶意注册，跨站攻击
	_check_code($_POST['code'],$_SESSION['code']);
	//引入验证文件
	include ROOT_PATH.'includes/register_func.php';



	$_clean=array();
	$_clean['username']=_check_username($_POST['username'],5,25);
	$_clean['password']=_check_password($_POST['password'],$_POST['againpsd'],6,16);
	$_clean['againpsd']=sha1($_POST['againpsd']);
	if(!_fetch_array("SELECT username FROM user WHERE username='{$_clean['username']}'")){
		mysql_query("INSERT INTO user(username,password,againpsd) VALUE('{$_clean['username']}','{$_clean['password']}','{$_clean['againpsd']}')") or die('执行失败'.mysql_error());
		
	}else{
		_alert_back('该用户名已存在！');
	}
	if(_affected_rows()==1){
			_close();
			_session_destory();
			_location('恭喜你注册成功','login.php');

	}else{
			_close();
			_session_destory();
			_location('很遗憾，注册失败','register.php');
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
	<link rel="stylesheet" type="text/css" href="css/register.css">
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
		<form method="post" name="register" action="register.php?action=register">
			<div class="user">
				<label for="">
					<input type="text" class="text" placeholder="昵称（例：哔哩哔哩）" name="username">
				</label>
				<p class="msg">
				5-25个字符，一个汉字为两个字符，推荐使用中文名。</p>
			</div>
			<div class="zifu">
				<label for="">
					<span class="count">0个字符</span>
				</label>				
			</div>
			<div class="pwd">
				<label for="">
					<input class="text" type="password" placeholder="密码（6-16个字符组成，区分大小写）" name="password">					
				</label>
				<p class="msg"></p>
			</div>
			<div class="strong">
				<label for="">
					<span class="ruo com">弱</span>
					<span class="zhong com">中</span>
					<span class="qiang com">强</span>
				</label>
			</div>
			<div class="pwd">
				<label for="">
					<input type="password" class="text" placeholder="确认密码"  name="againpsd">
				</label>
				<p class="msg">请在输入一次</p>
			</div>
			<!-- 验证码 -->
			<div class="yanzhengma">
				<label for="">
					<input type="text" class="text yzm" placeholder="请输入验证码" name="code">
					<div class="yanzheng"><img src="code.php" onclick="javascript:this.src='code.php?tm='+Math.random()" /></div>
				</label>
			</div>
			<div class="btn">
				<input type="submit" class="submit-btn" value="同意协议并注册">
			</div>
		</form>
	</div>


</div>


<?php

require ROOT_PATH.'includes/footer_inc.php';

?>


















<script src="js/register.js"></script>
	
</body>
</html>