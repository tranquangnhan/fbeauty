<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    const BASE_URL_UPLOAD = 'Admin/assets/images/users/';

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
