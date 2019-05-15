<?php
namespace app\common\model;

use think\Model;

class Admin extends Model
{
  protected $pk = 'Id';
  protected $table = 'Admin';
  protected $autoWriteTimestamp = true;
  protected $create_time = 'create_time';
  protected $update_time = 'update_time';
  public function setPasswordAttr($value)
  {
    return md5($value);
  }
}
