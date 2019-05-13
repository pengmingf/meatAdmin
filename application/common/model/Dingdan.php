<?php
namespace app\common\model;

use think\Model;

class Dingdan extends Model
{
  protected $pk = 'Id';
  protected $table = 'Dingdan';
  protected $autoWriteTimestamp = true;
  protected $create_time = 'create_time';
  protected $update_time = 'update_time';
  /*public function getStatusAttr($value)
  {
    $status = ['1' => 'Õı³£', '0' => '½ûÓÃ'];
    return $status[$value];
  }*/
}
