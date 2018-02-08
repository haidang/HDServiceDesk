<?php

use Illuminate\Database\Seeder;

class mn_configSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('mn_configs')->insert([
        ['key'=>'sitename','value'=>'HD Service Desk',],
        ['key'=>'sitename_short','value'=>'HDS',],
      ]
    )
  }
}
