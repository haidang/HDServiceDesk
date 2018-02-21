<?php

use Illuminate\Database\Seeder;

class usersTitlesSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  protected $titles = [
    ['id_department'=>1,'id_sub_department'=>NULL,'name'=>'GĐ Kinh Doanh','color'=>'#000000','description'=>'Giám Đốc Kinh Doanh',],
    ['id_department'=>1,'id_sub_department'=>1,'name'=>'TN Support','color'=>'#000000','description'=>'Trưởng Nhóm Support',],
  ];
  public function run()
  {
    DB::table('users_titles')->insert($this->titles);
  }
}
