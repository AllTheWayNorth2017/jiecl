<?php
	header("Content-Type: text/xml;charset=utf-8");
	header("Cache-Control: no-cache");
	//接受数据
	$username = $_GET['username'];
	if($username=="好开心啊") {
		echo "用户名不可用";
	}else{
		echo "用户名可以用";
	}