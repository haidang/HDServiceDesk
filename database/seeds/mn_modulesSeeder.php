<?php

use Illuminate\Database\Seeder;

class mn_modulesSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  protected $modules = [
    [
      'id'      => 1,
      'parent'  => NUll,
      'name'    => 'dashboard',
      'label'   => 'Tổng hợp',
      'description' => 'Thống kê công việc',
      'fa_icon' => 'fa fa-dashboard',
      'is_menu' => 1,
      'url'     => 'home',
      'sort'    => 1,
    ],[
      'id'      => 2,
      'parent'  => NUll,
			'name'		=> 'calendar',
			'label'		=> 'Lịch',
      'description' => 'Công việc, sự kiện theo ngày tháng',
			'fa_icon'	=> 'fa fa-calendar',
			'is_menu'	=> 1,
      'url'     => 'calendar',
      'sort'    => 2,
		],[
			'id'       => 3,
      'parent'   => NULL,
			'name'     => 'customer',
			'label'    => 'Khách hàng',
      'description' => 'Thông tin khách hàng',
			'fa_icon'  => 'fa fa-university',
			'is_menu'  => 1,
      'url'      => 'customer',
      'sort'     => 3,
		],[
      'id'       => 4,
      'parent'   => NUll,
      'name'     => 'contact',
      'label'    => 'Danh bạ',
      'description' => 'Thông tin người liên hệ',
      'fa_icon'  => 'fa fa-book',
      'is_menu'  => 1,
      'url'      => 'contact',
      'sort'     => 4,
		],[
			'id'       => 5,
      'parent'   => NULL,
			'name'     => 'ticket',
			'label'    => 'Công việc',
      'description' => 'Danh sách công việc',
			'fa_icon'  => 'fa fa-newspaper-o',
			'is_menu'  => 1,
      'url'      => 'ticket',
      'sort'     => 5,
		],[
			'id'=> 6,
      'parent'=> Null,
			'name'=> 'user',
			'label'=> 'Người dùng',
      'description' => 'Danh mục người dùng',
			'fa_icon'=> 'fa fa-users',
      'is_menu'=> 0,
      'url'=> 'user',
      'sort'=> 6,
		],[
			'id'       => 7,
      'parent'   => NULL,
			'name'     => 'setting',
			'label'    => 'Thiết lập',
      'description' => 'Chung cho hệ thống',
			'fa_icon'  => 'fa fa-gears',
      'is_menu'  => 1,
      'url'      => '#',
      'sort'     => 7,
		],[
			'id'        => 8,
      'parent'    => 7,
			'name'      => 'config',
			'label'     => 'Cấu hình',
      'description' => 'Cấu hình chung cho hệ thống',
			'fa_icon'   => 'fa fa-cogs',
      'is_menu'   => 1,
      'url'       => 'config',
      'sort'      => 8,
		],[
			'id'        => 9,
      'parent'    => 7,
			'name'      => 'module',
			'label'     => 'Modules',
      'description' => 'Quản lý modules',
			'fa_icon'   => 'fa fa-cubes',
      'is_menu'   => 1,
      'url'       => 'module',
      'sort'      => 9,
		],
  ];
  public function run()
  {
    foreach ($this->modules as $index => $module) {
      $result = DB::table('mn_modules')->insert($module);
      if (!$result) {
        $this->command->info("=>Insert failed at record $index.");
        return;
      }
    }
    $this->command->info('=>Inserted '.count($this->modules).' records.');
  }
}
