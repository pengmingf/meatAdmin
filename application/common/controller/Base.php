<?php
namespace app\common\controller;
use \think\Controller;
use think\facade\Session;
use app\common\model\Admin;

class Base extends Controller
{
    public function _initialize()
    {
        $this->noLogin();
    }
	//检验是否登录
	public function noLogin()
	{
		if(!Session::has('admin_id'))
		{
			$this->error('请登录！','login/login');
		}
    }
    

    // public function _empty()
    // {
    //     return $this->fetch("_empty.html");
    // }

}