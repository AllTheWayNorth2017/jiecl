var list = document.querySelector('#list');
var boxs = list.children;
var timer;
//格式化日期
function delDate(date) {
    var y = date.getFullYear();
    var m = date.getMonth() + 1;
    var d = date.getDate();
    var h = date.getHours();
    var mi = date.getMinutes();
    m = m > 9 ? m : '0' + m;
    return y + '-' + m + '-' + d + ' ' + h + ':' + mi;
}
//删除节点
function removeNode(node) {
    node.parentNode.removeChild(node);
}
//发表评论
function reply(box, el) {
    var commentList = box.getElementsByClassName('comment-list')[0];
    var textarea = box.getElementsByClassName('comment')[0];
    var commentBox = document.createElement('div');
    commentBox.className = 'comment-box clearfix';
    commentBox.setAttribute('user', 'self');
    commentBox.innerHTML =
        '<img class="myhead" src="img/comment/my.jpg" alt=""/>' +
        '<div class="comment-content">' +
        '<p class="comment-text"><span class="user">我：</span>' + textarea.value + '</p>' +
        '<p class="comment-time">' +
        delDate(new Date()) +
        '<a href="javascript:;" class="comment-operate">删除</a>' +
        '</p>' +
        '</div>'
    commentList.appendChild(commentBox);
    textarea.value = '';
    textarea.onblur();
}
//删除留言
function operate(el) {
    var commentBox = el.parentNode.parentNode.parentNode;
    var box = commentBox.parentNode.parentNode.parentNode;
    var txt = el.innerHTML;
    var user = commentBox.getElementsByClassName('user')[0].innerHTML;
    var textarea = box.getElementsByClassName('comment')[0];
    if (txt == '删除') {
        removeNode(commentBox);
    }
}

//事件代理
for (var i = 0; i < boxs.length; i++) {
//点击
boxs[i].onclick = function (e) {
    e = e || window.event;
    var el = e.srcElement;
    switch (el.className) {
        //删除分享
        case 'close':
            removeNode(el.parentNode);
            break;
        //回复按钮蓝
        case 'btn':
            reply(el.parentNode.parentNode.parentNode, el);
            break
         //回复按钮灰
        case 'btn btn-off':
           clearTimeout(timer);
           break;
        //删除留言
        case 'comment-operate':
        operate(el);
        break;
    }
}
//评论
var textArea = boxs[i].getElementsByClassName('comment')[0];
textArea.onfocus = function () {
    this.parentNode.className = 'text-box text-box-on';
    this.value = this.value == '评论' ? '' : this.value;
    this.onkeyup();
}
textArea.onkeyup = function () {
    var val = this.value;
    var len = val.length;
    var els = this.parentNode.children;
    var btn = els[1];
    var word = els[2];
    if (len <=0 || len > 140) {
        btn.className = 'btn btn-off';
    }
    else {
        btn.className = 'btn';
    }
    word.innerHTML = len + '/140';
    }
}
textArea.onblur = function () {
    var m = this;
    var val = m.value;
    if (val == '') {
        timer = setTimeout(function () {
            m.value = '评论';
            m.parentNode.className = 'text-box';
        }, 200);
    }
}

