<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    function uploadSingle($file){
        $filename = 'profile-photo-' . time() . '.' . $file->getClientOriginalExtension();

        $path = $file->storeAs('photos', $filename);

        return $path;
    }
}
