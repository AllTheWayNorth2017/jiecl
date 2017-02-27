<?php
/*
*_alert_back()表示JS弹窗
*acess public
*@param $_info
*@return void
*
****/

function _alert_back($_info) {
	echo "<script type='text/javascript'>alert('$_info');history.back();</script>";
	exit();
}
/*
*_code()是验证码函数
*@access public
*@param int $_width 表示验证码宽度
*@param int $_height 表示验证码高度
*@param int $_rnd_num 表示验证码位数
*@return void  执行后产生一个验证码

*/

function _code($_width=75,$_height=25,$_rnd_num=4){

	
	//创建随机数
	for($i=0;$i<$_rnd_num;$i++){
		$_nmsg.=dechex(mt_rand(0,15));
	}
	//保存在session
	$_SESSION['code']=$_nmsg;



	//创建一张白色背景图像
	$_img=imagecreatetruecolor($_width,$_height);
	$_white=imagecolorallocate($_img, 255, 255, 255);
	imagefill($_img,0,0,$_white);

	//随机画出线条

	for($i=0;$i<6;$i++){
		$_rnd_color=imagecolorallocate($_img, mt_rand(200,255), mt_rand(200,255), mt_rand(200,255));
		imageline($_img, mt_rand(0,$_width), mt_rand(0,$_height), mt_rand(0,$_width), mt_rand(0,$_height), $_rnd_color);
	}


	//随机打雪花
	for($i=1;$i<100;$i++){
		imagestring($_img, 1, mt_rand(1,$_width), mt_rand(1,$_height), "*",imagecolorallocate($_img, mt_rand(200,255), mt_rand(200,255), mt_rand(200,255)));
	}

	//输出验证码
	for($i=0;$i<strlen($_SESSION['code']);$i++){
		imagestring($_img, mt_rand(3,5),$i*$_width/$_rnd_num+mt_rand(1,10), mt_rand(1,$_height/2), $_SESSION['code'][$i], imagecolorallocate($_img, mt_rand(0,100), mt_rand(0,150), mt_rand(0,200)));
	}

	//输出图像
	header('Content-Type:image/png');
	imagepng($_img);

	//销毁图像

	imagedestroy($_img);
	}


	/*_check_code()
	*access public
	*
	***/
	function _check_code($_first_code,$_end_code){
		if($_first_code != $_end_code){
			_alert_back('验证码错误');
		}

	}



/***********/
function _mysql_string($_string) {
	//get_magic_quotes_gpc()如果开启状态，那么就不需要转义
	if (!GPC) {
		if (is_array($_string)) {
			foreach ($_string as $_key => $_value) {
				$_string[$_key] = _mysql_string($_value);   //这里采用了递归
			}
		} else {
			$_string = mysql_real_escape_string($_string);
		}
	} 
	return $_string;
}



/**********/

function _location($_info,$_url){
	if(!empty($_info)){
		echo "<script type='text/javascript'>alert('$_info');location.href='$_url';</script>";
		exit();

	}else{
		header('Location:'.$_url);
	}
	
}
/*********/

function _login_state(){
	if(isset($_COOKIE['username'])){
		_alert_back('登录状态无法进行本操作！');
	}
}

/******/

function _session_destory(){
	session_destroy();
}
/******/
function _unsetcookies(){
	setcookie('username','');
	_session_destory();
	_location('已成功退出','index.php');
}

?>