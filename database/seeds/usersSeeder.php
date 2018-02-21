<?php

use Illuminate\Database\Seeder;

class usersSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  //protected $pass = Hash::make('123321');
  protected $users = [
    ['username'=>'admin',
    'email'=>'nvanhaidang@gmail.com',
    'password'=>'123321',
    'firstname'=>'Dang',
    'lastname'=>'Thach',
    'address'=>'143 Nguyễn Chí Thanh, P9, Q5, TP HCM',
    'mobile'=>'0937669970',
    'id_title'=>1,
    'id_department'=>1,
    'is_admin'=>1,
    'id_role'=>1,
    'id_user_report_to'=>1,
    'id_user_created'=>1,
    'status'=>1]
  ];
  public function run()
  {
    DB::table('users')->insert($this->users);
  }
}
