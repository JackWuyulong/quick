<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
		$this->display("index");
    }
    public function login(){
    	$this->display("login");
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
    public function register(){
		$this->display("register");
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
}