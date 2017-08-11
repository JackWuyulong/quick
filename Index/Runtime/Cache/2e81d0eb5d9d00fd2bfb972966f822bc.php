<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<style type="text/css">
			/*右侧固定兰*/
			.right_fixed{
				height: 250px;
			    width: 48px;
			    background: #162142;
			    position: fixed; 
			    top: 50%;
			    right: 20px;
			    z-index: 9999;
			    margin-top: -125px;
			}
			.text-center {
			    text-align: center;
			}
			.right_fixed li {
			    height: 50px;
			    font-size: 16px;
			    position: relative;
			}
			.right_fixed li .icon-wrap {
			    height: 34px;
			    line-height: 34px;
			    width: 48px;
			    position: absolute;
			    right: 0;
			    top: 8px;
			    overflow: hidden;    
			    z-index: 11;
			    background: rgb(22, 33, 66);
			    transition: all 0.5s ;
			   
			}
			.right_fixed li:hover .icon-wrap{
				background: rgb(143, 195,31);
			}
			.right_fixed li .icon-wrap a{
				color: #fff;
			}
			.right_fixed li .icon-wrap a img{
				width: 16px;
				height: 16px;
			}
			.right_fixed li .fixed_text {    
			    height: 34px;
			    width: 48px;
			    overflow: hidden;
			    line-height: 34px;
			    position: absolute;
			    right: 0;
			    top: 8px;    
			    font-size: 14px;
			    background: rgb(22, 33, 66);
			   transition: all 1s ;
			}
			.right_fixed li .fixed_text a{
				margin-left:10px ;
				color: #fff; ;
			}
			.right_fixed li:hover .fixed_text{
				background: rgb(143, 195,31);
				width: 123px;
			}
			.text-left {
			    text-align: left;
			}
			/*客服在线*/
			.right_fixed li .fixed_cont {
			    position: absolute;
			    width: 116px;
			    height: 64px;
			    background: url(../img/help/kefu_icon.png) no-repeat;
			    top: 5px;
			    right: 55px;   
			    padding: 12px 0 0 15px;
			    opacity: 0;
			    transition: all 1s ;
			}
			.right_fixed li:hover .fixed_cont{
				 opacity: 1;
				 position: absolute;
				 top: 5px;
			    	 right: 40px;   
			}
			.fixed_cont a {
			    display: block;
			    font-size: 12px;
			    line-height: 22px;
			    color: #666;
			}
			.fixed_cont a span {
			    width: 18px;
			    height: 18px;
			    border-radius: 50%;
			    background: url(../img/help/right_icon.png) no-repeat #8FC31F;
			    background-size: 16px 32px;
			    display: inline-block;
			    vertical-align: middle;
			}
			.fixed_cont a span.icon1 {
			    background-position: 2px 2px;
			}
			.fixed_cont a span.icon2 {
			    background-position: 1px -15px;
			}
			/*微信二维码*/
			.right_fixed li .fixed_weixin{
				position: absolute;
			    top: -8px;
			    right: 100px;
			    opacity: 0; 
			    transition: all 1s ;
			}
			.right_fixed li:hover .fixed_weixin{
				opacity: 1;
				position: absolute;
			    top: -8px;
			    right: 48px;   
			}
			/*购物车*/
			.yuan{
				width: 18px;
				height: 16px;
				border-radius: 50%;
				background: red;
				position: absolute;
				top:0;
				right: 0;
				z-index: 50;
				font-size: 10px;
				text-align: center;
				line-height: 16px;
				color: white;
			}

		</style>
	</head>
	<body>
		<div class="right_fixed text-center">
				<ul>
					<!--新手指引-->
					<li>
						<div class="icon-wrap" >							
							<a href="" title="新手指引">
							<img src="__ROOT__/Index/Common/img/help/newhand.png" alt="" />
							</a>							
						</div>
						<div class="fixed_text text-left" >
							<a href="" >新手指引</a>
						</div>
					</li>
					<!--在线客服-->
					<li>
						<div class="icon-wrap" >							
							<a href="" title="在线客服">
							<img src="__ROOT__/Index/Common/img/help/online.png" alt="" />
							</a>							
						</div>
						<div class="fixed_cont text-left" >
							<a href="" title="在线客服" class="online_">								
								
								<span class="icon1"></span>在线客服
							</a>
							<a href="" title="QQ客服" class="qq">								
								<span class="icon2"></span>QQ客服
							</a>
						</div>
					</li>
					<!--二维码-->
					<li>
						<div class="icon-wrap" >							
							<a href="" title="二维码">
							<img src="__ROOT__/Index/Common/img/help/number.png" alt="" />
							</a>							
						</div>
						<div class="fixed_weixin text-left" >
							<img src="__ROOT__/Index/Common/img/help/weixinCode.png" alt="" />
						</div>
					</li>
					<!--购物车-->
					<li>
						<div class="icon-wrap" >							
							<a href="" title="购物车">
							<img src="__ROOT__/Index/Common/img/help/shop.png" alt="" />
							</a>							
						</div>	
						<div class="yuan">0</div>
					</li>
					<!--返回顶部-->
					<li>
						<div class="icon-wrap" >							
							<a href="" title="返回顶部">
							<img src="__ROOT__/Index/Common/img/help/up.png" alt="" />
							</a>							
						</div>
						
					</li>
				</ul>
			</div>
	</body>
</html>