<?php
namespace app\index\controller;
use think\Db;//导入数据库Db类
class Index
{
     public function index(){
         $user = Db::table('user')->where('id',1)->select();
         print_r($user);
	}
}