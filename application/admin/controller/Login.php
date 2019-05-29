<?php
namespace app\admin\controller;
use app\admin\model\Login as Log;//换别名Log
use think\Controller;
class Login extends Controller
{
    public function index()
    {   
    	if(request()->isPost()){
	    	$login=new Log;//实例化登录类
	    	$user=$login->login(input('username'),input('password'));//传值到类中
	    	// var_dump(input('password'));
	         if($user==1){//登录验证
	                return $this->success('登录成功，正在跳转！','Index/index');
	            }elseif($user==-2){
	                return $this->error('账号或者密码错误!');
	            }else{
	                 return $this->error('用户不存在!');
	            }
	           
	    }  
	     return view('login');
    }
    //退出登录模块
    public function logout(){
        session(null);//查看session是否为空
        return $this->success('退出成功！',url('index'));
    }
}
