<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>快租365_一站式电脑租赁和IT服务电商</title>
		<meta name="keywords" content="电脑租赁,电脑出租,租电脑,租笔记本,快租365,免押金租赁,企业租赁电脑,出租办公电脑,IBM笔记本租赁,IBM电脑租赁,租苹果电脑,服务器租赁,高配台式机出租,笔记本电脑租赁,苹果电脑出租,北京笔记本出租,电脑免押金租赁"/>
		<meta name="description" content="快租365是一站式电脑租赁和IT服务电商平台,主要为全国企业用户提供笔记本电脑租赁,台式机租赁,苹果电脑租赁以及各类办公用IT设备,打印机,复印机租赁等,同时提供免押金,随借随还,最低60元可租电脑服务"/>
		<link rel="stylesheet" href="__ROOT__/Index/Common/css/personal.css" />
		<script src="__ROOT__/Index/Common/js/jquery-3.1.1.min.js" type="text/javascript"></script>
	</head>
	<body>
		<div class="wrap">
			<div class="header">	
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
			</div>
			<div class="content">
				<div class="content_head">
					<ul>
						<li>	<a href="">首页&nbsp;/</a></li>
						<li>	<a href="">个人中心&nbsp;/</a></li>
						<li>	<a href="">账户信息</a></li>
					</ul>
				</div>
				<div class="content_container" >					
					<div class="pull-left sidebar subNavBox" >
						<h2>个人中心</h2>
						<div class="help_nav">																				
							<ul class="navContent " style="display: block;">
								<li id="list1" class="current move">
									<span class="pull-left block padding_left">账户信息</span>
									<span class="subNav pull-right block">
										<img src="__ROOT__/Index/Common/img/personal/jt1.png" alt="" />
									</span>
									</li>
								<li id="list2" class="move">
									<span class="pull-left block padding_left">免押金额度</span>
									<span class="subNav pull-right block">
										<img src="__ROOT__/Index/Common/img/personal/jt.png" alt="" />
									</span>
								</li>
								<li id="list3" class="move">
									<span class="pull-left block padding_left">我的订单</span>
									<span class="subNav pull-right block">
										<img src="__ROOT__/Index/Common/img/personal/jt.png" alt="" />
									</span>
								</li>
								<li id="list4" class="move">
									<span class="pull-left block padding_left">在租订单</span>
									<span class="subNav pull-right block">
										<img src="__ROOT__/Index/Common/img/personal/jt.png" alt="" />
									</span>
								</li>
								<li id="list5" class="move">
									<span class="pull-left block padding_left">我的账单</span>
									<span class="subNav pull-right block">
										<img src="__ROOT__/Index/Common/img/personal/jt.png" alt="" />
									</span>
								</li>
								<li id="list6" class="move">
									<span class="pull-left block padding_left">我的优惠券</span>
									<span class="subNav pull-right block">
										<img src="__ROOT__/Index/Common/img/personal/jt.png" alt="" />
									</span>
								</li>							
								<li id="list7" class="move">
									<span class="pull-left block padding_left">账户充值</span>
									<span class="subNav pull-right block">
										<img src="__ROOT__/Index/Common/img/personal/jt.png" alt="" />
									</span>
								</li>
								<li id="list8" class="move">
									<span class="pull-left block padding_left">收货地址</span>
									<span class="subNav pull-right block">
										<img src="__ROOT__/Index/Common/img/personal/jt.png" alt="" />
									</span>
								</li>
								<li id="list9" class="move">
									<span class="pull-left block padding_left">发票信息</span>
									<span class="subNav pull-right block">
										<img src="__ROOT__/Index/Common/img/personal/jt.png" alt="" />
									</span>
								</li>
								<li id="list10" class="move">
									<span class="pull-left block padding_left">基本资料</span>
									<span class="subNav pull-right block">
										<img src="__ROOT__/Index/Common/img/personal/jt.png" alt="" />
									</span>
								</li>								
							</ul>	
						</div>
					</div>
					<div class="pull-right container_center" id="center">
						<div id="list1_con" class="hide">
							<!--账户余额-->
							<div class="my_message">
								<div class="left_num pull-left">
									<h4>账户余额:</h4>
									<h2>
										<span class="text-danger">0</span>
										<i>元</i>
									</h2>
								</div>
								<div class="money_btn pull-right">
									<a onclick="list7()" class="btn btn-success btn-lg kz-margin-right-xs ">充值</a>
									<a href="" class="btn btn-default btn-lg">提现</a>
								</div>
							</div>
							<!--在租设备  可用优惠券 信用星级-->
							<div class="user_news">
								<ul class="row information1 list-group">
									<li>
										<span class="center-iconbox center-icon1 pull-left kz-margin-right-xs"></span>
										<div class="pull-left">在租设备: 
											<a href="" class="text-danger kz-text-xl">0</a> 台
										</div>
									</li>
									<li>
										<span class="center-iconbox center-icon2 pull-left kz-margin-right-xs"></span>
										<div class="pull-left">可用优惠券:  
											<a href="" class="text-danger kz-text-xl">0</a>  张
										</div>
									</li>
									<li>
										<span class="center-iconbox center-icon3 pull-left kz-margin-right-xs"></span>
										<div class="pull-left">信用星级:</div>
										<ul class="pull-left starbox kz-padding-0">
											<li class="full"></li>
											<li class="full"></li>
											<li class="half"></li>
											<li class="full"></li>
											<li class="full"></li>
										</ul>
									</li>
								</ul>
							</div>
							<!--押金信息-->
							<div class="amount_of">
								<ul class="amount_of_left pull-left pf">
									<li >
										<div class="amount_of_left_picture pull-left">
											<div class="amount_of_left_picture_yuan">
												<div class="amount_of_left_picture_yuan_bj bj_bg1 bj_color1">押</div>
											</div>
										</div>
										<div class="amount_of_left_info pull-left">
											<h5>押金余额</h5>
											<h5>0.00</h5>
										</div>
									</li>
									<li >
										<div class="amount_of_left_picture pull-left">
											<div class="amount_of_left_picture_yuan">
												<div class="amount_of_left_picture_yuan_bj bj_bg2 bj_color2">冻</div>
											</div>
										</div>
										<div class="amount_of_left_info pull-left">
											<h5>冻结押金</h5>
											<h5>0.00</h5>
										</div>
										<div class="amount_of_left_text pull-left"><a href="">详情</a></div>
									</li>
									<li >
										<div class="amount_of_left_picture pull-left">
											<div class="amount_of_left_picture_yuan">
												<div class="amount_of_left_picture_yuan_bj bj_bg3 bj_color3">￥</div>
											</div>
										</div>
										<div class="amount_of_left_info pull-left">
											<h5>母公司余额</h5>
											<h5>0.00</h5>
										</div>
									</li>
								</ul>
								<ul class="amount_of_right pull-right pf">
									<li >
										<div class="amount_of_left_picture pull-left">
											<div class="amount_of_left_picture_yuan">
												<div class="amount_of_left_picture_yuan_bj bj_bg4 bj_color4">付</div>
											</div>
										</div>
										<div class="amount_of_left_info pull-left">
											<h5>本月待付款</h5>
											<h5>0.00</h5>
										</div>
									</li>
									<li >
										<div class="amount_of_left_picture pull-left">
											<div class="amount_of_left_picture_yuan">
												<div class="amount_of_left_picture_yuan_bj bj_bg5 bj_color5">可</div>
											</div>
										</div>
										<div class="amount_of_left_info pull-left">
											<h5>可用免押金额度</h5>
											<h5>0.00</h5>
										</div>
									</li>
									<li >
										<div class="amount_of_left_picture pull-left">
											<div class="amount_of_left_picture_yuan">
												<div class="amount_of_left_picture_yuan_bj bj_bg6 bj_color6">免</div>
											</div>
										</div>
										<div class="amount_of_left_info pull-left">
											<h5>我的免押金额度</h5>
											<h5>0.00</h5>
										</div>
										<div class="amount_of_left_text pull-left"><a href="">详情</a></div>
									</li>
								</ul>
							</div>
							<!--合同-->
							<div class="my_pact">
								<div class="my_pact_type">
									<h5 class="pull-left">
										<span>合同类型：</span>
										<span class="text-danger" id="contractType">未设定</span>
										<span style="display: none;">未认证</span>
										<span class="text-blue" style="display: none;">去认证</span>
									</h5>
									<div class="pull-right " id="set_contract">
										<buttom type="buttom" class="btn btn-success" >去设定</buttom>
									</div>
									<!--弹出的合同类型框-->
									<div id="setContract" class="layui-layer layui-layer-page  layer-anim-02" style="z-index: 19891015; width: 500px; height: 300px; top: 341.5px; left: 379px;display: none;">
										<div class="layui-layer-title" style="cursor: move;">
											<h3 class="pull-left">选择合同类型</h3>
											<img src="__ROOT__/Index/Common/img/personal/off.png" class="pull-right" id="off"/>																					
										</div>
										
										<div class="layui-layer-content" style="height: 258px;">
											<div class="setContract kz-padding-horizontal layui-layer-wrap">
												<p class="kz-padding-top">线上1合同：需要通过完成实名认证来签订电子合同,电子合同生效之后,快租365将安排工程师到公司现场了解情况并拍照; </p>
												<p> 线下合同：快租365将安排面签专员上门面签租赁协议以及授权委托书。若免押金申请申请人为法人,则需要法人,公司公章营业执照在场；若免押金申请人为股东,则需要股东、法人章、,公司公章、营业执照在场 
													<span class="text-success">(选择线上合同则没有此规定)</span>
												</p>
												<div class="form-group kz-padding-top clearfix">
													<lable class="">合同类型：&nbsp;&nbsp;&nbsp;&nbsp;</lable>
													<lable> <input type="radio" value="线上合同" name="contract"/>&nbsp;&nbsp;线上合同 </lable>&nbsp;&nbsp;													
													<lable><input type="radio"  value="线下合同" name="contract"/>&nbsp;&nbsp;线下合同</lable>
												</div>
												<input type="button" onclick="change()" id="setupContract" class="btn btn-success pull-right" value="立即选择"/>
											</div> 								
										</div>
									</div>
								</div>
								<div class="my_pact_repayment">
									<h5 class="pull-left">
										<span>我的还款日：</span>
										<span class="text-danger">去设定</span>
									</h5>
									<div class="pull-right kz-text-sm">
										<buttom type="buttom" class="btn btn-link"><a href="">消费记录</a></buttom>
									</div>
								</div>
							</div>
							<!--邀请 推荐码-->
							<div class="invitation_code">
								<h5>复制邀请链接发给好友</h5>
								<div class="link_box clearfix">
									<a href="" class="btn btn-success pull-left kz-copy-btn">复制邀请链接：</a>
									<textarea  style="opacity:0; padding:2px; height:34px" name="" id="hiddenText" cols="30" rows="10"></textarea>
									<a id="code_link" class="txt pull-left kz-text-default" target="_blank" href="">http://www.kuaizu365.cn/home/user/register?referral_code=UJQRUE</a>
									<input type="hidden"/>
									<!--我的邀请记录-->
									<a href="" class="btn btn-link pull-right ">我的邀请记录</a>
								</div>
								<p>
									推荐码：
									<span>UJQRUE</span>
								</p>
							</div>
								
						</div>
						<!--免押金额度-->
						<div id="list2_con" class="hide accountCont">
							<div class="panel ">
								<h4 class="deposit_title">免押金额度</h4>
							</div>
								<div class="quota-contenter case10">
									<div class="quota-contenter_row">
										<div class="quota-contenter_row1">免押金额度状态:</div>
										<div class="quota-contenter_row2">
											<span class="text-danger">未申请</span>
										</div>
										<div class="quota-contenter_row3">
											<a href="" class="btn kz-radius-xs btn-success">立即申请</a>
										</div>
									</div>
								</div>
						
						</div>
						<div id="list3_con" class="hide accountCont">
							<div class="list3_con_head">
								<div class="list3_con_head_left pull-left" style=" overflow: hidden;">
									<div class="checkbox pull-left" style="margin-top: 8px;">	
										<lable>
										<input type="checkbox" />全选	
										</lable>
									</div>
									<a href="" class="btn btn-default kz-margin-left pull-left">批量确认收货</a>
								</div>
								<div class="list3_con_head_right pull-right">
									<div class=" pull-left" style="text-align: center;">
										<p style="padding: 9px 0;">选择：</p>
									</div>
									<div class="form-group pull-right">
										<select name="" id="" class="form-control">
											<option value="0">全部订单</option>
											<option value="1">未支付</option>
											<option value="2">已支付</option>
											<option value="3">已完成</option>
											<option value="4">已取消</option>
										</select>
									</div>
								</div>
							</div>
							<div class="list3_con_body account_table">
								<table class="table table-bordered table-hover text-center">
									<thead class="text-center kz-text-sm thead">
										<tr>
											<td style="width:30%">设备</td>
											<td style="width:14%">设备金额</td>
											<td style="width:13%">支付详情</td>
											<td style="width:13%">订单金额</td>
											<td style="width:10%">起租</td>
											<td style="width:10%">订单状态</td>
											<td style="width:10%">操作</td>										
										</tr>
									</thead>
								</table>
								<div class="placeHolder text-center kz-text-sm">
									暂无记录                
								</div>
							</div>
						</div>
						<div id="list4_con" class="hide accountCont">
							<ul id="up" class="up_nav_tabs ">
								<li id="lease1" class="active1">
									<span>在租设备</span>
								</li>
								<li id="lease2">
								<span>报修记录</span>
								</li>
								<li id="lease3">								
								<span>退租订单</span>
								</li>
							</ul>
							<div id="down" class="down">
								<div class="down_p" id="lease1_con">
									<!--在租设备列表-->
									<div class="down_p_z">
										<!--我的订单列表-->
										<div>
											<p class="placeHolder text-center">暂无在租设备！</p>
										</div>
									</div>
								</div>
								<div class="down_p" id="lease2_con">
										<div class="down_p_z">
										<!--我的订单列表-->
										<div>
											<p class="placeHolder text-center">暂无在租设备！</p>
										</div>
									</div>
								</div>
								<div class="down_p" id="lease3_con">
										<div class="down_p_z">
										<!--我的订单列表-->
										<div class="placeHolder">
											<p class=" text-center">暂无在租设备！</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div id="list5_con" class="hide">
							<div class="list5_con-top">
								<h4 class="list5_con-top_title"> 我的账单</h4>
							</div>
							<ul class="kz-bill-tab">
								<li class="kz-bill-tab1">
									<div>
										<span>2017-7</span>
										<span>¥ 0.00</span>
										<span>无账单</span>
									</div>
								</li>
								<li class="kz-bill-tab1">
									<div>
										<span>2017-7</span>
										<span>¥ 0.00</span>
										<span>无账单</span>
									</div>
								</li>
								<li class="kz-bill-tab1">
									<div>
										<span>2017-7</span>
										<span>¥ 0.00</span>
										<span>无账单</span>
									</div>
								</li>
								<li class="kz-bill-tab1">
									<div>
										<span>2017-7</span>
										<span>¥ 0.00</span>
										<span>无账单</span>
									</div>
								</li>
							</ul>
							<div class="list5_con-fot">
								<div class="list5_con-fot1">
									<h4 class="pull-left kz-padding-top-xs">付款日
										<span class="kz-padding-left text-warning">2017-8-未设置</span>
									</h4>
									<div class="pull-right">
										<h4>	
											本期已付款：<span class="kz-padding-right text-warning">￥0</span>
											未付款 ：<span class="kz-padding-right-lg text-warning">￥0</span>
											<a href="" class="btn btn-default">无账单</a>                               
                                
										</h4>
									</div>
								</div>
								<p class="placeHolder text-center"></p>
							</div>
							
							<div class="clearfix"></div>
							
						</div>
						<div id="list6_con" class="hide">
							<div class="list6_con_top">
								<div class="list6_con_top_right">
									<input type="text" placeholder="请输入激活码" class="form-control pull-left" style="width:272px;height: 20px;"/>
									<a class="input-group-addon kz-get-coupon pull-right" style="width:70px;height: 20px;">领取优惠券</a>
								</div>						
							</div>
							<div>
								<ul id="up1" class="up_nav_tabs ">
									<li id="lease11" class="active1">
										<span>可用优惠券</span>
									</li>
									<li id="lease12">
									<span>已使用</span>
									</li>
									<li id="lease13">								
									<span>已过期</span>
									</li>
								</ul>
								<div id="down1" class="down">
									<div class="down_p" id="lease11_con">
										<!--在租设备列表-->
										<div class="down_p_z">
											<!--我的订单列表-->
											<div>
												<p class="placeHolder text-center">暂无在租设备！</p>
											</div>
										</div>
									</div>
									<div class="down_p" id="lease12_con">
											<div class="down_p_z">
											<!--我的订单列表-->
											<div>
												<p class="placeHolder text-center">暂无在租设备！</p>
											</div>
										</div>
									</div>
									<div class="down_p" id="lease13_con">
											<div class="down_p_z">
											<!--我的订单列表-->
											<div class="placeHolder">
												<p class=" text-center">暂无在租设备！</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div id="list7_con" class="hide">
							<div class="panel ">
								<h4 class="deposit_title">账户充值</h4>
							</div>
								<div class="quota-contenter ">
									<div class="quota-contenter_list1">
										<span class="quota-contenter_list1_1">充值金额：</span>
										<input type="text" style="height: 20px;padding: 8px 0;border:1px gray solid;text-align: center;"   />
										<a class="btn btn-success btn-lg kz-margin-right-xs">立即充值</a>
									</div>
									<div  class="quota-contenter_list2 kz-padding-top-lg">
										<h4 class="panel-heading kz-padding-vertical kz-text-lg deposit_title" style="">充值方式</h4>
									</div>
									<div  class="quota-contenter_list3">
										<lable class="lable" style="height: 48px;display: inline-block;line-height: 48px;">
											<input type="radio" name="payment" value="1"/>
											<img src="__ROOT__/Index/Common/img/personal/yuebao.gif" alt="" />
										</lable>
										<lable class="lable" style="height: 48px;display: inline-block;line-height: 48px;">
											<input type="radio" name="payment" value="2"/>
											<img src="__ROOT__/Index/Common/img/personal/unionpay.jpg" alt="" />
										</lable>
									</div>
								</div>
							
						</div>
						<div id="list8_con" class="hide">
							<div class="panel ">
								<h4 class="deposit_title">收货地址</h4>
							</div>
							<p class="kz-padding ">	你已经创建 
								<span class="text-success kz-text-lg">0 </span>	个收货地址，最多可创建 <span class="text-danger kz-text-lg">30</span> 个
							</p>	
							<div class="add-address on" >
								<div class="add-address_border" id="set_address">
									<div class="add-address_bj" ></div>
									<p class="kz-text-lg text-center">添加地址</p>
								</div>
							</div>	
							<!--增加地址框-->
							<div id="setAddress" class="layui-layer layui-layer-page  layer-anim-02" style="z-index: 19891015; width: 500px; height: 380px; top: 341.5px; left: 379px;display: none;">
								<div class="layui-layer-title" style="cursor: move;">
									<h3 class="pull-left">新增地址</h3>
									<img src="__ROOT__/Index/Common/img/personal/off.png" class="pull-right off" id="off01"/>
									<img src="__ROOT__/Index/Common/img/personal/kuo.png" class="pull-right" id="kuo01"/>					
									<img src="__ROOT__/Index/Common/img/personal/jian.png" class="pull-right" id="jian01"/>		
								</div>			
								<div class="layui-layer-content" style="height: 338px;">
									<div class="layui-layer-content_center">
										<div class="layui-layer-content_list-wrap">
											<div  class="layui-layer-content_list kz-margin-top-lg">
												<div class="pull-left pull-left_style">
													收货人：
												</div>
												<div class="pull-right pull-right_style">
													<input type="text" class="pull-right pull-right_style-input1 " placeholder="请输入收货人地址"/>
												</div>
											</div>
											<div  class="layui-layer-content_list">
												<div class="pull-left pull-left_style">
													所在地区：
												</div>
												<div class="pull-right pull-right_style">
													<select name="" class="pull-left">
														<option value="0">-请选择-</option>																																					
													</select>
													<select name="" class="pull-left">
														<option value="0">请选择</option>
													</select>
													<select name="" class="pull-left">
														<option value="0">请选择</option>
													</select>
												</div>
											</div>
											<div  class="layui-layer-content_list">
												<div class="pull-left pull-left_style">
													详细地址：
												</div>
												<div class="pull-right pull-right_style">
													<input type="text" class="pull-right pull-right_style-input1 " placeholder="请输入你的详细地址"/>
												</div>
											</div>
											<div  class="layui-layer-content_list">
												<div class="pull-left pull-left_style">
													联系电话：
												</div>
												<div class="pull-right pull-right_style">
													<input type="text" class="pull-right pull-right_style-input1 " placeholder="请输入收货人手机号码"/>
												</div>
											</div>
											<div  class="layui-layer-content_list">
												<div class="pull-left pull-left_style"></div>
												<div class="pull-right pull-right_style">
													<p>
													<input type="checkbox" class="pull-right_style-check"/>设为默认地址
													</p>
												</div>
											</div>
											<div  class="layui-layer-content_list">
												<div class="pull-left pull-left_style"></div>
												<div class="pull-right pull-right_style">
													<button type="submit" class="btn btn-success submit">保存并使用</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						
						</div>
						<div id="list9_con" class="hide">
							<ul id="up01" class="up_nav_tabs ">
								<li id="lease01" class="active1">
									<span>申请发票</span>
								</li>
								<li id="lease02">
								<span>已申请发票</span>
								</li>								
							</ul>
							<div id="down01" class="down01">
								<div class="down01_p" id="lease01_con">									
									<div class="down01_p_up">
										<div class="down01_p_up_list" style="  margin-top: 20px;">
											<div class="up_list_left pull-left">可开票金额 :</div>
											<div class="up_list_middle pull-left">
												<span style="line-height: 34px;">￥
												<span>0</span>
												</span>
											</div>
										</div>
										<div class="down01_p_up_list">
											<div class="up_list_left pull-left">开票选择 ：</div>
											<div class="up_list_middle pull-left">
												<span style="line-height: 34px;">没有可开发票记录</span>
											</div>
										</div>
										<div class="down01_p_up_list">
											<div class="up_list_left pull-left">发票内容 ：</div>
											<div class="up_list_middle pull-left">
												<input type="text"  placeholder="请输入你的发票名称" name="content" class="up_list_middle-text"/>
											</div>
										</div>
										<div class="down01_p_up_list">
											<div class="up_list_left pull-left">发票类型 ：</div>
											<div class="up_list_middle pull-left">
												<div class="up_list_middle-radio pull-left">
													<input type="radio" checked value="1" name="RadioGroup1"/> 增值税普通发票
                            
												</div>
												<div class="up_list_middle-radio pull-left">
													<input type="radio" disabled="disabled"  value="2" name="RadioGroup1"/> 增值税专用发票
                            
												</div>
											</div>
										</div>
										<div class="down01_p_up_list">
											<div class="up_list_left pull-left">公司名称 ：</div>
											<div class="up_list_middle pull-left">
												<input type="text" value="个人" class="up_list_middle-text" style="opacity: 1; background-color: #eee;"/>
											</div>
										</div>
										<div class="down01_p_up_list">
											<div class="up_list_left pull-left">发票收货地址 ：</div>
											<div class="up_list_middle pull-left">
												<div class="up_list_middle-btn btn-success">
													<span>+&nbsp;填写地址</span>
													
												</div>
											</div>
										</div>
										
										<div class="down01_p_up_list">
											<div class="up_list_left pull-left"></div>
											<div class="up_list_middle pull-left">
												<div class="up_list_middle-btn  btn-danger">
													<span>提交申请</span>
													
												</div>
											</div>
										</div>
										<!--填写地址弹框-->
									<div class="down01_p_up_list-address"></div>
									</div>
									<div class="down01_p_down">
										<div class="down01_p_down-title">开取发票说明</div>
										<div class="down01_p_down-body">
											发票内容可为：租赁费、服务费。<br/>
											发票类型为：增值税普通发票，或增值税专用发票。<br/>
											租赁费用开取发票金额不得小于500元，服务费开票金额小于500元需要支付快递费用15元。<br/>
											特别注意：快租365仅支持先付款（或充值）后开发票，无法支持在客户付款前为客户开具发票。
										</div>
									</div>
								</div>
								<div class="down01_p" id="lease02_con">
									<div class="down01_p_quan">
										<ul class="down01_p_quan-title">
											<li style="width:100px;">发票内容</li>
											<li style="width:180px;">收件信息</li>
											<li style="width:80px;">开票金额</li>
											<li style="width:140px;">申请时间</li>
											<li style="width:120px;">明细状态</li>
											<li style="width:80px;">操作</li>
										</ul>
										<div class="placeHolder text-center kz-text-sm">
											暂无记录
										</div>
										
									</div>
								</div>
								
							</div>
							
						</div>
						<div id="list10_con" class="hide">
							<div class="panel " style="font-size: 12px;">
								<h4 class="deposit_title">基本资料</h4>
							</div>
							<div class="data-userneme">用户名：</div>
							<table  class="list10_con-table kz-text-sm">
								<tbody>
									<tr>
										<th width="160" class="list10_con-table-img">
											<img src="__ROOT__/Index/Common/img/personal/d.png" alt="" />
											<strong>已设置</strong>
										</th>
										<td width="240" class="text-center ">
											<span>登录密码</span>
										</td>
										<td width="440" class="text-center">
											<span>登录快租365时需要登录密码</span>
										</td>
										<td width="220" class="text-center " id="set_password">
											<a >修改</a>
										</td>
									</tr>
									<tr>
										<th width="160" class="list10_con-table-img">
											<img src="__ROOT__/Index/Common/img/personal/i.png" alt="" />
											<strong>未设置</strong>
										</th>
										<td width="240" class="text-center ">
											<span>电子邮箱</span>
										</td>
										<td width="440" class="text-center">
											<span>绑定邮箱第一时间接受优惠信息</span>
										</td>
										<td width="220" class="text-center " id="set_email">
											<a >立即绑定</a>
										</td>
									</tr>
									<tr>
										<th width="160" class="list10_con-table-img">
											<img src="__ROOT__/Index/Common/img/personal/d.png" alt="" />
											<strong>已设置</strong>
										</th>
										<td width="240" class="text-center ">
											<span>账户昵称</span>
										</td>
										<td width="440" class="text-center">
											当前昵称：<span></span>
										</td>
										<td width="220" class="text-center " id="set_nickname">
											<a >修改昵称</a>
										</td>
									</tr>
									<tr>
										<th width="160" class="list10_con-table-img">
											<img src="__ROOT__/Index/Common/img/personal/i.png" alt="" />
											<strong>未设置</strong>
										</th>
										<td width="240" class="text-center ">
											<span>账单付款日</span>
										</td>
										<td width="440" class="text-center">
											每月账单支付日期<span></span>
										</td>
										<td width="220" class="text-center " id="set_payment">
											<a >设置付款日期</a>
										</td>
									</tr>
								</tbody>
							</table>
							<!--修改密码框-->
							<div class="password-k layui-layer -page  layer-anim-02" id="setPassword" style="z-index: 19891015; width: 500px; height: 300px; top: 341.5px; left: 379px;display: none;">
								<div class="layui-layer-title" style="cursor: move;">
									<h3 class="pull-left">修改密码</h3>
									<img src="__ROOT__/Index/Common/img/personal/off.png" class="pull-right " id="offpassword"/>
								</div>
								<div class="layui-layer-content" style="height: 258px;">
									<div class="layui-layer-content_center">
										<div class="layui-layer-content_list-wrap">
											<div  class="layui-layer-content_list kz-margin-top-lg">
												<div class="pull-left pull-left_style">
													原密码：
												</div>
												<div class="pull-right pull-right_style">
													<input type="text" class="pull-right pull-right_style-input1 " placeholder="请输入原密码"/>
												</div>
											</div>
										
											<div  class="layui-layer-content_list">
												<div class="pull-left pull-left_style">
													新密码：
												</div>
												<div class="pull-right pull-right_style">
													<input type="text" class="pull-right pull-right_style-input1 " placeholder="请输入你的新密码"/>
												</div>
											</div>
											<div  class="layui-layer-content_list">
												<div class="pull-left pull-left_style">
													重复密码：
												</div>
												<div class="pull-right pull-right_style">
													<input type="text" class="pull-right pull-right_style-input1 " placeholder="请输入重复密码"/>
												</div>
											</div>											
											<div  class="layui-layer-content_list">
												<div class="pull-left pull-left_style"></div>
												<div class="pull-right pull-right_style">
													<button type="submit" class="btn btn-success submit">确认修改</button>
												</div>
											</div>
										</div>
									</div>
												
								</div>
							</div>
							<!--立即绑定框-->
							<div class="email-k layui-layer -page  layer-anim-02" id="setEmail" style="z-index: 19891015; width: 500px; height: 300px; top: 341.5px; left: 379px;display: none;">
								<div class="layui-layer-title" style="cursor: move;">
									<h3 class="pull-left">绑定邮箱</h3>
									<img src="__ROOT__/Index/Common/img/personal/off.png" class="pull-right off" id="offemail"/>
								</div>
								<div class="layui-layer-content" style="height: 258px;">
									<div class="layui-layer-content_center">
										<div class="layui-layer-content_list-wrap">
											<div  class="layui-layer-content_list kz-margin-top-lg">
												<div class="pull-left pull-left_style">
													当前邮箱：
												</div>
												<div class="pull-right pull-right_style">
													未绑定邮箱
												</div>
											</div>	
											<div  class="layui-layer-content_list">
												<div class="pull-left pull-left_style">
													邮件地址：
												</div>
												<div class="pull-right pull-right_style">
													<input type="text" class="pull-right pull-right_style-input1 " placeholder="请输入原密码"/>
												</div>
											</div>
											<div  class="layui-layer-content_list">
												<div class="pull-left pull-left_style"></div>
												<div class="pull-right pull-right_style">
													<button type="submit" class="btn btn-success submit">确认提交</button>
												</div>
											</div>
										</div>
									</div>
							
								</div>
							</div>
							<!--修改昵称框-->
							<div class="nickname-k layui-layer -page  layer-anim-02" id="setNickname"  style="z-index: 19891015; width: 500px; height: 300px; top: 341.5px; left: 379px;display: none;">
								<div class="layui-layer-title" style="cursor: move;">
									<h3 class="pull-left">修改昵称</h3>
									<img src="__ROOT__/Index/Common/img/personal/off.png" class="pull-right " id="offnickname"/>
								</div>
								<div class="layui-layer-content" style="height: 258px;">
									<div class="layui-layer-content_center">
										<div class="layui-layer-content_list-wrap">
											<div  class="layui-layer-content_list kz-margin-top-lg">
												<div class="pull-left pull-left_style">
													当前昵称：
												</div>
												<div class="pull-right pull-right_style">
													空
												</div>
											</div>	
											<div  class="layui-layer-content_list">
												<div class="pull-left pull-left_style">
													新的昵称：
												</div>
												<div class="pull-right pull-right_style">
													<input type="text" class="pull-right pull-right_style-input1 " placeholder="请输入原密码"/>
												</div>
											</div>
											<div  class="layui-layer-content_list">
												<div class="pull-left pull-left_style"></div>
												<div class="pull-right pull-right_style">
													<button type="submit" class="btn btn-success submit">确认提交</button>
												</div>
											</div>
										</div>
									</div>
												
								</div>
							</div>
							<!--设置付款日期框-->
							<div class="payment-date-k layui-layer -page  layer-anim-02" id="setPayment"  style="z-index: 19891015; width: 500px; height: 300px; top: 341.5px; left: 379px;display: none;">
								<div class="layui-layer-title" style="cursor: move;">
									<h3 class="pull-left">设置付款日期</h3>
									<img src="__ROOT__/Index/Common/img/personal/off.png" class="pull-right " id="offpayment"/>
								</div>
								<div class="layui-layer-content" style="height: 258px;">
									<div class="setContract kz-padding-horizontal layui-layer-wrap">
										
									</div>
												
								</div>
							</div>
						</div>								
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="footer">
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
			</div>		
			
		</div>
	</body>
	<script type="text/javascript">
		//点击左侧栏 左侧栏的变化
		//点击每一项右侧出现相对的内容
		$(document).ready(function(){
	     $(".sidebar .navContent li").click(function(){
	          $(".sidebar .navContent li").removeClass("current").find("img").attr("src","__ROOT__/Index/Common/img/personal/jt.png");
	         $(this).addClass("current").find("img").attr("src","__ROOT__/Index/Common/img/personal/jt1.png");		       
	         $("#center .hide").hide();
	         var name=$(this).attr("id");	         
	         $("#"+name+"_con").show();
	        })
	   })		
	   //充值
	   function list7(){
	   		$("#list1_con").hide();
	   		$("#list7_con").show();
	   		$(".sidebar .navContent li").removeClass("current").find("img").attr("src","__ROOT__/Index/Common/img/personal/jt.png");
	         $('#list7').addClass("current").find("img").attr("src","__ROOT__/Index/Common/img/personal/jt1.png");	
	   }
		//设置合同弹窗
			$('#set_contract').click(function(){
			$('#setContract').show();
		});
		//关闭弹窗
		$('#off').click(function(){
			$('#setContract').hide();
		});
		
		//在租订单 点击上面 下面出现相对
	$(document).ready(function(){
	     $("#up  li").click(function(){
	          $("#up li").removeClass("active1");
	         $(this).addClass("active1");		       
	         $("#down .down_p").hide();
	         var name=$(this).attr("id");	         
	         $("#"+name+"_con").show();
	        })
	     })
	//我的优惠券 点击上面 下面出现相对
	$(document).ready(function(){
	     $("#up1  li").click(function(){
	          $("#up1 li").removeClass("active1");
	         $(this).addClass("active1");		       
	         $("#down1 .down_p").hide();
	         var name=$(this).attr("id");	         
	         $("#"+name+"_con").show();
	        })
	     })
	//发票信息
	$(document).ready(function(){
	     $("#up01  li").click(function(){
	          $("#up01 li").removeClass("active1");
	         $(this).addClass("active1");		       
	         $("#down01 .down01_p").hide();
	         var name=$(this).attr("id");	         
	         $("#"+name+"_con").show();
	        })
	     })
	//设置收货地址弹窗
	$('#set_address').click(function(){
			$('#setAddress').show();
		});
		//关闭弹窗
		$('#off01').click(function(){
			$('#setAddress').hide();
		});
	//设置修改密码弹窗
	$('#set_password').click(function(){
			$('#setPassword').show();
		});
		//关闭弹窗
		$('#offpassword').click(function(){
			$('#setPassword').hide();
		});
		//设置邮箱弹窗
	$('#set_email').click(function(){
			$('#setEmail').show();
		});
		//关闭弹窗
	$('#offemail').click(function(){
			$('#setEmail').hide();
		});
		
		//设置昵称弹窗
	$('#set_nickname').click(function(){
			$('#setNickname').show();
		});
		//关闭弹窗
	$('#offnickname').click(function(){
			$('#setNickname').hide();
		});
	//设置付款日期弹窗
	$('#set_payment').click(function(){
			$('#setPayment').show();
		});
		//关闭弹窗
	$('#offpayment').click(function(){
			$('#setPayment').hide();
		});
	</script>
</html>