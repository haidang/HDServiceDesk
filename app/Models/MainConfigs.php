<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MainConfigs extends Model
{
  protected $table = 'mn_configs';
  protected $fillable = [
    'key','name','value','description','active'
  ];

  public static function getByKey($key)
  {
    $row = MainConfigs::where('key','=', $key)->first();
    if(isset($row->value)) {
      return $row->value;
    } else {
      return false;
    }
  }
}
