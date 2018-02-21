<?php

use Illuminate\Database\Seeder;

class usersSubDepartmentsSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  protected $subDept = [
    ['id_department'=>1,'name'=>'Phần Mềm','color'=>'#000000','description'=>'Phòng Phần Mềm - Support',]
  ];
  public function run()
  {
    DB::table('users_sub_departments')->insert($this->subDept);
  }
}
