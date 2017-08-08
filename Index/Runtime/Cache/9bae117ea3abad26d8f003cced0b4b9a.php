<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>全部机型</title>
		<link rel="stylesheet" type="text/css" href="__ROOT__/Index/Common/css/allcpt.css">
		<script type="text/javascript" src="__ROOT__/Index/Common/js/jquery-3.1.1.min.js"></script>
	</head>
	<body>
		<!doctype html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>快租365</title>
		<style type="text/css">
			.headLoginLeft a:hover{
				color: rgb(136,196,57)
			}

			.headLoginLeft .yep:hover{
				color: rgb(136,196,57)
			}

		</style>
	</head>
	<body>
		<div class="head"></div>
		<div class="box">
			<header>
				<div class="headLogin">
					<div class="headLoginLeft">
						<?php if($_SESSION['username']!= ''): ?><span style="font-size: 12px">你好,&nbsp;
							<?php echo (session('username')); ?></span> <span style="font-size: 12px;cursor: pointer;" onclick="quit()" class="yep">退出</span> <a href="">个人中心</a>
						<?php else: ?> <a href="__APP__/Index/login">登录</a>&nbsp;&nbsp;<a href="#">注册</a><?php endif; ?>
					</div>
					<div class="headLoginRight">
						<a href="#">我的订单</a>
						<span class="sep">丨</span>
						<a href="#">帮助中心</a>
						<span class="sep">丨</span>
						<span class="hotTel">客服热线:</span>
						<span class="hotLine">400-9026-365</span>
					</div>
				</div>
				<div class="headLogo">
					<div class="headLogoLeft">
						<img src="__ROOT__/Index/Common/img/index/logo_full.png"/>
						<!-- <div style="height: 50px;width: 520px;"></div> -->
					</div>
					<div class="headLogoRight">
						<input type="text" placeholder="输入关键字" />
						<button class="search">🔍</button>
						<div class="searchMore">
							<span>热门搜索：</span>
							<a href="#">联想</a>
							<a href="#">惠普台式机</a>
							<a href="#">微软</a>
							<a href="#">苹果</a>
							<a href="#">340G3</a>
						</div>
					</div>
				</div>
			</header>
			<div>
				<div class="bodyHead">
					<div class="fen">商品分类</div>
					<a href="__APP__/Index/index">首页</a>
					<a href="__APP__/Index/Allcpt">全部机型</a>
					<a href="__APP__/Index/Time">限时促销</a>
					<a href="__APP__/Index/newproduct">新品推荐</a>
					<a href="#">关于我们</a>
					<a href="#" style="float: right;color: black;">我要还款></a>
				</div>
			</div>
			
		</div>
		<hr />
	</body>
	<script type="text/javascript">
		function quit(){
			$.ajax({
				url:"__APP__/Index/quitUser",
				dataType:"JSON",
				type:"post",
				success:function(data){
					if(data['status']==1){
						window.location.href="__APP__/Index/login";
					}
				}
			})
		}
	</script>
