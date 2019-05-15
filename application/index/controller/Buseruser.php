<?php
namespace app\index\controller;

use app\common\controller\Base;
use think\facade\Request;
use app\common\model\Buser;
use think\File;

class Buseruser extends Base
{
    public function BuserList()
    {
        $result = Buser::where('status',"neq",2)->paginate(5);
        $page = $result->render();
        $this->assign('data',$result);
        $this->assign('page',$page);
        return $this->fetch();
    }

    public function insert()
    {
        return $this->fetch();
    }

    public function insertBuser()
    {
        if(Request::isAjax())
        {
            $data = Request::post();
            $rule = ['bname|昵称' => 'require|length:2,14',
                    'username|学号'=>'require|length:8|integer',
                    'password|密码'=>'require|length:6,16|alphaDash',
                    'status|身份'=>'require',
                    'iphone|手机号'=>'require|mobile',
                    'message|邮箱'=>'require'];
            $res = $this->validate($data,$rule);
            if($res !== true)
            {
                return ['code'=>0,'message'=>$res];
            }
            else
            {
                    $buser = new Buser;
                    $res1 = Buser::where('username', $data['username'])->find();
                    $res2 = Buser::where('iphone', $data['iphone'])->find();
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
                        $path ="./userimage/buser/"."$data[username]".".png";
                        $image->thumb(75, 75)->save($path);
                        $savepath = "buser/"."$data[username]".".png";
                        //直接使用上传图片，不能裁剪大小  不适合头像
                        /*
                        $file =request()->file('image');
                        $info = $file->move('/userimage');
                        */
                        $result = $buser->save(['bname'=>$data['bname'],'image'=>$savepath,'username'=>$data['username'],
                                    'password'=>$data['password'],'status'=>$data['status'],'iphone'=>$data['iphone'],
                                    'message'=>$data['message']]);
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
        $data = Buser::where('Id',$id)->find();
        $this->assign('update',$data);
        return $data;
    }

    public function updateBuser()
    {
        if(Request::isAjax())
        {
            $data = Request::post();
            $rule = ['bname|昵称' => 'require|length:2,14',
                    'username|学号'=>'require|length:8|integer',
                    'password|密码'=>'require|alphaDash',
                    'status|身份'=>'require',
                    'iphone|手机号'=>'require|mobile',
                    'message|邮箱'=>'require'];
            $res = $this->validate($data,$rule);
            if($res !== true)
            {
                return ['code'=>0,'message'=>$res];
            }
            else
            {
                    $buser = new Buser;
                    $res1 = Buser::where('username', $data['username'])->find();
                    if(!$res1)
                    {
                        return ['code'=>0,'message'=>'学号不存在,修改失败'];
                    }
                    else
                    {
                        if($data['picture'] != 'null'){
                            //目前使用的缩略过得图,这种处理方式是否得当?
                            $image = \think\Image::open(request()->file('image'));
                            $path ="./userimage/buser/"."$data[username]".".png";
                            $image->thumb(50, 50)->save($path);
                            $savepath = "buser/"."$data[username]".".png";
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
                            $result = $buser->save(['bname'=>$data['bname'],'image'=>$savepath,'username'=>$data['username'],
                                    'status'=>$data['status'],'iphone'=>$data['iphone'],
                                    'message'=>$data['message']],['username'=>$data['username']]);
                        }
                        //修改了密码的话
                        else{
                            $result = $buser->save(['bname'=>$data['bname'],'image'=>$savepath,'username'=>$data['username'],
                                    'password'=>$data['password'],'status'=>$data['status'],'iphone'=>$data['iphone'],
                                    'message'=>$data['message']],['username'=>$data['username']]);
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
            $buser = new Buser;
            $res = $buser->save(['status'=>2],['Id'=>$Id]);
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