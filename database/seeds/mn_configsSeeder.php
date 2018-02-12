<?php

use Illuminate\Database\Seeder;

class mn_configsSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  protected $configs = [
    ['key'=>'sitename','value'=>'HD Service Desk',],
    ['key'=>'sitename_short','value'=>'HDS',],
    ['key'=>'sitename_1','value'=>'HD',],
    ['key'=>'sitename_2','value'=>'Service Desk',],
    ['key'=>'sidebar_search','value'=>1,],
    ['key'=>'show_messages','value'=>1,],
    ['key'=>'show_notifications','value'=>1,],
    ['key'=>'show_tasks','value'=>1,],
    ['key'=>'show_rightsidebar','value'=>1,],
    ['key'=>'skin','value'=>1,],
    ['key'=>'layout','value'=>1,],
    ['key'=>'default_email','value'=>'nvanhaidang@gmail.com',],
    ['key'=>'decimal','value'=>'.',],
    ['key'=>'digits_group','value'=>',',],
  ];
  public function run()
  {
    foreach ($this->configs as $index => $config) {
      $result = DB::table('mn_configs')->insert($config);
      if (!$result) {
        $this->command->info("Insert failed at record $index.");
        return;
      }
    }
  $this->command->info('Inserted '.count($this->configs).' records.');
  }
}
