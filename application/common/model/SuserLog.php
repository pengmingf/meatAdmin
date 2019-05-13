<?php
namespace app\common\model;

use think\Model;

class SuerLog extends Model
{
  protected $pk = 'Id';
  protected $table = 'SuerLog';
  protected $autoWriteTimestamp = true;
  protected $create_time = 'create_time';
}