</html>
		<div class="box">
			<div class="pullList">
				<div class="item">
    		<ul>
    			<li>
    				<h5><span class="itemImg itemImgF"></span>&nbsp;办公电脑</h5>
    				<a href="">一体机</a>
    				<a href="">笔记本电脑</a>
    				<a href="">台式机</a>
    			</li>
    			<li>
    				<h5><span class="itemImg itemImgS"></span>&nbsp;办公外设</h5>
    				<a href="">投影仪</a>
    				<a href="">电视</a>
    				<a href="">净化器</a>
    				<a href="">平板</a>
    				<a href="">手机</a>
    				<a href="">显示器</a>
    				<a href="">打印机</a>
    				<a href="">配件</a>
    			</li>
    			<li>
    				<h5><span class="itemImg itemImgT"></span>&nbsp;办公服务</h5>
    				<a href="">办公软件</a>
    				<a href="">IT服务</a>
    			</li>
    			<li>
    				<h5><span class="itemImg itemImgFour"></span>&nbsp;使用场景</h5>
    				<a href="">普通办公</a>
    				<a href="">技术开发</a>
    				<a href="">轻薄便捷</a>
    				<a href="">图形设计</a>
    			</li>
    			<li>
    				<h5><span class="itemImg itemImgFive"></span>&nbsp;价格区间</h5>
    				<a href="">0~100元</a>
    				<a href="">100元~150元</a>
    				<a href="">150元~300元</a>
    				<a href="">300元以上</a>
    			</li>
    		</ul>
    	</div>
			</div>
			<a href="#">
				<img src="__ROOT__/Index/Common/img/alltype/allcptHead.png">
			</a>
			<div class="bodyFenlei">
				<dl class="pinpai">
					<dt style="text-indent: 2em;">品牌:</dt>
					<dd class="spColor">不限</dd>
					<div class="ddbox">
						<dd>ThinkPad</dd>
						<dd>苹果</dd>
						<dd>惠普</dd>
						<dd>联想</dd>
						<dd>戴尔</dd>
						<dd>三星</dd>
						<dd>乐歌</dd>
						<dd>昭阳</dd>
						<dd>富可视</dd>
						<dd>海信</dd>
						<dd>金山</dd>
						<dd>微软</dd>
					</div>
				</dl>
				<dl class="pinpai">
					<dt style="text-indent: 2em;">分类:</dt>
					<dd class="spColor">不限</dd>
					<div class="ddbox">
						<dd>笔记本电脑</dd>
						<dd>台式机</dd>
						<dd>一体机</dd>
						<dd>显示器</dd>
						<dd>投影仪</dd>
						<dd>电视</dd>
						<dd>打印机</dd>
						<dd>空气净化器</dd>
						<dd>IT服务</dd>
						<dd>办公软件</dd>
						<dd>手机</dd>
						<dd>配件</dd>
						<dd>平板电脑</dd>
					</div>
				</dl>
				<dl class="pinpai">
					<dt>使用场景:</dt>
					<dd class="spColor">不限</dd>
					<div class="ddbox">
						<dd>普通办公</dd>
						<dd>技术开发</dd>
						<dd>轻薄便携</dd>
						<dd>图形设计</dd>
					</div>
				</dl>
				<dl class="pinpai">
					<dt>租金范围:</dt>
					<dd class="spColor">不限</dd>
					<div class="ddbox">
						<dd>0元~100元</dd>
						<dd>100元~150元</dd>
						<dd>150元~300元</dd>
						<dd>300元以上</dd>
					</div>
				</dl>
				<dl class="pinpai">
					<dt>新旧属性:</dt>
					<dd class="spColor">不限</dd>
					<div class="ddbox">
						<dd>非全新设备</dd>
						<dd>全新设备</dd>
					</div>
				</dl>
				<dl class="pinpai">
					<dt>租赁方式:</dt>
					<dd class="spColor">不限</dd>
					<div class="ddbox">
						<dd>随租随还</dd>
						<dd>固定租期</dd>
						<dd>租完即送</dd>
						<dd>短期租赁</dd>
					</div>
				</dl>
				<div class="shaixuan" style="font-size: 14px;color: rgb(102,102,102);">
					<strong style="color: #999;margin-right: 28px;">当前筛选></strong>
					<a href="#" style="color: rgb(102,102,102);text-decoration: none;">重置</a>
					共为你找到<span id="count">281</span>个商品
				</div>
			</div>
			<ul class="paixu">
				<li class="paixuLi" id="selected">默认排序↑↓</li>
				<li class="paixuLi">租金低到高↑</li>
				<li class="paixuLi">租金高到低↓</li>
			</ul>
			<ul class="present">
				<!-- <li class="presentcpt">
					<a href="#">
						<img src="">
					</a>
					<p><a href="#"></a></p>
					<p><a href="#"></a></p>
					<h4></h4>
				</li> -->
				<div class="presentcpt">
					<a href="#">
						<img src="__ROOT__/Index/Common/img/alltype/mini_1495018987_7160.png">
					</a>
					<p><a href="#" target="_blank">全新HP迷你台式机 400 G3 DM win10 pro版</a></p>
					<p><a href="#" target="_blank">G4560T/4G内存/500G HDD硬盘/ 19.5英寸显示器/HP键盘鼠标/win10 pro版</a></p>
					<h4>￥241.00</h4>
				</div>
				<li class="presentcpt">
					<a href="#">
						<img src="__ROOT__/Index/Common/img/alltype/mini_1480567841_6098.png">
					</a>
					<p><a href="#" target="_blank">全新HP Elite Slice 会议专用型台式机 win10 home版</a></p>
					<p><a href="#" target="_blank">i3/8G内存/500G/集显/win10 home版</a></p>
					<h4>￥350.00</h4>
				</li>
				<li class="presentcpt">
					<a href="#">
						<img src="__ROOT__/Index/Common/img/alltype/mini_1495018363_6109.png">
					</a>
					<p><a href="#" target="_blank">全新HP迷你台式机 400 G3 DM win10 pro版</a></p>
					<p><a href="#" target="_blank">i3-7100T/4G内存/500G HDD硬盘/ 19.5英寸显示器/HP键盘鼠标/win10 pro版</a></p>
					<h4>￥249.00</h4>
				</li>
				<li class="presentcpt">
					<a href="#">
						<img src="__ROOT__/Index/Common/img/alltype/mini_1490688301_6162.png">
					</a>
					<p><a href="#" target="_blank">全新HP ProDesk 400 G4 SFF win10 home版小机箱台式机</a></p>
					<p><a href="#" target="_blank">I5/8G/256G SSD/独显 2G/19.5英寸显示器/win10 home版</a></p>
					<h4>￥234.00</h4>
				</li>
				<li class="presentcpt">
					<a href="#">
						<img src="__ROOT__/Index/Common/img/alltype/mini_1492498318_5862.jpg">
					</a>
					<p><a href="#" target="_blank">全新联想 YOGA BOOK 二合一平板电脑 win10版 10.1英寸</a></p>
					<p><a href="#" target="_blank">Intel X5-Z8550/4G内存/64GSSD/win10版/2年免费上门质保服务</a></p>
					<h4>￥190.00</h4>
				</li>
				<li class="presentcpt">
					<a href="#">
						<img src="__ROOT__/Index/Common/img/alltype/mini_1498190430_4510.png">
					</a>
					<p><a href="#" target="_blank">全新惠普（HP）340 G4 14英寸 win10 home版商务办公笔记本电脑</a></p>
					<p><a href="#" target="_blank">i5-7200U/8G内存/256G SSD/独立显卡/win10 home版/一年送修</a></p>
					<h4>￥238.00</h4>
				</li>
				<li class="presentcpt">
					<a href="#">
						<img src="__ROOT__/Index/Common/img/alltype/mini_1498104707_7414.jpg">
					</a>
					<p><a href="#" target="_blank">全新Apple 苹果 MacBook Air  13英寸笔记本电脑 MQD32CH/A</a></p>
					<p><a href="#" target="_blank">1.8GHz 双核 i5处理器/8G内存/128G SSD/集显</a></p>
					<h4>￥332.00</h4>
				</li>
				<li class="presentcpt">
					<a href="#">
						<img src="__ROOT__/Index/Common/img/alltype/mini_1495018987_7160.png">
					</a>
					<p><a href="#" target="_blank">全新联想ThinkPad T570 win10 home版 15.6英寸笔记本电脑</a></p>
					<p><a href="#" target="_blank">i5-7200U/8GB内存/128G SSD +1TB/15.6英寸/2GB独显/win10 home版/一年送修</a></p>
					<h4>￥469.00</h4>
				</li>
			</ul>
		</div>
		<!doctype html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Document</title>
	
	
