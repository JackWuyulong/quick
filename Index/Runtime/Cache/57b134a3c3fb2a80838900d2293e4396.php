<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>快租365_一站式电脑租赁和IT服务电商</title>
		<meta name="keywords" content="电脑租赁,电脑出租,租电脑,租笔记本,快租365,免押金租赁,企业租赁电脑,出租办公电脑,IBM笔记本租赁,IBM电脑租赁,租苹果电脑,服务器租赁,高配台式机出租,笔记本电脑租赁,苹果电脑出租,北京笔记本出租,电脑免押金租赁"/>
		<meta name="description" content="快租365是一站式电脑租赁和IT服务电商平台,主要为全国企业用户提供笔记本电脑租赁,台式机租赁,苹果电脑租赁以及各类办公用IT设备,打印机,复印机租赁等,同时提供免押金,随借随还,最低60元可租电脑服务"/>
		<link rel="stylesheet" href="__ROOT__/Index/Common/css/register.css" />
		<script src="__ROOT__/Index/Common/js/jquery-3.1.1.min.js" type="text/javascript"></script>
	</head>
	<body>
		<div class="wrap">
			<div class="header">				
				<div class="header_top">
					<div class="header_top_centent">
						<div class="top_centent_right pull-right">
							<a href="">我的订单</a>
							<a href="">帮助中心</a>
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
								<span class="col_right_welcome">欢迎注册</span>
							</div>
						</div>
						<div class="user_register pull-right">
							<span class="user_register_text">已有账号？
							<a href="" class="text_success">请登录</a>
							</span>
						</div>
					</div>
				</div>
			</div>
			<div class="content">
				<div class="content_container">
					<div class="content_container_register">
						<div class="register_left pull-left">
							<div class="register_left_con">
								<div class="con_title">
									<div class="con_title_left pull-left">客户类型：</div>
									<div class="con_title_right pull-right">
										<ul class="con_title_right_content">
											<li class="title_right_content_q pull-left active" id="list1">企业</li>
											<li  class="title_right_content_g pull-right" id="list2">
												<div class="title_right_content_g_text pull-left">个人</div>
												<div class="title_right_content_g_wen pull-right"></div>												
											</li>											
											<li class="clear"></li>
										</ul>
									</div>						
								</div>
								<div id="con_content">
									<!--公司名称-->
									<div id="list1_con" class="con_content_con">
										<div class="form_list">
											<div class="con_content_con_left pull-left">
												<span><span class="text_color">*</span>公司名称：</span>
											</div>
											<div class="con_content_con_right pull-right">
												<input type="text" />
											</div>
										</div>
										<!--手机号码-->
										<div class="form_list">
											<div class="con_content_con_left pull-left">
												<span><span class="text_color">*</span>手机号码：</span>
											</div>
											<div class="con_content_con_right pull-right">
												<input type="text" />
											</div>
										</div>
										<!--图片验证码-->
										<div class="form_list">
											<div class="con_content_con_left pull-left">
												<span><span class="text_color">*</span>图片验证码：</span>
											</div>
											<div class="con_content_con_right pull-right">
												<input type="text" class="put pull-left"/>
												<img src="" alt="" onclick="flipCode(this)" style="width: 117px; padding-left: 5px; height:38px;" class="pull-right"/>
											</div>
										</div>
										<!--手机验证码-->
										<div class="form_list">
											<div class="con_content_con_left pull-left">
												<span><span class="text_color">*</span>手机验证码：</span>
											</div>
											<div class="con_content_con_right pull-right">
												<input type="text" class="put pull-left"/>
												<input type="button" class="put_b  pull-right" style="width: 110px; padding-left: 10px; height:38px; " value="获取验证码"/>
											</div>
										</div>
										<!--输入密码-->
										<div class="form_list">
											<div class="con_content_con_left pull-left">
												<span><span class="text_color">*</span>输入密码：</span>
											</div>
											<div class="con_content_con_right pull-right register-password">
												<input type="password" id="demo_input"/>
												<img class="password-icon" id="demo_img" onClick="hideShowPsw()" src="__ROOT__/Index/Common/img/register/password_icon2.png"/>
											</div>
										</div>
										<!--确认密码-->
										<div class="form_list">
											<div class="con_content_con_left pull-left">
												<span><span class="text_color">*</span>确认密码：</span>
											</div>
											<div class="con_content_con_right pull-right">
												<input type="text" />
											</div>
										</div>
										<!--邀请码-->
										<div class="form_list">
											<div class="con_content_con_left pull-left">
												<span>邀请码：</span>
											</div>
											<div class="con_content_con_right pull-right">
												<input type="password" />
											</div>
										</div>
										<!--协议-->
										<div class="form_list">
											<div class="con_content_con_left pull-left">	</div>
											<div class="con_content_con_right pull-right" style="overflow: hidden;margin-bottom: 0; padding-top: 9px;">
												<div style="font-size: 12px;">
													<input type="checkbox" name="" id="rue" value="" />
													<lable for="rue"> 我已阅读并接受</lable>
													<a href="" class="text-success">《快租365用户注册协议》</a>
												</div>
											</div>
										</div>
										<!--立即注册-->
										<div class="form_list">
											<div class="con_content_con_left pull-left">	</div>
											<div class="con_content_con_right pull-right" >
												<div class="con_content_con_right_button ">
													<input type="button" class="btn-block btn-success" value="立即注册"/>
												</div>
											</div>
										</div>
									</div>
									<div id="list2_con" class="con_content_con">
										<div class="form_list">
											<div class="con_content_con_left pull-left">
												<span><span class="text_color">*</span>姓名：</span>
											</div>
											<div class="con_content_con_right pull-right">
												<input type="text" />
											</div>
										</div>
										<!--手机号码-->
										<div class="form_list">
											<div class="con_content_con_left pull-left">
												<span><span class="text_color">*</span>手机号码：</span>
											</div>
											<div class="con_content_con_right pull-right">
												<input type="text" />
											</div>
										</div>
										<!--图片验证码-->
										<div class="form_list">
											<div class="con_content_con_left pull-left">
												<span><span class="text_color">*</span>图片验证码：</span>
											</div>
											<div class="con_content_con_right pull-right">
												<input type="text" class="put pull-left"/>
												<img src="" alt="" onclick="flipCode(this)" style="width: 117px; padding-left: 5px; height:38px;" class="pull-right"/>
											</div>
										</div>
										<!--手机验证码-->
										<div class="form_list">
											<div class="con_content_con_left pull-left">
												<span><span class="text_color">*</span>手机验证码：</span>
											</div>
											<div class="con_content_con_right pull-right">
												<input type="text" class="put pull-left"/>
												<input type="button" class="put_b  pull-right" style="width: 110px; padding-left: 10px; height:38px; " value="获取验证码"/>
											</div>
										</div>
										<!--输入密码-->
										<div class="form_list">
											<div class="con_content_con_left pull-left">
												<span><span class="text_color">*</span>输入密码：</span>
											</div>
											<div class="con_content_con_right pull-right register-password">
												<input type="password" id="demo_input"/>
												<img class="password-icon" id="demo_img" onClick="hideShowPsw()" src="__ROOT__/Index/Common/img/register/password_icon2.png"/>
											</div>
										</div>
										<!--确认密码-->
										<div class="form_list">
											<div class="con_content_con_left pull-left">
												<span><span class="text_color">*</span>确认密码：</span>
											</div>
											<div class="con_content_con_right pull-right">
												<input type="text" />
											</div>
										</div>
										<!--邀请码-->
										<div class="form_list">
											<div class="con_content_con_left pull-left">
												<span>邀请码：</span>
											</div>
											<div class="con_content_con_right pull-right">
												<input type="password" />
											</div>
										</div>
										<!--协议-->
										<div class="form_list">
											<div class="con_content_con_left pull-left">	</div>
											<div class="con_content_con_right pull-right" style="overflow: hidden;margin-bottom: 0; padding-top: 9px;">
												<div style="font-size: 12px;">
													<input type="checkbox" name="" id="rue" value="" />
													<lable for="rue"> 我已阅读并接受</lable>
													<a href="" class="text-success">《快租365用户注册协议》</a>
												</div>
											</div>
										</div>
										<!--立即注册-->
										<div class="form_list">
											<div class="con_content_con_left pull-left">	</div>
											<div class="con_content_con_right pull-right" >
												<div class="con_content_con_right_button ">
													<input type="button" class="btn-block btn-success" value="立即注册"/>
												</div>
											</div>
										</div>																										
									</div>
								</div>								
							</div>														
						</div>
						<div class="register_right pull-right">
							<div class="img1"></div>
						</div>						
					</div>
					<div class="hide"><p>最高授予3000免押金额度，只能租二手机器，超过额度需全额押金</p>
				</div>
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
	<script>
		//鼠标移入问号显示隐藏内容
		$(".title_right_content_g_wen").mouseover(function(){
			$(".hide").show();
		})
		//鼠标移出问号隐藏内容
		$(".title_right_content_g_wen").mouseout(function(){
			$(".hide").hide();
		})
		//企业与个人之间切换
		$(document).ready(function(){
	     $(".con_title .con_title_right li").click(function(){
	            $(".con_title .con_title_right li").removeClass("active");
	         $(this).addClass("active");	
	         $("#con_content .con_content_con").hide();
	         var name=$(this).attr("id");	         
	         $("#"+name+"_con").show();
	        })
	     })
		//密码框是保密还是显示文本
		// 这里使用最原始的js语法实现，可对应换成jquery语法进行逻辑控制  
    var demoImg = document.getElementById("demo_img");  
    var demoInput = document.getElementById("demo_input");  
    //隐藏text block，显示password block  
    function hideShowPsw(){  
        if (demoInput.type == "password") {  
            demoInput.type = "text";  
            demoImg.src = "__ROOT__/Index/Common/img/register/password_icon1.png";  
        }else {  
            demoInput.type = "password";  
            demoImg.src = "__ROOT__/Index/Common/img/register/password_icon2.png";  
        }  
    }  
	</script>
</html>