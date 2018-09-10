<?php

use Illuminate\Database\Seeder;

class custContactsSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  protected $data = [
    ['id_salutation'=>'2',
    'first_name'=>'Đăng',
    'last_name'=>'Thạch',
    'id_customer'=>1,
    'address'=>'143 Nguyễn Chí Thanh, Phường 9',
    'id_district'=>774,
    'id_city'=>79,
    'phone'=>'02839571334, 02839571335',
    'mobile'=>'0937669970',
    'tax_full_name'=>'Công ty TNHH Thương Mại Sản Xuất Tân Phú Vinh Sài Gòn',
    'tax_full_address'=>'143 Nguyễn Chí Thanh, Phường 9, Quận 5, TP.Hồ Chí Minh',
    'tax_code'=>'1101846383',
    'ship_address'=>'143 Nguyễn Chí Thanh, Phường 9',
    'ship_id_district'=>774,
    'ship_id_city'=>79,
    'id_created'=>1,
    'id_supporter'  => 1,
    'id_type' => 2,
    'id_status' => 85,
    ],
    ['id_salutation'=>'2',
    'first_name'=>'Nam',
    'last_name'=>'Tran',
    'id_customer'=>1,
    'address'=>'143 Nguyễn Chí Thanh, Phường 9',
    'id_district'=>774,
    'id_city'=>79,
    'phone'=>'02839571334, 02839571335',
    'mobile'=>'',
    'tax_full_name'=>'',
    'tax_full_address'=>'',
    'tax_code'=>'',
    'ship_address'=>'',
    'ship_id_district'=>774,
    'ship_id_city'=>79,
    'id_created'=>1,
    'id_supporter'  => 1,
    'id_type' => 2,
    'id_status' => 85,
    ],
  ];
  public function run()
  {
    foreach ($this->data as $index => $d) {
      $result = DB::table('cust_contacts')->insert($d);
      if (!$result) {
        $this->command->info("=>Insert failed at record $index.");
        return;
      }
    }
    $this->command->info('=>Inserted '.count($this->data).' records.');
  }
}
