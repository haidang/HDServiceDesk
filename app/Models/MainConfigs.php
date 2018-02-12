<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MainConfigs extends Model
{
  protected $table = 'mn_configs';
  protected $fillable = ['value'];

  public function getValueByKey(String $key){
    $value = $this
      ->where('key',$key)
      ->where('active',1)
      ->first();
    return $value->value;
  }
}
