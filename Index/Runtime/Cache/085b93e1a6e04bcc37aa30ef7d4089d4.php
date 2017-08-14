<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>快租365_一站式电脑租赁和IT服务电商</title>
		<meta name="keywords" content="电脑租赁,电脑出租,租电脑,租笔记本,快租365,免押金租赁,企业租赁电脑,出租办公电脑,IBM笔记本租赁,IBM电脑租赁,租苹果电脑,服务器租赁,高配台式机出租,笔记本电脑租赁,苹果电脑出租,北京笔记本出租,电脑免押金租赁"/>
		<meta name="description" content="快租365是一站式电脑租赁和IT服务电商平台,主要为全国企业用户提供笔记本电脑租赁,台式机租赁,苹果电脑租赁以及各类办公用IT设备,打印机,复印机租赁等,同时提供免押金,随借随还,最低60元可租电脑服务"/>
		<link rel="stylesheet" href="__ROOT__/Index/Common/css/login.css" />
		<script type="text/javascript" src="__ROOT__/Index/Common/js/angular.min.js"></script>
	</head>
	<body ng-app="myapp" ng-controller="mycontroller">
		<div class="wrap">
			<div class="header">				
				<div class="header_top">
					<div class="header_top_centent">
						<div class="top_centent_right pull-right">
							<a href="__APP__/Index/personal">我的订单</a>
							<a href="__APP__/Index/help">帮助中心</a>
							<span class="top_centent_right_text">客服热线：<span class="text-success">400-9026-365</span>
							</span>
						</div>
					</div>
				</div>
				<div class="header_container">
					<div class="header_container_content">
						<div class="user-logo pull-left">
							<div class="col">
								<a href="">
									<img src="__ROOT__/Index/Common/img/login/logo.png" alt="" />
								</a>
							</div>
							<div class="col col_right">
								<span class="col_right_welcome">欢迎登陆</span>
							</div>
						</div>
						<div class="user_register pull-right">
							<span class="user_register_text">没有账号？
							<a href="__APP__/Index/register" class="text_success">	免费注册</a>
							</span>
						</div>
					</div>
				</div>
			</div>
			<div class="content">
				<div class="login_box">
					<div class="login_box_img pull-left"></div>
					<div class="login_box_login pull-left">
						<h1>登陆</h1>
						<!--登陆界面-->
						<div class="cent">
							<!--用户-->
							<div class="user">
								<span class="user_img pull-left"><img src="__ROOT__/Index/Common/img/login/user.png" alt="" /></span>
								<input type="text" id="username" class="pull-right put" maxlength="11" placeholder="请输入手机号" ng-model="tel"/>
							</div>
							<!--密码-->
							<div class="pwd">
								<span class="pwd_img pull-left"><img src="__ROOT__/Index/Common/img/login/pwd.png" alt="" /></span>
								<input type="password" id="pwd" class="pull-right put" maxlength="11" placeholder="请输入密码" ng-model="pwd"/>
							</div>	
							<!--密码存储-->
							<p>
								<label for="">
									<input type="checkbox" id="check"/>&nbsp;记住密码
								</label>
								<a href="">忘记密码</a>								
							</p>
							
								<div  class="btn btn-success buttons" ng-click="sub()">登陆</div>
							<div class="login_z">
							<a href="__APP__/Index/register" class="btn buttons " >立即注册</a>
							</div>
						</div>
					</div>
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
		</div>
	</body>
	<script type="text/javascript">
		var app = angular.module("myapp",[]);
		app.controller("mycontroller",function($scope,$http){
			$scope.tel = "";
			$scope.pwd = "";
			$scope.sub = function(){ 
				var url = "__APP__/Index/checkUser";
				$http({
					url:url,
					method:"post",
					headers:{
					"Content":"application/x-www-form-urlencoded"
					},
					data:{
						tel:$scope.tel,
						pwd:$scope.pwd
					}
				}).success(function(data){
					if (data['status']==1) {
					   window.location.href = "__APP__/Index/index";
					}else{
						alert("登录手机号码不正确");
					}
				}).error(function(err){
					console.log(err)
				})
				
			}

		})
	</script>
</html>