<?php
namespace app\common\model;

use think\Model;

class SuserLog extends Model
{
  protected $pk = 'Id';
  protected $table = 'SuserLog';
  protected $autoWriteTimestamp = true;
  protected $create_time = 'create_time';
}
