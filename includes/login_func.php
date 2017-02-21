<?php 
//防止恶意调用
if(!defined('IN_TG')){
	exit('Access Defined!');
}

/*_check_uesername
*
*
*
*
*/

function _check_username($_string,$_min,$_max){

	//长度限制
	$_string=trim($_string);
	if (mb_strlen($_string,'gb2312')<$_min-1||mb_strlen($_string,'gb2312')>$_max+1){
		//_alert_back('用户名长度要大于'.$_min.'位小于'.$_max.'位');

	}
	//非法字符限制
	$_char_pattern="/[\x{4e00}-\x{9fa5}\w]+$/u";
	if(!preg_match($_char_pattern,$_string)){
		_alert_back('用户名含有非法字符');
	} 
	return _mysql_string($_string);
}


/**_check_password
*
*
**/

function _check_password($_string,$_min,$_max){

	//长度限制
	$_string=trim($_string);
	if (mb_strlen($_string,'utf-8')<$_min-1||mb_strlen($_string>$max,'utf-8')>$_max+1) {
		_alert_back('密码长度要大于'.$_min.'位小于'.$_max.'位');
	}
	
	
	return _mysql_string(sha1($_string));

}

/**********/
function _setcookies($_username){
	setcookie('username',$_username);

}

?>