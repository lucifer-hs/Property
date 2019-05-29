<?php
namespace app\admin\controller;
use think\Db;
class Worker extends Base
{
    public function Index()
    {
        if (request()->isPost()) {
            $find=input('find');
            $style=input('style');
            //搜索模块
            if($find&&$style==1){
                 $gl=\think\Db::name('gl')->alias('a')->join('bn c','c.bn_id =a.bn_id','LEFT')->field('a.gl_user,a.gl_id,a.gl_pwd,a.gl_p,a.gl_name,a.gl_date,a.gl_call,a.gl_adress,a.gl_note,a.time,bn.bn_name')->where('a.gl_name','like',"%".$find."%")->paginate(10);
            }elseif (!$find&&$style&&$style!=1) {
                 $gl=\think\Db::name('gl')->alias('a')->join('bn c','c.bn_id =a.bn_id','LEFT')->field('a.gl_user,a.gl_id,a.gl_pwd,a.gl_p,a.gl_name,a.gl_date,a.gl_call,a.gl_adress,a.gl_note,a.time,bn.bn_name')->where('a.gl_p',$style)->paginate(10);
            }elseif ($find&&$style) {
                 $gl=\think\Db::name('gl')->alias('a')->join('bn c','c.bn_id =a.bn_id','LEFT')->field('a.gl_user,a.gl_id,a.gl_pwd,a.gl_p,a.gl_name,a.gl_date,a.gl_call,a.gl_adress,a.gl_note,a.time,bn.bn_name')->where('a.gl_name','like',"%".$find."%")->where('a.gl_p',$style)->paginate(10);
            }else{
                 $gl=\think\Db::name('gl')->alias('a')->join('bn c','c.bn_id =a.bn_id','LEFT')->field('a.gl_user,a.gl_id,a.gl_pwd,a.gl_p,a.gl_name,a.gl_date,a.gl_call,a.gl_adress,a.gl_note,a.time,bn.bn_name')->paginate(10);
                 //联表查询
            }
            //从gl表中获取数据并分页每页10条数据
            // $gl = \think\Db::name('gl')->paginate(10);
            /* 
            使用sql语句写法
              $gl=select * from gl ;
            */ 
        }else{
            $gl=\think\Db::name('gl')->alias('a')->join('bn c','c.bn_id =a.bn_id','LEFT')->field('a.gl_user,a.gl_id,a.gl_pwd,a.gl_p,a.gl_name,a.gl_date,a.gl_call,a.gl_adress,a.gl_note,a.time,bn.bn_name')->paginate(10);   
        }

        $this->assign('gl',$gl);//模版赋值
        return $this->fetch('lst');//输出视图
    }
    //添加数据方法
     public function Add()
    {
        if (request()->isPost()) {
             $list=Db::name('bn')->where('bn_id',input('bn_id'))->find(); 
            if (!$list) {
                return $this->error('部门号不存在');
            }
            $data=[ 
                'gl_user'=>input('username'),
                'gl_pwd'=>MD5(input('password')),
                'gl_p'=>input('grade'),
                'gl_name'=>input('name'),
                'bn_id'=>input('bn_id'),
                'gl_date'=>(input('gl_date_y')."-".input('gl_date_m')."-".input('gl_date_d')),
                'gl_call'=>input('phone'),
                'gl_adress'=>input('adress'),
                'gl_note'=>input('note'),
                'time'=>time(),
            ]; //打包成数据数组
            if ($_FILES['file']['tmp_name']){
                $file = request()->file('file');
                // 移动到框架应用根目录/public/uploads/ 目录下
               $info = $file->move(ROOT_PATH . 'public' . DS . '/static/uploads/');
                if($info){
                   // 成功上传后 获取上传信息
                    // 输出 jpg
                    $data['gl_picture']='/static/uploads/'.date('Ymd').'/'.$info->getFilename();
                }else{
                   // 上传失败获取错误信息
                    return $this->error($file->getError());
               
                }
            }else{
                 $data['gl_picture']='/static/uploads/14.jpg';
            }
             //验证器
            if (input('password')!=input('password2')) {
                 return $this->error('两次密码不一致！');
            }
                 $validate = \think\Loader::validate('Worker');//连接validate中的Worker.php
                    if ($validate ->check($data)) {
                       $db= \think\Db::name('gl')->insert($data);//将数组添加到数据库中
                        /* 
                        使用sql语句写法
                         $db=insert into (field1,field2) values(value1,value2) ;
                        */
                       //添加数据验证模块
                       if ($db) {
                           return $this->success('添加信息成功！','index');
                        }else{
                           return $this->error('添加信息失败！');
                        }   
                    }else{
                        return $this->error( $validate->getError());//报错输入与验证规则不符
                    }
                return;
        }
        return view('add');//添加视图模块
    } 
    public function Edit()
    {
        $id = input('id');
        $tab=Db::name('gl')->where('gl_id',$id)->find(); 
         /* 
         使用sql语句写法
        $tab=select * from gl where id=$id; 
        */$tab['gl_date']= explode("-", $tab['gl_date']);
        $this->assign('tab',$tab);
        if (request()->isPost()) {
            $list=Db::name('bn')->where('bn_id',input('bn_id'))->find(); 
            if (!$list) {
                return $this->error('部门号不存在');
            }
            $data=[ 
                'gl_user'=>input('username'),
                'gl_pwd'=>MD5(input('password')),
                'gl_p'=>input('grade'),
                'gl_name'=>input('name'),
                'bn_id'=>input('bn_id'),
                'gl_call'=>input('phone'),
                'gl_adress'=>input('adress'),
                'gl_note'=>input('note'),
                'time'=>time(),
            ]; //打包成数据数组
            if ($_FILES['file']['tmp_name']){
                $file = request()->file('file');
                // 移动到框架应用根目录/public/uploads/ 目录下
               $info = $file->move(ROOT_PATH . 'public' . DS . '/static/uploads/');
                if($info){
                   // 成功上传后 获取上传信息
                    // 输出 jpg
                    $data['gl_picture']='/static/uploads/'.date('Ymd').'/'.$info->getFilename();
                }else{
                   // 上传失败获取错误信息
                    return $this->error($file->getError());
               
                }
            }
             //验证器
            if (input('password')!=input('password2')) {
                 return $this->error('两次密码不一致！');
            }
                 $validate = \think\Loader::validate('Worker');//连接validate中的Worker.php
                    if ($validate ->scene('edit')->check($data)) {
                       $db= \think\Db::name('gl')->where('gl_id', $id)->update($data);//将数组添加到数据库中
                        /* 
                        使用sql语句写法
                         $db=insert into (field1,field2) values(value1,value2) ;
                        */
                       //添加数据验证模块
                       if ($db) {
                           return $this->success('修改信息成功！','index');
                        }else{
                           return $this->error('修改信息失败！');
                        }   
                    }else{
                        return $this->error( $validate->getError());//报错输入与验证规则不符
                    }
                return;
        }
     return view('edit');
    }
    //查看数据方法
    public function See()
    {
         $id = input('id');
         //查找数据语句
         $line=\think\Db::name('gl')->alias('a')->join('bn c','c.bn_id =a.bn_id','LEFT')->field('a.gl_id,a.gl_user,a.gl_pwd,a.gl_p,a.gl_name,a.gl_date,a.gl_call,a.gl_picture,a.gl_adress,a.gl_note,a.time,bn.bn_name')->where('a.gl_id',$id)->find();
         /* 
         使用sql语句写法
        $line=select * from gl where id=$id; 
        */$line['gl_date']= explode("-", $line['gl_date']);
        $this->assign('line',$line);
        return view('see');
     } 
       // 删除语句方法  
     public function del()
        {
             $id = input('id');
             //删除数据语句
            $db=Db::table('gl')->delete($id);
              /* 
            使用sql语句写法
              $db=delete from yz where id=$id; 
            */
            if ($db) {
               $this->success('删除成功');
            }else{
                $this->error('删除失败');
            }
        }       
}
