<?php
namespace app\index\controller;
use app\common\controller\Base;
use app\common\model\Admin;
use think\facade\Session;

class Index extends Base
{
    public function index()
    {
        return $this->fetch();
    }
    
    //设置昵称
    // public function setName()
    // {
    //     $session_id = session('admin_id');
    //     $admin = new Admin;
    //     $res = $admin->where('id',$session_id)->find();
    //     if($res !== null)
    //     {
    //         $this->assign('name',$res->name);
    //         return $this->fetch('public/top');
    //     }else{
    //         exit('异常登陆');
    //     }
    // }
    
    public function loginOut()
    {
        Session::clear();
        $this->success('注销成功','login/login');
    }

}
