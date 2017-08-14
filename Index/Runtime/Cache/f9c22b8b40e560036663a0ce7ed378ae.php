<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Document</title>
	<link rel="stylesheet" href="__ROOT__/Index/Common/css/index.css" />
	<script type="text/javascript" src="__ROOT__/Index/Common/js/swiper.min.js"></script>
	<script type="text/javascript" src="__ROOT__/Index/Common/js/jquery-3.1.1.min.js"></script>
	<link rel="stylesheet" href="__ROOT__/Index/Common/css/swiper.min.css" />
	<script type="text/javascript" src="__ROOT__/Index/Common/js/angular.min.js"></script>
</head>
<body ng-app="myapp" ng-controller="myController">
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
						<?php else: ?> <a href="__APP__/Index/login">登录</a>&nbsp;&nbsp;<a href="__APP__/Index/register">注册</a><?php endif; ?>
					</div>
					<div class="headLoginRight">
						<a href="__APP__/Index/personal">我的订单</a>
						<span class="sep">丨</span>
						<a href="__APP__/Index/help">帮助中心</a>
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
	<div class="contentSwiper">

		<div class="showList">
			<div class="pullList"></div>
			<div class="priceNews">
    		<h4>促销快报</h4>
    		<ul>
    			<li>
    				<a href="">接力6.18,狂欢不停歇</a>
				</li>
    			<li>
    				<a href="" title="精致之中蕴含无限可能,惠普幻系列登场">精致之中蕴含无限可能,惠普...</a>
				</li>
    			<li>
    				<a href="" title="明日胜局，今日掌控，戴尔成就系列新上线">
    					明日胜局，今日掌控，戴尔成...
    				</a>
				</li>
    		</ul>
    		<p>Hi,欢迎来到快租365!</p>
    		<div class="into">
    			<a href="__APP__/Index/login" class="login">登陆</a>
    			<a href="__APP__/Index/register" class="register">注册</a>
    		</div>
    		<div class="adv">
    			<a href="">
    				<img src="__ROOT__/Index/Common/img/index/adv.jpg" alt="广告" />
    			</a>
    		</div>
    	</div>
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
		<div class="swiper-container">
		  <div class="swiper-wrapper">
		    <div class="swiper-slide page" style="background:#bee1da">
		    	<img src="__ROOT__/Index/Common/img/index/summer.jpg" alt="盛夏" />
		    </div>
		    <div class="swiper-slide page" style="background: #325cc8">
		    	<img src="__ROOT__/Index/Common/img/index/canmen.jpg" alt="一分钟相机" />
		    </div>
		    <div class="swiper-slide page" style="background: #c2a17e">
		    	<img src="__ROOT__/Index/Common/img/index/lenove.jpg" alt="全新联想" />
		    </div>
		    <div class="swiper-slide page" style="background: #cfcfcf">
		    	<img src="__ROOT__/Index/Common/img/index/huipu.png" alt="全新惠普" />
		    </div>
		  </div>
		</div>
		<div class="swiper-pagination dot"></div>
		<div class="swiper-button-prev swiper-button-white des" style="left:6%;"></div>
    	<div class="swiper-button-next des swiper-button-white" style="right:66px;"></div>
    	

	</div>
	<div class="showProduct">
		<div class="icon">
			<ul>
				<li>
					<a href="">
						<span class="freeMoney"></span>
						<p>免押金</p>
					</a>
				</li>
				<li>
					<a href="">
						<span class="rent"></span>
						<p>一台起租</p>
					</a>
				</li>
				<li>
					<a href="">
						<span class="month"></span>
						<p>按月支付</p>
					</a>
				</li>
				<li>
					<a href="">
						<span class="anytime"></span>
						<p>随租随还</p>
					</a>
				</li>
				<li>
					<a href="">
						<span class="pay"></span>
						<p>信用消费</p>
					</a>
				</li>
				<li>
					<a href="">
						<span class="allP"></span>
						<p>全程保修</p>
					</a>
				</li>
			</ul>
		</div>
		<div class="power">
			<div class="sixOne">
				<a href="">
					<h2>接力6.18</h2>
					<h4>火爆促销 点燃夏日</h4>
				</a>
			</div>
		</div>
		<div class="secondPrice">
			<p class="miaosu">
				<a href="">
					二手价格 全新体验
					<br />
					<br />
					<span class="lowTo">低至99元/月</span>
				</a>
			</p>
			<img src="__ROOT__/Index/Common/img/index/lowTo.png"  alt="" 
			class="shake" />
		</div>
		<div class="secondPrice">
			<p class="miaosu">
				<a href="">
					小巧空间 性价之王
					<br />
					<br />
					<span class="lowTo">低至99元/月</span>
				</a>
			</p>
			<img src="__ROOT__/Index/Common/img/index/hp.png"  alt="" 
			class="shakely" />
		</div>
		<div id="hot" class="hotType">
			<div class="shuxian"></div>
			<span>热销机型</span>
			<div class="buttonS">
				<div class="buttonControl hou">
					
				</div>
				<div class="buttonControl qian">
					
				</div>
			</div>
		</div>
		<div class="hotProduct">
			<div ng-repeat="v in hotList">
				<div class="kuang">
					<div class="hotItem">
						<div class="hotItemImg">
							
							<img src="__ROOT__/{{v.img[0].imgUrl}}" alt="" />
						</div>
						<p style="margin-top: 10px;">
							<a href="">
								{{v.goodsName}}
							</a>
						</p>
						<p>
							<a href="">
								{{v.goodsTitle}}
							</a>
						</p>
						<h4 style="color:#f5675d;margin: 5px">￥{{v.price[0].price}}</h4>
					</div>
					<div class="light">
						
					</div>
				</div>
			</div>
			
			<!-- <div class="kuang">
				<div class="hotItem">
					<div class="hotItemImg">
						<img src="__ROOT__/Index/Common/img/index/hotImgF.png" alt="" />
					</div>
					<p style="margin-top: 10px;">
						<a href="">全新惠普（HP）340 G3 14英寸 win10 home版商务办公笔记本电脑</a>
					</p>
					<p>
						<a href="">i3-6006U/4G内存/500G/集成显卡/win10 home版</a>
					</p>
					<h4 style="color:#f5675d;margin: 5px">￥118.00</h4>
				</div>
				<div class="light">
					
				</div>
			</div> -->
		</div>

		<div id="commonProduct" class="hotType">
			<div class="shuxian"></div>
			<span>普通办公</span>
			
		</div>
		<div class="bussiness">
			<div class="leftBox">
				<div class="leftTopBox">
					<h3><b>小身材 大能量</b></h3>
					<p>惠普迷你台式机 400 G3 DM</p>
					<a href="">
						GO
						<img src="__ROOT__/Index/Common/img/index/next.png" alt=""/>
					</a>
				</div>
				<div class="leftBottomBox">
					<a href="" class="intelShake">
						<img src="__ROOT__/Index/Common/img/index/intel.png" alt="" />
					</a>
				</div>
			</div>
			<div class="rightBox">
				<div class="rightTopHp">
					<div class="rightTopHpLeft">
						<h1>HP商务系列340</h1>
						<p>用最少的钱，兼顾办公和娱乐</p>
						<span>368<small>元/月</small>
						</span>
						<a href="">
							立即下单
						</a>
					</div>
					<div class="rightTopHpRight">
						<a href="" class="shakeRight">
							<img src="__ROOT__/Index/Common/img/index/intelHp.png" alt="" />
						</a>
					</div>
				</div>
				<ul class="commonItem">
					<li ng-repeat="v in hotList">
						<div class="goodsImg">
							<img src="__ROOT__/{{v.img[0].imgUrl}}" alt="" />
						</div>
						<div class="itemCaption">
							<p>
								<a href="" title="v.goodsName">{{v.goodsName}}</a>
							</p>
							<p>
								<a href="" title="v.goodsTitle">
									{{v.goodsTitle}}
								</a>
							</p>
							<h4>¥ {{v.price[0].price}}</h4>
							
						</div>
						<div class="light lightSize">
					
						</div>
					</li>
					<!-- <li>
						<div class="goodsImg">
							<img src="__ROOT__/Index/Common/img/index/runnig.png" alt="" />
						</div>
						<div class="itemCaption">
							<p>
								<a href="" title="ThinkPad X220 12.5英寸便携笔记本电脑">ThinkPad X220 12.5英寸便携笔记本电脑</a>
							</p>
							<p>
								<a href="" title="i5-2520M 2.5G/4G内存/320G硬盘/HD3000集成显卡">
									i5-2520M 2.5G/4G内存/320G硬盘/HD3000集成显卡
								</a>
							</p>
							<h4>¥ 70.00</h4>
							
						</div>
						<div class="light lightSize">
					
						</div>
					</li>
					<li>
						<div class="goodsImg">
							<img src="__ROOT__/Index/Common/img/index/runnig.png" alt="" />
						</div>
						<div class="itemCaption">
							<p>
								<a href="" title="ThinkPad X220 12.5英寸便携笔记本电脑">ThinkPad X220 12.5英寸便携笔记本电脑</a>
							</p>
							<p>
								<a href="" title="i5-2520M 2.5G/4G内存/320G硬盘/HD3000集成显卡">
									i5-2520M 2.5G/4G内存/320G硬盘/HD3000集成显卡
								</a>
							</p>
							<h4>¥ 70.00</h4>
							
						</div>
						<div class="light lightSize">
					
						</div>
					</li>
					<li>
						<div class="goodsImg">
							<img src="__ROOT__/Index/Common/img/index/runnig.png" alt="" />
						</div>
						<div class="itemCaption">
							<p>
								<a href="" title="ThinkPad X220 12.5英寸便携笔记本电脑">ThinkPad X220 12.5英寸便携笔记本电脑</a>
							</p>
							<p>
								<a href="" title="i5-2520M 2.5G/4G内存/320G硬盘/HD3000集成显卡">
									i5-2520M 2.5G/4G内存/320G硬盘/HD3000集成显卡
								</a>
							</p>
							<h4>¥ 70.00</h4>
							
						</div>
						<div class="light lightSize">
					
						</div>
					</li>
					<li>
						<div class="goodsImg">
							<img src="__ROOT__/Index/Common/img/index/runnig.png" alt="" />
						</div>
						<div class="itemCaption">
							<p>
								<a href="" title="ThinkPad X220 12.5英寸便携笔记本电脑">ThinkPad X220 12.5英寸便携笔记本电脑</a>
							</p>
							<p>
								<a href="" title="i5-2520M 2.5G/4G内存/320G硬盘/HD3000集成显卡">
									i5-2520M 2.5G/4G内存/320G硬盘/HD3000集成显卡
								</a>
							</p>
							<h4>¥ 70.00</h4>
							
						</div>
						<div class="light lightSize">
					
						</div>
					</li> -->
				</ul>
			</div>
			
			
		</div>
		<div id="lighter" class="hotType">
			<div class="shuxian"></div>
			<span>轻薄便携</span>
			
		</div>
		<div class="bussiness">
			<div class="leftBox leftBoxS">
				<div class="leftTopBox">
					<h3><b style="color: #6b77ac">经典 直触底价</b></h3>
					<p>12英寸笔记本Thinkpad X201</p>
					<a href="" style="background-color: #6b77ac">
						GO
						<img src="__ROOT__/Index/Common/img/index/next.png" alt=""/>
					</a>
				</div>
				<div class="leftBottomBox">
					<a href="" class="intelShake">
						<img src="__ROOT__/Index/Common/img/index/intel.png" alt="" />
					</a>
				</div>
			</div>
			<div class="rightBox">
				<div class="rightTopHp">
					<div class="rightTopHpLeft">
						<h1>ThinkPad X220</h1>
						<p>极致小黑 便携办公明智之选</p>
						<span>70<small>元/月</small>
						</span>
						<a href="">
							立即下单
						</a>
					</div>
					<div class="rightTopHpRight">
						<a href="" class="shakeRight">
							<img src="__ROOT__/Index/Common/img/index/intelHp.png" alt="" />
						</a>
					</div>
				</div>
				<ul class="commonItem">
					<li>
						<div class="goodsImg">
							<img src="__ROOT__/Index/Common/img/index/runnig.png" alt="" />
						</div>
						<div class="itemCaption">
							<p>
								<a href="" title="ThinkPad X220 12.5英寸便携笔记本电脑">ThinkPad X220 12.5英寸便携笔记本电脑</a>
							</p>
							<p>
								<a href="" title="i5-2520M 2.5G/4G内存/320G硬盘/HD3000集成显卡">
									i5-2520M 2.5G/4G内存/320G硬盘/HD3000集成显卡
								</a>
							</p>
							<h4>¥ 70.00</h4>
							
						</div>
						<div class="light lightSize">
					
						</div>
					</li>
					<li>
						<div class="goodsImg">
							<img src="__ROOT__/Index/Common/img/index/runnig.png" alt="" />
						</div>
						<div class="itemCaption">
							<p>
								<a href="" title="ThinkPad X220 12.5英寸便携笔记本电脑">ThinkPad X220 12.5英寸便携笔记本电脑</a>
							</p>
							<p>
								<a href="" title="i5-2520M 2.5G/4G内存/320G硬盘/HD3000集成显卡">
									i5-2520M 2.5G/4G内存/320G硬盘/HD3000集成显卡
								</a>
							</p>
							<h4>¥ 70.00</h4>
							
						</div>
						<div class="light lightSize">
					
						</div>
					</li>
					<li>
						<div class="goodsImg">
							<img src="__ROOT__/Index/Common/img/index/runnig.png" alt="" />
						</div>
						<div class="itemCaption">
							<p>
								<a href="" title="ThinkPad X220 12.5英寸便携笔记本电脑">ThinkPad X220 12.5英寸便携笔记本电脑</a>
							</p>
							<p>
								<a href="" title="i5-2520M 2.5G/4G内存/320G硬盘/HD3000集成显卡">
									i5-2520M 2.5G/4G内存/320G硬盘/HD3000集成显卡
								</a>
							</p>
							<h4>¥ 70.00</h4>
							
						</div>
						<div class="light lightSize">
					
						</div>
					</li>
					<li>
						<div class="goodsImg">
							<img src="__ROOT__/Index/Common/img/index/runnig.png" alt="" />
						</div>
						<div class="itemCaption">
							<p>
								<a href="" title="ThinkPad X220 12.5英寸便携笔记本电脑">ThinkPad X220 12.5英寸便携笔记本电脑</a>
							</p>
							<p>
								<a href="" title="i5-2520M 2.5G/4G内存/320G硬盘/HD3000集成显卡">
									i5-2520M 2.5G/4G内存/320G硬盘/HD3000集成显卡
								</a>
							</p>
							<h4>¥ 70.00</h4>
							
						</div>
						<div class="light lightSize">
					
						</div>
					</li>
					<li>
						<div class="goodsImg">
							<img src="__ROOT__/Index/Common/img/index/runnig.png" alt="" />
						</div>
						<div class="itemCaption">
							<p>
								<a href="" title="ThinkPad X220 12.5英寸便携笔记本电脑">ThinkPad X220 12.5英寸便携笔记本电脑</a>
							</p>
							<p>
								<a href="" title="i5-2520M 2.5G/4G内存/320G硬盘/HD3000集成显卡">
									i5-2520M 2.5G/4G内存/320G硬盘/HD3000集成显卡
								</a>
							</p>
							<h4>¥ 70.00</h4>
							
						</div>
						<div class="light lightSize">
					
						</div>
					</li>
				</ul>
			</div>
			
			
		</div>
		<div id="design" class="hotType">
			<div class="shuxian"></div>
			<span>图形设计</span>
			
		</div>
		<div class="bussiness">
			<div class="leftBox leftBoxT">
				<div class="leftTopBox">
					<h3><b style="color: #02685d">用心提高办公效率</b></h3>
					<p>小机箱台式机400 G4 SFF</p>
					<a href="" style="background: #02685d">
						GO
						<img src="__ROOT__/Index/Common/img/index/next.png" alt=""/>
					</a>
				</div>
				<div class="leftBottomBox">
					<a href="" class="intelShake">
						<img src="__ROOT__/Index/Common/img/index/intel.png" alt="" />
					</a>
				</div>
			</div>
			<div class="rightBox">
				<div class="rightTopHp" style="background-color: #eef3f5">
					<div class="rightTopHpLeft" >
						<h1>ThinkPad W530</h1>
						<p>高端商务图形工作站 专业机做专业事</p>
						<span>285<small>元/月</small>
						</span>
						<a href="">
							立即下单
						</a>
					</div>
					<div class="rightTopHpRight">
						<a href="" class="shakeRight">
							<img src="__ROOT__/Index/Common/img/index/intelHp.png" alt="" />
						</a>
					</div>
				</div>
				<ul class="commonItem">
					<li>
						<div class="goodsImg">
							<img src="__ROOT__/Index/Common/img/index/runnig.png" alt="" />
						</div>
						<div class="itemCaption">
							<p>
								<a href="" title="ThinkPad X220 12.5英寸便携笔记本电脑">ThinkPad X220 12.5英寸便携笔记本电脑</a>
							</p>
							<p>
								<a href="" title="i5-2520M 2.5G/4G内存/320G硬盘/HD3000集成显卡">
									i5-2520M 2.5G/4G内存/320G硬盘/HD3000集成显卡
								</a>
							</p>
							<h4>¥ 70.00</h4>
							
						</div>
						<div class="light lightSize">
					
						</div>
					</li>
					<li>
						<div class="goodsImg">
							<img src="__ROOT__/Index/Common/img/index/runnig.png" alt="" />
						</div>
						<div class="itemCaption">
							<p>
								<a href="" title="ThinkPad X220 12.5英寸便携笔记本电脑">ThinkPad X220 12.5英寸便携笔记本电脑</a>
							</p>
							<p>
								<a href="" title="i5-2520M 2.5G/4G内存/320G硬盘/HD3000集成显卡">
									i5-2520M 2.5G/4G内存/320G硬盘/HD3000集成显卡
								</a>
							</p>
							<h4>¥ 70.00</h4>
							
						</div>
						<div class="light lightSize">
					
						</div>
					</li>
					<li>
						<div class="goodsImg">
							<img src="__ROOT__/Index/Common/img/index/runnig.png" alt="" />
						</div>
						<div class="itemCaption">
							<p>
								<a href="" title="ThinkPad X220 12.5英寸便携笔记本电脑">ThinkPad X220 12.5英寸便携笔记本电脑</a>
							</p>
							<p>
								<a href="" title="i5-2520M 2.5G/4G内存/320G硬盘/HD3000集成显卡">
									i5-2520M 2.5G/4G内存/320G硬盘/HD3000集成显卡
								</a>
							</p>
							<h4>¥ 70.00</h4>
							
						</div>
						<div class="light lightSize">
					
						</div>
					</li>
					<li>
						<div class="goodsImg">
							<img src="__ROOT__/Index/Common/img/index/runnig.png" alt="" />
						</div>
						<div class="itemCaption">
							<p>
								<a href="" title="ThinkPad X220 12.5英寸便携笔记本电脑">ThinkPad X220 12.5英寸便携笔记本电脑</a>
							</p>
							<p>
								<a href="" title="i5-2520M 2.5G/4G内存/320G硬盘/HD3000集成显卡">
									i5-2520M 2.5G/4G内存/320G硬盘/HD3000集成显卡
								</a>
							</p>
							<h4>¥ 70.00</h4>
							
						</div>
						<div class="light lightSize">
					
						</div>
					</li>
					<li>
						<div class="goodsImg">
							<img src="__ROOT__/Index/Common/img/index/runnig.png" alt="" />
						</div>
						<div class="itemCaption">
							<p>
								<a href="" title="ThinkPad X220 12.5英寸便携笔记本电脑">ThinkPad X220 12.5英寸便携笔记本电脑</a>
							</p>
							<p>
								<a href="" title="i5-2520M 2.5G/4G内存/320G硬盘/HD3000集成显卡">
									i5-2520M 2.5G/4G内存/320G硬盘/HD3000集成显卡
								</a>
							</p>
							<h4>¥ 70.00</h4>
							
						</div>
						<div class="light lightSize">
					
						</div>
					</li>
				</ul>
			</div>
			
			
		</div>
		<div id="tel" class="hotType">
			<div class="shuxian"></div>
			<span>技术开发</span>
			
		</div>
		<div class="bussiness">
			<div class="leftBox leftBoxF">
				<div class="leftTopBox">
					<h3><b style="color: #02685d">得力的商务伙伴</b></h3>
					<p>14英寸笔记本Elitebook</p>
					<a href="" style="background: #bd8f76">
						GO
						<img src="__ROOT__/Index/Common/img/index/next.png" alt=""/>
					</a>
				</div>
				<div class="leftBottomBox">
					<a href="" class="intelShake">
						<img src="__ROOT__/Index/Common/img/index/intel.png" alt="" />
					</a>
				</div>
			</div>
			<div class="rightBox">
				<div class="rightTopHp" style="background-color: #f7efe4">
					<div class="rightTopHpLeft" >
						<h1>ThinkPad T430</h1>
						<p>性能不凡 凭实力铸造楷模</p>
						<span>115<small>元/月</small>
						</span>
						<a href="">
							立即下单
						</a>
					</div>
					<div class="rightTopHpRight">
						<a href="" class="shakeRight">
							<img src="__ROOT__/Index/Common/img/index/intelHp.png" alt="" />
						</a>
					</div>
				</div>
				<ul class="commonItem">
					<li>
						<div class="goodsImg">
							<img src="__ROOT__/Index/Common/img/index/runnig.png" alt="" />
						</div>
						<div class="itemCaption">
							<p>
								<a href="" title="ThinkPad X220 12.5英寸便携笔记本电脑">ThinkPad X220 12.5英寸便携笔记本电脑</a>
							</p>
							<p>
								<a href="" title="i5-2520M 2.5G/4G内存/320G硬盘/HD3000集成显卡">
									i5-2520M 2.5G/4G内存/320G硬盘/HD3000集成显卡
								</a>
							</p>
							<h4>¥ 70.00</h4>
							
						</div>
						<div class="light lightSize">
					
						</div>
					</li>
					<li>
						<div class="goodsImg">
							<img src="__ROOT__/Index/Common/img/index/runnig.png" alt="" />
						</div>
						<div class="itemCaption">
							<p>
								<a href="" title="ThinkPad X220 12.5英寸便携笔记本电脑">ThinkPad X220 12.5英寸便携笔记本电脑</a>
							</p>
							<p>
								<a href="" title="i5-2520M 2.5G/4G内存/320G硬盘/HD3000集成显卡">
									i5-2520M 2.5G/4G内存/320G硬盘/HD3000集成显卡
								</a>
							</p>
							<h4>¥ 70.00</h4>
							
						</div>
						<div class="light lightSize">
					
						</div>
					</li>
					<li>
						<div class="goodsImg">
							<img src="__ROOT__/Index/Common/img/index/runnig.png" alt="" />
						</div>
						<div class="itemCaption">
							<p>
								<a href="" title="ThinkPad X220 12.5英寸便携笔记本电脑">ThinkPad X220 12.5英寸便携笔记本电脑</a>
							</p>
							<p>
								<a href="" title="i5-2520M 2.5G/4G内存/320G硬盘/HD3000集成显卡">
									i5-2520M 2.5G/4G内存/320G硬盘/HD3000集成显卡
								</a>
							</p>
							<h4>¥ 70.00</h4>
							
						</div>
						<div class="light lightSize">
					
						</div>
					</li>
					<li>
						<div class="goodsImg">
							<img src="__ROOT__/Index/Common/img/index/runnig.png" alt="" />
						</div>
						<div class="itemCaption">
							<p>
								<a href="" title="ThinkPad X220 12.5英寸便携笔记本电脑">ThinkPad X220 12.5英寸便携笔记本电脑</a>
							</p>
							<p>
								<a href="" title="i5-2520M 2.5G/4G内存/320G硬盘/HD3000集成显卡">
									i5-2520M 2.5G/4G内存/320G硬盘/HD3000集成显卡
								</a>
							</p>
							<h4>¥ 70.00</h4>
							
						</div>
						<div class="light lightSize">
					
						</div>
					</li>
					<li>
						<div class="goodsImg">
							<img src="__ROOT__/Index/Common/img/index/runnig.png" alt="" />
						</div>
						<div class="itemCaption">
							<p>
								<a href="" title="ThinkPad X220 12.5英寸便携笔记本电脑">ThinkPad X220 12.5英寸便携笔记本电脑</a>
							</p>
							<p>
								<a href="" title="i5-2520M 2.5G/4G内存/320G硬盘/HD3000集成显卡">
									i5-2520M 2.5G/4G内存/320G硬盘/HD3000集成显卡
								</a>
							</p>
							<h4>¥ 70.00</h4>
							
						</div>
						<div class="light lightSize">
					
						</div>
					</li>
				</ul>
			</div>
			
			
		</div>
		<div id="new" class="hotType">
			<div class="shuxian"></div>
			<span>最新上架</span>
			
		</div>
		<div class="bussiness">
			<div class="leftBox leftBoxFive">
				<div class="leftTopBox">
					<h3><b style="color: #6b77ac">纤薄灵动 办公无忧</b></h3>
					<p>20英寸一体机Vostro 3052</p>
					<a href="" style="background-color: #bb9841">
						GO
						<img src="__ROOT__/Index/Common/img/index/next.png" alt=""/>
					</a>
				</div>
				<div class="leftBottomBox">
					<a href="" class="intelShake">
						<img src="__ROOT__/Index/Common/img/index/intel.png" alt="" />
					</a>
				</div>
			</div>
			<div class="rightBox">
				<div class="rightTopHp" style="background-color: #f5eede">
					<div class="rightTopHpLeft">
						<h1>HP Elite Slice</h1>
						<p>它很小巧  但你别小瞧</p>
						<span>350<small>元/月</small>
						</span>
						<a href="">
							立即下单
						</a>
					</div>
					<div class="rightTopHpRight">
						<a href="" class="shakeRight">
							<img src="__ROOT__/Index/Common/img/index/intelHp.png" alt="" />
						</a>
					</div>
				</div>
				<ul class="commonItem">
					<li>
						<div class="goodsImg">
							<img src="__ROOT__/Index/Common/img/index/runnig.png" alt="" />
						</div>
						<div class="itemCaption">
							<p>
								<a href="" title="ThinkPad X220 12.5英寸便携笔记本电脑">ThinkPad X220 12.5英寸便携笔记本电脑</a>
							</p>
							<p>
								<a href="" title="i5-2520M 2.5G/4G内存/320G硬盘/HD3000集成显卡">
									i5-2520M 2.5G/4G内存/320G硬盘/HD3000集成显卡
								</a>
							</p>
							<h4>¥ 70.00</h4>
							
						</div>
						<div class="light lightSize">
					
						</div>
					</li>
					<li>
						<div class="goodsImg">
							<img src="__ROOT__/Index/Common/img/index/runnig.png" alt="" />
						</div>
						<div class="itemCaption">
							<p>
								<a href="" title="ThinkPad X220 12.5英寸便携笔记本电脑">ThinkPad X220 12.5英寸便携笔记本电脑</a>
							</p>
							<p>
								<a href="" title="i5-2520M 2.5G/4G内存/320G硬盘/HD3000集成显卡">
									i5-2520M 2.5G/4G内存/320G硬盘/HD3000集成显卡
								</a>
							</p>
							<h4>¥ 70.00</h4>
							
						</div>
						<div class="light lightSize">
					
						</div>
					</li>
					<li>
						<div class="goodsImg">
							<img src="__ROOT__/Index/Common/img/index/runnig.png" alt="" />
						</div>
						<div class="itemCaption">
							<p>
								<a href="" title="ThinkPad X220 12.5英寸便携笔记本电脑">ThinkPad X220 12.5英寸便携笔记本电脑</a>
							</p>
							<p>
								<a href="" title="i5-2520M 2.5G/4G内存/320G硬盘/HD3000集成显卡">
									i5-2520M 2.5G/4G内存/320G硬盘/HD3000集成显卡
								</a>
							</p>
							<h4>¥ 70.00</h4>
							
						</div>
						<div class="light lightSize">
					
						</div>
					</li>
					<li>
						<div class="goodsImg">
							<img src="__ROOT__/Index/Common/img/index/runnig.png" alt="" />
						</div>
						<div class="itemCaption">
							<p>
								<a href="" title="ThinkPad X220 12.5英寸便携笔记本电脑">ThinkPad X220 12.5英寸便携笔记本电脑</a>
							</p>
							<p>
								<a href="" title="i5-2520M 2.5G/4G内存/320G硬盘/HD3000集成显卡">
									i5-2520M 2.5G/4G内存/320G硬盘/HD3000集成显卡
								</a>
							</p>
							<h4>¥ 70.00</h4>
							
						</div>
						<div class="light lightSize">
					
						</div>
					</li>
					<li>
						<div class="goodsImg">
							<img src="__ROOT__/Index/Common/img/index/runnig.png" alt="" />
						</div>
						<div class="itemCaption">
							<p>
								<a href="" title="ThinkPad X220 12.5英寸便携笔记本电脑">ThinkPad X220 12.5英寸便携笔记本电脑</a>
							</p>
							<p>
								<a href="" title="i5-2520M 2.5G/4G内存/320G硬盘/HD3000集成显卡">
									i5-2520M 2.5G/4G内存/320G硬盘/HD3000集成显卡
								</a>
							</p>
							<h4>¥ 70.00</h4>
							
						</div>
						<div class="light lightSize">
					
						</div>
					</li>
				</ul>
			</div>
			
			
		</div>
		<div id="company" class="hotType">
			<div class="shuxian"></div>
			<span>合作伙伴</span>
			<div class="more">
				<a href="">更多</a>
				<img src="__ROOT__/Index/Common/img/index/more.png" alt="" />
			</div>
			
		</div>
		<div class="companyIcon">
			<ul>
				<li>
					<a href="">
						<img src="__ROOT__/Index/Common/img/index/intelIcon.jpg" alt="" />
					</a>
				</li>
			
			
				<li>
					<a href="">
						<img src="__ROOT__/Index/Common/img/index/microsoft.png" alt="" />
					</a>
				</li>
			
		
				<li>
					<a href="">
						<img src="__ROOT__/Index/Common/img/index/hpIcon.jpg" alt="" />
					</a>
				</li>
		
			
				<li>
					<a href="">
						<img src="__ROOT__/Index/Common/img/index/dellIcon.jpg" alt="" />
					</a>
				</li>
		
		
				<li>
					<a href="">
						<img src="__ROOT__/Index/Common/img/index/classIcon.jpg" alt="" />
					</a>
				</li>
		
			
				<li>
					<a href="">
						<img src="__ROOT__/Index/Common/img/index/lenovoIcon.jpg" alt="" />
					</a>
				</li>
			
			
				<li>
					<a href="">
						<img src="__ROOT__/Index/Common/img/index/docotorIcon.png" alt="" />
					</a>
				</li>
			</ul>

		</div>
		<div id="credit" class="hotType">
			<div class="shuxian"></div>
			<span>征信伙伴</span>
		</div>
		<div class="companyIcon" style="margin-bottom: 10px;">
			<ul>
				<li>
					<a href="">
						<img src="__ROOT__/Index/Common/img/index/zfb.jpg" alt="" />
					</a>
				</li>
			
			
				<li>
					<a href="">
						<img src="__ROOT__/Index/Common/img/index/zx.jpg" alt="" />
					</a>
				</li>
			
		
				<li>
					<a href="">
						<img src="__ROOT__/Index/Common/img/index/qhzx.jpg" alt="" />
					</a>
				</li>
		
			
				<li>
					<a href="">
						<img src="__ROOT__/Index/Common/img/index/tdkj.jpg" alt="" />
					</a>
				</li>
		
		
			</ul>

		</div>
	<div class="navSlide">
		<ul>
			<li>
				<a href="#hot" >热销机型</a>
			</li>
			<li>
				<a href="#commonProduct" >普通办公</a>
			</li>
			<li>
				<a href="#lighter">轻薄便携</a>
			</li>
			<li>
				<a href="#design">图形设计</a>
			</li>
			<li>
				<a href="#tel">技术开发</a>
			</li>
			<li>
				<a href="#new">最新上架</a>
			</li>
			<li>
				<a href="#company">合作伙伴</a>
			</li>
			<li>
				<a href="#credit">征信伙伴</a>
			</li>
		</ul>
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
	var mySwiper = new Swiper('.swiper-container', {
		autoplay: 3000,//可选选项，自动滑动
		pagination : '.swiper-pagination',
		prevButton:'.swiper-button-prev',
		nextButton:'.swiper-button-next',
		paginationClickable :true,
		effect : 'fade',
		loop:'true',
		paginationType:'bullets',
		paginationElement : 'li',
	})
	$(".shake").hover(function(){
		$(".shake").animate({
			marginLeft: '-=5px',
			opacity:0.8
		},100)
	},function(){
		$(".shake").animate({
			marginLeft: '+=5px',
			opacity:1
		},100)
	})
	$(".shakely").hover(function(){
		$(".shakely").animate({
			marginLeft: '-=5px',
			opacity:0.8
		},100)
	},function(){
		$(".shakely").animate({
			marginLeft:'+=5px',
			opacity:1
		},100)
	})
	$(".qian").on("click",function(){
		$(".hotProduct").animate({
			marginLeft:'+=240px',
		},500)
	})
	$(".hou").on("click",function(){
		$(".hotProduct").animate({
			marginLeft:'-=240px',
		},500)
	})
	$(window).scroll(function () {
  		var top = $(this).scrollTop();
  		if (top>200) {
  			$(".navSlide").css("display","block");
  		}else{
  			$(".navSlide").css("display","none");
  		}
	});
// 下拉菜单
	// $(".pullList").hover(function(){
	// 	console.log(11)
	// 	$(".item").slideToggle("500");
	// })
	$(".navSlide li").on("click",function(){
		$(this).css("background","#8FC31F").siblings().css("background","white");
	})

	var app = angular.module("myapp",[]);
	app.controller("myController",function($scope,$http){
		$scope.hotList = [];
		$http.get("__APP__/Index/login_hot").success(
			function(data){
				$scope.hotList = data;
				console.log(data);
			}
		)
	})
	
</script>
</html>