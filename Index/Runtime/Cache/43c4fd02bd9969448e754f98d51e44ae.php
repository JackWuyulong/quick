<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>快租365_一站式电脑租赁和IT服务电商</title>
		<meta name="keywords" content="电脑租赁,电脑出租,租电脑,租笔记本,快租365,免押金租赁,企业租赁电脑,出租办公电脑,IBM笔记本租赁,IBM电脑租赁,租苹果电脑,服务器租赁,高配台式机出租,笔记本电脑租赁,苹果电脑出租,北京笔记本出租,电脑免押金租赁"/>
		<meta name="description" content="快租365是一站式电脑租赁和IT服务电商平台,主要为全国企业用户提供笔记本电脑租赁,台式机租赁,苹果电脑租赁以及各类办公用IT设备,打印机,复印机租赁等,同时提供免押金,随借随还,最低60元可租电脑服务"/>
		<link rel="stylesheet" href="__ROOT__/Index/Common/css/help.css" />
		<script src="__ROOT__/Index/Common/js/jquery-3.1.1.min.js" type="text/javascript"></script>
	</head>
	<body style="background: white;">
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
			</div>
			<div class="content">
				<div class="content_container" >					
					<div class="pull-left sidebar subNavBox" >
						<h2>帮助中心</h2>
						<div class="help_nav">							
							<div class="subNav currentDd currentDt move">租机流程</div>
							
							<ul class="navContent " style="display: block;">
								<li id="list1" class="current move">什么是免押金租赁</li>
								<li id="list2" class="move">租机流程</li>
								<li id="list3" class="move">信用星级</li>
								<li id="list4" class="move">租金缴付</li>
								<li id="list5" class="move">租赁方式</li>
								<li id="list6" class="move">取还机说明</li>							
								<li id="list7" class="move">数据安全服务</li>
								<li id="list8" class="move">优惠券说明</li>
								<li id="list9" class="move">价格说明</li>
								<li id="list10" class="move">开取发票</li>
								<li id="list11" class="move">电子合同</li>
							</ul>
							<div class="subNav move">售后服务</div>
							<ul class="navContent " style="display: none;">
								<li id="list12" class="move">签收注意事项</li>
								<li id="list13" class="move">退机流程</li>
								<li id="list14" class="move">售后服务</li>
								<li id="list15" class="move">违约处理</li>
							</ul>
							<div class="subNav move">常见问题</div>
							<ul class="navContent" style="display: none;">
							<li id="list16" class="move">出现故障怎么办</li>
							<li id="list17" class="move">面签要准备什么</li>
							<li id="list18" class="move">如何线下付款</li>
						</ul>
						</div>
						</div>
					<div class="pull-right container_center" id="center">
						<div id="list1_con">						
							<h1 class="about_title">
								<span>什么是免押金租赁</span>
							</h1>
							<span class="help">
								<h5>快租365将授予您一定的“免押金额度”，只要您所租赁电脑的总押金价值在免押金额度之内，您将无需为此电脑支付押金，从而帮助您的企业降低资金成本，释放流动性。</h5>
								<h5>免押金额度将与您所在企业的资质有关，您可进入“个人中心->免押金额度"页面以申请或查看您当前的免押金额度。</h5>
								<h5>您提供下述任意一项即可提升
									<span style="color:#8fc31f;">免押金额度</span>
									：公司给员工近三个月缴纳社保公积金截图凭证；近三个月对公流水；近一个月内打印的法人或股东或者公司征信报告；企业所得税税单；有效期内办公地租赁合同。 
								</h5>
								<h5>快租365欢迎您提供更多真实信息以获得更高的免押金额度。</h5>
								<h5 style="padding-top: 0;">若您希望进一步了解并提高免押金额度，请致电 400-9026-365。</h5>
							</span>
							<span class="help_image1">
								<h5 class="step_explain">
									<span class="color_weightgreen">Step1:</span>申请免押金
								</h5>
								<span class="step_explain_img">
								<img src="__ROOT__/Index/Common/img/help/step_01.png" alt="" />
								</span>
								<span class="step_explain_img">
								<img src="__ROOT__/Index/Common/img/help/step_02.png" alt="" />
								</span>
								<h5 class="step_explain">
									<span class="color_weightgreen">Step2:</span>提交审核资料
								</h5>
								<span class="step_explain_img">
								<img src="__ROOT__/Index/Common/img/help/step_03.png" alt="" />
								</span>
								<h5 class="step_explain">
									<span class="color_weightgreen">Step3:</span>开通芝麻信用
								</h5>
								<span class="step_explain_img">
								<img src="__ROOT__/Index/Common/img/help/step_04.png" alt="" />
								</span>
								<h5 class="step_explain">
									<span class="color_weightgreen">Step4:</span>提升免押金额度
								</h5>
								<span class="step_explain_img">
								<img src="__ROOT__/Index/Common/img/help/step_05.png" alt="" />
								</span>
							</span>
						</div>
						<div id="list2_con" >
							<h1 class="about_title">
								<span>租机流程</span>
							</h1>
							<span class="help">
								<h1>所有过程均可在线完成：</h1>
								<h5>选择机型：在“所有机型”页面选择您所需的机型，点击进入可查看并选择机器详细配置。选择好机型配置后，点击“我要免押金租赁”或“加入购物车”结算即可。</h5>
								<h5>申请免押金额度：在“个人中心->免押金额度”中提交资料，并在线获得免押金额度。目前仅支持企业及淘宝（或天猫）申请免押金额度。需提交申请人及企业相关证件照片。</h5>
								<h5>提交订单：系统将根据您选择的机型及免押金额度自动生成订单，请确认机型配置、金额、配送地址，并选择支付方式，即可提交订单。</h5>
								<h5>支付首期租金：通过支付宝或网银在线支付方式支付首期租金。</h5>
							</span>
						</div>
						<div id="list3_con">
							<h1 class="about_title">
								<span>租机流程</span>
							</h1>
							<span class="help">
								<h5>
									一、信用星级评定规则<br/>									
				   							1、企业的信用星级的区间为：最高星级为5星，最低星级为0星；<br />				   							
				   							2、按照客户的企业资质不同，免押金申请通过后企业的初始信用星级默认为3星至5星；<br />	
											3、租赁期内，每月还款日按时缴纳租金且所有订单均不欠费，星级会逐步增加；<br />	
											4、租赁期内，每月还款日后用户账单如有欠费，星级将会逐步减少；对于逾期在7天之内都未缴纳的，我司将采取后续行动，严惩失信者。<br />	
								</h5>
								<h5>
									二、信用星级对客户的影响<br/>	
									1、信用星级越高，客户在快租365平台积累的信用就越好，可获得更高的免押金额度，以及为高信用星级客户的优惠活动和专享服务；<br/>
									2、信用星级越低，将影响免押金额度的提升，严重时甚至导致免押金额度的降低。2星级半以下客户将被列入互联网金融行业黑名单，2星级以下客户将计入央行征信系统，对于低于1星半的严重违约的客户，将作为失信人进入法院系统，失信人住宿、旅行、出境等方面都会受到影响。
								</h5>
							</span>
						</div>
						<div id="list4_con">
							<h1 class="about_title">
								<span>租金缴付</span>
							</h1>
							<span class="help">
								<h5>首月租金在下单时支付。此后您可选择每月
								<span style="color:#8fc31f;">12日</span>或
								<span style="color:#8fc31f;">23日</span>
								作为每月租金统一付款日。
								</h5>
								<h5>系统将在统一付款日自动从您的账户余额中扣除每月租金，请保证账户余额充足。</h5>
								<h5>若您的账户余额不足，系统将提前7天发送短信提醒您充值。扣款成功（或失败）后，系统也将发送扣款结果通知短信。</h5>
							</span>
						</div>
						<div id="list5_con">
							<h1 class="about_title">
								<span>租赁方式</span>
							</h1>
							<span class="help" style="padding-bottom: 60px;">
								<span style="display: block ;">
									<img src="__ROOT__/Index/Common/img/help/zulin_c.png" alt="" />
									<img src="__ROOT__/Index/Common/img/help/zulin_d.png" alt="" />
									<img src="__ROOT__/Index/Common/img/help/zulin_a.png" alt="" />
									<img src="__ROOT__/Index/Common/img/help/zulin_b.png" alt="" />
								</span>
								<img src="__ROOT__/Index/Common/img/help/zulin_e.png" style="margin: 50px auto 0 auto;display: block;" width="100%" />
							</span>
						</div>
						<div id="list6_con">
							<h1 class="about_title">
								<span>取还机说明</span>
							</h1>
							<span class="help set_padding_btm">
								<h5>
									<img src="__ROOT__/Index/Common/img/help/star_green.png" style="display: inline-block;" />
									<span >
										快租365将免费通过顺丰快运和德邦快递将客户所订机器快递上门。
									</span>
								</h5>
								<span class="get_computer">
								<img src="__ROOT__/Index/Common/img/help/get_computer.png" alt="" />
								</span>
								<h5>
									补充说明：<br/>									
										（1）应由客户承担运费时，客户需在寄出时支付运费，如果客户选择到付，则快租365将为其生成相应账单。	<br/>										
										（2）应由快租365承担运费时，如果有烦请客户先行垫付的情况，在快租365验收合格后，会将运费返还到客户账户。				
								</h5>
								<h5>
									<img src="__ROOT__/Index/Common/img/help/star_green.png" style="display: inline-block; margin-right: 13px;" />
									<span>联系方式：</span><br />
									<p style="padding-left: 30px;">还机地址：上海市虹口区武进路456号8016室</p>
									<p style="padding-left: 30px;">联系人：张培好</p>
									<p style="padding-left: 30px;padding-right: 0;">联系电话: 15026574804（仅限快递拨打）</p>
								</h5>
							</span>
						</div>
						<div id="list7_con">
							<h1 class="about_title">
								<span>数据安全服务</span>
							</h1>
							<span class="help ">
								<h5>
									为保障数据安全，客户应在归还电脑前自行用慢格式化清空硬盘内所有数据。<br/>
									操作方式为：<br/>
									1）打开资源管理器或“我的电脑”<br/>
									2）选中需要格式化的磁盘，点击右键，在弹出框中选择“格式化(A)...”<br/>
									3）在“格式化”选项中，取消选择“快速格式化”选项，点击“开始”按钮即可开始慢格式化<br/>
									
								</h5>
								<h5>
									若数据安全密级非常高，客户可选择支付一定费用保留电脑硬盘。<br/>
									硬盘保留服务费参考价格如下（具体以归还电脑时系统生产的硬盘保留服务费为准）：<br/>
									1）160G机械硬盘：约150元<br/>
									2）320G机械硬盘：约200元<br/>
									3）500G机械硬盘：约250元<br/>
									4）Thinkpad机型 120G/128G固态硬盘：约400元<br/>
									5）Thinkpad机型 240G/256G固态硬盘：约600元<br/>
									6）苹果机型 120G/128G固态硬盘：约800元<br/>
									7）苹果机型 240G/256G固态硬盘：约1600元<br/>
									客户有义务保障数据在使用过程中的及时备份和安全，快租365不为因电脑设备硬件故障带来的数据丢失而负责。电脑归还后，快租365不承担原硬盘数据保密义务。
								</h5>
							</span>
						</div>
						<div id="list8_con">
							<h1 class="about_title">
								<span>优惠券说明</span>
							</h1>
							<span class="help set_padding_btm">
								<span class="help_image1">
									<h5 class="step_explain">
										<span class="color_weightgreen">Step1:</span>输入激活码
									</h5>
									<span class="step_explain_img">
										<img src="__ROOT__/Index/Common/img/help/coupons_03.png" alt="图片" />
									</span>
									<h5>
										<span class="color_weightgreen">Step2:</span>领取优惠券
									</h5>
									<span class="step_explain_img">
										<img src="__ROOT__/Index/Common/img/help/coupons_07.png" alt="图片" />
									</span>
									<h5>
										<span class="color_weightgreen">Step3:</span>选择优惠券
									</h5>
									<span class="step_explain_img">
										<img src="__ROOT__/Index/Common/img/help/coupons_09.png" alt="图片" />
									</span>
									<h5>
										<span class="color_weightgreen">Step4:</span>使用优惠券
									</h5>
									<span class="step_explain_img">
										<img src="__ROOT__/Index/Common/img/help/coupons_11.png" alt="图片" />
									</span>
									<span class="step_explain_img">
										<img src="__ROOT__/Index/Common/img/help/coupons_15.png" alt="图片" />
									</span>
								</span>
							</span>
						</div>
						<div id="list9_con">
							<h1 class="about_title">
								<span>价格说明</span>
							</h1>
							<span class="help">
								<span style="display: block;">
									<img src="__ROOT__/Index/Common/img/help/price_img_03.png" style="float: left; width: 700px;" />
								
								<span class="set_annotation">
									<h5>快租365</h5>
									<p>机型价格均为明码标价，</p>
									<p>在线租赁并下单支付。</p>									
								</span>
								<span style="clear: both;display: block;"></span>
								</span>
								<h5>
									<span style="font-weight: 700;">如果你要是用免押金额度租赁设备</span><br/>
									<span>在下单时，我们将收取第一个月的租金。此后在每个租赁月的统一付款日，收取您当月的租金。</span>
								</h5>
								<h5>
									<span style="font-weight: 700;">如果你支付押金租赁设备</span><br/>
									<span>在下单时，我们将收取现金部分的押金和第一个月的租金。</span><br/>
									<span>此后在每个租赁月的统一付款日，我们将优先从您的账户余额中扣除，直到账户余额不足以支付当月租金为止。</span><br/>
									<span>对于已经缴纳了现金押金的用户，如果后期申请了免押金额度，可以用免押金额度去替换现金押金。</span>
								</h5>
							</span>
						</div>
						<div id="list10_con">
							<h1 class="about_title">
								<span>开取发票</span>
							</h1>
							<span class="help">
								<p>请在“个人中心->发票信息”中申请开取发票。</p>
								<p>发票内容可为：租赁费，或租赁服务费。</p>
								<p>发票类型为：增值税普通发票，或增值税专用发票。</p>
								<p style="margin-top:30px;">特别注意：</p>
								<p>租赁费用开取发票金额不得小于500元，服务费开票金额小于500元需要支付快递费用15元。</p>
								<p>快租365仅支持先付款（或充值）后开发票，无法支持在客户付款前为客户开具发票。</p>
							</span>
						</div>
						<div id="list11_con">
							<h1 class="about_title">
								<span>电子合同流程</span>
							</h1>
							<span class="help">
								<p>实名认证流程：</p>
								<p>提交资料-->对公账户打款-->验证打款金额-->实名认证成功</p>
								<p style="margin-top: 20px;">描述：</p>
								<p>
									企业对公打款实名认证，首先对企业基本信息进行工商比对，以完成企业真
								实性的校验，校验通过后，会向企业所有者的对公账号打入一笔随机金额，以验
								证该实名请求方是真实的企业所有者。
								</p>
								<p>企业实名过程中同一个公司限制最多提交5次。</p>
								<p style="margin-top: 20px;">打款时间：</p>
								<p>注意，企业对公打款非实时到账，根据银行不同到账时间有不同延时，一般
						情况下到账情况如下：</p>
								<p>
									<img src="__ROOT__/Index/Common/img/help/contract.png" alt="" />
								</p>
							</span>
						</div>
						<div id="list12_con">
							<h1 class="about_title">
								<span>签收注意事项</span>
							</h1>
							<span class="help">
								<h5 style="color:#666666;">									
						  			 1、请您务必本人签收。<br />
						  			 2、在签收时应检查外包装是否完整，设备数量、外观是否和订单一致，需开机检测屏幕、主机及配件是否正常。<br />
									 3、签收时如有问题通知快租365，未通知则默认验收合格、无损坏，签收订单后即视为验收合格。<br />
									 4、建议您保留原包装以备退租或换机时使用。<br />
									 5、在签收后应及时在快租365网站上确认收货。
								</h5>
								<span class="receiving"></span>
								<span class="receiving2"></span>
							</span>
						</div>
						<div id="list13_con">
							<h1 class="about_title">
								<span>退机流程</span>
							</h1>
							<span class="help set_padding_btm">
								<ul class="steps_breach">
									<li>（1）联系400</li>
									<li>（2）申请退租</li>
									<li>（3）打包发出设备</li>
									<li>（4）快租365签收</li>
									<li>
										（5）检测并与沟通										 
									</li>
									<li>（6）订单处理</li>
								</ul>
								<h5 class="set_margin_breach">
									【1】请联系客服热线：400-9026-365：了解退机流程、政策、费用等如下内容
								</h5>
								<h5>
									【2】在“个人中心->在租设备”页面，点击“退租”按钮，申请退租（非正常期满退租需要缴付相应违约金），<br/>
									并提供相关物流信息，如果不进行线上退租操作可能会造成账单持续生成的后果。									
								</h5>
								<h5>
									<span class="set_color_breach">（1）运费承担规则</span>
								</h5>
								<span class="rules_breach set_margin_breach"></span>
								<h5>
									补充说明：<br/>									
								（1）应由客户承担运费时，客户需在寄出时支付运费，如果客户选择到付，则快租365将为其生成相应账单。<br/>	
								（2）应由快租365承担运费时，如果有烦请客户先行垫付的情况，在快租365验收合格后，会将运费返还到客户账户。											
								</h5>
								<h5>
									<span class="set_color_breach">（2）请在包装箱内放置A4纸，写明如下信息：</span>
								</h5>
									<p class="set_padleft_breach"> 1）需求：退/换机 X台</p>
									<p class="set_padleft_breach"> 	2）租赁公司名称 ：XXX</p>
									<p class="set_padleft_breach"> 	3）收件联系人姓名&电话：XXX XXXXXXXXXXX</p>
									<p class="set_padleft_breach">	4）退/换机原因（如有故障，请写故障描述）：XXX</p>
								<h5>
									<span class="set_color_breach"> （3）打包要求：</span>
								</h5>
									<p class="set_padleft_breach">  请您尽量使用快租365的包装或原厂包装，如原包装无法使用，则应使用快递公司提供的包装，</p>
									<p class="set_padleft_breach"> 	并且将设备单件用不低于2CM厚的泡沫材料包裹，单件之间应使用包装材料隔开。</p>
								<h5>
									<span class="set_color_breach"> （4）快租365收件地址：</span>
								</h5>
									<p class="set_padleft_breach">  上海市虹口区武进路456号8016室</p>
									<p class="set_padleft_breach"> 	联系人：张培好</p>
									<p class="set_padleft_breach">	联系电话：15026574804（仅限快递拨打） </p>
								<h5>
									<span class="set_color_breach"> 【4】快租365签收</span>
								</h5>
									<p class="set_padleft_breach">  *根据快递公司规定，运输过程中的损坏应由寄件方索赔； </p>
									<p class="set_padleft_breach"> 1）客户委托顺丰快递运输的设备发生物流损坏后，快租365首先尝试代理索赔，如顺丰不同意代理索赔，快租365协助客户进行索赔；</p>
									<p class="set_padleft_breach">2）客户委托其它快递或物流运输公司运输的设备发生物流损坏的由客户自主索赔，快租365提供照片、鉴定报告等证据协助处理； </p>
									<p class="set_padleft_breach">设备损坏后根据实际维修费用在客户账单中提出扣款，客户余额支付或充值后支付，索赔成功后将款项直接充值至客户账户。 </p>
								<h5>
									<span class="set_color_breach"> 【5】快租365检测并与您沟通</span>
								</h5>
									<p class="set_padleft_breach"> *客户认为是自然故障寄回后，全新机经品牌售后服务站检测、非全新机经快租365企业服务部检测，为人为故障的，</p>
									<p class="set_padleft_breach"> 全新机以品牌售后服务站给出维修费为准、非全新机以快租365检测出的维修费为准，</p>
									<p class="set_padleft_breach">电话与您沟通后，将在客户账单中发起运费扣款、应收维修费扣款 </p>
									<p class="set_padleft_breach"> *若客户在快租365出具品牌售后服务的检测报告（全新机）或快租365的检测报告（非全新机）后，拒不支付应收维修费&运费，</p>
									<p class="set_padleft_breach">快租365有权保持追偿的权利。 </p>
								<h5>
									<span class="set_color_breach">【全新机签收后检测标准如下】</span>
								</h5>
								<span style="display: block;">
									<img src="__ROOT__/Index/Common/img/help/rules_02.png" alt="" />
								</span>
								<h5 class="set_color_breach set_padleft_breach">【非全新机签收后检测标准如下】</h5>
								<span style="display: block;">
									<img src="__ROOT__/Index/Common/img/help/rules_03.png" alt="" />
								</span>
								<h5>
									<span>【6】快租365处理订单，没问题则退租流程完成</span>
								</h5>
							</span>
						</div>
						<div id="list14_con">
							<h1 class="about_title">
								<span>售后服务</span>
							</h1>
							<span class="help set_padding_btm">
								<h5><span>售后服务与保修条款</span></h5>
								<h5><span>感谢您使用本公司产品，本公司致力于为客户提供完善而高效的售后与保修服务，为明确具体的服务范围和服务方式，特制定本条款。</span></h5>
								<h5><span>一、产品范围</span></h5>
								<p class="set_padleft_breach3"> 本条款所述提供售后服务的产品包括：客户通过本公司官方网站流程下单租赁的设备，以及与本公司签订线下协议租赁的设备。</p>
								<h5><span>二、服务方式</span></h5>
								<p class="set_padleft_breach3"> 1、由快租365提供售后服务的，客户联系快租365客服后，快租365将为客户解决售后服务范围内的设备问题；</p>
								<p class="set_padleft_breach3">	2、由原厂商提供售后服务的，用户可自行报修该品牌设备厂商，或将需要报修的机器信息和用户信息提供给快租365客服，由快租365协助进行报修。 </p>
								<h5><span>三、服务流程</span></h5>
								<p class="set_padleft_breach3"> 1、客户有电脑需要报修的，应当先登陆相应的账号，并填写报修单，提供产品使用情况与相关信息；</p>
								<p class="set_padleft_breach3"> 2、快租365售后技术客服通过报修单了解初步情况，电话与客户取得联系，通过远程指导客户配合（包括但不限于拍摄故障机小视频的方法）解决问题或确认问题原因； </p>
								<p class="set_padleft_breach3"> 3、在保修期内的产品，由原厂商提供售后服务，其保修范围皆按照原厂商的保修标准执行，快租365不提供除此之外的保修服务 </p>
								<p class="set_padleft_breach3"> 4、二手机判断是非人为硬件问题的，快租365将通过快递给客户更换一款同样配置的机器或者安排当地工程师上门维修。经快租365工程师鉴定属于保修范围外的，快租365将向客户收取一定的费用； </p>
								<p class="set_padleft_breach3"> 5、软件问题不在售后服务范围内，判断是软件原因且无法远程指导解决的，由客户选择更换机器并承担相关费用，或者由快租365安排工程师上门调试维修并收取相应的服务费；</p>
								<p class="set_padleft_breach3"> 6、服务期间，全程由快租365售后客服跟进维修进度与结果。 </p>
								<h5><span>四、保修范围</span></h5>
								<p class="set_padleft_breach3"> 针对由快租365提供保修服务的，客户有着“标准保修”与“全程保修”两种服务选择：</p>
								<p class="set_padleft_breach3"> 标准保修：正常使用中出现的合理的硬件问题，快租365给予免费更换或维修；</p>
								<p class="set_padleft_breach3"> 全程保修：除标准保修外，还包括了进液、摔碎、磕碰、雷击等人为或外力因素产生的计算机外壳、屏幕及电子部件的故障；</p>
								<p class="set_padleft_breach3"> 保修范围排除：</p>
								<p class="set_padleft_breach3"> 1）因自然灾害等不可抗力（地震、洪水、暴雨、台风）而导致的损坏；</p>
								<p class="set_padleft_breach3"> 2）因战争、恐怖活动、核事故而导致的损坏；</p>
								<p class="set_padleft_breach3"> 3）因火灾而导致的损坏；</p>
								<p class="set_padleft_breach3"> 4）因人为原因或主观故意（包括但不限于有明显钝器打砸痕迹）、未成年人不正当使用而导致的损坏；</p>
								<p class="set_padleft_breach3"> 5）被盗、被抢或遗失；</p>
								<p class="set_padleft_breach3"> 6）因软件原因导致的设备工作不能或设备工作故障；</p>
								<p class="set_padleft_breach3"> 7）产品经客户或非官方授权服务站擅自维修、改装过；</p>
								<p class="set_padleft_breach3"> 8）客户为了获取本条款下的利益而采取了隐瞒、欺诈等不当手段或方法；</p>
								<p class="set_padleft_breach3"> 9）其他超出服务保护范围所列的四种意外事故的情形。</p>
								<p class="set_padleft_breach3 set_margin_breach"> 针对原厂商提供保修服务的，客户可选择由该厂商提供的“商家基本保修”与“商家意外保修”，其保修范围皆按照原厂商的保修标准执行，快租365不提供除此之外的任何保修服务。</p>
								<h5><span>五、服务时间</span></h5>
								<p class="set_padleft_breach3"> 快租365客服工作采取5个工作日9小时工作制，时间为工作日9：00-18：00；</p>
								<p class="set_padleft_breach3"> 网上服务：登陆甲方官网，进行报修申请或与客服联系；</p>
								<p class="set_padleft_breach3"> 电话服务：提供统一的400报修电话：400-658-5978 转 2；</p>
								<p class="set_padleft_breach3"> 现场服务: 服务时间为5个工作日9小时工作制，时间工作日为9：00-18：00，快租365工程师在接到客户报修后第二个工作日上门服务。</p>
								<p class="set_padleft_breach3"> 原厂商提供售后服务的响应时间由原厂商相关规定确认。</p>
								<h5><span>六、其他</span></h5>
								<p class="set_padleft_breach3"> 1、客户需妥善保存包括包装箱、保修卡等在内的所有相关材料，以便保修时能获得相应的服务，因客户遗失相关材料导致厂商不提供保修的，快租365不承担任何责任；</p>
								<p class="set_padleft_breach3"> 2、客户在退还机器时，应当将保修卡等相关材料一同寄回，以保证产品权利的完善和全面。</p>
							</span>
						</div>
						<div id="list15_con">
							<h1 class="about_title">
								<span>违约处理</span>
							</h1>
							<span class="help set_padding_btm">
								<h5>满足以下情况之一的，该承租方将被认定为失信客户：</h5>
								<h5>									
								1）逾期1个月不支付设备租金；<br/>
								2）按约定应当归还设备，但拒不归还；<br/>
								3）在租期结束前提前归还设备，但不按协议支付随租随还服务费或违约金；<br/>
								4）归还的设备严重损坏，但拒不按协议偿付维修费用。<br/>
								对于被认定为失信客户的，快租365将有权利采取包括但不限于以下的措施：<br/>
								1) 不接受失信客户的服务需求；<br/>
								2) 将失信客户公司信息及相应的申请人个人信息在快租365网站公布；<br/>
								3) 将失信客户公司信息及相应的申请人个人信息在互联网其他网站公布；<br/>
								4) 将失信客户公司信息及相应的申请人个人信息提供给第三方机构，包括央行下属征信平台、芝麻信用等征信机构；<br/>
								5) 向公安机关报案；<br/>
								6) 向法院起诉，并依照相关法律规定，报请将失信客户的身份信息及相关公司信息至中国人民共和国全国法院被执行人信息网
								</h5>
								<h5>因快租365对失信客户采取的任何措施给失信客户带来的任何损失，均由该承租方自行承担，快租365概不负责。</h5>
								<h5>对于任何无法按合约履行的情况，欢迎双方友好协商解决，尽量避免发生信用违约，请致电 400-9026-365。</h5>
							</span>
						</div>
						<div id="list16_con">
							<h1 class="about_title">
								<span>出现故障怎么办</span>
							</h1>
							<span class="help set_padding_btm">
								<h5>
									<span>1、客户有电脑需要报修的，应当先登录个人账号，“个人中心->在租设备->售后服务”，填写报修单，提供产品使用情况</span>
								</h5>
								<p class="set_padleft_breach2"> 故障图片与相关信息。</p>
								<h5>
									<span>2、快租365售后技术客服通过报修单了解初步情况，电话与客户取得联系，通过远程指导客户配合</span>
								</h5>
								<p class="set_padleft_breach2"> （包括但不限于拍摄故障机小视频的方法）解决问题或确认问题原因；</p>
								<h5>
									<span>3、全新机原厂商提供售后服务，其保修范围皆按照原厂商的保修标准执行，快租365不提供除此之外的保修服务。</span>
								</h5>
								<h5>
									<span>4、非全新机判断是非人为硬件问题的，快租365将通过快递给客户更换一款同样配置的机器或者安排当地工程师上门维修。</span>
								</h5>
								<p class="set_padleft_breach2"> 经快租365工程师鉴定属于保修范围外的，快租365将向客户收取一定的费用；</p>
								<h5>
									<span>5、判断是软件原因且无法远程指导解决的，由客户选择更换机器并承担相关费用，或者由快租365安排工程师上门调试维修并收取相应的服务费；</span>
								</h5>
								<h5>
									<span>6、服务期间，全程由快租365售后客服跟进维修进度与结果。</span>
								</h5>
							</span>
						</div>
						<div id="list17_con">
							<h1 class="about_title">
								<span>面签要准备什么</span>
							</h1>
							<span class="help set_padding_btm">
								<h5 class="set_padtop_breach">面签工程师在接到派单后，首先会在上门前跟客户进行电话联系，约好上门时间并核实上门地址是否正确；</h5>
								<h5 class="set_padtop_breach">必须满足如下条件才能上门，否则就会面签无效：</h5>
								<h5 class="set_padtop_breach">
									1、客户公章必须在公司<br/>
									2、客户营业执照必须在公司<br/>
									3、客户申请人必须在现场<br/>
									4、申请人身份证必须在现场										
								</h5>
							</span>
						</div>
						<div id="list18_con">
							<h1 class="about_title">
								<span>如何线下付款</span>
							</h1>
							<span class="help set_padding_btm">
								<h5>开户名称：上海捷租网络科技有限公司</h5>
								<h5>开户账户：31050171360000000872</h5>
								<h5>开户银行：中国建设银行股份有限公司上海静安支行</h5>
								<h5>开户行联行号：105290071009</h5>
							</span>
						</div>
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
			<!--右侧固定兰-->
			
		</div>
	</body>
	<script type="text/javascript">
		$(function(){
			//侧边栏的点击事件
			$(".subNav").click(function(){
			$(this).toggleClass("currentDd").siblings(".subNav").removeClass("currentDd");
			$(this).toggleClass("currentDt").siblings(".subNav").removeClass("currentDt");			
			$(this).next(".navContent").slideToggle(500).siblings(".navContent").slideUp(500);
			})	
		})		

		//点击每一项右侧出现相对的内容
		$(document).ready(function(){
	     $(".sidebar .navContent li").click(function(){
	            $(".sidebar .navContent li").removeClass("current");
	         $(this).addClass("current");	
	         $("#center div").hide();
	         var name=$(this).attr("id");	         
	         $("#"+name+"_con").show();
	        })
	     })
		
	</script>
</html>