</head>
<body>
	<div class="bottom">
		<div class="advantage">
			<div class="size">
				<span class="free"></span>
				<span>免押金</span>
			</div>
			<div class="size">
				<span class="lowMoney free"></span>
				<span>低租金</span>
			</div>
			<div class="size">
				<span class="anytime free"></span>
				<span>随时还</span>
			</div>
			<div class="size" style="border:0px">
				<span class="protect free" ></span>
				<span>全程保</span>
			</div>
			
		</div>
		<div class="container">
			<div class="info">
			<ul>
				<li>
					<h5>关于快租365</h5>
					<a href="">关于我们</a>
					<a href="">商务合作</a>
					<a href="">加入我们</a>
					<a href="">联系我们</a>
				</li>
				<li>
					<h5>帮助中心</h5>
					<a href="">免押租赁</a>
					<a href="">租赁流程</a>
					<a href="">租赁方式</a>
					<a href="">售后服务</a>
					<a href="">常见问题</a>
				</li>
				<li>
					<h5>媒体中心</h5>
					<a href="">媒体报道</a>
					<a href="">新闻中心</a>
				</li>
				<li>
					<h5>快捷通道</h5>
					<a href="">我要还款</a>
					<a href="">申请发票</a>
					<a href="">租赁协议</a>
				</li>
			</ul>
		</div>
		<div class="erwei">
			<div class="imgs">
				<img src="__ROOT__/Index/Common/img/index/webcode.png" alt="二维码" />
			</div>
			<div class="wenzi">
				<p>扫描微信二维码</p>
				<p>查看手机版网站</p>
				<p>随时了解更新最新资讯</p>
			</div>
			
		</div>
		<div class="connect">
			<div class="phone">
				<img src="__ROOT__/Index/Common/img/index/phone.png" alt="电话" />
			</div>
			<p style="color:#8FC31F ;font-size:28px">400-9026-365</p>
			<p style="font-size: 12px;color:#666; margin-left:58px;
			margin-top: 20px;margin-bottom: 20px;">在线客服(服务时间 9:00~18:00)</p>
			<a href="#" class="button">
				<img src="__ROOT__/Index/Common/img/index/mic.png" alt="耳麦" />
				<span>在线客服</span>
			</a>
			
		</div>

		</div>
		<div class="relation">
			<div class="friend">
				<h5 style="float: left;">友情链接:</h5>
				<ul>
					<li>
						<a href="">创头条</a>
					</li>
					<li>
						<a href="">人人财务</a>
					</li>
					<li>
						<a href="">哪合伙</a>
					</li>
					<li>
						<a href="">天使帮</a>
					</li>
					<li>
						<a href="">短信平台</a>
					</li>
					<li>
						<a href="">星河商学院</a>
					</li>
					<li>
						<a href="">小劳易管</a>
					</li>
					<li>
						<a href="">星河创服</a>
					</li>
					<li>
						<a href="">硅谷装饰</a>
					</li>
				</ul>
			</div>

		</div>
		<p class="bottomWenzi">© Copyright Reserved 2015-2017　|　沪ICP备16011127号-1　|　上海捷租网络科技有限公司<br />
		<span style="margin-left: 66px;">地址:上海市虹口区武进路456号2幢10楼</span></p>
		<div class="bottmImg">
			<img src="__ROOT__/Index/Common/img/index/gongshang.png" alt="上海工商" />
			<img src="__ROOT__/Index/Common/img/index/beian.jpg" alt="备案" />
		</div>
	</div>
</body>
</html>
	</body>
	<script type="text/javascript">
		var presentcpt = document.getElementsByClassName('presentcpt');
		// console.log(typeof presentcpt);
		for (var i = 0; i < presentcpt.length; i++) {
			if(i%4==3){
				presentcpt[i].style.marginRight = "0px";
			}
		}
		//下来菜单
	$(".pullList").hover(function(){
		$(".item").slideToggle("100");
		$(".item ul").hover(function(){
			$(".item").css("display","block")
		})
	})
	</script>
</html>