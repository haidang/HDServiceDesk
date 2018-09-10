<?php

use Illuminate\Database\Seeder;

class pickCategoriesSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  protected $data = [
    ['id'=>1,'label' => 'Khác','name'=>'other','parent'=>0,'sort' => 1,],
      ['id'=>2,'label' => 'Danh xưng','name'=>'salutation','parent'=>0,'sort' => 2,],
      ['id'=>3,'label' => 'Bộ phận','name'=>'ContactDepartment','parent'=>0, 'sort' => 3,],
      ['id'=>4,'label' => 'Chức vụ','name'=>'title','parent'=>3,'sort' => 4,],
      ['id'=>5,'label' => 'Loại KH','name'=>'CustomerRate','parent'=>0, 'sort' => 5,],
      ['id'=>6,'label' => 'Phân loại KH','name'=>'CustomerType','parent'=>0, 'sort' => 6,],
      ['id'=>7,'label' => 'Lĩnh vực hoạt động','name'=>'CustomerIndustry','parent'=>0, 'sort' => 7,],
      ['id'=>8,'label' => 'Nguồn gốc KH','name'=>'CustomerSource','parent'=>0,'sort' => 8,],
      ['id'=>9,'label' => 'Hình thức','name'=>'WorkingType','parent'=>0,'sort' => 9,],
      ['id'=>10,'label' => 'Phân loại Công việc','name'=>'ActivityType','parent'=>0,'sort' => 10,],
      ['id'=>11,'label' => 'Tình trạng Công việc','name'=>'ActivityStatus','parent'=>0,'sort'=> 11,],
      ['id'=>12,'label' => 'Mức độ ưu tiên','name'=>'ActivityPriority','parent'=>0, 'sort' => 12,],
      ['id'=>13,'label' => 'Mức độ nghiêm trọng','name'=>'ActivityServerity','parent'=>0, 'sort' => 13,],
      ['id'=>14,'label' => 'ĐVT','name'=>'Unit','parent'=>0, 'sort' => 14,],
      ['id'=>15,'label' => 'Tình trạng','name'=>'CustomerStatus','parent'=>0, 'sort' => 15,],
      // ['id'=>16,'label' => 'Loại sản phẩm','name'=>'ProductGroup','parent'=>0, 'sort' => 16,],
      // ['id'=>17,'label' => 'Nhóm sản phẩm','name'=>'ProductCategory','parent'=>16, 'sort' => 17,]
  ];
  public function run()
  {
    foreach ($this->data as $index => $d) {
      $result = DB::table('pick_categories')->insert($d);
      if (!$result) {
        $this->command->info("=>Insert failed at record $index.");
        return;
      }
    }
    $this->command->info('=>Inserted '.count($this->data).' records.');
  }
}
