<?php

use Illuminate\Database\Seeder;

class usersSubDepartmentsSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  protected $values = [
    ['id_department'=>1,'name'=>'Phần Mềm','color'=>'#000000','description'=>'Phòng Phần Mềm - Support',]
  ];
  public function run()
  {
    foreach ($this->values as $index => $val) {
      $result = DB::table('users_sub_departments')->insert($val);
      if (!$result) {
        $this->command->info("=>Insert failed at record $index.");
        return;
      }
    }
    $this->command->info('=>Inserted '.count($this->values).' records.');
  }
}
