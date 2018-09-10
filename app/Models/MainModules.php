<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\MainModules;

class MainModules extends Model
{
  use SoftDeletes;
  protected $table = 'mn_modules';
  protected $fillable = [
    'name','label','parent'
  ];
  protected $dates = ['deleted_at'];

  public function subMenus(){
		return $this->hasMany('App\Models\MainModules','parent','id')
      ->where('status',1)
      ->orderBy('sort');
	}

  public function getParent(){
    $row = $this->belongsTo('App\Models\MainModules','parent');
    if(isset($row)) {
      return $row;
    } else {
      return False;
    }
  }
}
