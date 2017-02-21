function getLength (str){
	return str.replace(/[^\x00-xff]/g,"xx").length;
}
function findStr(str,n){
	var tmp = 0;
	for (var i = 0; i < str.length; i++) {
		if (str.charAt(i)==n) {
			tmp++;
		}
	}
	return tmp;
}
var alnput = document.getElementsByTagName('input');
var oName = alnput[0];
var pwd = alnput[1];
var pwd2 = alnput[2];
var aP = document.getElementsByTagName('p');
var name_msg = aP[0];
var pwd_msg = aP[1];
var pwd2_msg = aP[2];
var count = document.querySelector('.count');
var ruo = document.querySelector('.ruo');
var zhong = document.querySelector('.zhong');
var qiang = document.querySelector('.qiang');
var name_length = 0;
//用户名
oName.onfocus = function (){
	name_msg.style.display = "block";
}
oName.onkeyup = function (){
	count.style.visibility="visible";
	name_length=getLength(this.value);
	count.innerHTML = name_length+"个字符";
	if (name_length==0) {
		count.style.visibility="hidden";
	}
}
oName.onblur = function (){
	//含有非法字符
	var re = /[^\w\u4e00-\u9fa5]/g;
	if (re.test(this.value)) {
		name_msg.innerHTML = '含有非法字符！';
	}
	//不能为空
	else if(this.value==""){
		name_msg.innerHTML = '不能为空！';
	}
	//长度超过25个字符
	else if (name_length>25){
		name_msg.innerHTML = '长度超过25个字符!';
	}
	//长度少于六个字符
	else if (name_length<6){
		name_msg.innerHTML = '长度少于6个字符!';
	}
	//OK
	else {
		name_msg.innerHTML = 'OK!';
	}
}
//密码
pwd.onfocus = function (){
pwd_msg.style.display = "block";
	pwd_msg.innerHTML = '6-16个字符，请使用字母加数字或符号的组合密码，不能单独使用字母、数字或符号。'
}
pwd.onkeyup = function (){
//大于5字符“中”
	if (this.value.length>5) {
		pwd2.removeAttribute("disabled");
		pwd2_msg.style.display = "block";
		zhong.style.backgroundColor = "#DC143C";
	}else {
		pwd2.setAttribute("disabled","");
		pwd2_msg.style.display = "none";
		zhong.style.backgroundColor = "rgba( 255, 111, 2, 0.6)";
		}
//大于10个字符“强”
	if (this.value.length>10) {
			qiang.style.backgroundColor = "#DC143C";
		}else {
			qiang.style.backgroundColor = "rgba( 255, 111, 2, 0.6)";
			}
}
pwd.onblur = function (){
	var m = findStr(pwd.value,pwd.value[0]);
	var re_n = /[^\d]/g;
	var re_t = /[^a-zA-Z]/g;
//不能为空
	if (this.value=="") {
		pwd_msg.innerHTML = '密码不能为空！';
	}
//不能用相同字符
	else if (m==this.value.length){
		pwd_msg.innerHTML = '不能用相同字符';
	}
//长度应为6-16个字符
	else if(this.value.length<6 || this.value.length>16){
		pwd_msg.innerHTML = '长度应为6-16个字符';
	}	
//不能全为数字
	else if (!re_n.test(this.value)) {
		pwd_msg.innerHTML = '不能全为数字';
	}
//不能全为字母
	else if (!re_t.test(this.value)) {
		pwd_msg.innerHTML = '不能全为字母';
	}
//OK
	else{
		pwd_msg.innerHTML = 'OK';
	}
}
//确认密码
pwd2.onblur = function (){
	if(this.value!=pwd.value){
		pwd2_msg.innerHTML = '两次输入的密码不一致'
	}
	else{
		pwd2_msg.innerHTML = 'OK'
	}
}






