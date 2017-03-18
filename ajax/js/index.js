//创建ajax引擎
function getXmlHttpObject() {
	//不同的浏览器获取对象xmlhttprequest对象方法不一样
	var xmlHttpRequest;
	if(window.ActiveXObject){
		xmlHttpRequest = new ActiveXObject("Microsoft.XMLHTTP");
	}else{
		xmlHttpRequest = new XMLHttpREquest();
	}

	return xmlHttpRequest;
}


//验证用户名是否存在
 function checkName() {
 	var myXmlHttpRequest = getXmlHttpObject();
 	//怎么判断是否创建成功

 	if(myXmlHttpRequest) {
 		window.alert("创建ajax引擎OK")；
 	}else{
 		window.alert("创建失败")；
 	}
 }

alert("aaa");

