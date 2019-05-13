<?php
namespace app\index\controller;

use app\common\controller\Base;
use \think\facade\Request;
use app\common\model\Suser;
use app\common\api\DuanXin;
use think\cache\driver\Redis;


Class User extends Base
{
    use DuanXin;
    public function lostPassword()
    {
        return $this->fetch();
    }

    //发送手机验证码
    public function sendPhone()
    {
        //产生一个4位数的验证码在1031-9999之间
        $math = mt_rand(1030,9999);
        if(Request::isAjax())
        {
            $data = Request::post();
            $rule = ['xuehao|学号' => 'require|length:8|integer',
                     'phone|手机号' => 'require|mobile'];
            $res = $this->validate($data,$rule);
            if($res !== true)
            {
                return ['code'=>0,'message'=>$res];
            }
            else
            {
                $result = Suser::where(['xuehao'=>$data['xuehao'],'iphone'=>$data['phone']])->find();   
                if($result)
                {
                    // $DX = new DuanXin();
                    // $DX->sendDX($data['phone'],$code=$math);
                    $back = $this->sendDX($data['phone'],$tpl_id="148745",$math);
                    if($back['code'] === 1)
                    {
                        // $memcache = new Memcache;
                        // $memcache->connect('127.0.0.1',11211);
                        // $memcache->set($data['xuehao'].data['phone'],$math,0,600);
                        $redis = new Redis();
                        $redis->set($data['xuehao'].$data['phone'],$math,600);
                        // return ['code'=>1,'message'=>$redis->get($data['xuehao'].$data['phone'])];
                        return $back;
                    }else{
                        return $back;
                    }
                }
                else
                {
                    return ['code'=>0,'message'=>'手机号不匹配'];
                }
            }
            
        }else{
            echo '非法请求';
            exit;
        }
        
    }

    //验证验证码
    public function checkYZM()
    {
        if(Request::isAjax())
        {
            // $yam = Request::post('duanxinma');
            // $xuehao = Request::post('xuehao');
            // $phone = Request::post('phone');
            
            $data = Request::post();
            $rule = ['xuehao|学号' => 'require|length:8|integer',
                     'phone|手机号' => 'require|mobile',
                     'duanxinma|验证码' => 'require|length:4'];
            $res = $this->validate($data,$rule);
            
            if($res !== true)
            {
                return ['code'=>0,'message'=>$res];
            }
            else
            {
                $redis = new Redis();
                $result = $redis->get($data['xuehao'].$data['phone']);
                if($result === false)
                {
                    return ['code'=>0,'message'=>'验证码已过期'];
                }
                else
                {
                    if($result == $data['duanxinma'])
                    {
                        $redis = new Redis();
                        $res = $redis->set('update'.$data['xuehao'],$data['xuehao'],1800);
                        if($res === false)
                        {
                            return ['code'=>0,'message'=>'缓存写入失败'];
                        }else{
                            return ['code'=>1,'message'=>'验证成功'];
                        }
                    }
                    else{
                        return ['code'=>0,'message'=>'验证码有误'];
                    }
                }
            }
        }else{
            echo "非法请求！";
            exit;
        }
    }

    public function updatePassword()
    {
        return $this->fetch();
    }
    //修改密码
    public function update()
    {
        if(Request::isAjax())
        {
            $data = Request::post();
            $rule = ['xuehao|学号'=> 'require|integer|length:8',
                     'password|新密码' => 'require|length:6,16|alphaDash',
                     'passwords|确认新密码' => 'require|confirm:password'];
            $res = $this->validate($data,$rule);
            if($res !== true)
            {
                return ['code'=>0,'message'=>$res];
            }
            else
            {
                $redis = new Redis();
                $xuehao = $redis->get('update'.$data['xuehao']);
                if($xuehao === false)
                {
                    return ['code'=>0,'message'=>'异常错误'];
                }
                else
                {
                    $data['password'] = md5($data['password']);
                    // $suser = new Suser();
                    $res = Suser::where(['xuehao'=>$xuehao])->update(['password'=>$data['password']]);
                    if($res === 1)
                    {
                        return ['code'=>1,'message'=>'更新成功'];
                    }else{
                        return ['code'=>0,'message'=>'更新失败'];
                    }
                }
            }
        }else{
            exit("非法请求");
        }
    }
}