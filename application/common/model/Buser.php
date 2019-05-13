<?php
namespace app\common\model;

use think\Model;

class Buser extends Model
{
  protected $pk = 'Id';
  protected $table = 'Buser';
  protected $autoWriteTimestamp = true;
  protected $create_time = 'create_time';
  protected $update_time = 'update_time';
  public function setPasswordAttr($value)
  {
    return md5($value);
  }
  public function getStatusAttr($value)
  {
    $status = ['1' => '正常', '0' => '禁用'];
    return $status[$value];
  }
}
