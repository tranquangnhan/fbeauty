<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class DonHangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $today = Carbon::now()->subDays(0)->toDateTimeString();
        $yesterday = Carbon::now()->subDays(1)->toDateTimeString();
        DB::table('donhangchitiet')->delete();
        DB::table('donhang')->delete();
        DB::table('donhang')->insert([
            ['id'=>1,'idkhachhang'=>'1','idgiamgia'=>'1', 'tennguoinhan'=>'Hương','diachikhachhang'=> 'Công viên phần mềm Quang Trung , Phường Trung Mỹ Tây , Q.12 , TP.HCM','sdtnguoinhan'=>'0845737036' ,'tongtientruocgiamgia'=>'15000000' ,'tongtiensaugiamgia'=>'15000000','ghichucuakhachhang'=> 'Sản phẩm vận chuyển tới gọi em nha ạ em cảm ơn ^^','phuongthucthanhtoan'=>'VNPAY' ,'phuongthucgiaohang'=>'GRAP','trangthai'=>4,'created_at'=> $yesterday,'updated_at'=> NULL],
            ['id'=>2,'idkhachhang'=>'2','idgiamgia'=>'2', 'tennguoinhan'=>'Hùng','diachikhachhang'=> '345/3 Tổ 29 , Khu phố 2 , Phường Trung Mỹ Tây , Q.12 , TP.HCM','sdtnguoinhan'=>'0845737032' ,'tongtientruocgiamgia'=>'21000000' ,'tongtiensaugiamgia'=>'20000000','ghichucuakhachhang'=> 'Sản phẩm vận chuyển tới gọi em nha ạ em cảm ơn ^^','phuongthucthanhtoan'=>'MOMO' ,'phuongthucgiaohang'=>'BE','trangthai'=>4,'created_at'=> $yesterday,'updated_at'=> NULL],
            ['id'=>3,'idkhachhang'=>'3','idgiamgia'=>'3', 'tennguoinhan'=>'Ly Ly','diachikhachhang'=> '186 , Phường Thái Hà , Q.Đống Đa , Hà Nội','sdtnguoinhan'=>'0845737033' ,'tongtientruocgiamgia'=>'5000000' ,'tongtiensaugiamgia'=>'5500000','ghichucuakhachhang'=> 'Em sẽ nhận được đơn hàng full tuần nha ạ','phuongthucthanhtoan'=>'VNPAY' ,'phuongthucgiaohang'=>'DHL','trangthai'=>4,'created_at'=>$yesterday,'updated_at'=> NULL],
            ['id'=>4,'idkhachhang'=>'4','idgiamgia'=>'2', 'tennguoinhan'=>'Thảo','diachikhachhang'=> '415 Nguyễn Trãi , Phường 7 , Q.5 , TP.HCM','sdtnguoinhan'=>'0845737036' ,'tongtientruocgiamgia'=>'30000000' ,'tongtiensaugiamgia'=>'28000000','ghichucuakhachhang'=> '','phuongthucthanhtoan'=>'VNPAY' ,'phuongthucgiaohang'=>'GRAP','trangthai'=>4,'created_at'=> $yesterday,'updated_at'=> NULL],
            ['id'=>5,'idkhachhang'=>'5','idgiamgia'=>'1', 'tennguoinhan'=>'Thảo Mai','diachikhachhang'=> 'Tầng 1, 28 Seongam-ro 13-gil, Mapo-gu, Seoul','sdtnguoinhan'=>'0845737036' ,'tongtientruocgiamgia'=>'35000000' ,'tongtiensaugiamgia'=>'30000000','ghichucuakhachhang'=> '주문은 이번주말에 받아볼께요 감사합니다','phuongthucthanhtoan'=>'MOMO' ,'phuongthucgiaohang'=>'FEDEX','trangthai'=>4,'created_at'=> $yesterday,'updated_at'=> NULL],
            ['id'=>6,'idkhachhang'=>'1','idgiamgia'=>'1', 'tennguoinhan'=>'Hương','diachikhachhang'=> 'Công viên phần mềm Quang Trung , Phường Trung Mỹ Tây , Q.12 , TP.HCM','sdtnguoinhan'=>'0845737036' ,'tongtientruocgiamgia'=>'15000000' ,'tongtiensaugiamgia'=>'15000000','ghichucuakhachhang'=> 'Sản phẩm vận chuyển tới gọi em nha ạ em cảm ơn ^^','phuongthucthanhtoan'=>'VNPAY' ,'phuongthucgiaohang'=>'GRAP','trangthai'=>4,'created_at'=> $yesterday,'updated_at'=> NULL],
            ['id'=>7,'idkhachhang'=>'2','idgiamgia'=>'2', 'tennguoinhan'=>'Hùng','diachikhachhang'=> '345/3 Tổ 29 , Khu phố 2 , Phường Trung Mỹ Tây , Q.12 , TP.HCM','sdtnguoinhan'=>'0845737032' ,'tongtientruocgiamgia'=>'21000000' ,'tongtiensaugiamgia'=>'20000000','ghichucuakhachhang'=> 'Sản phẩm vận chuyển tới gọi em nha ạ em cảm ơn ^^','phuongthucthanhtoan'=>'MOMO' ,'phuongthucgiaohang'=>'BE','trangthai'=>4,'created_at'=> $today,'updated_at'=> NULL],
            ['id'=>8,'idkhachhang'=>'3','idgiamgia'=>'3', 'tennguoinhan'=>'Ly Ly','diachikhachhang'=> '186 , Phường Thái Hà , Q.Đống Đa , Hà Nội','sdtnguoinhan'=>'0845737033' ,'tongtientruocgiamgia'=>'5000000' ,'tongtiensaugiamgia'=>'5500000','ghichucuakhachhang'=> 'Em sẽ nhận được đơn hàng full tuần nha ạ','phuongthucthanhtoan'=>'VNPAY' ,'phuongthucgiaohang'=>'DHL','trangthai'=>4,'created_at'=>$today,'updated_at'=> NULL],
            ['id'=>9,'idkhachhang'=>'4','idgiamgia'=>'2', 'tennguoinhan'=>'Thảo','diachikhachhang'=> '415 Nguyễn Trãi , Phường 7 , Q.5 , TP.HCM','sdtnguoinhan'=>'0845737036' ,'tongtientruocgiamgia'=>'30000000' ,'tongtiensaugiamgia'=>'28000000','ghichucuakhachhang'=> '','phuongthucthanhtoan'=>'VNPAY' ,'phuongthucgiaohang'=>'GRAP','trangthai'=>4,'created_at'=> $today,'updated_at'=> NULL],
            ['id'=>10,'idkhachhang'=>'5','idgiamgia'=>'1', 'tennguoinhan'=>'Thảo Mai','diachikhachhang'=> 'Tầng 1, 28 Seongam-ro 13-gil, Mapo-gu, Seoul','sdtnguoinhan'=>'0845737036' ,'tongtientruocgiamgia'=>'35000000' ,'tongtiensaugiamgia'=>'30000000','ghichucuakhachhang'=> '주문은 이번주말에 받아볼께요 감사합니다','phuongthucthanhtoan'=>'MOMO' ,'phuongthucgiaohang'=>'FEDEX','trangthai'=>4,'created_at'=> $today,'updated_at'=> NULL],
        ]);

        DB::table('donhangchitiet')->insert([
            ['id'=>1,'iddonhang' => 1, 'idsanphamchitiet'=> 1, 'img' => 'cchamsocda.jpg', 'soluong' => '5', 'dongiatruocgiamgia' => '590000','dongiasaugiamgia'=>'550000'],
            ['id'=>2,'iddonhang' => 2, 'idsanphamchitiet'=> 2, 'img' => 'cchamsocda.jpg', 'soluong' => '5', 'dongiatruocgiamgia' => '690000','dongiasaugiamgia'=>'650000'],
            ['id'=>3,'iddonhang' => 3, 'idsanphamchitiet'=> 3, 'img' => 'cchamsocda.jpg', 'soluong' => '5', 'dongiatruocgiamgia' => '890000','dongiasaugiamgia'=>'850000'],
            ['id'=>4,'iddonhang' => 4, 'idsanphamchitiet'=> 4, 'img' => 'cchamsocda.jpg', 'soluong' => '5', 'dongiatruocgiamgia' => '1500000','dongiasaugiamgia'=>'1450000'],
            ['id'=>5,'iddonhang' => 5, 'idsanphamchitiet'=> 5, 'img' => 'cchamsocda.jpg', 'soluong' => '5', 'dongiatruocgiamgia' => '1600000','dongiasaugiamgia'=>'155000'],
            ['id'=>6,'iddonhang' => 6, 'idsanphamchitiet'=> 6, 'img' => 'cchamsocda.jpg', 'soluong' => '5', 'dongiatruocgiamgia' => '1800000','dongiasaugiamgia'=>'1700000'],
            ['id'=>7,'iddonhang' => 7, 'idsanphamchitiet'=> 7, 'img' => 'cchamsocda.jpg', 'soluong' => '5', 'dongiatruocgiamgia' => '3600000','dongiasaugiamgia'=>'3100000'],
            ['id'=>8,'iddonhang' => 8, 'idsanphamchitiet'=> 8, 'img' => 'cchamsocda.jpg', 'soluong' => '5', 'dongiatruocgiamgia' => '3800000','dongiasaugiamgia'=>'375000000'],
            ['id'=>9,'iddonhang' => 9, 'idsanphamchitiet'=> 9, 'img' => 'cchamsocda.jpg', 'soluong' => '5', 'dongiatruocgiamgia' => '4000000','dongiasaugiamgia'=>'3900000'],
            ['id'=>10,'iddonhang' => 10, 'idsanphamchitiet'=> 1, 'img' => 'cchamsocda.jpg', 'soluong' => '5', 'dongiatruocgiamgia' => '590000','dongiasaugiamgia'=>'550000'],
        ]);
    }
}
