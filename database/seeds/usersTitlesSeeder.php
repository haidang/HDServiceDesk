<?php

use Illuminate\Database\Seeder;

class usersTitlesSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  protected $values = [
    ['id_department'=>1,'id_sub_department'=>NULL,'name'=>'GĐ Kinh Doanh','color'=>'#000000','description'=>'Giám Đốc Kinh Doanh',],
    ['id_department'=>1,'id_sub_department'=>1,'name'=>'TN Support','color'=>'#000000','description'=>'Trưởng Nhóm Support',],
  ];
  public function run()
  {
    foreach ($this->values as $index => $val) {
      $result = DB::table('users_titles')->insert($val);
      if (!$result) {
        $this->command->info("=>Insert failed at record $index.");
        return;
      }
    }
    $this->command->info('=>Inserted '.count($this->values).' records.');
  }
}
