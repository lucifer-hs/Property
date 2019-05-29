<?php
namespace app\admin\validate;

use think\Validate;

class Information extends Validate
{   //验证规则
    protected $rule = [
        'yz_name'  =>  'require|max:100',
        'fw_detailed'  =>  'require|max:10',
        'yz_phone'  =>  'require',
        
        
    ];
    //验证提示信息
    protected $message = [
      'yz_name.require'  =>  '业主姓名不能为空',
      'yz_name.max'  =>  '业主姓名不能多于十位',
      'fw_detailed.require'  =>  '资料存储编号不能为空',
      'fw_detailed.max'  =>  '资料存储编号不能多于十位',
      'yz_phone.require'  =>  '电话号码不能为空',
   ];


}
