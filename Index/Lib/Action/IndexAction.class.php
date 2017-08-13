<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
		$this->display("index");
    }
    public function login(){
    	$this->display("login");
    }
    public function login_hot(){
        $hotGoods = M("goods");
        $hotImg = M("img");
        $hotPrice = M("type");
        $hotArr = $hotGoods->limit(5)->select();
        foreach ($hotArr as $key => $value) {
            $where['gid'] = $hotArr[$key]['id'];
            $where['types'] = 1;
            $whereP['gid'] = $hotArr[$key]['id'];
            $showImg = $hotImg->where($where)->select();
            $price = $hotPrice->where($whereP)->order("price")->select();
            $hotArr[$key]['img'] = $showImg;
            $hotArr[$key]['price'] = $price;
        }
        $this->ajaxReturn($hotArr);
        print_r($hotArr);
    }

    public function allcpt(){
    	$this->display("allcpt");
    }
    public function newproduct(){
    	$this->display("newproduct");
    }
    public function time(){
    	$this->display("time");
    }
    public function checkUser(){ 
        $data = file_get_contents("php://input");
        $sureData = json_decode($data,true);
        $pwd = $sureData['pwd'];
        $tel = $sureData['tel'];
        //链接阿里数据库users表
        $users = M("users");
        $where['tel'] = $tel;
        $where['pwd'] = md5($pwd);
        $res = $users->where($where)->find();
        $username = $res['username'];
        $id = $res['id'];
        if($res){
            $info['status'] = 1;
            $info['info'] = "用户名和密码正确";
            session("username",$username);
            session("id",$id);
        }else{
            $info['status'] = 0;
            $info['info'] = "用户名或者密码错误";
        }
        $this->ajaxReturn($info);

    }
    public function quitUser(){
        session("username",null);
        session("id",null);
        if(session("username")==null&&session("id")==null){
            $data['status']=1;
            $data['info'] = "已经退出";
        }else{
            $data['status']=0;
            $data['info'] = "退出失败";
        }

        $this->ajaxReturn($data);
    }
    public function shopCar(){
        $this->display("shopCar");

    }
    public function detail(){
        $this->display("detail");
    }
     public function loginBehind(){
        $this->display("loginBehind");
    }
    public function checkManage(){
        $data = file_get_contents("php://input");
        $sureData = json_decode($data,true);
        $username = $sureData['username'];
        
        $pwd = $sureData['pwd'];
        // print_r($data);die;
        //$this->ajaxReturn($data);
        //验证管理员用户名和密码是否正确
        $users = M("manage");
        $where['username'] = $username;
        // $where['pwd'] = md5($pwd);
        $pwd = md5($pwd);
        $res = $users->where("username='{$username}' AND pwd='{$pwd}'")->find();
        // echo $users->getlastSql();die;
        if($res){
            $info['info'] = "用户名密码正确";
            $info['status'] = 1;
            session("usernameS",$username);
        }else{
            $info['info'] = "用户名密码错误";
            $info['status'] = 2;
        }
        $this->ajaxReturn($info);
    }
    // 获取到列表数据接口
    function getList(){
        //获取数据库里面的品牌名称
        $band = M("band");
        // $where['cate'] = session("cate");
        $list = $band->select();
        //获取数据库里面的使用场景
        $place = M("place");
        $background = $place->select();
        $money = M("money");
        $rentMoney = $money->select();
        //获取数据库里面的产品种类
        $cate = M("cate");
        $rentCate = $cate->select();
        $data["list"] = $list;
        $data['background'] = $background;
        $data['money'] = $rentMoney;
        $data['rentCate'] = $rentCate;
        $this->ajaxReturn($data);

    }

    function addData(){
       
        // print_r($_FILES);
        // print_r($_POST);
        //添加数据到产品数据表
        $connect = M("goods");
        $data['goodsName'] = $_POST['goodsName'];
        $data['goodsTitle'] = $_POST['title'];
        $data['bid'] = $_POST['band'];
        $data['pid'] = $_POST['placeS'];
        $data['cid'] = $_POST['cates'];
        $data['mid'] = $_POST['money'];
        $res = $connect->add($data);
        //添加数据到产品类型表格；
        $type = M("type");
        $typeArr = json_decode($_POST['goodsTypeMoney'],true);
        // print_r($typeArr);
        foreach ($typeArr as $k => $v) {
           $typeArr[$k]['gid'] = $res;
           $result = $type->add($typeArr[$k]);
        }
        //添加图片到img表格;
        // print_r($_FILES);
        $imgS = $_FILES;
        $connectImg = M("img");
        foreach ($imgS as $key => $value) {
            $imgType = strrchr($imgS[$key]['name'],".");
            $filename = mt_rand(1,100).mt_rand(100,1000).time().$imgType;
            if (is_uploaded_file($imgS[$key]['tmp_name'])) {
                //有上传文件
                $newUrl = "Index/Common/img/upload/".$filename;
                // echo $imgS[$key]['tmp_name'];
                // echo $newUrl;die;
                $resultS = move_uploaded_file($imgS[$key]['tmp_name'],$newUrl);  
                $imgData['imgUrl'] = $newUrl;
                $imgData['gid'] =$res;
               
            }
            if(preg_match('/small/',$key)){
                $imgData['types'] = 3;
                
            }
            if (preg_match('/show/', $key)) {
                $imgData['types'] = 1;
            }
            if (preg_match('/index/', $key)) {
                $imgData['types'] = 2;
            }
            if(preg_match('/Big/', $key)){
                $imgData['types'] = 4;
            }
            $imgResult = $connectImg->add($imgData);
            
        }
        if($res&&$imgResult){
            $dataInfo["status"] = 1;
            $dataInfo["info"] = "添加成功";
        }else{
            $dataInfo["status"] = 0;
            $dataInfo["info"] = "添加失败";
        }
    
        $this->ajaxReturn($dataInfo);

    }


    //添加数据接口
//     function addData(){
//         $str = file_get_contents("php://input");
//         $data = json_decode($str);
// //      print_r($data);
//         $data['addtime'] = time();
//         $data['cate'] = $_SESSION['cate'];
//         $news = M("news");
//         $res = $news->add($data);
//         $where['cate'] = $_SESSION['cate'];
//         if($res){
//             //返还成功的状态和最新的数据
//             $info['info'] = "数据添加成功";
//             $info['status'] = 1;
//             $list = $news->select();
//             foreach($list as $k=>$v){
//                 $list[$k]['addtime'] = date("Y-m-d",$v['addtime']);
//             }
//             $info['data'] = $list;
//         }else{
//             //返还失败的状态
//             $info['info'] = "数据添加失败";
//             $info['status'] = 2;
//         }
//         $this->ajaxReturn($info);
//     }
}