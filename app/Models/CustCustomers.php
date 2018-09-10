<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\CustContacts;

class CustCustomers extends Model
{
  protected $table = 'cust_customers';

  public function city(){
      return $this->belongsTo('App\Models\PickCities','id_city','id');
  }
  public function district(){
      return $this->belongsTo('App\Models\PickDistricts','id_district','id');
  }
  public function contacts(){
      return $this->hasMany('App\Models\CustContacts','id_customer','id');
  }
  public function shipCity(){
      return $this->belongsTo('App\Models\PickCities','id_ship_city','id');
  }
  public function shipDistrict(){
      return $this->belongsTo('App\Models\PickDistricts','id_ship_district','id');
  }
  public function userOwner(){
      return $this->belongsTo('App\User','id_owner','id');
  }
  public function userCreated(){
      return $this->belongsTo('App\User','id_created','id');
  }
}
