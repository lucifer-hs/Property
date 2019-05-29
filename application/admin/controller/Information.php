<?php
namespace app\admin\controller;
use think\Db;
class Information extends Base
{
    public function Index()
    {
        if (request()->isPost()) {
            $find=input('find');
            $style=input('style');
            //搜索模块
            if($find&&$style==1){
                 $adminres = \think\Db::name('yz')->where('yz_name','like',"%".$find."%")->paginate(10);
            }elseif (!$find&&$style&&$style!=1) {
                 $adminres = \think\Db::name('yz')->where('fw_style',$style)->paginate(10);
            }elseif ($find&&$style) {
                 $adminres = \think\Db::name('yz')->where('yz_name','like',"%".$find."%")->where('fw_style',$style)->paginate(10);
            }else{
                 $adminres = \think\Db::name('yz')->paginate(10);
            }
            //从yz表中获取数据并分页每页10条数据
            // $adminres = \think\Db::name('yz')->paginate(10);
            /* 
            使用sql语句写法
              $adminres=select * from yz ;
            */ 
        }else{
             $adminres = \think\Db::name('yz')->paginate(10);
            
        }
        $this->assign('adminres',$adminres);//模版赋值
        return $this->fetch('lst');//输出视图
    }
    //添加数据方法
     public function Add()
    {
    	if (request()->isPost()) {

    		$data=[ 
    			'fw_number'=>(input('home_number_1')."-".input('home_number_2')."-".input('home_number_3')),
    			'fw_style'=>input('home_style'),
    			'yz_name'=>input('home_name'),
                'fw_detailed'=>input('home_data'),
                'gf_date'=>(input('home_date_y')."-".input('home_date_m')."-".input('home_date_d')),
                'yz_phone'=>input('home_phone'),
                'fw_state'=>input('home_state'),
                'fw_note'=>input('home_note'),
                'time'=>time(),
    		]; //打包成数据数组
            //添加附件模块
    		if ($_FILES['file']['tmp_name']){
                $file = request()->file('file');
                // 移动到框架应用根目录/public/uploads/ 目录下
               $info = $file->move(ROOT_PATH . 'public' . DS . '/static/uploads/');
                if($info){
                   // 成功上传后 获取上传信息
                    // 输出 jpg
                    $data['yz_fjs']='/static/uploads/'.date('Ymd').'/'.$info->getFilename();
                }else{
                   // 上传失败获取错误信息
                    return $this->error($file->getError());
               
                }
            }
            //验证器
				 $validate = \think\Loader::validate('information');//连接validate中的information.php
		    		if ($validate ->check($data)) {
		    		   $db= \think\Db::name('yz')->insert($data);//将数组添加到数据库中
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
    	//修改数据方法
        public function Edit()
        {
            $id = input('id');
            $lst=Db::name('yz')->where('ww_id',$id)->find(); 
             $lst['fw_number']= explode("-", $lst['fw_number']);//字符串分割（房号）
             $lst['gf_date']= explode("-", $lst['gf_date']);//字符串分割（购房日期）
             $this->assign('lst',$lst);
             if (request()->isPost()) {
            $data=[ 
                'fw_style'=>input('home_style'),
                'fw_detailed'=>input('home_data'),
                'yz_name'=>input('home_name'),
                'yz_phone'=>input('home_phone'),
                'fw_state'=>input('home_state'),
                'fw_note'=>input('home_note'),
                'time'=>time(),
            ];  //打包成数据数组
            //添加附件模块
            if ($_FILES['file']['tmp_name']){
                $file = request()->file('file');
                // 移动到框架应用根目录/public/uploads/ 目录下
               $info = $file->move(ROOT_PATH . 'public' . DS . '/static/uploads/');
                if($info){
                   // 成功上传后 获取上传信息
                    // 输出 jpg
                    $data['yz_fjs']='/static/uploads/'.date('Ymd').'/'.$info->getFilename();
                }else{
                   // 上传失败获取错误信息
                    return $this->error($file->getError());
               
                }
            }
             //验证器
                 $validate = \think\Loader::validate('information');
                    if ($validate ->check($data)) {
                        //更新数据语句
                       $db= \think\Db::table('yz')->where('ww_id', $id)->update($data);
                        /* 
                        使用sql语句写法
                          $list=update table1 set $data where id=$id; 
                        */
                       if ($db) {
                           return $this->success('修改信息成功！','index');
                        }else{
                           return $this->error('修改信息失败！');
                        }   
                    }else{
                        return $this->error( $validate->getError());
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
            $list=Db::name('yz')->where('ww_id',$id)->find(); 
             /* 
            使用sql语句写法
              $list=select * from yz where id=$id; 
            */
             $list['fw_number']= explode("-", $list['fw_number']);
             $list['gf_date']= explode("-", $list['gf_date']);
             $this->assign('list',$list);
          return view('see');
        }   
        //删除数据方法    
        public function del()
        {
             $id = input('id');
             //删除数据语句
            $db=Db::table('yz')->delete($id);
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
