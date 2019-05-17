<?php
namespace app\index\controller;
use think\Controller;
use \think\facade\Request;
use app\common\model\Admin;
use app\common\model\AdminLog;
use think\facade\Session;
use think\session\driver\Memcache;

class Login extends Controller
{
    public function login()
    {
        $this->isLogin();
        return $this->fetch();
    }
    //检验重复登录的问题
	public function isLogin()
	{
		if(Session::has('admin_id'))
		{
			$this->error('您已登录，请勿重复登录！','index/index');
		}
	}
    
    public function checkLogin()
    {
        // $ip = $_SERVER['REMOTE_ADDR'];这个只能获取到最后一次代理的ip地址
        $ip = $this->getIp();
        if(Request::isAjax())
        {
            $data = Request::post();
            $rule = ['username|学号'=> 'require|integer|length:8',
                     'password|密码' => 'require|alphaDash|length:6,16'];
            $res = $this->validate($data,$rule);
            if($res === true)
            {
                $result = Admin::where(['username'=>$data['username'],'password'=>md5($data['password'])])->find();
                if($result)
                {
                    session('admin_id',$result);
                    //保存到日志表
                    $adminLog = new AdminLog;
                    $adminLog->save(['admin_id'=>$result['Id'],'username'=>$result['name'],'ip'=>$ip,'method'=>"登录系统"]);
                    return ['code'=>1,'message'=>'登陆成功!'];
                }else{
                    return ['code'=>0,'message'=>'用户名或密码错误！'];
                }
            }else{
                return ['code'=>0,'message'=>$res];
            }
        }else{
            exit('非法请求');
        }
    }

    //获取ip地址
    function getIp()
    {
        //最后一次代理的ip
        if ($_SERVER['REMOTE_ADDR']) {
            $cip = $_SERVER['REMOTE_ADDR'];
        } elseif (getenv("REMOTE_ADDR")) {
            $cip = getenv("REMOTE_ADDR");
        } elseif (getenv("HTTP_CLIENT_IP")) {
            $cip = getenv("HTTP_CLIENT_IP");
        } else {
            $cip = "unknown";
        }
        return $cip;
    }
}