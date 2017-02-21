<?php
//定义一个常量，用来授权调用includes里的文件
define('IN_TG', true);
//引入公共文件
require dirname(__FILE__).'/includes/common_inc.php';
//转成硬路径，速度更快




?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>哔哩哔哩弹幕视频网 - ( ゜- ゜)つロ  乾杯~  - bilibili</title>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<link rel="icon" href="img/icon/favicon.ico">
	<link rel="stylesheet" type="text/css" href="css/common.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<?php
	if(isset($_COOKIE['username'])){
		echo '<link rel="stylesheet" type="text/css" href="css/header_af.css">';
	}else{
		echo '<link rel="stylesheet" type="text/css" href="css/header_bf.css">';
	}
	?>
</head>
<body>
	<?php
	if(isset($_COOKIE['username'])){
		require ROOT_PATH.'includes/header_af_inc.php';
	}else{
		require ROOT_PATH.'includes/header_bf_inc.php';
	}
	?>
	<div class="head-top">
		<div class="head-box-filter">
			<div class="head-filter"></div>		
		</div>
	</div>
	<div class="head-photo">
		<div class="head-box">
			<img src="img/head/head-superwide.jpg" alt="">
			<div class="head-logo"></div>
		</div>
	</div>
	<div class="menu">
		<ul>
			<li class="menu-home">
				<i></i>
				<span>首页</span>
			</li>
			<li class="menu-animation">
				<div class="num">863</div>
				<div class="menu-com">动画</div>
			</li>
			<li class="menu-animation">
				<div class="num">101</div>
				<div class="menu-com">番剧</div>
			</li>
			<li class="menu-animation">
				<div class="num">669</div>
				<div class="menu-com">音乐</div>
			</li>
			<li class="menu-animation">
				<div class="num">135</div>
				<div class="menu-com">舞蹈</div>
			</li>
			<li class="menu-animation">
				<div class="num-game num">999+</div>
				<div class="menu-com">游戏</div>
			</li>
			<li class="menu-animation">
				<div class="num">346</div>
				<div class="menu-com">科技</div>
			</li>
			<li class="menu-animation">
				<div class="num">678</div>
				<div class="menu-com">生活</div>
			</li>
			<li class="menu-animation">
				<div class="num">78</div>
				<div class="menu-com">鬼畜</div>
			</li>
			<li class="menu-animation">
				<div class="num">100</div>
				<div class="menu-com">时尚</div>
			</li>
			<li class="menu-animation">
				<div class="num">34</div>
				<div class="menu-com">广告</div>
			</li>
			<li class="menu-animation">
				<div class="num">626</div>
				<div class="menu-com">娱乐</div>
			</li>
			<li class="menu-animation">
				<div class="num">472</div>
				<div class="menu-com">影视</div>
			</li>
			<li class="menu-square">
				<i></i>
				<span>广场</span>
			</li>
			<li class="menu-live">
				<i></i>
				<span>直播</span>
			</li>
		</ul>
		<div class="menu-r">
			<div class="random">
				<img src="img/head/menu-r.gif" alt="">
			</div>
			<div class="mobile">
				<div class="phone-box">
					<div class="phone-code"></div>
				</div>
			</div>
		</div>
		<div class="search">
			<form action="" class="search-form" target="_blank" method="get">
				<input class="keyword" id="search_input" type="text" name="keyword" placeholder="bilibili2017拜年祭">
				<input type="submit" class="search-submit" value=""></input>
			</form>
			<div class="suggest" id="search-suggest">
				<ul class="search-list">
					<li>搜索结果1</li>
					<li>搜索结果2</li>
				</ul>
			</div>
			<div class="rank">
				<span>排行榜</span>
			</div>
		</div>
	</div>
		<div class="container-body" id="content">
		<div class="container-top">
		<!-- 下面是轮播 -->
			<div class="lunbo-left">
				<div class="lb-list" style="left: -440px;">
					<img src="img/body/lunbo/lunbo5.webp" alt="">
					<img src="img/body/lunbo/lunbo1.webp" alt="">
					<img src="img/body/lunbo/lunbo2.webp" alt="">
					<img src="img/body/lunbo/lunbo3.webp" alt="">
					<img src="img/body/lunbo/lunbo4.webp" alt="">
					<img src="img/body/lunbo/lunbo5.webp" alt="">
					<img src="img/body/lunbo/lunbo1.webp" alt="">
				</div>
				<div class="more-topic">更多
					<i class="lb-arrow-r"></i>
				</div>
				<div class="lb-button">
					<span index="1" class="on"></span>
					<span index="2" class="off"></span>
					<span index="3" class="off"></span>
					<span index="4" class="off"></span>
					<span index="5" class="off"></span>
				</div>
				<div class="pre"></div>
				<div class="next"></div>
			</div>

			<div class="lunbo-r">
				<div class="lunbo-r-list">
					<ul class="lb-r-ul">
						<li>
							<div class="v-item">
								<div class="preview">
									<img src="img/body/lunbo/r1.webp" alt="">
								</div>
							</div>
						</li>
						<li>
							<div class="v-item">
								<div class="preview">
									<img src="img/body/lunbo/r2.webp" alt="">
								</div>
							</div>
						</li>
						<li>
							<div class="v-item">
								<div class="preview">
									<img src="img/body/lunbo/r3.webp" alt="">
								</div>
							</div>
						</li>
						<li>
							<div class="v-item">
								<div class="preview">
									<img src="img/body/lunbo/r4.webp" alt="">
								</div>
							</div>
						</li>
						<li>
							<div class="v-item">
								<div class="preview">
									<img src="img/body/lunbo/r5.webp" alt="">
								</div>
							</div>
						</li>
						<li>
							<div class="v-item">
								<div class="preview">
									<img src="img/body/lunbo/r6.webp" alt="">
								</div>
							</div>
						</li>
						<li>
							<div class="v-item">
								<div class="preview">
									<img src="img/body/lunbo/r7.webp" alt="">
								</div>
							</div>
						</li>
						<li>
							<div class="v-item">
								<div class="preview">
									<img src="img/body/lunbo/r8.webp" alt="">
								</div>
							</div>
						</li>
					</ul>
					<div class="page lb-yesterday">昨日</div>
					<div class="page lb-week">一周</div>
				</div>
			</div>
		</div>	
		<!-- 新作推广 -->
		<div class="container-row">
			<div class="b-l">
				<div class="b-head">
					<span class="b-head-i"></span>
					<span class="b-head-t">
						<h2>推广</h2>
					</span>
					<div class="pmt-list">
						<div class="pmt-link">
							<a href="#">你喜欢篮球吗？</a>
						</div>
					</div>
				</div>
				<div class="b-body">
					<ul class="tg-list">
						<li>
							<div class="v">
								<a href="#">
									<div class="border"></div>
									<img src="img/body/tuiguang/1.webp" alt="">
								</a>
								<a href="#">
									<div class="t">少女咖啡枪开场动画初放送！战斗与日常交织的轮舞！</div>
								</a>
							</div>
						</li>
						<li>
							<div class="v">
								<a href="" class="tg-com">
									<div class="border"></div>
									<img src="img/body/tuiguang/2.webp" alt="">
								</a>
								<a href="#">
									<div class="t">【哔哩哔哩2017拜年祭】</div>
								</a>
							</div>
						</li>
						<li>
							<div class="v">
								<a href="" class="tg-com">
									<div class="border"></div>
									<img src="img/body/tuiguang/3.webp" alt="">
								</a>
								<a href="#">
									<div class="t">多芬-你的头发你说了算</div>
								</a>
							</div>
						</li>
						<li>
							<div class="v">
								<a href="" class="tg-com">
									<div class="border"></div>
									<img src="img/body/tuiguang/4.webp" alt="">
								</a>
								<a href="#">
									<div class="t">厉害了，我们的2016年</div>
								</a>
							</div>
						</li>
						<li>
							<div class="v">
								<a href="" class="tg-com">
									<div class="border"></div>
									<img src="img/body/tuiguang/5.webp" alt="">
								</a>
								<a href="#">
									<div class="t">【Null】Orange【一支承载过去 迎接未来的舞】</div>
								</a>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<div class="b-r">
				<div class="b-head">
					<div class="index-online">
						<span class="web-online">
							<a href="#">在线人数：
								<i>961554</i>
							</a>
						</span>
						<i class="s-line"></i>
						<span>
							<a href="#">最新投稿：
								<i>9704</i>
							</a>
						</span>
					</div>
				</div>
				<div class="b-body">
					<div class="index-promote">
						<div class="tg-right">
							<a href="#">
								<img src="img/body/tuiguang/6.png" alt="">
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="tg-ad">
				<img src="img/body/tuiguang/7.webp" alt="">
				<img src="img/body/tuiguang/ad.png" alt="" class="tg-img-ad">
			</div>
		</div>
		<!-- 下面是番剧 -->
		<div class="container-row item" id="item1" style="height: 410px;">
			<div>
				<div class="fanju-l">
					<div class="fanju-l-head">
						<i class="fj-l-i"></i>
						<span class="fj-fj">
							<h2>番剧</h2>
						</span>
						<ul class="fj-list">
							<li class="fj-list1">
								<span>有新动态</span>
							</li>
							<li>
								<span>最新投稿</span>
							</li>
						</ul>
						<div class="fj-more">
							<a href="##" class="fj-more-a">
								<div class="fj-gengduo">更多</div>
								<i></i>
							</a>
						</div>
						<div class="fj-trend">
							<span class="refresh"></span>
							<span class="info">
								<b>2048</b>
								<span>条新动态</span>
							</span>
						</div>
						<div class="fj-xinfan">
							<i></i>
							<div class="xinfan">bilibili1月正版新番</div>
						</div>
					</div>
					<div class="fanju-l-body">
						<ul class="fj-list-body">
							<li>
								<div class="fj-com">
									<a href="##" class="fj-a">
										<div class="medal"></div>
										<img src="img/body/fanju/1.webp" alt="">
									</a>
									<a href="##">
										<div class="fj-words">【合集】魔法禁书目录 第一季</div>
										<div class="fj-i">
											<span>
												<i class="fj-play"></i>
												717.9万
											</span>
											<span>
												<i class="fj-mulu"></i>
												19.7万
											</span>
										</div>
									</a>
								</div>
							</li>
							<li>
								<div class="fj-com">
									<a href="##" class="fj-a">
										<div class="medal"></div>
										<img src="img/body/fanju/2.webp" alt="">
									</a>
									<a href="##">
										<div class="fj-words">【合集】某科学的超电磁炮 第一季</div>
										<div class="fj-i">
											<span>
												<i class="fj-play"></i>
												877.6万
											</span>
											<span>
												<i class="fj-mulu"></i>
												139.1万
											</span>
										</div>
									</a>
								</div>
							</li>
							<li>
								<div class="fj-com">
									<a href="##" class="fj-a">
										<div class="medal-silver"></div>
										<img src="img/body/fanju/3.webp" alt="">
									</a>
									<a href="##">
										<div class="fj-words">【合集】黑子的篮球 第一期</div>
										<div class="fj-i">
											<span>
												<i class="fj-play"></i>
												491.0万
											</span>
											<span>
												<i class="fj-mulu"></i>
												52.4万
											</span>
										</div>
									</a>
								</div>
							</li>
							<li>
								<div class="fj-com">
									<a href="##" class="fj-a">
										<div class="medal-silver"></div>
										<img src="img/body/fanju/4.webp" alt="">
									</a>
									<a href="##">
										<div class="fj-words">【1月】小林家的龙女仆 01【独家正版】</div>
										<div class="fj-i">
											<span>
												<i class="fj-play"></i>
												160.8万
											</span>
											<span>
												<i class="fj-mulu"></i>
												4.8万
											</span>
										</div>
									</a>
								</div>	
							</li>
							<li>
								<div class="fj-com">
									<a href="##" class="fj-a">
										
										<img src="img/body/fanju/5.webp" alt="">
									</a>
									<a href="##">
										<div class="fj-words">【1月】热诚传说 X 16</div>
										<div class="fj-i">
											<span>
												<i class="fj-play"></i>
												35.7万
											</span>
											<span>
												<i class="fj-mulu"></i>
												4832
											</span>
										</div>
									</a>
								</div>	
							</li>
							<li>
								<div class="fj-com">
									<a href="##" class="fj-a">
										<div class="medal-silver"></div>
										<img src="img/body/fanju/6.webp" alt="">
									</a>
									<a href="##">
										<div class="fj-words">【1月】SEIREN 清恋 04</div>
										<div class="fj-i">
											<span>
												<i class="fj-play"></i>
												58.6万
											</span>
											<span>
												<i class="fj-mulu"></i>
												3.3万
											</span>
										</div>
									</a>
								</div>	
							</li>
							<li>
								<div class="fj-com">
									<a href="##" class="fj-a">
										<div class="medal"></div>
										<img src="img/body/fanju/7.webp" alt="">
									</a>
									<a href="##">
										<div class="fj-words">【1月】SEIREN 清恋 04</div>
										<div class="fj-i">
											<span>
												<i class="fj-play"></i>
												915.4万
											</span>
											<span>
												<i class="fj-mulu"></i>
												54.3万
											</span>
										</div>
									</a>
								</div>	
							</li>
							<li>
								<div class="fj-com">
									<a href="##" class="fj-a">
										
										<img src="img/body/fanju/8.webp" alt="">
									</a>
									<a href="##">
										<div class="fj-words">苍天航路</div>
										<div class="fj-i">
											<span>
												<i class="fj-play"></i>
												5.0万
											</span>
											<span>
												<i class="fj-mulu"></i>
												7032
											</span>
										</div>
									</a>
								</div>	
							</li>
							<li>
								<div class="fj-com">
									<a href="##" class="fj-a">
										<div class="medal"></div>
										<img src="img/body/fanju/9.webp" alt="">
									</a>
									<a href="##">
										<div class="fj-words">【官方中文】Fate/Zero</div>
										<div class="fj-i">
											<span>
												<i class="fj-play"></i>
												1677.7万
											</span>
											<span>
												<i class="fj-mulu"></i>
												127.0万
											</span>
										</div>
									</a>
								</div>	
							</li>
							<li>
								<div class="fj-com">
									<a href="##" class="fj-a">
										
										<img src="img/body/fanju/10.webp" alt="">
									</a>
									<a href="##">
										<div class="fj-words">【坂上之樱】佐倉绫音百科全书——乃木坂46篇</div>
										<div class="fj-i">
											<span>
												<i class="fj-play"></i>
												5932
											</span>
											<span>
												<i class="fj-mulu"></i>
												663
											</span>
										</div>
									</a>
								</div>	
							</li>	
						</ul>
					</div>
				</div>
				<div class="fanju-r">
					<div class="fj-r-head">
						<div class="fj-r-left">
							<span>
								<h3>排行</h3>
							</span>
						</div>
						<div class="fj-r-right">
							<select name="" id="">
								<option value="">三日</option>
								<option value="">一周</option>
							</select>
						</div>
					</div>
					<div class="fj-r-body">
						<ul class="fj-rank">
							<li>
								<i class="fj-number fj-n123">1</i>
								<div class="fj-rank1">
									<img src="img/body/fanju/11.webp" alt="">
								</div>
								<a href="##">
									<div class="fj-rank11">【1月】珈百璃的堕落 04</div>
									<div class="fj-rank12">
										<span>综合评分：56.0万</span>
									</div>
								</a>
							</li>
							<li>
								<i class="fj-number fj-n123">2</i>
								<a href="##" class="fj-rank-com">【1月】热诚传说 X 17</a>
							</li>
							<li>
								<i class="fj-number fj-n123">3</i>
								<a href="##" class="fj-rank-com">【1月】猫咪日常 04【独家正版】</a>
							</li>
							<li>
								<i class="fj-number">4</i>
								<a href="##" class="fj-rank-com">【1月】Hand Shakers 04</a>
							</li>
							<li>
								<i class="fj-number">5</i>
								<a href="##" class="fj-rank-com">【1月】暗芝居 第四季 05</a>
							</li>
							<li>
								<i class="fj-number">6</i>
								<a href="##" class="fj-rank-com">【1月】黑白来看守所 18【独家正版】</a>
							</li>
							<li>
								<i class="fj-number">7</i>
								<a href="##" class="fj-rank-com">【剧场版】刀剑神域 序列之争 正式PV&CM</a>
							</li>
						</ul>
						<div class="fj-more-link">
							<a href="##">
								查看更多
								<i></i>
							</a>
						</div>
					</div>
				</div>


			</div>




		</div>
		<!-- 下面是最新 -->
		<div class="zuixin">
			<div class="zx-l">
				<div class="zx-head">
					<a href="##" class="zx-xffsb">新番放送表
						<i class="zx-l-arrow"></i>
					</a>
					<div class="zx-tab">
						<ul>
							<li class="zx-w0">
								<span>最新</span>
								<i class="zx-zuixin"></i>
								<i class="zx-sanjiao"></i>
							</li>
							<li class="zx-w">
								<span>一</span>
							</li>
							<li class="zx-w">
								<span>二</span>
							</li>
							<li class="zx-w">
								<span>三</span>
							</li>
							<li class="zx-w">
								<span>四</span>
							</li>
							<li class="zx-w">
								<span>五</span>
							</li>
							<li class="zx-w">
								<span>六</span>
							</li>
							<li class="zx-w">
								<span>日</span>
							</li>
						</ul>
					</div>
				</div>
				<div class="zx-body">
					<div class="zx-calendar">
						<ul class="zx-list">
							<li class="zx-1234">
								<div class="zx-item">
									<a href="##">
										<img src="img/body/zuixin/1.webp" alt="">
									</a>
									<div class="zx-item-i">
										<a href="##">
											<p class="zx-t">
												<span>美妙天堂  第三季</span>
											</p>
										</a>
										<p class="zx-num">更新至
											<span>44话</span>
										</p>
									</div>
								</div>
							</li>
							<li class="zx-1234">
								<div class="zx-item">
									<a href="##">
										<img src="img/body/zuixin/2.webp" alt="">
									</a>
									<div class="zx-item-i">
										<a href="##">
											<p class="zx-t">
												<span>枪灵计划</span>
											</p>
										</a>
										<p class="zx-num">更新至
											<span>7话</span>
										</p>
									</div>
								</div>
							</li>
							<li class="zx-1234">
								<div class="zx-item">
									<a href="##">
										<img src="img/body/zuixin/3.webp" alt="">
									</a>
									<div class="zx-item-i">
										<a href="##">
											<p class="zx-t">
												<span>喵阿楞</span>
											</p>
										</a>
										<p class="zx-num">更新至
											<span>19话</span>
										</p>
									</div>
								</div>
							</li>
							<li class="zx-1234">
								<div class="zx-item">
									<a href="##">
										<img src="img/body/zuixin/4.webp" alt="">
									</a>
									<div class="zx-item-i">
										<a href="##">
											<p class="zx-t">
												<span>鬼平</span>
											</p>
										</a>
										<p class="zx-num">更新至
											<span>5话</span>
										</p>
									</div>
								</div>
							</li>
							<li>
								<div class="zx-item">
									<a href="##">
										<img src="img/body/zuixin/5.webp" alt="">
									</a>
									<div class="zx-item-i">
										<a href="##">
											<p class="zx-t">
												<span>飙速宅男 新世代</span>
											</p>
										</a>
										<p class="zx-num">更新至
											<span>5话</span>
										</p>
									</div>
								</div>
							</li>
							<li>
								<div class="zx-item">
									<a href="##">
										<img src="img/body/zuixin/6.webp" alt="">
									</a>
									<div class="zx-item-i">
										<a href="##">
											<p class="zx-t">
												<span>飙速宅男 新世代</span>
											</p>
										</a>
										<p class="zx-num">更新至
											<span>5话</span>
										</p>
									</div>
								</div>
							</li>
							<li>
								<div class="zx-item">
									<a href="##">
										<img src="img/body/zuixin/7.webp" alt="">
									</a>
									<div class="zx-item-i">
										<a href="##">
											<p class="zx-t">
												<span>TRICKSTER</span>
											</p>
										</a>
										<p class="zx-num">更新至
											<span>17话</span>
										</p>
									</div>
								</div>
							</li>
							<li>
								<div class="zx-item">
									<a href="##">
										<img src="img/body/zuixin/8.webp" alt="">
									</a>
									<div class="zx-item-i">
										<a href="##">
											<p class="zx-t">
												<span>珈百璃的堕落</span>
											</p>
										</a>
										<p class="zx-num">更新至
											<span>5话</span>
										</p>
									</div>
								</div>
							</li>
							<li>
								<div class="zx-item">
									<a href="##">
										<img src="img/body/zuixin/9.webp" alt="">
									</a>
									<div class="zx-item-i">
										<a href="##">
											<p class="zx-t">
												<span>智龙迷城X</span>
											</p>
										</a>
										<p class="zx-num">更新至
											<span>31话</span>
										</p>
									</div>
								</div>
							</li>
							<li>
								<div class="zx-item">
									<a href="##">
										<img src="img/body/zuixin/10.webp" alt="">
									</a>
									<div class="zx-item-i">
										<a href="##">
											<p class="zx-t">
												<span>暗芝居 第四季</span>
											</p>
										</a>
										<p class="zx-num">更新至
											<span class="zx-num-d">6话</span>
										</p>
									</div>
								</div>
							</li>
							<li>
								<div class="zx-item">
									<a href="##">
										<img src="img/body/zuixin/11.webp" alt="">
									</a>
									<div class="zx-item-i">
										<a href="##">
											<p class="zx-t">
												<span>猫咪日常</span>
											</p>
										</a>
										<p class="zx-num">更新至
											<span class="zx-num-d">5话</span>
										</p>
									</div>
								</div>
							</li>
							<li>
								<div class="zx-item">
									<a href="##">
										<img src="img/body/zuixin/12.webp" alt="">
									</a>
									<div class="zx-item-i">
										<a href="##">
											<p class="zx-t">
												<span>偶像选举</span>
											</p>
										</a>
										<p class="zx-num">更新至
											<span class="zx-num-d">5话</span>
										</p>
									</div>
								</div>
							</li>
						</ul>
					</div>
					
				</div>
				
			</div>
			<div class="zx-r">
				<div class="zx-r-b">
					<div class="zx-guiping">
						<img src="img/body/zuixin/guiping.jpg" alt="">
					</div>
					<div class="zx-gp-bottom">
						<div class="gp-info">
							<a href="##">鬼平</a>
						</div>
						<ul class="gp-slider">
							<li>
								<div class="gp-li"></div>
							</li>
						</ul>
					</div>
					<div class="gp-list">
						<li>
							<a href="##" class="gp-list1">
								<img src="img\body\zuixin\gp1.jpg" alt="">
							</a>
							<div class="gp-list2">全13话</div>
							<a href="##" class="gp-list3">真实之泪</a>
						</li>
						<li>
							<a href="##" class="gp-list1">
								<img src="img\body\zuixin\gp2.jpg" alt="">
							</a>
							<div class="gp-list2">全6话</div>
							<a href="##" class="gp-list3">鸦KARAS</a>
						</li>
						<li>
							<a href="##" class="gp-list1">
								<img src="img\body\zuixin\gp3.jpg" alt="">
							</a>
							<div class="gp-list2">全26话</div>
							<a href="##" class="gp-list3">会长是女仆大人！</a>
						</li>
						<li>
							<a href="##" class="gp-list1">
								<img src="img\body\zuixin\gp4.jpg" alt="">
							</a>
							<div class="gp-list2">全25话</div>
							<a href="##" class="gp-list3">奇幻贵公子</a>
						</li>
					</div>
				</div>
			</div>
		</div>

	</div>
	
	


