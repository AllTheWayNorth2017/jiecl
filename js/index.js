// 以下是轮播
var lunboLeft = document.querySelector('.lunbo-left');
var list = document.querySelector('.lb-list');
var buttons = document.querySelector('.lb-button').getElementsByTagName('span');
var pre = document.querySelector('.pre');
var next = document.querySelector('.next');
var index = 1;
var animated = false;
function showButton (){
	for (var i = 0; i < buttons.length; i++) {
		if (buttons[i].className == 'on') {
			buttons[i].className = '';
			break;
		}
	}
	buttons[index - 1].className = 'on';
}

function animate(offset){
	animated = true;
	var newleft = parseInt(list.style.left) + offset
	var time = 300;//位移总时间
	var interval = 10;//位移间隔时间
	var speed = offset/(time/interval);//每次位移量
	function go (){
		if ((speed < 0 && parseInt(list.style.left) > newleft)||(speed > 0 && parseInt(list.style.left)<newleft)) {
			list.style.left = parseInt(list.style.left) + speed + 'px';
			setTimeout(go,interval);
		}else{
			animated = false;
			list.style.left=newleft + 'px';
			if (newleft > -440) {
				list.style.left = -2200 + 'px';
			}
			if (newleft < -2200) {
				list.style.left = -440 + 'px';
			}
		}
	}
	go();
}
function play(){
	timer = setInterval(function () {
		next.onclick();
	},5000);
}
function stop(){
	clearInterval(timer);
}
next.onclick = function () {
	if (index == 5) {
		index = 1;
	}else{
		index +=1;
	}
	showButton();
	animate(-440);
}
pre.onclick = function () {
	if (index == 1) {
		index = 5;
	}else{
		index -=1;
	}
	showButton();
	animate(440);
}

for(var i =0; i <buttons.length; i++){
	buttons[i].onclick = function(){
		if (this.className == 'on') {
			return;
		}
		var myIndex = parseInt(this.getAttribute('index'));
		var offset = -440 * (myIndex - index);
		if (!animated) {
			animate(offset);
		}
		index = myIndex;
		showButton();
	}
}
lunboLeft.onmouseover = stop;
lunboLeft.onmouseout = play;
play();
//下面是side-bar
//回到顶部
var btn_gotop = document.querySelector('.btn-gotop');
var timer = null;
var isTop = true;
var dsq = true;
//滚动条滚动时触发
window.onscroll = function(){
	if (!isTop) {
		clearInterval(timer);
	}
	isTop = false;
}
btn_gotop.onclick = function (){
	//设置定时器
	timer = setInterval(function(){
		//获取滚动条距离顶部的高度
		var osTop = document.documentElement.scrollTop || document.body.scrollTop;
		var ispeed = Math.floor(-osTop/5);
		document.documentElement.scrollTop = document.body.scrollTop = osTop + ispeed;
		isTop = true;
		// console.log(osTop - ispeed);
		if(osTop == 0){
			clearInterval(timer);
		}
	},30)	
}
//连续点击回到顶部会出现问题



// 下面是foot
var phone = document.querySelector('.phone');
var pic_hv = document.querySelector('.pic-hv');
var weibo = document.querySelector('.weibo');
var pic_hv2 = document.querySelector('.pic-hv2');
var weixin = document.querySelector('.weixin');
var pic_hv3 = document.querySelector('.pic-hv3');
phone.onmouseover = function(){
	return pic_hv.style.display = "block";
}
phone.onmouseout = function(){
	return pic_hv.style.display = "none";
}
weibo.onmouseover = function(){
	return pic_hv2.style.display = "block";
}
weibo.onmouseout = function(){
	return pic_hv2.style.display = "none";
}
weixin.onmouseover = function(){
	return pic_hv3.style.display = "block";
}
weixin.onmouseout = function(){
	return pic_hv3.style.display = "none";
}

 // 搜索框
