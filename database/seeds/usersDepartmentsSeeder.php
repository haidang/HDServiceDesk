<?php

use Illuminate\Database\Seeder;

class usersDepartmentsSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  protected $values = [
    ['name'=>'Admin','color'=>'#000000','description'=>'Administrator',],
    ['name'=>'P.Kinh Doanh','color'=>'#000000','description'=>'Phòng Kinh Doanh',],
  ];
  public function run()
  {
    foreach ($this->values as $index => $val) {
      $result = DB::table('users_departments')->insert($val);
      if (!$result) {
        $this->command->info("=>Insert failed at record $index.");
        return;
      }
    }
    $this->command->info('=>Inserted '.count($this->values).' records.');
  }
}
