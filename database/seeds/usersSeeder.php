<?php

use Illuminate\Database\Seeder;

class usersSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  protected $users = [
    ['username'=>'admin','email'=>'nvanhaidang@gmail.com','password'=>bcrypt('123321'),
    'firstname'=>'Dang','lastname'=>'Thach','address'=>'143 Nguyễn Chí Thanh, P9, Q5, TP HCM',
    'mobile'=>'0937669970','is_admin'=>1],

  ];
  public function run()
  {

  }
}
