<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Support\Arr;
use Str;
class HoaDonSeeder extends Seeder
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
        DB::table('hoadonchitiet')->delete();
        DB::table('hoadon')->delete();



        DB::table('hoadon')->insert([
            ['id'=>1,'idkhachhang' => 1, 'idcoso'=> 1, 'idnhanvien'=> 1, 'idthungan' => 1,'idlieutrinh'=> 1,'idgiamgia'=> 1, 'tongtientruocgiamgia'=> '1450000','tongtiensaugiamgia'=>'1450000', 'trangthai'=>1, 'ghichu'=>'dịch vụ rất đa dạng và bắt mắt ', 'created_at'=>$yesterday],
            ['id'=>2,'idkhachhang' => 2, 'idcoso'=> 1, 'idnhanvien'=> 2, 'idthungan' => 2,'idlieutrinh'=> 2,'idgiamgia'=> 2, 'tongtientruocgiamgia'=> '3600000','tongtiensaugiamgia'=>'3400000', 'trangthai'=>1, 'ghichu'=>'dịch vụ rất đa dạng ', 'created_at'=>$yesterday],
            ['id'=>3,'idkhachhang' => 3, 'idcoso'=> 1, 'idnhanvien'=> 3, 'idthungan' => 3,'idlieutrinh'=> 3,'idgiamgia'=> 3, 'tongtientruocgiamgia'=> '45000000','tongtiensaugiamgia'=>'45000000', 'trangthai'=>1, 'ghichu'=>'dịch vụ rất đa dạng ', 'created_at'=>$yesterday],
            ['id'=>4,'idkhachhang' => 4, 'idcoso'=> 1, 'idnhanvien'=> 4, 'idthungan' => 4,'idlieutrinh'=> 3,'idgiamgia'=> 1, 'tongtientruocgiamgia'=> '16000000','tongtiensaugiamgia'=>'15000000', 'trangthai'=>1, 'ghichu'=>'dịch vụ rất đa dạng ', 'created_at'=>$yesterday],
            ['id'=>5,'idkhachhang' => 1, 'idcoso'=> 1, 'idnhanvien'=> 1, 'idthungan' => 1,'idlieutrinh'=> 1,'idgiamgia'=> 1, 'tongtientruocgiamgia'=> '1450000','tongtiensaugiamgia'=>'1450000', 'trangthai'=>1, 'ghichu'=>'dịch vụ rất đa dạng và bắt mắt ', 'created_at'=>$yesterday],
            ['id'=>6,'idkhachhang' => 2, 'idcoso'=> 1, 'idnhanvien'=> 2, 'idthungan' => 2,'idlieutrinh'=> 2,'idgiamgia'=> 2, 'tongtientruocgiamgia'=> '3600000','tongtiensaugiamgia'=>'3400000', 'trangthai'=>1, 'ghichu'=>'dịch vụ rất đa dạng ', 'created_at'=>$yesterday],
            ['id'=>7,'idkhachhang' => 3, 'idcoso'=> 1, 'idnhanvien'=> 3, 'idthungan' => 3,'idlieutrinh'=> 3,'idgiamgia'=> 3, 'tongtientruocgiamgia'=> '45000000','tongtiensaugiamgia'=>'45000000', 'trangthai'=>1, 'ghichu'=>'dịch vụ rất đa dạng ', 'created_at'=>$yesterday],
            ['id'=>8,'idkhachhang' => 4, 'idcoso'=> 1, 'idnhanvien'=> 4, 'idthungan' => 4,'idlieutrinh'=> 3,'idgiamgia'=> 1, 'tongtientruocgiamgia'=> '16000000','tongtiensaugiamgia'=>'15000000', 'trangthai'=>1, 'ghichu'=>'dịch vụ rất đa dạng ', 'created_at'=>$yesterday],

            ['id'=>9,'idkhachhang' => 2, 'idcoso'=> 1, 'idnhanvien'=> 2, 'idthungan' => 2,'idlieutrinh'=> 2,'idgiamgia'=> 2, 'tongtientruocgiamgia'=> '3600000','tongtiensaugiamgia'=>'3400000', 'trangthai'=>1, 'ghichu'=>'dịch vụ rất đa dạng ', 'created_at'=>$yesterday],
            ['id'=>10,'idkhachhang' => 3, 'idcoso'=> 1, 'idnhanvien'=> 3, 'idthungan' => 3,'idlieutrinh'=> 3,'idgiamgia'=> 3, 'tongtientruocgiamgia'=> '45000000','tongtiensaugiamgia'=>'45000000', 'trangthai'=>1, 'ghichu'=>'dịch vụ rất đa dạng ', 'created_at'=>$yesterday],
            ['id'=>11,'idkhachhang' => 4, 'idcoso'=> 1, 'idnhanvien'=> 4, 'idthungan' => 4,'idlieutrinh'=> 3,'idgiamgia'=> 1, 'tongtientruocgiamgia'=> '16000000','tongtiensaugiamgia'=>'15000000', 'trangthai'=>1, 'ghichu'=>'dịch vụ rất đa dạng ', 'created_at'=>$yesterday],

            ['id'=>12,'idkhachhang' => 2, 'idcoso'=> 1, 'idnhanvien'=> 2, 'idthungan' => 2,'idlieutrinh'=> 2,'idgiamgia'=> 2, 'tongtientruocgiamgia'=> '3600000','tongtiensaugiamgia'=>'3400000', 'trangthai'=>1, 'ghichu'=>'dịch vụ rất đa dạng ', 'created_at'=>$yesterday],
            ['id'=>13,'idkhachhang' => 3, 'idcoso'=> 1, 'idnhanvien'=> 3, 'idthungan' => 3,'idlieutrinh'=> 3,'idgiamgia'=> 3, 'tongtientruocgiamgia'=> '45000000','tongtiensaugiamgia'=>'45000000', 'trangthai'=>1, 'ghichu'=>'dịch vụ rất đa dạng ', 'created_at'=>$yesterday],
            ['id'=>14,'idkhachhang' => 4, 'idcoso'=> 1, 'idnhanvien'=> 4, 'idthungan' => 4,'idlieutrinh'=> 3,'idgiamgia'=> 1, 'tongtientruocgiamgia'=> '16000000','tongtiensaugiamgia'=>'15000000', 'trangthai'=>1, 'ghichu'=>'dịch vụ rất đa dạng ', 'created_at'=>$yesterday],

            ['id'=>15,'idkhachhang' => 2, 'idcoso'=> 1, 'idnhanvien'=> 2, 'idthungan' => 2,'idlieutrinh'=> 2,'idgiamgia'=> 2, 'tongtientruocgiamgia'=> '3600000','tongtiensaugiamgia'=>'3400000', 'trangthai'=>1, 'ghichu'=>'dịch vụ rất đa dạng ', 'created_at'=>$yesterday],
            ['id'=>16,'idkhachhang' => 3, 'idcoso'=> 1, 'idnhanvien'=> 3, 'idthungan' => 3,'idlieutrinh'=> 3,'idgiamgia'=> 3, 'tongtientruocgiamgia'=> '45000000','tongtiensaugiamgia'=>'45000000', 'trangthai'=>1, 'ghichu'=>'dịch vụ rất đa dạng ', 'created_at'=>$yesterday],
            ['id'=>17,'idkhachhang' => 4, 'idcoso'=> 1, 'idnhanvien'=> 4, 'idthungan' => 4,'idlieutrinh'=> 3,'idgiamgia'=> 1, 'tongtientruocgiamgia'=> '16000000','tongtiensaugiamgia'=>'15000000', 'trangthai'=>1, 'ghichu'=>'dịch vụ rất đa dạng ', 'created_at'=>$yesterday],
            ['id'=>18,'idkhachhang' => 2, 'idcoso'=> 1, 'idnhanvien'=> 2, 'idthungan' => 2,'idlieutrinh'=> 2,'idgiamgia'=> 2, 'tongtientruocgiamgia'=> '3600000','tongtiensaugiamgia'=>'3400000', 'trangthai'=>1, 'ghichu'=>'dịch vụ rất đa dạng ', 'created_at'=>$yesterday],
            ['id'=>19,'idkhachhang' => 3, 'idcoso'=> 1, 'idnhanvien'=> 3, 'idthungan' => 3,'idlieutrinh'=> 3,'idgiamgia'=> 3, 'tongtientruocgiamgia'=> '45000000','tongtiensaugiamgia'=>'45000000', 'trangthai'=>1, 'ghichu'=>'dịch vụ rất đa dạng ', 'created_at'=>$yesterday],
            ['id'=>20,'idkhachhang' => 4, 'idcoso'=> 1, 'idnhanvien'=> 4, 'idthungan' => 4,'idlieutrinh'=> 3,'idgiamgia'=> 1, 'tongtientruocgiamgia'=> '16000000','tongtiensaugiamgia'=>'15000000', 'trangthai'=>1, 'ghichu'=>'dịch vụ rất đa dạng ', 'created_at'=>$yesterday],
            ['id'=>21,'idkhachhang' => 5, 'idcoso'=> 1, 'idnhanvien'=> 5, 'idthungan' => 5,'idlieutrinh'=> 2,'idgiamgia'=> 2, 'tongtientruocgiamgia'=> '3800000','tongtiensaugiamgia'=>'3500000', 'trangthai'=>1, 'ghichu'=>'dịch vụ rất đa dạng ', 'created_at'=>$yesterday],
            ['id'=>22,'idkhachhang' => 4, 'idcoso'=> 1, 'idnhanvien'=> 4, 'idthungan' => 4,'idlieutrinh'=> 3,'idgiamgia'=> 1, 'tongtientruocgiamgia'=> '16000000','tongtiensaugiamgia'=>'15000000', 'trangthai'=>1, 'ghichu'=>'dịch vụ rất đa dạng ', 'created_at'=>$yesterday],
            ['id'=>23,'idkhachhang' => 5, 'idcoso'=> 1, 'idnhanvien'=> 5, 'idthungan' => 5,'idlieutrinh'=> 2,'idgiamgia'=> 2, 'tongtientruocgiamgia'=> '3800000','tongtiensaugiamgia'=>'3500000', 'trangthai'=>1, 'ghichu'=>'dịch vụ rất đa dạng ', 'created_at'=>$yesterday],
            ['id'=>24,'idkhachhang' => 6, 'idcoso'=> 1, 'idnhanvien'=> 6, 'idthungan' => 6,'idlieutrinh'=> 2,'idgiamgia'=> 3, 'tongtientruocgiamgia'=> '10000000','tongtiensaugiamgia'=>'9000000', 'trangthai'=>1, 'ghichu'=>'dịch vụ rất đa dạng ', 'created_at'=>$yesterday],
            ['id'=>25,'idkhachhang' => 1, 'idcoso'=> 1, 'idnhanvien'=> 1, 'idthungan' => 1,'idlieutrinh'=> 1,'idgiamgia'=> 1, 'tongtientruocgiamgia'=> '1500000','tongtiensaugiamgia'=>'1450000', 'trangthai'=>1, 'ghichu'=>'dịch vụ rất đa dạng và bắt mắt ', 'created_at'=>$yesterday],
            ['id'=>26,'idkhachhang' => 2, 'idcoso'=> 1, 'idnhanvien'=> 2, 'idthungan' => 2,'idlieutrinh'=> 2,'idgiamgia'=> 2, 'tongtientruocgiamgia'=> '3600000','tongtiensaugiamgia'=>'3400000', 'trangthai'=>1, 'ghichu'=>'dịch vụ rất đa dạng ', 'created_at'=>$yesterday],
            ['id'=>27,'idkhachhang' => 3, 'idcoso'=> 1, 'idnhanvien'=> 3, 'idthungan' => 3,'idlieutrinh'=> 3,'idgiamgia'=> 3, 'tongtientruocgiamgia'=> '5000000','tongtiensaugiamgia'=>'4500000', 'trangthai'=>1, 'ghichu'=>'dịch vụ rất đa dạng ', 'created_at'=>$today],
            ['id'=>28,'idkhachhang' => 4, 'idcoso'=> 1, 'idnhanvien'=> 4, 'idthungan' => 4,'idlieutrinh'=> 3,'idgiamgia'=> 1, 'tongtientruocgiamgia'=> '16000000','tongtiensaugiamgia'=>'15000000', 'trangthai'=>1, 'ghichu'=>'dịch vụ rất đa dạng ', 'created_at'=>$today],
            ['id'=>29,'idkhachhang' => 5, 'idcoso'=> 1, 'idnhanvien'=> 5, 'idthungan' => 5,'idlieutrinh'=> 2,'idgiamgia'=> 2, 'tongtientruocgiamgia'=> '3800000','tongtiensaugiamgia'=>'3500000', 'trangthai'=>1, 'ghichu'=>'dịch vụ rất đa dạng ', 'created_at'=>$today],
            ['id'=>30,'idkhachhang' => 6, 'idcoso'=> 1, 'idnhanvien'=> 6, 'idthungan' => 6,'idlieutrinh'=> 2,'idgiamgia'=> 3, 'tongtientruocgiamgia'=> '10000000','tongtiensaugiamgia'=>'9000000', 'trangthai'=>1, 'ghichu'=>'dịch vụ rất đa dạng ', 'created_at'=>$today],
            ['id'=>31,'idkhachhang' => 4, 'idcoso'=> 1, 'idnhanvien'=> 4, 'idthungan' => 4,'idlieutrinh'=> 3,'idgiamgia'=> 1, 'tongtientruocgiamgia'=> '16000000','tongtiensaugiamgia'=>'15000000', 'trangthai'=>1, 'ghichu'=>'dịch vụ rất đa dạng ', 'created_at'=>$today],
            ['id'=>32,'idkhachhang' => 5, 'idcoso'=> 1, 'idnhanvien'=> 5, 'idthungan' => 5,'idlieutrinh'=> 2,'idgiamgia'=> 2, 'tongtientruocgiamgia'=> '3800000','tongtiensaugiamgia'=>'3500000', 'trangthai'=>1, 'ghichu'=>'dịch vụ rất đa dạng ', 'created_at'=>$today],
            ['id'=>33,'idkhachhang' => 6, 'idcoso'=> 1, 'idnhanvien'=> 6, 'idthungan' => 6,'idlieutrinh'=> 2,'idgiamgia'=> 3, 'tongtientruocgiamgia'=> '10000000','tongtiensaugiamgia'=>'9000000', 'trangthai'=>1, 'ghichu'=>'dịch vụ rất đa dạng ', 'created_at'=>$today],
            ['id'=>34,'idkhachhang' => 4, 'idcoso'=> 1, 'idnhanvien'=> 4, 'idthungan' => 4,'idlieutrinh'=> 3,'idgiamgia'=> 1, 'tongtientruocgiamgia'=> '16000000','tongtiensaugiamgia'=>'15000000', 'trangthai'=>1, 'ghichu'=>'dịch vụ rất đa dạng ', 'created_at'=>$today],
            ['id'=>35,'idkhachhang' => 5, 'idcoso'=> 1, 'idnhanvien'=> 5, 'idthungan' => 5,'idlieutrinh'=> 2,'idgiamgia'=> 2, 'tongtientruocgiamgia'=> '3800000','tongtiensaugiamgia'=>'3500000', 'trangthai'=>1, 'ghichu'=>'dịch vụ rất đa dạng ', 'created_at'=>$today],
            ['id'=>36,'idkhachhang' => 6, 'idcoso'=> 1, 'idnhanvien'=> 6, 'idthungan' => 6,'idlieutrinh'=> 2,'idgiamgia'=> 3, 'tongtientruocgiamgia'=> '10000000','tongtiensaugiamgia'=>'9000000', 'trangthai'=>1, 'ghichu'=>'dịch vụ rất đa dạng ', 'created_at'=>$today],
            ['id'=>37,'idkhachhang' => 6, 'idcoso'=> 1, 'idnhanvien'=> 6, 'idthungan' => 6,'idlieutrinh'=> 2,'idgiamgia'=> 3, 'tongtientruocgiamgia'=> '10000000','tongtiensaugiamgia'=>'9000000', 'trangthai'=>1, 'ghichu'=>'dịch vụ rất đa dạng ', 'created_at'=>$today],
            ['id'=>38,'idkhachhang' => 4, 'idcoso'=> 1, 'idnhanvien'=> 4, 'idthungan' => 4,'idlieutrinh'=> 3,'idgiamgia'=> 1, 'tongtientruocgiamgia'=> '16000000','tongtiensaugiamgia'=>'15000000', 'trangthai'=>1, 'ghichu'=>'dịch vụ rất đa dạng ', 'created_at'=>$today],
            ['id'=>39,'idkhachhang' => 5, 'idcoso'=> 1, 'idnhanvien'=> 5, 'idthungan' => 5,'idlieutrinh'=> 2,'idgiamgia'=> 2, 'tongtientruocgiamgia'=> '3800000','tongtiensaugiamgia'=>'3500000', 'trangthai'=>1, 'ghichu'=>'dịch vụ rất đa dạng ', 'created_at'=>$today],
            ['id'=>40,'idkhachhang' => 6, 'idcoso'=> 1, 'idnhanvien'=> 6, 'idthungan' => 6,'idlieutrinh'=> 2,'idgiamgia'=> 3, 'tongtientruocgiamgia'=> '10000000','tongtiensaugiamgia'=>'9000000', 'trangthai'=>1, 'ghichu'=>'dịch vụ rất đa dạng ', 'created_at'=>$today],
            ['id'=>41,'idkhachhang' => 6, 'idcoso'=> 1, 'idnhanvien'=> 6, 'idthungan' => 6,'idlieutrinh'=> 2,'idgiamgia'=> 3, 'tongtientruocgiamgia'=> '10000000','tongtiensaugiamgia'=>'9000000', 'trangthai'=>1, 'ghichu'=>'dịch vụ rất đa dạng ', 'created_at'=>$today],
            ['id'=>42,'idkhachhang' => 4, 'idcoso'=> 1, 'idnhanvien'=> 4, 'idthungan' => 4,'idlieutrinh'=> 3,'idgiamgia'=> 1, 'tongtientruocgiamgia'=> '16000000','tongtiensaugiamgia'=>'15000000', 'trangthai'=>1, 'ghichu'=>'dịch vụ rất đa dạng ', 'created_at'=>$today],
            ['id'=>43,'idkhachhang' => 5, 'idcoso'=> 1, 'idnhanvien'=> 5, 'idthungan' => 5,'idlieutrinh'=> 2,'idgiamgia'=> 2, 'tongtientruocgiamgia'=> '3800000','tongtiensaugiamgia'=>'3500000', 'trangthai'=>1, 'ghichu'=>'dịch vụ rất đa dạng ', 'created_at'=>$today],
            ['id'=>44,'idkhachhang' => 6, 'idcoso'=> 1, 'idnhanvien'=> 6, 'idthungan' => 6,'idlieutrinh'=> 2,'idgiamgia'=> 3, 'tongtientruocgiamgia'=> '10000000','tongtiensaugiamgia'=>'9000000', 'trangthai'=>1, 'ghichu'=>'dịch vụ rất đa dạng ', 'created_at'=>$today],
        ]);

        DB::table('hoadonchitiet')->insert([
            ['id'=>1,'idhoadon'=>1,'idlienquan'=>1,'type'=>0,'soluong'=>'2','dongiatruocgiamgia'=>'15000000','dongiasaugiamgia'=>'14000000'],
            ['id'=>2,'idhoadon'=>2,'idlienquan'=>2,'type'=>1,'soluong'=>'2','dongiatruocgiamgia'=>'18000000','dongiasaugiamgia'=>'17500000'],
            ['id'=>3,'idhoadon'=>3,'idlienquan'=>3,'type'=>0,'soluong'=>'2','dongiatruocgiamgia'=>'21000000','dongiasaugiamgia'=>'20000000'],
            ['id'=>4,'idhoadon'=>4,'idlienquan'=>4,'type'=>1,'soluong'=>'2','dongiatruocgiamgia'=>'30000000','dongiasaugiamgia'=>'29500000'],
            ['id'=>5,'idhoadon'=>5,'idlienquan'=>3,'type'=>0,'soluong'=>'2','dongiatruocgiamgia'=>'21000000','dongiasaugiamgia'=>'20000000'],
            ['id'=>6,'idhoadon'=>6,'idlienquan'=>4,'type'=>1,'soluong'=>'2','dongiatruocgiamgia'=>'30000000','dongiasaugiamgia'=>'29500000'],
            ['id'=>7,'idhoadon'=>7,'idlienquan'=>1,'type'=>0,'soluong'=>'2','dongiatruocgiamgia'=>'15000000','dongiasaugiamgia'=>'14000000'],
            ['id'=>8,'idhoadon'=>8,'idlienquan'=>2,'type'=>1,'soluong'=>'2','dongiatruocgiamgia'=>'18000000','dongiasaugiamgia'=>'17500000'],
            ['id'=>9,'idhoadon'=>9,'idlienquan'=>3,'type'=>0,'soluong'=>'2','dongiatruocgiamgia'=>'21000000','dongiasaugiamgia'=>'20000000'],
            ['id'=>10,'idhoadon'=>10,'idlienquan'=>4,'type'=>1,'soluong'=>'2','dongiatruocgiamgia'=>'30000000','dongiasaugiamgia'=>'29500000'],
            ['id'=>11,'idhoadon'=>11,'idlienquan'=>3,'type'=>0,'soluong'=>'2','dongiatruocgiamgia'=>'21000000','dongiasaugiamgia'=>'20000000'],
            ['id'=>12,'idhoadon'=>12,'idlienquan'=>4,'type'=>1,'soluong'=>'2','dongiatruocgiamgia'=>'30000000','dongiasaugiamgia'=>'29500000'],
        ]);

        for ($i = 0; $i < 12; $i++) {
            $date = Carbon::now()->subMonth($i)->toDateTimeString();
            for ($n = 0; $n < $i; $n++) {
                DB::table('hoadon')->insert([
                    ['idkhachhang' => 1, 'idcoso'=> 1, 'idnhanvien'=> 1, 'idthungan' => 1,'idlieutrinh'=> 1,'idgiamgia'=> 1, 'tongtientruocgiamgia'=> '1450000','tongtiensaugiamgia'=>'1450000', 'trangthai'=>1, 'ghichu'=>'dịch vụ rất đa dạng và bắt mắt ', 'created_at'=>$date],
                    ['idkhachhang' => 2, 'idcoso'=> 1, 'idnhanvien'=> 2, 'idthungan' => 2,'idlieutrinh'=> 2,'idgiamgia'=> 2, 'tongtientruocgiamgia'=> '3600000','tongtiensaugiamgia'=>'3400000', 'trangthai'=>1, 'ghichu'=>'dịch vụ rất đa dạng ', 'created_at'=>$date],
                    ['idkhachhang' => 3, 'idcoso'=> 1, 'idnhanvien'=> 3, 'idthungan' => 3,'idlieutrinh'=> 3,'idgiamgia'=> 3, 'tongtientruocgiamgia'=> '45000000','tongtiensaugiamgia'=>'45000000', 'trangthai'=>1, 'ghichu'=>'dịch vụ rất đa dạng ', 'created_at'=>$date],
                    ['idkhachhang' => 4, 'idcoso'=> 1, 'idnhanvien'=> 4, 'idthungan' => 4,'idlieutrinh'=> 3,'idgiamgia'=> 1, 'tongtientruocgiamgia'=> '16000000','tongtiensaugiamgia'=>'15000000', 'trangthai'=>1, 'ghichu'=>'dịch vụ rất đa dạng ', 'created_at'=>$date],

                    ['idkhachhang' => 2, 'idcoso'=> 1, 'idnhanvien'=> 2, 'idthungan' => 2,'idlieutrinh'=> 2,'idgiamgia'=> 2, 'tongtientruocgiamgia'=> '3600000','tongtiensaugiamgia'=>'3400000', 'trangthai'=>1, 'ghichu'=>'dịch vụ rất đa dạng ', 'created_at'=>$date],
                    ['idkhachhang' => 3, 'idcoso'=> 1, 'idnhanvien'=> 3, 'idthungan' => 3,'idlieutrinh'=> 3,'idgiamgia'=> 3, 'tongtientruocgiamgia'=> '45000000','tongtiensaugiamgia'=>'45000000', 'trangthai'=>1, 'ghichu'=>'dịch vụ rất đa dạng ', 'created_at'=>$date],
                    ['idkhachhang' => 4, 'idcoso'=> 1, 'idnhanvien'=> 4, 'idthungan' => 4,'idlieutrinh'=> 3,'idgiamgia'=> 1, 'tongtientruocgiamgia'=> '16000000','tongtiensaugiamgia'=>'15000000', 'trangthai'=>1, 'ghichu'=>'dịch vụ rất đa dạng ', 'created_at'=>$date],

                    ['idkhachhang' => 2, 'idcoso'=> 1, 'idnhanvien'=> 2, 'idthungan' => 2,'idlieutrinh'=> 2,'idgiamgia'=> 2, 'tongtientruocgiamgia'=> '3600000','tongtiensaugiamgia'=>'3400000', 'trangthai'=>1, 'ghichu'=>'dịch vụ rất đa dạng ', 'created_at'=>$date],
                    ['idkhachhang' => 3, 'idcoso'=> 1, 'idnhanvien'=> 3, 'idthungan' => 3,'idlieutrinh'=> 3,'idgiamgia'=> 3, 'tongtientruocgiamgia'=> '45000000','tongtiensaugiamgia'=>'45000000', 'trangthai'=>1, 'ghichu'=>'dịch vụ rất đa dạng ', 'created_at'=>$date],
                    ['idkhachhang' => 4, 'idcoso'=> 1, 'idnhanvien'=> 4, 'idthungan' => 4,'idlieutrinh'=> 3,'idgiamgia'=> 1, 'tongtientruocgiamgia'=> '16000000','tongtiensaugiamgia'=>'15000000', 'trangthai'=>1, 'ghichu'=>'dịch vụ rất đa dạng ', 'created_at'=>$date],
                ]);
            }
        }

        $ho  = array("Nguyễn", "Lê", "Phan", "Đỗ", "Hồ", "Võ", "Bùi", "Hậu", "Trần");
        $lot = array("Thị", "Văn", "Đức", "Ngọc", "Hoàng", "Minh", "Kim", "Vũ", "Duy");
        $ten = array("Tâm", "Thảo", "Hải", "Hòa", "Hảo", "Thanh", "Tú", "Hậu", "Phương", "Long");

        for ($i = 0; $i < 10000; $i++) {
            $ho_ = Arr::random($ho);
            $randomDay = Carbon::today()->subDays(rand(0, 365 * 4))->toDateTimeString();
            $tongTienSauGiam = rand(100000, 50000000);
            $tongTienTruocGiam = $tongTienSauGiam + rand(100000, 1000000);
            do
            {
                $lot_ = Arr::random($lot);
                $ten_ = Arr::random($ten);
            } while ($this->checkHoTen($lot_, $ten_));

            $hoTenRandom = $ho_ . ' ' . $lot_ . ' ' . $ten_;
            DB::table('hoadon')->insert([
                ['idkhachhang' => rand(1, 6), 'idcoso'=> 1, 'idnhanvien'=> rand(1, 6), 'idthungan' => rand(1, 6), 'idlieutrinh'=> 1, 'idgiamgia'=> 1, 'tongtientruocgiamgia' => $tongTienTruocGiam, 'tongtiensaugiamgia' => $tongTienSauGiam, 'trangthai' => 1, 'created_at'=>$randomDay],

                // ['idkhachhang' => rand(0, 6), 'idgiamgia '=> '1', 'tennguoinhan' => $hoTenRandom, 'diachikhachhang'=> 'Công viên phần mềm Quang Trung, TP.HCM','sdtnguoinhan'=>'0845737036', 'tongtientruocgiamgia' => $tongTienTruocGiam, 'tongtiensaugiamgia' => $tongTienSauGiam, 'phuongthucthanhtoan' => 'VNPAY', 'phuongthucgiaohang' => 'GRAP', 'trangthai' => 4, 'created_at' => $randomDay],
            ]);
        }
    }

    public function checkHoTen($lot_, $ten_) {
        $arrLot_ = array("Thị", "Ngọc", "Kim");
        $arrTen_ = array("Long");
        if (in_array($lot_, $arrLot_)) {
            if (in_array($ten_, $arrTen_)) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
}
