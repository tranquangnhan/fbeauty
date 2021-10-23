<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    const BASE_URL_UPLOAD = 'Admin/assets/images/users/';
    const BASE_URL_UPLOAD_STAFF = 'uploads/imgusers/';
    const LOAI_DANHMUC_DICHVU = 1;
    const LOAI_DANHMUC_SANPHAM = 2;
    const LOAI_DANHMUC_BLOG = 3;
    const KHACHHANG_CHUA_ACTIVE = 0;
    const KHACHHANG_DA_ACTIVE = 1;
    const TRANGTHAI_LICH_OPEN = 1;

    function uploadSingle($file){
        if($file == null) return null;
        $filename = 'profile-photo-' . time() . '.' . $file->getClientOriginalExtension();

        Storage::disk('public')->put($filename, file_get_contents($file));

        return $filename;
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

    public function uploadMultipleImg($photos){
        $paths  = [];
        foreach ($photos as $index=> $photo) {
            $extension = $photo->getClientOriginalExtension();
            $filename  = 'photouser' . time(). $index . '.' . $extension;
            $paths[]   =  $filename;
            Storage::disk('imgKH')->put($filename, file_get_contents($photo));
        }
        return response()->json($paths);
    }

    public function handleError($error){
        return Redirect::back()->withErrors($error);
    }
}
