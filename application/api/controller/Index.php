<?php

namespace app\api\controller;

use think\Controller;
use think\facade\Request;
use app\common\model\Suser;
use app\common\model\Buser;
use think\cache\driver\Redis;
use app\common\model\Foodlist;
use app\common\model\Foodtype;
use app\common\model\Dingdan;
use app\common\model\SuserLog;

class Index extends Controller
{
    public function login()
    {
        $data = Request::post();
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
        else
        {
          //写入登录日志
          $ip = request()->ip();
          $suserLog = new SuserLog;
          $suserLog->save(['suser_id'=>$result['Id'],'username'=>$result['name'],'ip'=>$ip,'method'=>"登录"]);
          //生成token，并将其写入缓存中
          $res->token = md5($res->xuehao+$res->xuehao+1);
      	  $res->success = true;
          $redis = new Redis;
      	  $redis->set($res->token,1);
          return $res;
        }
        
    }
  
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
  	public function diancan()
    {
      	$id = Request::get('id');
      	$res = Foodlist::where(['buserId'=>$id,'status'=>1])->select();
        $res2 = Foodtype::where(['buserId'=>$id,'status'=>1])->select();
      	for($i=0;$i<count($res2);$i++)
        {
          $k=0;
          $res2[$i]->dishs = [];
          for($j=0;$j<count($res);$j++)
          {
            $res[$j]->pic ="https://www.mfmeat.top/userimage/".$res[$j]->image;
            $res[$j]->id =$res[$j]->Id;
            $res[$j]->name =$res[$j]->foodname;
            $res[$j]->price =(int)$res[$j]->price;
            $res[$j]->sales =0;
            $res[$j]->count =0;
          	if($res[$j]->typeId == $res2[$i]->Id)
            {
              $res2[$i]->dishs = $res2[$i]->dishs+[$k=>$res[$j]];
              $k++;
            }
          }
          $res2[$i]->id =  $res2[$i]->Id;
          $res2[$i]->tag = "a".$res2[$i]->Id;
          $res2[$i]->name =  $res2[$i]->foodtype;
        }
      	return $res2;
    }
  
    public function savedingdan()
    {
      	$dingdanhao = Request::post("dingdanhao");
      	$foodlist = Request::post("foodlist");
      	$buserId = Request::post("buserId");
      	$suserId = Request::post("suserId");
      	$money = Request::post("money");
      	$count = Request::post("count");
      	$food = "";
      	for($i=0;$i<count($foodlist);$i++)
        {
          $food .= $foodlist[$i]["Id"].",";
        }
      	$food = substr($food, 0, -1);
      	$res = Dingdan::create(["dingdanhao"=>$dingdanhao,"buserId"=>$buserId,"suserId"=>$suserId,"food"=>$food,"money"=>$money,"count"=>$count,"status"=>1,"message"=>null]);
      	if($res)
        {
          return json_encode(["code"=>1,"message"=>"成功"]);
        }
        else
        {
          return json_encode(["code"=>0,"message"=>"不成功"]);
        }
    }
  
  	public function showdingdan()
    {
      $suserId = Request::param('Id');
      $res = Dingdan::where('suserId',$suserId)->select();
      return $res;
    }


    // //获取ip地址
    // function getIp()
    // {
    //     //最后一次代理的ip
    //     if ($_SERVER['REMOTE_ADDR']) {
    //         $cip = $_SERVER['REMOTE_ADDR'];
    //     } elseif (getenv("REMOTE_ADDR")) {
    //         $cip = getenv("REMOTE_ADDR");
    //     } elseif (getenv("HTTP_CLIENT_IP")) {
    //         $cip = getenv("HTTP_CLIENT_IP");
    //     } else {
    //         $cip = "unknown";
    //     }
    //     return $cip;
    // }
    //request()->ip();TP自带的获取ip地址
}