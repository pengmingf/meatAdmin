<?php

namespace app\api\controller;

use app\common\controller\Base;
use think\facade\Request;
use app\common\model\Suser;
use app\common\model\Buser;
use think\cache\driver\Redis;
use app\common\model\Foodlist;
use app\common\model\Foodtype;

class Index extends Base
{
    //微信小程序登录
    public function login()
    {
        $data = Request::get();
        $rule = ['xuehao|账号'=>'require|integer|length:8',
                 'password|密码' => 'require|alphaDash|length:6,16'];
        $result = $this->validate($data,$rule);
        if($result !== true)
        {
            $return = json_encode(['success'=>false,'message'=>$result]);
          	return $return;
        }
        $res = Suser::where(['xuehao'=>$data['xuehao'],'password'=>md5($data['password'])])->find();
        if(!$res)
        {
            return json_encode(['success'=>false,'message'=>"账号或密码有误"]);
        }
        $res->token = md5($res->xuehao+$res->xuehao+1);
        $res->success = true;
        $redis = new Redis;
        $redis->set($res->token,1);
        return $res;
    }

    //首页商家显示
    public function showlist()
    {
        $redis = new Redis;
        if($redis->get('showlist') === false)
        {
            $res = Buser::where('status',1)->select();
            $redis->set('showlist',$res,3600);
            return $res;
        }else{
            $res = $redis->get('showlist');
            return $res;
        }
    }
    
    //每个商家的商品信息显示
    public function showdetail()
    {
        $redis = new Redis;
        $id = Request::get('id');
        $res = Foodlist::where(['buserId'=>$id,'status'=>1])->select();
        $res2 = Foodtype::where(['buserId'=>$id,'status'=>1])->select();
        
        print_r($res);
        echo "<br />";
        print_r($res2);
    }

}