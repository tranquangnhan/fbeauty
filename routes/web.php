<?php

use App\Http\Controllers\Admin\DangNhapAdminController;
use App\Http\Controllers\Admin\DanhMucController;
use App\Http\Controllers\Admin\CoSoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin/dangnhapadmin', [\App\Http\Controllers\DangNhapAdminController::class, 'login']);

Route::group(['prefix' => 'quantri'], function (){

    Route::resource('danhmuc', DanhMucController::class);

    Route::resource('coso', CoSoController::class);
    Route::get('/delivery', [CoSoController::class,'create']);
    Route::post('/select-delivery', [CoSoController::class,'select_delivery']);
    Route::post('/add-delivery', [CoSoController::class,'add_delivery']);
    Route::post('/update', [CoSoController::class,'update']);

});
