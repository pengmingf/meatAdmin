<?php
namespace app\api\controller;

use \think\Controller;
use \think\facade\Request;
use app\common\model\Suser;
use app\common\model\Buser;
use think\cache\driver\Redis;
use app\common\model\Foodlist;
use app\common\model\Foodtype;
use app\common\model\Dingdan;

class Business extends Controller
{
    public function login()
    {
        $data = Request::param();
        $rule = ['username|学号'=> 'require|integer|max:8',
                'password|密码' => 'require|alphaDash|length:6,16'];
        $result = $this->validate($data,$rule);
        if($result !== true)
        {
            $return = json_encode(['success'=>false,'message'=>$result]);
            return $return;
        }
        else
        {
            $res = Buser::where(['username'=>$data['username'],'password'=>md5($data['password'])])->find();
            if(!$res)
            {
                return json_encode(['success'=>false,'message'=>"账号或密码有误"]);
            }else{
                $res->token = md5($res->username+$res->username+1);
                $res->success = true;
                $redis = new Redis;
                $redis->set($res->token,1);
                return $res;
            } 
        }
    }

    //首页订单展示
    public function index()
    {
        $data = Request::param();
        //总订单数
        $countdd = Dingdan::where('buserId',$data['buser']['Id'])->select();
        $countdd = count($countdd);
        //总商品数
        $countshop = Foodlist::where('buserId',$data['buser']['Id'])->select();
        $countshop = count($countshop);
        //上架商品数
        $countshopnomo = Foodlist::where('buserId',$data['buser']['Id'])->where('status','1')->select();
        $countshopnomo = count($countshopnomo);
        return json_encode(['dd'=>$countdd,'shop'=>$countshop,'shopnm'=>$countshopnomo]);
    }

    public function showType()
    {
        $buserId = Request::param('Id');
        $foodtype = Foodtype::where('buserId',$buserId)->where('status',1)->column('foodtype');
        if($foodtype)
        {
            return json_encode($foodtype);
        }else{
            return json_encode(['success'=>false,"message"=>"暂无分类"]);
        }
    }

    public function uploadImage()
    {
        
        $data = Request::param();
        $data['type'] = Foodtype::where("foodtype",$data['type'])->value('Id');
        $rule = ['foodname|菜名'=>'require',
                'type|菜类'=>'require',
                'price|价格'=>'require',
                'status'=>'require',
                'buserId'=>'require'];
        $res = $this->validate($data,$rule);
        if($res === true)
        {
            if(!empty(request()->file('uploadImage')))
            {
                $image = \think\Image::open(request()->file('uploadImage'));
                $path ="./userimage/food/".$data['buserId'].time().".png";
                $image->thumb(50, 50)->save($path);
                $savepath = "food/".$data['buserId'].time().".png";
                $result = Foodlist::create(['foodname'=>$data['foodname'],'image'=>$savepath,'price'=>$data['price'],
                                            'typeId'=>$data['type'],'status'=>$data['status'],'buserId'=>$data['buserId']
                                            ]);
                if($result)
                {
                    return json_encode(['success'=>true,'message'=>"添加成功"]);
                }else{
                    return json_encode(['success'=>false,'message'=>"添加失败"]);
                }
            }else{
                return json_encode(['success'=>false,'message'=>"图片不能为空"]);
            }
        }else{
            return json_encode(['success'=>false,'message'=>$res]);
        }
    }
}