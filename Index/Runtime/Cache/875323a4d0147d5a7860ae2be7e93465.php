<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Document</title>
		<link rel="stylesheet" type="text/css" href="__ROOT__/Index/Common/css/detail.css">
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
		<div class="containerHead">
			
			<div class="containerBox">
			
				<a href="#">首页</a>
				<span>/</span>
				<a href="#">全部机型</a>
				<span>/</span>
				<span>全新Apple 苹果 MacBook Air 13英寸笔记本电脑 MQD32CH/A</span>
			</div>
		</div>
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
			<div class="boxLeft">
				<div class="preview">
					<img src="__ROOT__/Index/Common/img/alltype/mini_1498104707_7414.jpg">
				</div>
				<div class="clearfix">
					<a href="#" class="clearfixLeftA"><</a>
					<img src="__ROOT__/Index/Common/img/alltype/mini_1498104707_7414.jpg">
					<img src="__ROOT__/Index/Common/img/alltype/mini_1498104624_7408.jpg">
					<a href="#" class="clearfixRightA">></a>
				</div>
				<a href="#" class="datasafe">数据安全</a>
			</div>
			<div class="boxRight">
				<h4 style="color: rgb(85,85,85);">全新Apple 苹果 MacBook Air 13英寸笔记本电脑 MQD32CH/A</h4>
				<p class="boxRightP">1.8GHz 双核 i5处理器/8G内存/128G SSD/集显<a href="#" class="boxRightPA"></a></p>
				<div class="goodPrice">月租金：<span class="goodPriceSpa">￥624.00</span><span class="goodPriceSpb">全新设备</span></div>
				<div class="configure">
					<dl class="configureDl">
						<dt>租赁方式:</dt>
						<label>
							<dd class="dynamicPrice">
								租金：<span class="textDanger">￥624.00</span><br>
								租期：<span class="textDanger">12</span>月<br>
								<b>租完即送</b>
							</dd>
						</label>
						<label>
							<dd class="dynamicPrice">
								租金：<span class="textDanger">332.00</span><br>
								租期：<span class="textDanger">24</span>月<br>
								<b>租完即送</b>
							</dd>
						</label>
					</dl>
				</div>
				<div class="configure">
					<dl class="configureDl" style="line-height: 32px;">
						<dt>使用日期:</dt>
						<dd>
							<button style="width: 118px;height: 32px;">2017-8-15</button>
						</dd>
					</dl>
				</div>
				<div class="configure">
					<dl class="configureDl" style="line-height: 32px;">
						<dt>租机数量:</dt>
						<dd>
							<button style="width: 32px;height: 32px;margin: 0px;padding: 0px;">-</button>
							<input type="text" value="1" style="width: 50px;height: 32px;margin: 0px;padding: 0px;">
							<button style="width: 32px;height: 32px;margin: 0px;padding: 0px;">+</button>
						</dd>
					</dl>
				</div>
				<div class="addsome">
					<span>押金：当前押金：</span><span>￥7480.00</span><span>,押金应付:</span><span>￥7480.00</span><span>,您的可用免押金额度为:</span><span>￥0</span><a href="#">开通免押金</a>
				</div>
				<hr>
				<span class="totlemoney">月租金:</span><span class="priceAreaA">￥</span><span class="priceAreaB">624.00</span>
				<div style="margin-top: 10px;">
					<a href="#" class="addcar">加入购物车</a>
					<a href="#" class="buyatonce">立即租赁</a>
					<a href="#" class="whatisfree">什么是免押金租赁?</a>
				</div>
			</div>
		</div>
		<div class="bodymid">
			<a href="#">
				<img src="__ROOT__/Index/Common/img/detail/bodymid.png">
			</a>
		</div>
		<div class="boxmid">
			<div class="boxmidLeft">
				<div class="detailTitle">
					<ul>
						<li class="listItem" style="background-color: #8FC31F;color: white;">商品详情</li>
						<li class="listItem">商品参数</li>
						<li class="listItem">购买咨询</li>
					</ul>
				</div>
				<div class="tab1">
					<img src="__ROOT__/Index/Common/img/detail/tab1.jpg">
					<img src="__ROOT__/Index/Common/img/detail/tab2.jpg">
					<img src="__ROOT__/Index/Common/img/detail/tab3.jpg">
					<img src="__ROOT__/Index/Common/img/detail/tab4.jpg">
					<img src="__ROOT__/Index/Common/img/detail/tab5.jpg">
					<img src="__ROOT__/Index/Common/img/detail/tab6.jpg">
				</div>
				<div class="tab2">
					<img src="__ROOT__/Index/Common/img/detail/tab7.jpg">
				</div>
				<div class="tab3">
					<p><span>温馨提示:</span>因厂家更改产品包装、产地或者更换随机附件等没有任何提前通知，且每位咨询者购买情况、提问时间等不同，为此以下回复仅对提问者3天内有效，其他网友仅供参考！若由此给您带来不便请多多谅解，谢谢！</p>
					<h4>咨询内容:</h4>
					<textarea rows="4" id="consulting"></textarea>
					<input type="button" style="padding: 10px;font-size: 14px;color: white;background-color: #8fc31f;float: right;" value="发表咨询">
				</div>
			</div>
			<div class="boxmidRight">
				<div>推荐商品</div>
				<a href="#"><img src="__ROOT__/Index/Common/img/detail/mini_1461291609_6795.jpg"></a>
				<span>￥322</span>
				<a href="#"><img src="__ROOT__/Index/Common/img/detail/mini_1461291995_7485.jpg"></a>
				<span>￥80</span>
				<a href="#"><img src="__ROOT__/Index/Common/img/detail/mini_1491378110_1114.jpg"></a>
				<span>￥198</span>
				<a href="#"><img src="__ROOT__/Index/Common/img/detail/mini_1491463678_8926.png"></a>
				<span>￥90</span>
				<a href="#"><img src="__ROOT__/Index/Common/img/detail/mini_1498642788_5733.jpg"></a>
				<span>￥198</span>
				<a href="#"><img src="__ROOT__/Index/Common/img/detail/mini_1499682048_1486.jpg"></a>
				<span>￥115</span>
			</div>
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
		var listItem = document.getElementsByClassName('listItem');
		var tab1 = document.getElementsByClassName('tab1')[0];
		var tab2 = document.getElementsByClassName('tab2')[0];
		var tab3 = document.getElementsByClassName('tab3')[0];
		listItem[0].onclick = function(){
			tab1.style.display = "block";
			tab2.style.display = "none";
			tab3.style.display = "none";
			listItem[0].style.backgroundColor = "#8FC31F";
			listItem[0].style.color = "white";
			listItem[1].style.backgroundColor = "";
			listItem[1].style.color = "#666";
			listItem[2].style.backgroundColor = "";
			listItem[2].style.color = "#666";
		}
		listItem[1].onclick = function(){
			tab1.style.display = "none";
			tab2.style.display = "block";
			tab3.style.display = "none";
			listItem[0].style.backgroundColor = "";
			listItem[0].style.color = "#666";
			listItem[1].style.backgroundColor = "#8FC31F";
			listItem[1].style.color = "white";
			listItem[2].style.backgroundColor = "";
			listItem[2].style.color = "#666";
		}
		listItem[2].onclick = function(){
			tab1.style.display = "none";
			tab2.style.display = "none";
			tab3.style.display = "block";
			listItem[0].style.backgroundColor = "";
			listItem[0].style.color = "#666";
			listItem[1].style.backgroundColor = "";
			listItem[1].style.color = "#666";
			listItem[2].style.backgroundColor = "#8FC31F";
			listItem[2].style.color = "white";
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