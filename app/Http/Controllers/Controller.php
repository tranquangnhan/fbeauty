<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;
use Illuminate\Support\Str;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    const BASE_URL_UPLOAD = 'Admin/assets/images/users/';
    const URL_IMG = 'uploads/';
    const BASE_URL_UPLOAD_STAFF = 'uploads/imgusers/';
    const BASE_URL_UPLOAD_CUSTOMER = 'uploads/khachhang/';

    const LOAI_DANHMUC_DICHVU = 1;
    const LOAI_DANHMUC_SANPHAM = 2;
    const LOAI_DANHMUC_BLOG = 3;
    const KHACHHANG_CHUA_ACTIVE = 0;
    const KHACHHANG_DA_ACTIVE = 1;
    const TRANGTHAI_LICH_OPEN = 0;
    const TRANGTHAI_HOADON_DA_THANH_TOAN = 1;
    const TRANGTHAI_HOADON_CHUA_THANH_TOAN = 0;
    const TRANGTHAI_DONHANG_DA_NHAN = 4;

    /**
     * ID_LIENQUAN_SP=1 LÀ SẢN PHẨM
     * ID_LIENQUAN_DV=0 LÀ DỊCH VỤ
     * TRANGTHAITHANHTOAN=1 ĐÃ THANH TOÁN
     * TRANGTHAITHANHTOAN !=1 CHƯA THANH TOÁN
     */
    const ID_LIENQUAN_SP_=1;
    const ID_LIENQUAN_DV_=0;
    const TRANGTHAITHANHTOAN=1;
    /**
    *LOAIGIAM=1 LÀ %
     * LOAIGIAM=0 LÀ tiền
     */
    const LOAIGIAM=1;

    // path upload using for uploadSingle and uploadMultipleImg
    const PATH_UPLOADS = 'public';
    const PATH_UPLOADS_KHACHHANG = 'imgKH';


    function uploadSingle($path,$file){
        if($file == null) return null;
        $filename = 'photo-' . time() . '.' . $file->getClientOriginalExtension();

        Storage::disk($path)->put($filename, file_get_contents($file));

        return $filename;
    }

    public function uploadMultipleImg($path,$photos){
        $paths  = [];
        foreach ($photos as $index=> $photo) {
            $extension = $photo->getClientOriginalExtension();
            $filename  = 'photo-' . time(). $index . '.' . $extension;
            $paths[]   =  $filename;
            Storage::disk($path)->put($filename, file_get_contents($photo));
        }
        return json_encode($paths);
    }

    /**
     *check định dạng ảnh và lưu vào mục users
     */
    public function checkImg($extension, $img)
    {
        $allowedfileExtension = ['jpg', 'png', 'gif'];
        $check = in_array($extension, $allowedfileExtension);
        if (!$check) {
            return false;
        } else {
            $img->move(self::BASE_URL_UPLOAD_STAFF, $img->getClientOriginalName());
            return true;
        }
    }

    public function handleError($error){
        return Redirect::back()->withErrors($error);
    }

    public function handleErrorInput($error){
        return back()->withError($error)->withInput();
    }

    public static function caculateGia($donGia,$giamGia){
        $tinh =  $donGia - ($donGia/100 * $giamGia);
        $num = round($tinh, 0);
        return number_format($num, 0, ',', ',');
    }

    public function getThoiGianDauVaCuoiCuaNgay($ngay) {
        $dauNgay = $ngay . ' 00:00:00';
        $cuoiNgay = $ngay . ' 23:59:59';

        return array (
            'dau' => $dauNgay,
            'cuoi' => $cuoiNgay
        );
    }

    public function getThoiGianTimestampDauVaCuoiCuaNgay($ngay) {
        $dauNgay = $ngay . ' 00:00:00';
        $cuoiNgay = $ngay . ' 23:59:59';
        $dauNgayTimestamp = Carbon::parse($dauNgay)->timestamp;

        $cuoiNgayTimestamp = Carbon::parse($cuoiNgay)->timestamp;
        // $taoFormatCarbon = Carbon::createFromTimestamp($dauNgayTT);
        return array (
            'dauNgayTimestamp' => $dauNgayTimestamp,
            'cuoiNgayTimestamp' => $cuoiNgayTimestamp
        );
    }
    // function unique slug
    public function setSlugStore($model,$name){
        
        $data = $model->getAll()->sortByDesc('id')->first();
        $slug = Str::slug($name) . '-' .$data->id + 1;

        return $slug;
    }

    public function setSlugUpdate($id,$name){
        $slug = Str::slug($name) . '-' . $id; 
        return $slug;
    }


}
