<?php
namespace app\common\model;

use think\Model;

class AdminLog extends Model
{
  protected $pk = 'Id';
  protected $table = 'AdminLog';
  protected $autoWriteTimestamp = true;
  protected $create_time = 'create_time';
}
