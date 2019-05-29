<?php
namespace app\admin\validate;

use think\Validate;

class Worker extends Validate
{   //验证规则
    protected $rule = [
        'gl_user'  =>  'require|max:100|unique:gl',
        'gl_pwd'  =>  'require|min:5',
        'gl_name'  =>  'require',
        
    ];
    //验证提示信息
    protected $message = [
      'gl_user.require'  =>  '用户名不能为空',
      'gl_user.max'  =>  '用户名不能多于十位',
      'gl_user.unique'  =>  '用户名不能重复',
      'gl_name.require' => '管理员姓名不能为空',
      'gl_pwd.min'  => '密码不能少于5位',

   ];
protected $scene = [
        'edit'  =>  ['gl_pwd','gl_name'],
    ];
}
