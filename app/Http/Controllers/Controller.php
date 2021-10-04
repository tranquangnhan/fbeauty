<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Storage;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    const BASE_URL_UPLOAD = 'Admin/assets/images/users/';


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
            $img->move(self::BASE_URL_UPLOAD, $img->getClientOriginalName());
            return true;
        }
    }
}