var search_suggest = document.querySelector('#search-suggest');
var search_input = document.querySelector('#search_input');
var addEvent = function(id,event,fn){
	var el = document.getElementById(id)||document;
	if (el.addEventLister) {
		el.addEventLister(event,fn,false);
	}else if(el.attachEvent){
		el.attachEvent('on'+event,fn);
	}
}
var ajaxGet = function(url,callback){
	var _xhr = null;
	if (window.XMLHttpRequest) {
		_xhr = new window.XMLHttpRequest();
	}else if(window.ActiveXobject){
		_xhr = new ActiveXobject("Msxml2.XMLHTTP");
	}
	_xhr.onreadystatechange = function(){
		if (_xhr.readyState == 4 && _xhr.status == 200) {
			callback(JSON.parse(_xhr.responseText));
		}
	}
	_xhr.open('get',url,false);
	_xhr.send(null);
}
search_input.onkeyup = function(){
	search_suggest.style.display = 'block';
	var searchText = document.getElementById('search_input').value;
	//空白填网址
	ajaxGet(''+searchText,function(d){
		var d = d.AS.Results[0].Suggests;
		var html = '';
		for (var i = 0; i < Things.length; i++) {
			html+='<li>'+d[i].Txt+'</li>'
		}
	})
	// search_suggest.style.display = 'block';
}
search_input.onblur = function(){
	search_suggest.style.display = 'none';
}
var ajaxGet = function(url,callback){
	var _xhr = null;
	if (window.XMLHttpRequest) {
		_xhr = new window.XMLHttpRequest();
	}else if(window.ActiveXobject){
		_xhr = new ActiveXobject("Msxml2.XMLHTTP");
	}
	_xhr.onreadystatechange = function(){
		if (_xhr.readyState == 4 && _xhr.status == 200) {
			callback(JSON.parse(_xhr.responseText));
		}
	}
	_xhr.open('get',url,false);
	_xhr.send(null);
}
var delegateEvent = function(target,event,fn){
	addEvent(document,event,function(e){
		if (e.target.node.Name == target.toUpperCase()) {
			fn.call(e.target);
		}
	});
}
delegateEvent('li','click',function(){
	var keyword = this.innerHTML;
	//空白填跳转网页
	location.href = ''+keyword;
})

// 网页定位导航

// 滚动条滚动

//根据class name 获取元素
// function getByClassName (obj,cls){
// 	var elements = obj.getElementsByClassName("*");
// 	var result = [];
// 	for (var i = 0; i < elements.length; i++) {
// 		if(elements[i].className == cls){
// 			result.push(elements[i]);

// 		}
// 	}
// 	return result;
// }
// function hasClass (obj,cls){
// 	return boj.className.match(new RegExp("(\\s|^)"+cls+"(\\s|$)"));
// }
// function removeClass (obj,cls){
// 	if(hasClass(obj,cls)){
// 		//remove
// 		var reg = new RegExp("(\\s|^)"+cls+"(\\s|$)");
// 		obj.className = obj.className.replace(reg,"");
// 	}
// }
// function addClass(obj,cls){
// 	if (!hasClass(obj,cls)) {
// 		obj.className += " " +cls;
// 	}

// }
// window.onscroll = function (){
// 	var top = document.documentElement.scrollTop || document.body.scrollTop;
// 	var menus = document.querySelector('.nav-list').getElementsByTagName("a");
// 	var items = getByClassName(document.getElementById("content"),"item");
// 	var currentId = "";
// 	for (var i = 0; i < items.length; i++) {
// 		var _item = items[i];
// 		var _itemTop = _item.offsetTop;
// 		if(top > _itemsTop - 20){
// 			currentId = _item.id;
// 		} else {
// 			break;
// 		}
// 	}
// 	if (currentId) {
// 		//给正确的menu下的a元素class赋值
// 		for(var j = 0;j<menus.length;j++){
// 			var _menu = menus[j];
// 			var _href = _menu.href.split("#");
// 			if (_href[_href.length - 1] != currentId) {
// 				removeClass(_menu,"current");

// 			}else{
// 				addClass(_menu,"current");
// 			}
// 		}
// 	}
// }