<!-- 下面是游戏，以番剧为基础 -->


		<div class="container-row item" id="item2" style="height: 410px;">
			<div>
				<div class="fanju-l">
					<div class="fanju-l-head">
						<i class="fj-l-i" id="yx-icon"></i>
						<span class="fj-fj">
							<h2>游戏</h2>
						</span>
						<ul class="fj-list">
							<li class="fj-list1">
								<span>有新动态</span>
							</li>
							<li>
								<span>最新投稿</span>
							</li>
						</ul>
						<div class="fj-more">
							<a href="##" class="fj-more-a">
								<div class="fj-gengduo">更多</div>
								<i></i>
							</a>
						</div>
						<div class="fj-trend">
							<span class="refresh"></span>
							<span class="info">
								<b>5407</b>
								<span>条新动态</span>
							</span>
						</div>
						<div class="fj-xinfan">
							<i></i>
							<div class="xinfan">2B小姐姐脱下面具竟然长这样</div>
						</div>
					</div>
					<div class="fanju-l-body">
						<ul class="fj-list-body">
							<li>
								<div class="fj-com">
									<a href="##" class="fj-a">
						
										<img src="img/body/game/1.webp" alt="">
									</a>
									<a href="##">
										<div class="fj-words">【拂菻坊】生化危机7芳芳版：他还有一个老婆？！（三）</div>
										<div class="fj-i">
											<span>
												<i class="fj-play"></i>
												7890
											</span>
											<span>
												<i class="fj-mulu"></i>
												831
											</span>
										</div>
									</a>
								</div>
							</li>
							<li>
								<div class="fj-com">
									<a href="##" class="fj-a">
										<div class="medal"></div>
										<img src="img/body/game/2.webp" alt="">
									</a>
									<a href="##">
										<div class="fj-words">叽金！《剑网3》双马尾金发来袭 新外观亮相</div>
										<div class="fj-i">
											<span>
												<i class="fj-play"></i>
												12.3万
											</span>
											<span>
												<i class="fj-mulu"></i>
												1277
											</span>
										</div>
									</a>
								</div>
							</li>
							<li>
								<div class="fj-com">
									<a href="##" class="fj-a">
										
										<img src="img/body/game/3.webp" alt="">
									</a>
									<a href="##">
										<div class="fj-words">MCYX RPG服务器工程预告</div>
										<div class="fj-i">
											<span>
												<i class="fj-play"></i>
												1220
											</span>
											<span>
												<i class="fj-mulu"></i>
												521
											</span>
										</div>
									</a>
								</div>
							</li>
							<li>
								<div class="fj-com">
									<a href="##" class="fj-a">
										
										<img src="img/body/game/4.webp" alt="">
									</a>
									<a href="##">
										<div class="fj-words">纯黑《细胞分裂6：黑名单》第一期 猎豹模式攻略解说</div>
										<div class="fj-i">
											<span>
												<i class="fj-play"></i>
												6.1万
											</span>
											<span>
												<i class="fj-mulu"></i>
												1267
											</span>
										</div>
									</a>
								</div>	
							</li>
							<li>
								<div class="fj-com">
									<a href="##" class="fj-a">
										
										<img src="img/body/game/5.webp" alt="">
									</a>
									<a href="##">
										<div class="fj-words">【鹌鹑直播】斗鱼最强寒冰东北大鹌鹑11.8精彩对局合集，寒冰EZ小炮</div>
										<div class="fj-i">
											<span>
												<i class="fj-play"></i>
												2.3万
											</span>
											<span>
												<i class="fj-mulu"></i>
												569
											</span>
										</div>
									</a>
								</div>	
							</li>
							<li>
								<div class="fj-com">
									<a href="##" class="fj-a">
										<div class="medal"></div>
										<img src="img/body/game/6.webp" alt="">
									</a>
									<a href="##">
										<div class="fj-words">【神幻君de独立游戏】Sword With Sauce#2 化身杨教授前来复仇，接受正义的制裁吧</div>
										<div class="fj-i">
											<span>
												<i class="fj-play"></i>
												44
											</span>
											<span>
												<i class="fj-mulu"></i>
												2
											</span>
										</div>
									</a>
								</div>	
							</li>
							<li>
								<div class="fj-com">
									<a href="##" class="fj-a">
										
										<img src="img/body/game/7.webp" alt="">
									</a>
									<a href="##">
										<div class="fj-words">我真的是只狼！只是凶猛的不明显！《孤岛惊魂：原始杀戮》实况解说Ep03</div>
										<div class="fj-i">
											<span>
												<i class="fj-play"></i>
												104
											</span>
											<span>
												<i class="fj-mulu"></i>
												4
											</span>
										</div>
									</a>
								</div>	
							</li>
							<li>
								<div class="fj-com">
									<a href="##" class="fj-a">
										
										<img src="img/body/game/8.webp" alt="">
									</a>
									<a href="##">
										<div class="fj-words">【王者荣耀】露娜月下无限连，99％的人都不会[滑稽]</div>
										<div class="fj-i">
											<span>
												<i class="fj-play"></i>
												4.7万
											</span>
											<span>
												<i class="fj-mulu"></i>
												1124
											</span>
										</div>
									</a>
								</div>	
							</li>
							<li>
								<div class="fj-com">
									<a href="##" class="fj-a">
										
										<img src="img/body/game/9.webp" alt="">
									</a>
									<a href="##">
										<div class="fj-words">PDD 4.9日骚猪的GTA</div>
										<div class="fj-i">
											<span>
												<i class="fj-play"></i>
												1.5万
											</span>
											<span>
												<i class="fj-mulu"></i>
												339万
											</span>
										</div>
									</a>
								</div>	
							</li>
							<li>
								<div class="fj-com">
									<a href="##" class="fj-a">
										
										<img src="img/body/game/10.webp" alt="">
									</a>
									<a href="##">
										<div class="fj-words">【爆笑星际】 第四季 （已完结/共10集）</div>
										<div class="fj-i">
											<span>
												<i class="fj-play"></i>
												12.6万
											</span>
											<span>
												<i class="fj-mulu"></i>
												1530
											</span>
										</div>
									</a>
								</div>	
							</li>	
						</ul>
					</div>
				</div>
				<div class="fanju-r">
					<div class="fj-r-head">
						<div class="fj-r-left">
							<span>
								<h3>排行</h3>
							</span>
						</div>
						<div class="fj-r-right">
							<select name="" id="">
								<option value="">三日</option>
								<option value="">一周</option>
							</select>
						</div>
					</div>
					<div class="fj-r-body">
						<ul class="fj-rank">
							<li>
								<i class="fj-number fj-n123">1</i>
								<div class="fj-rank1">
									<img src="img/body/game/11.webp" alt="">
								</div>
								<a href="##">
									<div class="fj-rank11">炉石传说：【天天素材库】 第38期</div>
									<div class="fj-rank12">
										<span>综合评分：34.9万</span>
									</div>
								</a>
							</li>
							<li>
								<i class="fj-number fj-n123">2</i>
								<a href="##" class="fj-rank-com game-rdiff" >主播炸了211：PDD盲僧瞎逼操作 五五开打出2369最低伤害</a>
							</li>
							<li>
								<i class="fj-number fj-n123">3</i>
								<a href="##" class="fj-rank-com game-rdiff" >主播真会玩守望篇26：惊了！饮料机竟有这种功能！</a>
							</li>
							<li>
								<i class="fj-number">4</i>
								<a href="##" class="fj-rank-com">Besiege 围攻  皮皮虾我们走！</a>
							</li>
							<li>
								<i class="fj-number">5</i>
								<a href="##" class="fj-rank-com">【屎O说】卖船神教</a>
							</li>
							<li>
								<i class="fj-number">6</i>
								<a href="##" class="fj-rank-com game-rdiff">【视角姬】作死体验VR版《生化危机7》，VR版要人命啊！！</a>
							</li>
							<li>
								<i class="fj-number">7</i>
								<a href="##" class="fj-rank-com game-rdiff">守望先锋国服精彩集锦37：大锤看了会沉默，安娜看了会流泪</a>
							</li>
						</ul>
						<div class="fj-more-link">
							<a href="##">
								查看更多
								<i></i>
							</a>
						</div>
					</div>
				</div>


			</div>
		</div>

		<!-- 下面是娱乐 -->

		<div class="container-row item" id="item3" style="height: 410px;">
			<div>
				<div class="fanju-l">
					<div class="fanju-l-head">
						<i class="fj-l-i" id="entertainment-icon"></i>
						<span class="fj-fj">
							<h2>娱乐</h2>
						</span>
						<ul class="fj-list">
							<li class="fj-list1">
								<span>有新动态</span>
							</li>
							<li> 
								<span>最新投稿</span>
							</li>
						</ul>
						<div class="fj-more">
							<a href="##" class="fj-more-a">
								<div class="fj-gengduo">更多</div>
								<i></i>
							</a>
						</div>
						<div class="fj-trend">
							<span class="refresh"></span>
							<span class="info">
								<b>297</b>
								<span>条新动态</span>
							</span>
						</div>
						<div class="fj-xinfan">
							<i></i>
							<div class="xinfan">孙杨遭手机人爆料</div>
						</div>
					</div>
					<div class="fanju-l-body">
						<ul class="fj-list-body">
							<li>
								<div class="fj-com">
									<a href="##" class="fj-a">
						
										<img src="img/body/entertainment/1.webp" alt="">
									</a>
									<a href="##">
										<div class="fj-words">【ARASHI】你们是不是一颗瓜子也要掰五瓣啊</div>
										<div class="fj-i">
											<span>
												<i class="fj-play"></i>
												2061
											</span>
											<span>
												<i class="fj-mulu"></i>
												36
											</span>
										</div>
									</a>
								</div>
							</li>
							<li>
								<div class="fj-com">
									<a href="##" class="fj-a">
										
										<img src="img/body/entertainment/2.webp" alt="">
									</a>
									<a href="##">
										<div class="fj-words">宝冢　星组　红花侠sayumi&toko对谈</div>
										<div class="fj-i">
											<span>
												<i class="fj-play"></i>
												811
											</span>
											<span>
												<i class="fj-mulu"></i>
												7
											</span>
										</div>
									</a>
								</div>
							</li>
							<li>
								<div class="fj-com">
									<a href="##" class="fj-a">
										
										<img src="img/body/entertainment/3.webp" alt="">
									</a>
									<a href="##">
										<div class="fj-words">【KEYABINGO!2】EP06 欅坂46第一古惑女决定战【欅坂不够热】</div>
										<div class="fj-i">
											<span>
												<i class="fj-play"></i>
												2.3万
											</span>
											<span>
												<i class="fj-mulu"></i>
												2581
											</span>
										</div>
									</a>
								</div>
							</li>
							<li>
								<div class="fj-com">
									<a href="##" class="fj-a">
										
										<img src="img/body/entertainment/4.webp" alt="">
									</a>
									<a href="##">
										<div class="fj-words">万千星辉颁奖典礼2016最佳男主角陈展鹏剪辑</div>
										<div class="fj-i">
											<span>
												<i class="fj-play"></i>
												191
											</span>
											<span>
												<i class="fj-mulu"></i>
												0
											</span>
										</div>
									</a>
								</div>	
							</li>
							<li>
								<div class="fj-com">
									<a href="##" class="fj-a">
										
										<img src="img/body/entertainment/5.webp" alt="">
									</a>
									<a href="##">
										<div class="fj-words">情人节反虐狗：带着三石弟弟拆尽天下CP，单身狗报复社会</div>
										<div class="fj-i">
											<span>
												<i class="fj-play"></i>
												8542
											</span>
											<span>
												<i class="fj-mulu"></i>
												276
											</span>
										</div>
									</a>
								</div>	
							</li>
							<li>
								<div class="fj-com">
									<a href="##" class="fj-a">
										<div class="medal-silver"></div>
										<img src="img/body/entertainment/6.webp" alt="">
									</a>
									<a href="##">
										<div class="fj-words">【高冷紫】Nogizaka accdient！合集</div>
										<div class="fj-i">
											<span>
												<i class="fj-play"></i>
												42.0万
											</span>
											<span>
												<i class="fj-mulu"></i>
												3.2万
											</span>
										</div>
									</a>
								</div>	
							</li>
							<li>
								<div class="fj-com">
									<a href="##" class="fj-a">
										
										<img src="img/body/entertainment/7.webp" alt="">
									</a>
									<a href="##">
										<div class="fj-words">【DsCorp中英字幕】【戴恩德哈恩】幼年期戴涵涵曾扮演小狗Toto</div>
										<div class="fj-i">
											<span>
												<i class="fj-play"></i>
												52
											</span>
											<span>
												<i class="fj-mulu"></i>
												0
											</span>
										</div>
									</a>
								</div>	
							</li>
							<li>
								<div class="fj-com">
									<a href="##" class="fj-a">
										
										<img src="img/body/entertainment/8.webp" alt="">
									</a>
									<a href="##">
										<div class="fj-words">【SNH48】赵粤 邱欣怡《青涩的香蕉》</div>
										<div class="fj-i">
											<span>
												<i class="fj-play"></i>
												6.4万
											</span>
											<span>
												<i class="fj-mulu"></i>
												1900
											</span>
										</div>
									</a>
								</div>	
							</li>
							<li>
								<div class="fj-com">
									<a href="##" class="fj-a">
										
										<img src="img/body/entertainment/9.webp" alt="">
									</a>
									<a href="##">
										<div class="fj-words">【雅润\模特】秒速5厘米</div>
										<div class="fj-i">
											<span>
												<i class="fj-play"></i>
												4.7万
											</span>
											<span>
												<i class="fj-mulu"></i>
												1208
											</span>
										</div>
									</a>
								</div>	
							</li>
							<li>
								<div class="fj-com">
									<a href="##" class="fj-a">
										
										<img src="img/body/entertainment/10.webp" alt="">
									</a>
									<a href="##">
										<div class="fj-words">【黄轩】小马 卡特~</div>
										<div class="fj-i">
											<span>
												<i class="fj-play"></i>
												1.1万
											</span>
											<span>
												<i class="fj-mulu"></i>
												406
											</span>
										</div>
									</a>
								</div>	
							</li>	
						</ul>
					</div>
				</div>
				<div class="fanju-r">
					<div class="fj-r-head">
						<div class="fj-r-left">
							<span>
								<h3>排行</h3>
							</span>
						</div>
						<div class="fj-r-right">
							<select name="" id="">
								<option value="">三日</option>
								<option value="">一周</option>
							</select>
						</div>
					</div>
					<div class="fj-r-body">
						<ul class="fj-rank">
							<li>
								<i class="fj-number fj-n123">1</i>
								<div class="fj-rank1">
									<img src="img/body/entertainment/11.webp" alt="">
								</div>
								<a href="##">
									<div class="fj-rank11">【谷阿莫】5分鐘看完讓你情人節不孤單的電影《A片现场不NG》</div>
									<div class="fj-rank12">
										<span>综合评分：30.8万</span>
									</div>
								</a>
							</li>
							<li>
								<i class="fj-number fj-n123">2</i>
								<a href="##" class="fj-rank-com game-rdiff" >【木鱼微剧场】几分钟看完《神女》</a>
							</li>
							<li>
								<i class="fj-number fj-n123">3</i>
								<a href="##" class="fj-rank-com game-rdiff" >俗哥说电影，美国恐怖片《猪八戒杀人事件》</a>
							</li>
							<li>
								<i class="fj-number">4</i>
								<a href="##" class="fj-rank-com game-rdiff">【电影说】几十分钟带你看完《电锯惊魂6~7》加量不加价~</a>
							</li>
							<li>
								<i class="fj-number">5</i>
								<a href="##" class="fj-rank-com game-rdiff">好片两部半：最好的故事在路上 68</a>
							</li>
							<li>
								<i class="fj-number">6</i>
								<a href="##" class="fj-rank-com game-rdiff">【奥雷】国产动画电影巅峰之一《小倩》讲解</a>
							</li>
							<li>
								<i class="fj-number">7</i>
								<a href="##" class="fj-rank-com game-rdiff">【大闹天竺X功夫瑜伽】让我过足了一场咖喱鸡味的新年 播放:42890 9:16</a>
							</li>
						</ul>
						<div class="fj-more-link">
							<a href="##">
								查看更多
								<i></i>
							</a>
						</div>
					</div>
				</div>


			</div>
		</div>
		<!-- 下面是生活 -->

		<div class="container-row item" id="item4" style="height: 410px;">
			<div>
				<div class="fanju-l">
					<div class="fanju-l-head">
						<i class="fj-l-i" id="life-icon"></i>
						<span class="fj-fj">
							<h2>生活</h2>
						</span>
						<ul class="fj-list">
							<li class="fj-list1">
								<span>有新动态</span>
							</li>
							<li>
								<span>最新投稿</span>
							</li>
						</ul>
						<div class="fj-more">
							<a href="##" class="fj-more-a">
								<div class="fj-gengduo">更多</div>
								<i></i>
							</a>
						</div>
						<div class="fj-trend">
							<span class="refresh"></span>
							<span class="info">
								<b>297</b>
								<span>条新动态</span>
							</span>
						</div>
						<div class="fj-xinfan">
							<i></i>
							<div class="xinfan">小猫舔肉棒，竟舔出了AV既视感！</div>
						</div>
					</div>
					<div class="fanju-l-body">
						<ul class="fj-list-body">
							<li>
								<div class="fj-com">
									<a href="##" class="fj-a">
						
										<img src="img/body/life/1.webp" alt="">
									</a>
									<a href="##">
										<div class="fj-words">二哈 是在和自己战斗  认真起来连我自己都咬</div>
										<div class="fj-i">
											<span>
												<i class="fj-play"></i>
												1.1万
											</span>
											<span>
												<i class="fj-mulu"></i>
												55
											</span>
										</div>
									</a>
								</div>
							</li>
							<li>
								<div class="fj-com">
									<a href="##" class="fj-a">
										<div class="medal"></div>
										<img src="img/body/life/2.webp" alt="">
									</a>
									<a href="##">
										<div class="fj-words">自从这群歪果仁沉沦于中国美食以后。。。</div>
										<div class="fj-i">
											<span>
												<i class="fj-play"></i>
												86.8万
											</span>
											<span>
												<i class="fj-mulu"></i>
												1.2万
											</span>
										</div>
									</a>
								</div>
							</li>
							<li>
								<div class="fj-com">
									<a href="##" class="fj-a">
										
										<img src="img/body/life/3.webp" alt="">
									</a>
									<a href="##">
										<div class="fj-words">如果现实中有『怪物猎人』这个职业存在</div>
										<div class="fj-i">
											<span>
												<i class="fj-play"></i>
												8.8万
											</span>
											<span>
												<i class="fj-mulu"></i>
												2121
											</span>
										</div>
									</a>
								</div>
							</li>
							<li>
								<div class="fj-com">
									<a href="##" class="fj-a">
										
										<img src="img/body/life/4.webp" alt="">
									</a>
									<a href="##">
										<div class="fj-words">老外来中国游玩，居然被…………</div>
										<div class="fj-i">
											<span>
												<i class="fj-play"></i>
												6.7万
											</span>
											<span>
												<i class="fj-mulu"></i>
												1325
											</span>
										</div>
									</a>
								</div>	
							</li>
							<li>
								<div class="fj-com">
									<a href="##" class="fj-a">
										
										<img src="img/body/life/5.webp" alt="">
									</a>
									<a href="##">
										<div class="fj-words">【不作会死】今天我教大家如何做一款能吃的饮料</div>
										<div class="fj-i">
											<span>
												<i class="fj-play"></i>
												5249
											</span>
											<span>
												<i class="fj-mulu"></i>
												264
											</span>
										</div>
									</a>
								</div>	
							</li>
							<li>
								<div class="fj-com">
									<a href="##" class="fj-a">
										<div class="medal"></div>
										<img src="img/body/life/6.webp" alt="">
									</a>
									<a href="##">
										<div class="fj-words">自从这群歪果仁沉迷中国KTV以后。。。</div>
										<div class="fj-i">
											<span>
												<i class="fj-play"></i>
												99.4万
											</span>
											<span>
												<i class="fj-mulu"></i>
												1.3万
											</span>
										</div>
									</a>
								</div>	
							</li>
							<li>
								<div class="fj-com">
									<a href="##" class="fj-a">
										
										<img src="img/body/life/6.webp" alt="">
									</a>
									<a href="##">
										<div class="fj-words">日本大胃王俄罗斯佐藤吃60个giant caplico（中文字幕）</div>
										<div class="fj-i">
											<span>
												<i class="fj-play"></i>
												3471
											</span>
											<span>
												<i class="fj-mulu"></i>
												54
											</span>
										</div>
									</a>
								</div>	
							</li>
							<li>
								<div class="fj-com">
									<a href="##" class="fj-a">
										
										<img src="img/body/life/8.webp" alt="">
									</a>
									<a href="##">
										<div class="fj-words">柿原彻也- making of‘ Still on Journey’</div>
										<div class="fj-i">
											<span>
												<i class="fj-play"></i>
												3812
											</span>
											<span>
												<i class="fj-mulu"></i>
												283
											</span>
										</div>
									</a>
								</div>	
							</li>
							<li>
								<div class="fj-com">
									<a href="##" class="fj-a">
										
										<img src="img/body/life/9.webp" alt="">
									</a>
									<a href="##">
										<div class="fj-words">一只从小被狗狗养大的小羊，所以它跑起来是这样的！</div>
										<div class="fj-i">
											<span>
												<i class="fj-play"></i>
												3.3万
											</span>
											<span>
												<i class="fj-mulu"></i>
												216
											</span>
										</div>
									</a>
								</div>	
							</li>
							<li>
								<div class="fj-com">
									<a href="##" class="fj-a">
										
										<img src="img/body/life/10.webp" alt="">
									</a>
									<a href="##">
										<div class="fj-words">恐怖菜-椰子幼虫存活</div>
										<div class="fj-i">
											<span>
												<i class="fj-play"></i>
												4968
											</span>
											<span>
												<i class="fj-mulu"></i>
												157
											</span>
										</div>
									</a>
								</div>	
							</li>	
						</ul>
					</div>
				</div>
				<div class="fanju-r">
					<div class="fj-r-head">
						<div class="fj-r-left">
							<span>
								<h3>排行</h3>
							</span>
						</div>
						<div class="fj-r-right">
							<select name="" id="">
								<option value="">三日</option>
								<option value="">一周</option>
							</select>
						</div>
					</div>
					<div class="fj-r-body">
						<ul class="fj-rank">
							<li>
								<i class="fj-number fj-n123">1</i>
								<div class="fj-rank1">
									<img src="img/body/life/11.webp" alt="">
								</div>
								<a href="##">
									<div class="fj-rank11">那些年的神秘四奥</div>
									<div class="fj-rank12">
										<span>综合评分：27.8万</span>
									</div>
								</a>
							</li>
							<li>
								<i class="fj-number fj-n123">2</i>
								<a href="##" class="fj-rank-com game-rdiff" >这个人怎么没事还打无人机玩？</a>
							</li>
							<li>
								<i class="fj-number fj-n123">3</i>
								<a href="##" class="fj-rank-com game-rdiff" >可乐罐爆米花，嘭嘭嘭嘭嘭…收花的人说要把我娶回家 @办公室小野</a>
							</li>
							<li>
								<i class="fj-number">4</i>
								<a href="##" class="fj-rank-com game-rdiff">大胃王密子君（肉骨茶）这一次我来到了马来西亚，情人节带你吃被捆绑的肉，吃播吃货美食！</a>
							</li>
							<li>
								<i class="fj-number">5</i>
								<a href="##" class="fj-rank-com game-rdiff">情人节了，一起吃个饭吧，好吗？@野食小哥</a>
							</li>
							<li>
								<i class="fj-number">6</i>
								<a href="##" class="fj-rank-com game-rdiff">【德国大嘴妹子】女性爱爱高潮技巧  @柚子木字幕组</a>
							</li>
							<li>
								<i class="fj-number">7</i>
								<a href="##" class="fj-rank-com game-rdiff">歪果仁吃到中国的童年零食 （旺仔小馒头 浪味仙 辣条...） 反应超搞笑!</a>
							</li>
						</ul>
						<div class="fj-more-link">
							<a href="##">
								查看更多
								<i></i>
							</a>
						</div>
					</div>
				</div>


			</div>
		</div>






