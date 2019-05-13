<?php
namespace app\common\model;

use think\Model;

class Suser extends Model
{
  protected $pk = 'Id';
  protected $table = 'Suser';
  protected $autoWriteTimestamp = true;
  protected $create_time = 'create_time';
  protected $update_time = 'update_time';
  public function setPasswordAttr($value)
  {
    return md5($value);
  }
  public function getStatusAttr($value)
  {
    $status = ['1' => '正常', '0' => '禁用', '2' => '已删除'];
    return $status[$value];
  }
  public function getShenfenAttr($value)
  {
    $shenfen = ['1' => '学生', '2' => '教师'];
    return $shenfen[$value];
  }
  public function setShenfenAttr($value)
  {
    $shenfen = ['学生' => 1, '教师' => 2,'1'=>1,'2'=>2];
    return $shenfen[$value];
  }

}
