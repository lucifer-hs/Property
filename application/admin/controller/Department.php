<?php
namespace app\admin\controller;
use think\Db;
class Department extends Base
{
    public function Index()
    {
        
        if (request()->isPost()) {
            $find=input('find');
            $adminres = \think\Db::name('bn')->where('bn_name','like',"%".$find."%")->paginate(10);
        }else{
             $adminres = \think\Db::name('bn')->paginate(10);
        }
        $this->assign('adminres',$adminres);//模版赋值
        return $this->fetch('lst');//输出视图
    }
    //添加数据方法
     public function Add()
    {
    	if (request()->isPost()) {
            $list=Db::name('gl')->where('gl_id',input('gl_id'))->find();
            if(!$list){
                return $this->error('不存在此管理人员');
            }
    		$data=[ 
    			
                'bn_name'=>input('bn_name'),
                'gl_id'=>input('gl_id'),
                'gl_name'=>$list['gl_name'],
                'gl_p'=>$list['gl_p'],
                'bn_phone'=>input('bn_phone'),
                'bn_note'=>input('bn_note'),
                'time'=>time(),
    		]; //打包成数据数组
            //验证器
				 $validate = \think\Loader::validate('department');//连接validate中的information.php
		    		if ($validate ->check($data)) {
		    		   $db= \think\Db::name('bn')->insert($data);//将数组添加到数据库中
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
            $lst=Db::name('bn')->where('bn_id',$id)->find(); 
             $this->assign('lst',$lst);
             if (request()->isPost()) {
            $list=Db::name('gl')->where('gl_id',input('gl_id'))->find();
            if(!$list){
                return $this->error('不存在此管理人员');
            }
            $data=[ 
                
                'bn_name'=>input('bn_name'),
                'gl_id'=>input('gl_id'),
                'gl_name'=>$list['gl_name'],
                'gl_p'=>$list['gl_p'],
                'bn_phone'=>input('bn_phone'),
                'bn_note'=>input('bn_note'),
                'time'=>time(),
            ]; //打包成数据数组
            //添加附件模块
             //验证器
                 $validate = \think\Loader::validate('department');
                    if ($validate ->check($data)) {
                        //更新数据语句
                       $db= \think\Db::table('bn')->where('bn_id', $id)->update($data);
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
        //删除数据方法    
        public function del()
        {
             $id = input('id');
             //删除数据语句
            $db=Db::table('bn')->delete($id);
              /* 
            使用sql语句写法
              $db=delete from bn where id=$id; 
            */
            if ($db) {
               $this->success('删除成功');
            }else{
                $this->error('删除失败');
            }
        }       
    
}
