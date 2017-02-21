var alnput = document.getElementsByTagName('input');
var oName = alnput[0];
var pwd = alnput[1];
var aP = document.getElementsByTagName('p');
var name_msg = aP[0];
var pwd_msg = aP[1];
//用户名
oName.onblur = function (){
	//不能为空
if(this.value==""){
		name_msg.style.display = "block";
		name_msg.innerHTML = '请输入用户名呀！';
	}
	//OK
	else {
		name_msg.style.display = "none";
	}
}
//密码
pwd.onblur = function (){
//不能为空，长度应为6-16个字符
	if (this.value=="" || this.value.length<6 || this.value.length>16) {
		pwd_msg.style.display = "block";
		pwd_msg.innerHTML = '喵，你没输入密码么？';
	}
//OK
	else{
		pwd_msg.style.display = "none";
	}
}
//hover
var submit = document.querySelector('.submit-btn');
var register = document.querySelector('.in');
submit.onmouseover = function(){
	return submit.style.backgroundColor = "#00bee7";
}
submit.onmouseout = function(){
	return submit.style.backgroundColor = "#00A7DE";
}
register.onmouseover = function(){
	return register.style.backgroundColor = "#f7f7f7";
}
register.onmouseout = function(){
	return register.style.backgroundColor = "#fff";
}










