<?php
namespace app\admin\validate;

use think\Validate;

class Department extends Validate
{   //验证规则
    protected $rule = [
        'bn_name'  =>  'require|max:100',
        'gl_id'  =>  'require|max:10',
        'bn_phone'  =>  'require',
        
        
    ];
    //验证提示信息
    protected $message = [
      'bn_name.require'  =>  '部门名称不能为空',
      'bn_name.max'  =>  '部门名称不能多于十位',
      'gl_id.require'  =>  '主管ID不能为空',
      'gl_id.max'  =>  '主管ID不能多于十位',
      'bn_phone.require'  =>  '部门电话号码不能为空',
   ];


}
