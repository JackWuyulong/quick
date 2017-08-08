<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="__ROOT__/Index/Common/css/shopCar.css">
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
	<div class="shopContent">
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
			
		<div class="shopTitle">
			<a href="__APP__/Index/index" class="jumpIndex">首页</a>
			<img src="__ROOT__/Index/Common/img/shopCar/big.png" alt="" />
			<a href="" class="car">购物车</a>
		</div>
		<div class="carList">
				<table>
					<thead>
						<tr>
							<td width="50px">选择</td>
							<td width="400px">商品信息</td>
							<td width="80px">租金元/月</td>
							<td width="100px">押金</td>
							<td width="100px">数量</td>
							<td width="100px">起租日期</td>
							<td width="80px">租期(月)</td>
							<td width="100px">小计(元)</td>
							<td width="80px"><span>操作</span></td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								<input type="checkbox" class="select" checked="checked" />
							</td>
							<td width="557px">
								<div>
									<div class="ListImg">
										<a href="">
											<img src="__ROOT__/Index/Common/img/index/hotImgF.png" alt="" width="110px;" />
										</a>
										
									</div>
									<p class="ListTitle">
											<a href="" title="全新惠普（HP）340 G3 14英寸 win10 home版商务办公笔记本电脑">全新惠普（HP）340 G3 14英寸 win10 home版商务办公笔记本电脑</a>
									</p>
									<p class="ListTitleS">i3/4G/500G/集显/win10 home版 </p>
									<div class="tip">
										普通租赁
									</div>
								</div>
							</td>
							<td class="moneyEach">
								238.00
							</td>
							<td>
								5350.00
							</td>
							<td>
								<div class="num">
									<span>-</span>
									<input type="text" value="1" />
									<span>+</span>
								</div>
							</td>
							<td>
								 2017-08-08
							</td>
							<td>
								24
							</td>
							<td style="color: red" class="payEach">
								238
							</td>
							<td>
								<span class="doIt">删除</span>
							</td>
						</tr>
						<tr>
							<td>
								<input type="checkbox" class="select" checked="checked"  />
							</td>
							<td width="557px">
								<div>
									<div class="ListImg">
										<a href="">
											<img src="__ROOT__/Index/Common/img/index/hotImgF.png" alt="" width="110px;" />
										</a>
										
									</div>
									<p class="ListTitle">
											<a href="" title="全新惠普（HP）340 G3 14英寸 win10 home版商务办公笔记本电脑">全新惠普（HP）340 G3 14英寸 win10 home版商务办公笔记本电脑</a>
									</p>
									<p class="ListTitleS">i3/4G/500G/集显/win10 home版 </p>
									<div class="tip">
										普通租赁
									</div>
								</div>
							</td>
							<td class="moneyEach">
								238.00
							</td>
							<td>
								5350.00
							</td>
							<td>
								<div class="num">
									<span>-</span>
									<input type="text" value="1" />
									<span>+</span>
								</div>
							</td>
							<td>
								 2017-08-08
							</td>
							<td>
								24
							</td>
							<td style="color: red" class="payEach">
								238
							</td>
							<td>
								<span class="doIt">删除</span>
							</td>
						</tr>

					</tbody>
				</table>
				<div class="listFoot">
					<div class="listFootLeft">
						<input type="checkbox" onclick="sub()" id="touch" checked="checked" />
						&nbsp;
						<label class="selectAll" for="touch" >全选</label>
						&nbsp;
						<span class="chooseDel">删除选中商品</span>
						&nbsp;
						<span class="clearAll">清空购物车</span>
					</div>
					<div class="listFootRight">
						<span>已选择商品&nbsp;<span class="allItems">2</span>&nbsp;件</span>
						<span>应付总金额:&nbsp;￥<span class="AllPay">436.00</span></span>&nbsp;&nbsp;&nbsp;
						<a href="">去结算</a>
					</div>
				</div>
		</div>
		<div class="shopCarBand">
			<ul>
				<li>
					<p>
						<img src="__ROOT__/Index/Common/img/shopCar/greenMoney.png" alt="" />
					</p>
					<p>企业免押金</p>
				</li>
				<li>
					<p>
						<img src="__ROOT__/Index/Common/img/shopCar/loading.png" alt="" />
					</p>
					<p>随租随还</p>
				</li>
				<li>
					<p>
						<img src="__ROOT__/Index/Common/img/shopCar/shakeLight.png" alt="" />
					</p>
					<p>闪电租赁</p>
				</li>
				<li>
					<p>
						<img src="__ROOT__/Index/Common/img/shopCar/protect.png" alt="" />
					</p>
					<p>全程保修</p>
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
	// 点击全选框完成全部勾选或删除
	function sub(){
		$select = $("#touch").prop("checked");
		$(".select").prop("checked",$select);
		pay();
		if($select==true){
			$(".allItems").html($("tbody tr").length);
			$(".AllPay").html();
			$(".listFootRight a").css("background","rgb(136,196,57)")
		}else{
			$(".allItems").html(0);
			$(".listFootRight a").css("background","rgb(217, 217, 217)")
		}
		
	}
	//点击单选框效果
	$(".select").on("click",function(){
		//实现与全选框的关联
		var length = $("tbody tr").length;
		if($(".select:checked").length==length){
			$("#touch").prop("checked",true);
		}else{
			$("#touch").prop("checked",false);
		}
		$(".allItems").html($(".select:checked").length);
		pay();
		if($(".select:checked").length!=0){
			$(".listFootRight a").css("background","rgb(136,196,57)")
		}else{

			$(".listFootRight a").css("background","rgb(217, 217, 217)")
		}
	})
	//点击商品数量按钮实现小计功能
	$(".num span").on("click",function(){
		var numSelect = $(this).parents("tr").find(".select").prop("checked");
		var moneyMonth = $(this).parents("tr").find(".moneyEach").html();
		if(numSelect==true){
			if($(this).html()=="-"){
				var countDown = $(this).next().val();
				if (countDown>1) {
					var moneyPay = moneyMonth*countDown;
					countDown--;
					$(this).next().val(countDown);
					$(this).parents("tr").find(".payEach").html(moneyPay);
				}
			}else{
				var countUp = $(this).prev().val();
				countUp++;
				$(this).prev().val(countUp);
				var money = moneyMonth*countUp;
				$(this).parents("tr").find(".payEach").html(money);
			}
			
			
		}else{
			alert("请先选中商品");
		}
		pay();
	})
	function pay(){
		var payAllMoney = 0;
		var arrMoney = $("tbody .select:checked").parents("tr").find(".payEach");
		arrMoney.each(function(){
			payAllMoney += Number($(this).html());
			
		})
		$(".AllPay").html(payAllMoney);
	}
	//删除功能;
		$(".doIt").on("click",function(){
			var control =$(this).parents("tr").find(".select").prop("checked");
			if (control==true) {
				$(this).parents("tr").remove();
				pay();
				$(".allItems").html($(".select:checked").length);
			}else{
				alert("请选中商品后再删除");
			}
			
		})
	//删除选中商品
		$(".chooseDel").on("click",function(){
			var judge = $(".select:checked").length;
			if (judge!=0) {
				$(".select:checked").parents("tr").remove();
				pay();
				$(".allItems").html($(".select:checked").length);
			}else{
				alert("没有要删除的商品");
			}
			
		})
	//清空购物车
		$(".clearAll").on("click",function(){
			$("tbody tr").remove();
			pay();
			$(".allItems").html($(".select:checked").length);
		})	
	//下来菜单
	$(".pullList").hover(function(){
		$(".item").slideToggle("100");
		$(".item ul").hover(function(){
			$(".item").css("display","block")
		})
	})
</script>
</html>