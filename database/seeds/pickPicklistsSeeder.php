<?php

use Illuminate\Database\Seeder;

class pickPicklistsSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  protected $data = [
    ['id'=>1,'id_category' => 1,'name'=>'other','label'=>'Khác', 'sort'=>0,],

    ['id'=>2,'id_category' =>2,'name'=>'mr','label'=>'Mr.', 'sort'=>1,
    ],['id'=>3,'id_category' =>2,'name'=>'ms','label'=>'Ms.', 'sort'=>2,
    ],['id'=>4,'id_category' =>2,'name'=>'mrs','label'=>'Mrs.', 'sort'=>3,
    ],['id'=>5,'id_category' =>2,'name'=>'anh','label'=>'Anh', 'sort'=>4,
    ],['id'=>6,'id_category' =>2,'name'=>'chi','label'=>'Chị', 'sort'=>5,
    ],['id'=>7,'id_category' =>2,'name'=>'anh','label'=>'Cô', 'sort'=>6,
    ],['id'=>8,'id_category' =>2,'name'=>'chi','label'=>'Chú', 'sort'=>7,],

    ['id'=>9,'id_category' =>3,'name'=>'quanly','label'=>'Quản lý', 'sort'=>1,
    ],['id'=>10,'id_category' =>3,'name'=>'it','label'=>'IT', 'sort'=>2,
    ],['id'=>11,'id_category' =>3,'name'=>'ketoan','label'=>'Kế toán', 'sort'=>3,
    ],['id'=>12,'id_category' =>3,'name'=>'nhaphang','label'=>'Nhập hàng', 'sort'=>4,
    ],['id'=>13,'id_category' =>3,'name'=>'kho','label'=>'Kho', 'sort'=>5,],

    ['id'=>14,'id_category' =>4,'name'=>'chu','label'=>'Chủ','sort'=>1,
    ],['id'=>15,'id_category' =>4,'name'=>'quanly','label'=>'Quản lý','sort'=>2,
    ],['id'=>16,'id_category' =>4,'name'=>'thungan','label'=>'Thu ngân','sort'=>3,
    ],['id'=>17,'id_category' =>4,'name'=>'ketoan','label'=>'Kế toán','sort'=>4,
    ],['id'=>18,'id_category' =>4,'name'=>'itsupport','label'=>'IT Support','sort'=>5,
    ],['id'=>19,'id_category' =>4,'name'=>'leader','label'=>'Trưởng Nhóm','sort'=>6,
    ],['id'=>20,'id_category' =>4,'name'=>'leader','label'=>'Trưởng Nhóm','sort'=>7,
    ],['id'=>21,'id_category' =>4,'name'=>'director','label'=>'Giám Đốc','sort'=>8,],

    ['id'=>22,'id_category' => 5,'name'=>'khachmoi','label'=>	'Khách mới', 'sort'=>0, //id: 17
    ],['id'=>23,'id_category' => 5,'name'=>'tiemnang','label'=>	'Tiềm năng', 'sort'=>1,
    ],['id'=>24,'id_category' => 5,'name'=>'dangtheodoi','label'=>	'Đang theo dõi', 'sort'=>2,
    ],['id'=>25,'id_category' => 5,'name'=>'damua','label'=>	'Đã mua', 'sort'=>3,
    ],['id'=>26,'id_category' => 5,'name'=>'dahuydonhang','label'=>	'Đã hủy đơn hàng', 'sort'=>4,
    ],['id'=>27,'id_category' => 5,'name'=>'dangdung','label'=>	'Đang dùng', 'sort'=>5,
    ],['id'=>28,'id_category' => 5,'name'=>'khachctykhac','label'=>	'Khách Cty khác', 'sort'=>6,],

    ['id'=>29,'id_category' => 6,'name'=>'khachle','label'=>	'Khách lẻ', 'sort' =>	0, //id: 24
    ],['id'=>30,'id_category' => 6,'name'=>'daily','label'=>	'Đại lý', 'sort' =>	1,
    ],['id'=>31,'id_category' => 6,'name'=>'khachdaily','label'=>	'Khách của đại lý', 'sort' =>	2,
    ],['id'=>32,'id_category' => 6,'name'=>'muabanlai','label'=>	'Mua bán lại', 'sort' =>	3,
    ],['id'=>33,'id_category' => 6,'name'=>'doitac','label'=>	'Đối tác', 'sort' =>	4,],

    ['id'=>34,'id_category' => 7,'name'=>'caphe','label'=> 'Cà phê', 'sort'	=>0, //id: 28
    ],['id'=>35,'id_category' => 7,'name'=>'nhahangquanan','label'=> 'Nhà hàng / Quán ăn', 'sort'	=>1,
    ],['id'=>36,'id_category' => 7,'name'=>'karaoke','label'=>	'Karaoke', 'sort'	=>2,
    ],['id'=>37,'id_category' => 7,'name'=>'trasua','label'=>	'Trà sữa', 'sort'	=>3,
    ],['id'=>38,'id_category' => 7,'name'=>'congtytinhoc','label'=>	'Công ty Tin học', 'sort'	=>4,],

    ['id'=>39,'id_category' =>8,'name'=>'khaosat','label'=>	'Khảo sát', 'sort'=>	0, //id: 33
    ],['id'=>40,'id_category' =>8,'name'=>'moiquanhecanhan','label'=>	'Mối quan hệ cá nhân', 'sort'=>	1,
    ],['id'=>41,'id_category' =>8,'name'=>'timonline','label'=>	'Tìm online', 'sort'=>	2,
    ],['id'=>42,'id_category' =>8,'name'=>'trienlam','label'=>	'Triển lãm', 'sort'=>	3,
    ],['id'=>43,'id_category' =>8,'name'=>'khachhanggioithieu','label'=>	'Khách hàng giới thiệu', 'sort'=>	4,
    ],['id'=>44,'id_category' =>8,'name'=>'hoithao','label'=>	'Hội thảo', 'sort'=>	5,
    ],['id'=>45,'id_category' =>8,'name'=>'khachdencty','label'=>	'Khách đến Cty', 'sort'=>	6,
    ],['id'=>46,'id_category' =>8,'name'=>'captrengiao','label'=>	'Cấp trên giao', 'sort'=>	7,
    ],['id'=>47,'id_category' =>8,'name'=>'khachgoidencty','label'=>	'Khách gọi đến Cty', 'sort'=>	8,],

    ['id'=>49,'id_category' => 9,'name'=>'tannoi','label'=>'Tận nơi', 'sort'=>0, //id: 42
    ],['id'=>50,'id_category' => 9,'name'=>'online','label'=>'Online', 'sort'=>1,
    ],['id'=>51,'id_category' => 9,'name'=>'dienthoai','label'=>'Điện thoại', 'sort'=>2,
    ],['id'=>52,'id_category' => 9,'name'=>'taicongty','label'=>'Tại Cty', 'sort'=>3,
		],

    ['id'=>53,'id_category' => 10,'name'=>'trienkhai','label'=>'Triển khai','sort'=>0,'color'=>'#dd4b39',
    ],['id'=>54,'id_category' => 10,'name'=>'tieptuctrienkhai','label'=>'Tiếp tục Triển khai','sort'=>1,'color'=>'#dd4b39',
    ],['id'=>55,'id_category' => 10,'name'=>'demo','label'=>'Demo','sort'=>2,'color'=>'#00a65a',
    ],['id'=>56,'id_category' => 10,'name'=>'caidemo','label'=>'Cài Demo','sort'=>3,'color'=>'#00a65a',
    ],['id'=>57,'id_category' => 10,'name'=>'dichvu','label'=>'Dịch vụ','sort'=>4,'color'=>'#f012be',
    ],['id'=>58,'id_category' => 10,'name'=>'giaohanghdsd','label'=>'Giao hàng HDSD','sort'=>5,'color'=>'#0073b7',
    ],['id'=>59,'id_category' => 10,'name'=>'hdsd','label'=>'HDSD','sort'=>6,'color'=>'#01ff70',
    ],['id'=>60,'id_category' => 10,'name'=>'kiemtraphanmem','label'=>'Kiểm tra Phần mềm','sort'=>7,'color'=>'#3c8dbc',
    ],['id'=>61,'id_category' => 10,'name'=>'kiemtrathietbi','label'=>'Kiểm tra Thiết bị','sort'=>8,'color'=>'#39cccc',
    ],['id'=>62,'id_category' => 10,'name'=>'capnhatphanmem','label'=>'Cập nhật Phần mềm','sort'=>9,'color'=>'#dd4b39',
    ],['id'=>63,'id_category' => 10,'name'=>'kyhdbtkiemtrapm','label'=>'Ký HĐBT Kiểm tra PM','sort'=>10,'color'=>'#605ca8',
    ],['id'=>64,'id_category' => 10,'name'=>'giaohdsdmaychamcong','label'=>'Giao HDSD Máy chấm công','sort'=>11,'color'=>'##777'
    ],['id'=>65,'id_category' => 10,'name'=>'sualoi','label'=>'Sữa lỗi','sort'=>12,'color'=>'##777'
		],

    ['id'=>66,'id_category' =>11,'name'=>'chuathuchien','label'=>'Chưa thực hiện', 'sort'=>0,
    ],['id'=>67,'id_category' =>11,'name'=>'dangthuchien','label'=>'Đang thực hiện', 'sort'=>1,
    ],['id'=>68,'id_category' =>11,'name'=>'hoantat','label'=>'Hoàn tất', 'sort'=>2,
    ],['id'=>69,'id_category' =>11,'name'=>'chuahoantat','label'=>'Chưa hoàn tất', 'sort'=>3,
    ],['id'=>70,'id_category' =>11,'name'=>'doingay','label'=>'Đổi ngày', 'sort'=>4,
    ],['id'=>71,'id_category' =>11,'name'=>'chocapnhat','label'=>'Chờ cập nhật', 'sort'=>5,
		],
    ['id'=>72,'id_category' => 12,'name'=>'binhthuong','label'=>'Bình thường', 'sort'=>0,
    ],['id'=>73,'id_category' => 12,'name'=>'thap','label'=>'Chưa gấp', 'sort'=>1,
    ],['id'=>74,'id_category' => 12,'name'=>'gap','label'=>'Gấp', 'sort'=>2,
    ],['id'=>75,'id_category' => 12,'name'=>'khancap','label'=>'Khẩn cấp', 'sort'=>3,
    ],
    ['id'=>76,'id_category' => 13,'name'=>'binhthuong','label'=>'Bình thường', 'sort'=>0,
    ],['id'=>77,'id_category' => 13,'name'=>'it','label'=>'Ít', 'sort'=>1,
    ],['id'=>78,'id_category' => 13,'name'=>'nhieu','label'=>'Nhiều', 'sort'=>2,
    ],['id'=>79,'id_category' => 13,'name'=>'nghiemtrong','label'=>'Nghiêm trọng', 'sort'=>3,
    ],
    ['id'=>80,'id_category' =>14,'name'=>'cai','label'=>'Cái', 'sort'=>0,
    ],['id'=>81,'id_category' =>14,'name'=>'goi','label'=>'Gói', 'sort'=>1,
    ],['id'=>82,'id_category' =>14,'name'=>'thung','label'=>'Thùng', 'sort'=>2,
    ],['id'=>83,'id_category' =>14,'name'=>'cuon','label'=>'Cuộn', 'sort'=>3,
    ],['id'=>84,'id_category' =>14,'name'=>'lan','label'=>'Lần', 'sort'=>4,
    ],
    ['id'=>85,'id_category' =>15,'name'=>'conbaohanh','label'=>'Còn Bảo hành', 'sort'=>1,'color'  =>'#00a65a',
    ],['id'=>86,'id_category' =>15,'name'=>'saptrienkhai','label'=>'Sắp triển khai', 'sort'=>2,
    ],['id'=>87,'id_category' =>15,'name'=>'moitrienkhai','label'=>'Mới triển khai', 'sort'=>3,
    ],['id'=>89,'id_category' =>15,'name'=>'hetbaohanh','label'=>'Hết Bảo hành', 'sort'=>4,
    ],['id'=>90,'id_category' =>15,'name'=>'dangcohdbt','label'=>'Đang có HĐBT', 'sort'=>5,
    ],

    // ['id'=>91, 'id_category' =>16,'name'=>'Phần cứng','label'=>'Phần cứng','sort'		=> 0,
    // ],['id'=>92, 'id_category' =>16,'name'=>'Phần mềm','label'=>'Phần mềm','sort'		=> 1,
    // ],
    // ['id'=>93,'id_category' =>17,'name'=>'Phần mềm TPV','status'	=> 1,'sort'		=> 1,],
		// ['id'=>94,'id_category' =>17,'name'=>'Phần mềm SEITO','status'	=> 1,'sort'		=> 2,],
		// ['id'=>95,'id_category' =>17,'name'=>'Dịch vụ PM TPV','status'	=> 1,'sort'		=> 3,],
		// ['id'=>96,'id_category' =>17,'name'=>'Dịch vụ PM SEITO','status'	=> 1,'sort'		=> 4,],
		// ['id'=>97,'id_category' =>17,'name'=>'Máy POS Cảm ứng','status'	=> 1,'sort'		=> 5,],
		// ['id'=>98,'id_category' =>17,'name'=>'Thiết bị mã vạch','status'	=> 1,'sort'		=> 6,],
		// ['id'=>99,'id_category' =>17,'name'=>'Máy chấm công','status'	=> 1,'sort'		=> 7,],
		// ['id'=>100,'id_category' =>17,'name'=>'Máy in bill Bixolon','status'	=> 1,'sort'		=> 8,],
		// ['id'=>101,'id_category' =>17,'name'=>'Máy in bill TQ','status'	=> 1,'sort'		=> 9,],
		// ['id'=>102,'id_category' =>17,'name'=>'Máy quét mã vạch','status'	=> 1,'sort'		=> 10,],
		// ['id'=>103,'id_category' =>17,'name'=>'Cân điện tử','status'	=> 1,'sort'		=> 11,],
		// ['id'=>104,'id_category' =>17,'name'=>'Giấy, Mực, Decal','status'	=> 1,'sort'		=> 12,],
		// ['id'=>105,'id_category' =>17,'name'=>'Máy hủy giấy','status'	=> 1,'sort'		=> 13,],
		// ['id'=>106,'id_category' =>17,'name'=>'Máy hút bụi','status'	=> 1,'sort'		=> 14,],
  ];
  public function run()
  {
    foreach ($this->data as $index => $d) {
      $result = DB::table('pick_picklists')->insert($d);
      if (!$result) {
        $this->command->info("=>Insert failed at record $index.");
        return;
      }
    }
    $this->command->info('=>Inserted '.count($this->data).' records.');
  }
}
