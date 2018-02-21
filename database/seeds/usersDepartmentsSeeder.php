<?php

use Illuminate\Database\Seeder;

class usersDepartmentsSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  protected $dept = [
    ['name'=>'Admin','color'=>'#000000','description'=>'Administrator',],
    ['name'=>'P.Kinh Doanh','color'=>'#000000','description'=>'Phòng Kinh Doanh',],
  ];
  public function run()
  {
    DB::table('users_departments')->insert($this->dept);
  }
}
