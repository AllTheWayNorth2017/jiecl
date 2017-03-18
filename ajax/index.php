<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ajax</title>
	<script type="text/javascript">
		

		//创建ajax引擎
function getXmlHttpObject() {
	//不同的浏览器获取对象xmlhttprequest对象方法不一样
	var xmlHttpRequest;
	if(window.ActiveXObject){
		xmlHttpRequest = new ActiveXObject("Microsoft.XMLHTTP");
	}else{
		xmlHttpRequest = new XMLHttpRequest();
	}

	return xmlHttpRequest;
}


var myXmlHttpRequest = "";
//验证用户名是否存在
 function checkName() {
 	 myXmlHttpRequest = getXmlHttpObject();
 	//怎么判断是否创建成功

 	if(myXmlHttpRequest) {
 		//通过myXmlHttpRequest对象发送请求到服务器的某个页面
 		var url = "check.php?username="+$("username").value;
 		
 		//打开请求
 		myXmlHttpRequest.open("get",url,true);
 		//指定回调函数
 		myXmlHttpRequest.onreadystatechange = chuli;
 		//发送请求
 		myXmlHttpRequest.send(null);

 	}else{
 		window.alert("创建失败");
 	}
 }

 function chuli() {
 	
 	if(myXmlHttpRequest.readyState == 4) {
 		$('myreg').value = myXmlHttpRequest.responseText;
 	}
 }

function $(id) {
	return document.getElementById(id);
}

	</script>
</head>
<body>

	<form method="post" name="register" action="index.php?action=check">
		<p>用户名</p>
		<input type="text" onkeyup="checkName();" name="username" id="username">
		
		<input style="border-width: 0;color: red" type="text" id="myreg">
		<p>密 码</p>
		<input type="password" name="password">
		<br>
		<input type="submit" value="注册">
		<div id="loading">
			<p>加载中</p>
		</div>
		<div id="success">
			<p>成功</p>
		</div>
	</form>
</body>
</html>