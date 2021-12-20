<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Support\Arr;
use Str;
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
        $lastMonth = Carbon::now()->subMonth(1)->toDateTimeString();
        $yesterday = Carbon::now()->subDays(1)->toDateTimeString();
        DB::table('donhangchitiet')->delete();
        DB::table('donhang')->delete();

        $ho  = array("Nguyễn", "Lê", "Phan", "Đỗ", "Hồ", "Võ", "Bùi", "Hậu", "Trần");
        $lot = array("Thị", "Văn", "Đức", "Ngọc", "Hoàng", "Minh", "Kim", "Vũ", "Duy");
        $ten = array("Tâm", "Thảo", "Hải", "Hòa", "Hảo", "Thanh", "Tú", "Hậu", "Phương", "Long");



        for ($i = 1; $i < 50; $i++) {
            $ho_ = Arr::random($ho);

            $randomDay = Carbon::today()->subDays(rand(0, 365 * 4))->toDateString();
            $tongTienSauGiam_ = rand(100000, 50000000);
            $tongTienTruocGiam = $tongTienSauGiam_ + rand(100000, 1000000);
            $diachi  = rand(1, 250);
            $phuong = array("phường 1", "phường 2", "phường 3", "phường 4", "phường 5", "phường 6", "phường 7", "phường 8", "phường 9", "phường 10");
            $huyen = array("quận12", "quận 1", "quận 2", "quận 3", "quận 4 ", "quận 5 ", "quận 6 ", "quận 7", "quận 8", "quận 9");
            $tinh = array("Hồ Chí Minh", "Bình thuận ", "Hà Nội", "Hải Phòng", "Đà Nẵng", "Cần Thơ");
            $phuongthucthanhtoan = array("VNPAY", "TT");
            $sdtdaumoi = array("084", "037", "098", "094");
            $phuongthucgiaohang = array("GRAP", "BEE", "DHL", "FEDEX");
            $huyen_ = Arr::random($huyen);
            $phuong_ = Arr::random($phuong);
            $tinh_ = Arr::random($tinh);
            $phuongthucthanhtoan_ = Arr::random($phuongthucthanhtoan);
            $sdtdau = Arr::random($sdtdaumoi);
            $soluong_ = rand(1,6);
            $sdtgiua = rand(1000, 9999);
            $sdtcuoi = rand(100, 999);
            $sdt = $sdtdau . $sdtgiua . $sdtcuoi;
            $phuongthucgiaohang_ = Arr::random($phuongthucgiaohang);
            $phantramgiamgia = rand(25,100);

            $tongtientruoc = $tongTienSauGiam_ * $soluong_;
            $Tongtiensaugiamgia = $tongtientruoc * (100 - $phantramgiamgia)/100 ;




            do
            {
                $lot_ = Arr::random($lot);
                $ten_ = Arr::random($ten);
            } while ($this->checkHoTen($lot_, $ten_));
            $hoTenRandom = $ho_ . ' ' . $lot_ . ' ' . $ten_;
            $diachict = $diachi . ' ' . $phuong_ . ' ' . $huyen_. ' ' .$tinh_;

            DB::table('donhang')->insert([
                ['id'=>$i,'idkhachhang' => rand(1, 6),'idgiamgia' => rand(1, 3),'tennguoinhan' => $hoTenRandom, 'diachikhachhang'=> $diachict, 'sdtnguoinhan'=> $sdt, 'tongtientruocgiamgia' => $Tongtiensaugiamgia, 'tongtiensaugiamgia' => $tongTienSauGiam_,'ghichucuakhachhang'=>'Sản phẩm vận chuyển tới gọi em nha ạ em cảm ơn ^^','phuongthucthanhtoan'=>$phuongthucthanhtoan_,'phuongthucgiaohang'=>$phuongthucgiaohang_, 'trangthai' => rand(1, 4),'trangthaithanhtoan' => rand(0, 1), 'created_at'=>$randomDay],
            ]);
            DB::table('donhangchitiet')->insert([
                ['id'=>$i,'iddonhang'=>$i,'idsanphamchitiet'=>rand(1,9),'img' => 'cchamsocda.jpg', 'soluong'=> $soluong_, 'dongiatruocgiamgia' => $tongTienTruocGiam, 'dongiasaugiamgia' => $tongTienSauGiam_, 'created_at'=>$randomDay],
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
