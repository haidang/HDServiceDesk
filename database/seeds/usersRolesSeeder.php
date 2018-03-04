<?php

use Illuminate\Database\Seeder;

class usersRolesSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  protected $values = [
    ['name'=>'Administrator','description'=>'Administrator Users',],
    ['name'=>'Support Online','description'=>'Support Online Users',],
    ['name'=>'Support TK','description'=>'Support Triển Khai Users',],
  ];
  public function run()
  {
    foreach ($this->values as $index => $val) {
      $result = DB::table('users_roles')->insert($val);
      if (!$result) {
        $this->command->info("=>Insert failed at record $index.");
        return;
      }
    }
    $this->command->info('=>Inserted '.count($this->values).' records.');
  }
}
