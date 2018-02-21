<?php

use Illuminate\Database\Seeder;

class usersRoleSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  protected $roles = [
    ['name'=>'Administrator','description'=>'Administrator Users',],
    ['name'=>'Support Online','description'=>'Support Online Users',],
    ['name'=>'Support TK','description'=>'Support Triển Khai Users',],
  ];
  public function run()
  {
    DB::table('users_roles')->insert($this->roles);
  }
}
