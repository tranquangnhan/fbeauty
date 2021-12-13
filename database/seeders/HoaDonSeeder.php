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
        $lastMonth = Carbon::now()->subMonth(1)->toDateTimeString();
        $yesterday = Carbon::now()->subDays(1)->toDateTimeString();
        DB::table('hoadonchitiet')->delete();
        DB::table('hoadon')->delete();

        for ($i = 1; $i < 100; $i++) {
            $randomDay = Carbon::today()->subDays(rand(0, 365 * 4))->toDateString();
            $tongTienSauGiam = rand(100000, 50000000);
            $tongTienTruocGiam = $tongTienSauGiam + rand(100000, 1000000);
            DB::table('hoadon')->insert([
                ['id'=>$i,'idkhachhang' => rand(1, 6), 'idcoso'=> 1, 'idnhanvien'=> rand(1, 6), 'idthungan' => rand(1, 6), 'idlieutrinh'=> rand(1, 99), 'idgiamgia'=> 1, 'tongtientruocgiamgia' => $tongTienTruocGiam, 'tongtiensaugiamgia' => $tongTienSauGiam, 'trangthai' => 1, 'created_at'=>$randomDay],
            ]);
            DB::table('hoadonchitiet')->insert([
                ['id'=>$i,'idhoadon'=>$i,'idlienquan'=>rand(1,2),'type' => rand(1,0), 'soluong'=> rand(1, 6), 'dongiatruocgiamgia' => $tongTienTruocGiam, 'dongiasaugiamgia' => $tongTienSauGiam, 'created_at'=>$randomDay],
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
