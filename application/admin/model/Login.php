<?php
namespace app\admin\model;
use think\Model;
use think\Db;
class Login extends Model//打造验证继承类
{
 	public function login($username,$password){//打造登录验证函数
       $user=Db::table('gl')->where('gl_user','=',$username)->find();//判断用户名是否存在
     	if ($user) {
     		if ($user['gl_pwd']==MD5($password)) {//判断密码是否正确
     			\think\Session::set('id',$user['gl_id']);//将ID存储到session中
		    	\think\Session::set('username',$user['gl_user']);//将用户名存储到session中
     			return 1;//成功登录
     		}
     		else{
     			return -2;//返回-2表示密码不正确
     		}	
     	}else{
     		return -1;//返回-1表示用户名不存在
     	}


    }
}