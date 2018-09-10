<?php

use Illuminate\Database\Seeder;

class custCustomersSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  protected $data = [
    ['name'=>'Cty Tân Phú Vinh Sài Gòn',
    'address'=>'143 Nguyễn Chí Thanh, Phường 9',
    'id_district'=>774,
    'id_city'=>79,
    'phone'=>'02839571334, 02839571335',
    'website'=>'www.tanphuvinh.com.vn',
    'id_created'=>1,
    ],
  ];
  public function run()
  {
    foreach ($this->data as $index => $d) {
      $result = DB::table('cust_customers')->insert($d);
      if (!$result) {
        $this->command->info("=>Insert failed at record $index.");
        return;
      }
    }
    $this->command->info('=>Inserted '.count($this->data).' records.');
  }
}
