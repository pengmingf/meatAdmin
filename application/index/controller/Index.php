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
    
    public function loginOut()
    {
        Session::clear();
        $this->success('注销成功','login/login');
    }

}