<!-- 下面是侧条 -->
	<div class="nav">
		<div class="nav-list">
			<div class="fenlei">
				<a href="#item1" class="current">番剧</a>
			</div>
			<div class="fenlei">
				<a href="#item2">游戏</a>
			</div>
			<div class="fenlei">
				<a href="#item3">娱乐</a>
			</div>
			<div class="fenlei">
				<a href="#item4">生活</a>
			</div>
			<div class="fenlei">
				<a href="">直播</a>
			</div>
			<div class="fenlei">
				<a href="">动画</a>
			</div>
			<div class="fenlei">
				<a href="">舞蹈</a>
			</div>
			<div class="fenlei">
				<a href="">鬼畜</a>
			</div>
			<div class="fenlei">
				<a href="">电影</a>
			</div>
			<div class="fenlei">
				<a href="">时尚</a>
			</div>
			<div class="fenlei">
				<a href="">科技</a>
			</div>
			<div class="fenlei">
				<a href="">广告</a>
			</div>
			<div class="fenlei">
				<a href="">TV剧</a>
			</div>
			<div class="fenlei">
				<a href="">音乐</a>
			</div>
			<div class="paixu">
				<i></i>
				<p>排序</p>
			</div>
		</div>
		<div class="gotop">
			<div class="lianjie"></div>
			<div class="btn-gotop"></div>
		</div>
		<div class="mlink"></div>
	</div>



















	<?php

	require ROOT_PATH.'includes/footer_inc.php';


	?>











	


	<script type="text/javascript" src="js/index.js"></script>
</body>
</html>
