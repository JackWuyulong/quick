<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title>后台管理</title>
    <meta charset="UTF-8">
    	<script type="text/javascript" src="__ROOT__/Index/Common/js/angular.min.js"></script>
    <style type="text/css" rel="stylesheet">
        html,body{width:100%;height:100%;margin:0;padding:0;font-family:"lucida grande", "lucida sans unicode", lucida, helvetica, "Hiragino Sans GB", "Microsoft YaHei", "WenQuanYi Micro Hei", sans-serif;}
        .header{height:40px;width:100%;background-color:#242424;position:fixed;}
        .header_title{line-height:40px;margin-left:60px;color:#fff;font-size:15px;}
        .header_user{font-size:12px;margin-left:20px;color:#ccc;}
        .addinfo{width:550px;height:250px;padding-top:100px;margin-left:auto;margin-right:auto;font-size:13px;}
        .addinfo input{width:450px;height:28px;margin-bottom:10px;outline:none;padding-left:5px;}
        .addinfo span{display:inline-block;width: 85px;}
        .addinfo_btn{width:450px;height:35px;text-align:center;line-height:35px;border:1px solid #ccc;margin-left:83px;margin-top:20px;border-radius:5px;}
        .addinfo_btn:hover{background-color:#36A0FB;color:#fff;border:1px solid #36A0FB;}
        table{width:1000px;margin-left:auto;margin-right:auto;margin-top:0px;font-size:13px;border-collapse:collapse;border-spacing:0;margin-bottom:50px;table-layout:fixed;}
        table td{border:1px solid #ddd;padding:0;width:20%;white-space:nowrap;overflow:hidden;word-break:break-all;font-size:12px;font-weight:300;text-overflow: ellipsis;}
        table tr:hover{background-color:#36A0FB;color:#fff !important;}
        a{color:#fff;text-decoration:none;}
    </style>
    
</head>
<body ng-app="myapp" ng-controller="mycontroller" >
    <div class="header">
        <div class="header_title"><a href="/">后台管理系统</a><span class="header_user">欢迎你,<?php echo (session('usernameS')); ?></span></div>
    </div>
    <div class="addinfo">
        <div>
            <span>商品名称 </span><input ng-model = "goodsName" id="goodsName" type="text"/>
        </div>
        <div>
            <span>商品标题 </span><input ng-model = "title" id="title" type="text"/>
        </div>
        
        <div id="typeMoney">
        	<div ng-repeat="item in arr">
        		 <span>商品规格 </span><input ng-model="item.type" id="goodsType" type="text" style="width: 180px" />
				<span style="width: 54px">月租价格 </span><input ng-model = "item.price" id="goodsPrice" type="text" style="width: 178px"/>
	            <button style="height: 34px;" ng-click="add()">+</button>

        	</div>	
           

        </div>

        <div>
            <span>商品品牌</span>
            <br />
            <!-- <input type="text" ng-model="goodsBand" /> -->
            <label for="" ng-repeat="(k,v) in list" style="width: 50px;">
            	{{v.bandName}}<input type="radio" style="width: 50px;vertical-align: middle;" name="band" ng-model="$parent.band" value="{{k+1}}" />
            </label>
        </div>
        <div>
            <span>使用场景</span>
            <br />
            <!-- <input type="text" ng-model="goodsBand" /> -->
            <label for="" ng-repeat="(k,v) in place" style="width: 50px;">
            	{{v.placeName}}<input type="radio" style="width: 50px;vertical-align: middle;" name="placeS" ng-model="$parent.placeS" value="{{k+1}}" />
            </label>
        </div>
        <div>
            <span>分类</span>
            <br />
            <!-- <input type="text" ng-model="goodsBand" /> -->
            <label for="" ng-repeat="(k,v) in rentCate" style="width: 50px;">
            	{{v.cates}}<input type="radio" style="width: 50px;vertical-align: middle;" name="cates" ng-model="$parent.cates" value="{{k+1}}" />
            </label>
        </div>
        <div>
            <span>租金范围</span>
            <br />
            <!-- <input type="text" ng-model="goodsBand" /> -->
            <label for="" ng-repeat="(k,v) in rentMoney" style="width: 50px;">
            	{{v.moneyRand}}<input type="radio" style="width: 50px;vertical-align: middle;" name="money" ng-model="$parent.money" value="{{k+1}}" />
            </label>
        </div>
        <div> 	
        	<span style="width: 200px" >上传商品首页图</span>
            <br />
            <label style="width: 150px;">
            	<input type="file" id="showImg"/>
            </label>
            <span style="width: 200px">上传商品展示图</span>
            <br />
            <label style="width: 150px;">
            	<input type="file" id="indexImg" multiple="multiple" />
            </label>
            <span style="width: 200px">上传商品展示小图</span>
            <br />
            <label style="width: 150px;">
            	<input type="file" id="smallImg" multiple="multiple" />
            </label>
            <div ng-repeat="v in imgArr">
	        	<span style="width: 200px" >上传商品详细大图</span>
	            <br />
	            <label style="width:200px;">
	            	<input type="file" id={{v}} style="width: 200px" />
	            </label>
	            <button ng-click="addImg()">+</button>
            </div>
           
        </div>
       
       

        <!-- <div>
            <span>图片 </span><input ng-model="imgurl" id="img" type="text"/>
        </div>
        <div>
            <span>URL </span><input ng-model="newurl" id="url" type="text"/>
        </div> -->
        <div class="addinfo_btn" ng-click="sub()">提交</div>
    </div>

    
    
</body>
<script>
	var app = angular.module("myapp",[]);
	app.controller("mycontroller",function($scope,$http){
		//绑定数据
		$scope.goodsName = "";
		$scope.title = "";
		$scope.band = "";
		$scope.placeS = "";
		$scope.money = "";
		$scope.cates = "";
		$scope.arr = [{type:"",price:""}];
		$scope.imgArr = ["img1"];
		$http.get("__APP__/Index/getList").success(function(data){
			
			$scope.list = data["list"];
			$scope.place = data['background'];
			$scope.rentMoney = data['money'];
			$scope.rentCate = data['rentCate'];
			
		})
		$scope.add = function(){
			var obj = {type:"",price:""};
            $scope.arr.push(obj);
            console.log($scope.arr);
		},
		$scope.addImg = function(){
			var num = $scope.imgArr.length+1;
			$scope.imgArr.push("img"+num);
		}
		$scope.sub = function(){
			
			var smalls = document.getElementById("smallImg").files;
			var indexImgS = document.getElementById("indexImg").files;
			
			if($scope.title !=""&& $scope.band !=""&& $scope.placeS !=""&&
				$scope.goodsName!=""&&$scope.money!=""&&$scope.arr[0].type!=""&&$scope.arr[0].price!=""){
				//将数据提交到后台添加
				$http({
					url:"__APP__/Index/addData",
					method:"POST",
					headers:{
						"Content-type":undefined
					},
					transformRequest: function() {
						var formData = new FormData();
						console.log(document.getElementById('showImg').files[0]);
						
						for(var i=1;i<=$scope.imgArr.length;i++){
							
							formData.append("imgBig_"+i,document.getElementById("img"+i).files[0]);
						}
						formData.append('goodsTypeMoney',JSON.stringify($scope.arr));
						formData.append('goodsName', $scope.goodsName);
						formData.append('title', $scope.title);
						formData.append('band',$scope.band);
						formData.append('placeS',$scope.placeS);
						formData.append('money',$scope.money);
						formData.append('cates',$scope.cates);
						formData.append('showImg',document.getElementById('showImg').files[0])

						for(var i in smalls){
							
							formData.append('smallImg_'+i,smalls[i]);
						}
						for(var i in indexImgS){
							
							formData.append('indexImg_'+i,indexImgS[i]);
						}
						return formData;
					}
				}).success(function(data){
					
					if(data.status==1){
						alert("添加数据成功");
						location.reload();
					}else{
						alert(data.info);
					}
				}).catch(function(err){
					console.log(111);
				})
		 	}else{
		 	alert("请完善信息");
			}
		}
		$scope.del = function(id){
			$http({
				method:"POST",
				data:{
					id:id
				},
				headers:{
					"Content-type":"application/x-www-form-urlencoded"
				},
				url:"__APP__/Index/del"
			}).success(function(data){
				console.log(data);
			})
		}
	})
	
	
	
	
</script>

</html>