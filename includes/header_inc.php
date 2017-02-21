<?php
//防止恶意调用
if(!defined('IN_TG')){
	exit('Access Defined!');
}

?>
<div class="head-top-nav">
		<div class="head-left">
			<ul class="head-ul">
				<li class=" zhuzhan">
					<i></i>
					<span><a>主站</a href="index.php"></span>
				</li>	
				<li class="huayou head-com"><a>画友</a></li>
				<li class="gamecenter head-com">游戏中心
					<div class="gc-hover">
						<div class="gc-fate">
							<img src="img/head/gc1.jpg" alt="">
							<span>命运-冠位指定（Fate/GO）</span>
						</div>
						
						<ul class="gc-bm">
							<li>
								<img src="img/head/gc2.png" alt="">
								<span>魔法少女</span>
							</li>
							<li>
								<img src="img/head/gc3.png" alt="">
								<span>阴阳师</span>
							</li>
							<li>
								<img src="img/head/gc4.jpg" alt="">
								<span>崩坏3</span>
							</li>
						</ul>
						<div class="gc-list">
							<div class="gc-pre">
								<img src="img/head/title.png" alt="">
							</div>
							<ul>
								<li class="gcr1">仙剑奇侠传幻璃镜
									<div class="gc31 gccom"></div>
								</li>
								<li class="gcr2">刀剑乱舞
									<div class="gc32 gccom"></div>
								</li>
								<li class="gcr3">萌王EX
									<div class="gc33 gccom"></div>
								</li>
								<li class="grcr4">妖精的衣橱
									<div class="gc34 gccom"></div>
								</li>
								<li class="gcr5">EVA:破晓
									<div class="gc35 gccom"></div>
								</li>
								<li class="gcr6">神代梦华谭
									<div class="gc36 gccom"></div>
								</li>
								<li class="gcr7">碧蓝航线
									<div class="gc37 gccom"></div>
								</li>
							</ul>
						</div>
						
					</div>





				</li>
				<li class="live head-com"><a>直播</a></li>					<li class="zhoubian head-com"><a>周边</a></li>
				<li class="bainianji head-com">
					<i class="new"></i>
					<span><a>拜年祭</a></span>
				</li>		
			</ul>
		</div>
		
		<div class="head-right">
			<ul>
		<?php
			if (isset($_COOKIE['username'])) {
				echo		'<li class="face-box">';
				echo		'<div class="face">';
				echo			'<img src="img/head/noface.gif" alt="">';
				echo		'</div>';
				echo 		'</li>';
				echo		'<li class="afterl">';
				echo		'<a href="">消息</a>';
				echo		'</li>';
				echo		'<li class="afterl">';
				echo			'<a href="">动态</a>';
				echo		'</li>';
				echo		'<li class="afterl">';
				echo			'<a href="">收藏夹</a>';
				echo		'</li>';
				echo		'<li class="afterl">';
				echo			'<a href="">历史</a>';
				echo		'</li>';
			}else{

				echo		'<li class="login"><a href="login.php">登陆</a></li>';
				echo		'<li class="register"><a href="register.php">注册</a></li>';
			}
		?>
		<li class="tougao">
			<span class="tougao-one">投稿</span>
			<ul class="tg-menu">
				<li>
					<a href="##">
						<i class="tg-icon"></i>
						<span>视频投稿</span>
					</a>
				</li>
				<li>
					<a href="##">
						<i class="tg-icon1"></i>
						<span>投稿管理</span>
					</a>
				</li>
				<li>
					<a href="##">
						<i class="tg-icon2"></i>
						<span>创作中心</span>
					</a>
				</li>
			</ul>
		</li>	
	</div>