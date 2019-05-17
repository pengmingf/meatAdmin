<?php
namespace app\index\controller;

use app\common\controller\Base;
use think\facade\Request;
use app\common\model\Admin;
use think\File;

class Adminuser extends Base
{
    public function admin()
    {
        $result = Admin::where('status',"neq",0)->paginate(5);
        $page = $result->render();
        $this->assign('data',$result);
        $this->assign('page',$page);
        return $this->fetch();
    }

    public function insert()
    {
        return $this->fetch();
    }

    public function insertAdmin()
    {
        if(Request::isAjax())
        {
            $data = Request::post();
            $rule = ['name|昵称' => 'require|length:2,14',
                    'xuehao|学号'=>'require|length:8|integer',
                    'password|密码'=>'require|length:6,16|alphaDash',
                    'iphone|手机号'=>'require|mobile',
                    "shenfen|身份" => 'require',
                    'email|邮箱'=>'require|email'];
            $res = $this->validate($data,$rule);
            if($res !== true)
            {
                return ['code'=>0,'message'=>$res];
            }
            else
            {
                    $admin = new Admin;
                    $res1 = Admin::where('username', $data['xuehao'])->find();
                    $res2 = Admin::where('iphone', $data['iphone'])->find();
                    if($res1)
                    {
                        return ['code'=>0,'message'=>'学号已存在,添加失败'];
                    }
                    if($res2)
                    {
                        return ['code'=>0,'message'=>'手机号已存在,添加失败'];
                    }
                    if($res1 === null && $res2 === null)
                    {
                        //目前使用的缩略过得图,这种处理方式是否得当?
                        $image = \think\Image::open(request()->file('image'));
                        $path ="./userimage/admin/"."$data[xuehao]".".png";
                        $image->thumb(50, 50)->save($path);
                        $savepath = "admin/"."$data[xuehao]".".png";
                        //直接使用上传图片，不能裁剪大小  不适合头像
                        /*
                        $file =request()->file('image');
                        $info = $file->move('/userimage');
                        */
                        $result = $admin->save(['name'=>$data['name'],'image'=>$savepath,'username'=>$data['xuehao'],
                                    'password'=>$data['password'],'status'=>$data['shenfen'],'iphone'=>$data['iphone'],
                                    'email'=>$data['email']]);
                        if($result==true)
                        {
                            return ['code'=>1,'message'=>'添加成功'];
                        }else{
                            return ['code'=>1,'message'=>"添加失败"];
                        }
                    }  
            }
        }else{
            exit("非法请求!");
        }
    }

    public function update()
    {
        $id = Request::post('Id');
        $data = Admin::where('Id',$id)->find();
        $this->assign('update',$data);
        return $data;
    }

    public function updateAdmin()
    {
        if(Request::isAjax())
        {
            $data = Request::post();
            $rule = ['name|昵称' => 'require|length:2,14',
                    'xuehao|学号'=>'require|length:8|integer',
                    'password|密码'=>'require|alphaDash',
                    'shenfen|身份'=>'require',
                    'iphone|手机号'=>'require|mobile',
                    'email|邮箱'=>'require|email'];
            $res = $this->validate($data,$rule);
            if($res !== true)
            {
                return ['code'=>0,'message'=>$res];
            }
            else
            {
                    $admin = new Admin;
                    $res1 = Admin::where('username', $data['xuehao'])->find();
                    if(!$res1)
                    {
                        return ['code'=>0,'message'=>'账号不存在,修改失败'];
                    }
                    else
                    {
                        if($data['picture'] != 'null'){
                            //目前使用的缩略过得图,这种处理方式是否得当?
                            $image = \think\Image::open(request()->file('image'));
                            $path ="./userimage/admin/"."$data[xuehao]".".png";
                            $image->thumb(50, 50)->save($path);
                            $savepath = "admin/"."$data[xuehao]".".png";
                            //直接使用上传图片，不能裁剪大小  不适合头像
                            /*
                            $file =request()->file('image');
                            $info = $file->move('/userimage');
                            */
                        }else{
                            $savepath = $res1->image;
                        }
                        //没有修改过密码的话（设置了修改器的  所以必须加判断）
                        if($data['password']== $res1->password)
                        {
                            $result = $admin->save(['name'=>$data['name'],'image'=>$savepath,'username'=>$data['xuehao'],
                                    'shenfen'=>$data['shenfen'],'iphone'=>$data['iphone'],
                                    'email'=>$data['email']],['username'=>$data['xuehao']]);
                        }
                        //修改了密码的话
                        else{
                            $result = $admin->save(['name'=>$data['name'],'image'=>$savepath,'username'=>$data['xuehao'],
                                    'password'=>$data['password'],'shenfen'=>$data['shenfen'],'iphone'=>$data['iphone'],
                                    'email'=>$data['email']],['username'=>$data['xuehao']]);
                        }
                        if($result==true)
                        {
                            return ['code'=>1,'message'=>'修改成功'];
                        }else{
                            return ['code'=>1,'message'=>"修改失败"];
                        }
                    }  
            }
        }else{
            exit("非法请求!");
        }
    }

    public function delete()
    {
        if(Request::isAjax())
        {
            $Id = Request::post('Id');
            $admin = new Admin;
            $res = $admin->save(['status'=>0],['Id'=>$Id]);
            if($res)
            {
                return ['code'=>1,'message'=>'删除成功'];
            }
            else{
                return ['code'=>0,'message'=>'删除失败'];
            }
        }else{
            exit('非法请求！');
        }
    }
}