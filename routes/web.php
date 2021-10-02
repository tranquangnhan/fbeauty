<?php

use App\Http\Controllers\Admin\DangNhapAdminController;
use App\Http\Controllers\Admin\DanhMucController;
use App\Http\Controllers\Admin\DichVuController;
use App\Http\Controllers\Admin\SanPhamController;
use App\Http\Controllers\Admin\NhanVienController;
use App\Http\Controllers\Admin\ThongkeController;
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

//Route::get('/', function () {
//    return view('welcome');
//});
/**
 * Backend
 *
 */
Route::get('/quantri/login', [DangNhapAdminController::class, 'index']);
Route::post('/quantri/login', [DangNhapAdminController::class, 'checkin']);
Route::get('/quantri/logout', [DangNhapAdminController::class, 'logout']);
Route::group(['prefix' => 'quantri', 'middleware' => 'phanquyen'], function (){
    Route::get('/', [ThongkeController::class, "index"]);
    Route::resource('danhmuc', DanhMucController::class);
    Route::resource('dichvu', DichVuController::class);
    Route::resource('sanpham', SanPhamController::class);
    Route::get('/sanpham/detail/{id}', [SanPhamController::class,'createDetailProduct']);
    Route::post('/sanpham/detail/{id}', [SanPhamController::class,'postDetailProduct']);
    Route::resource('nhanvien', NhanVienController::class);
    Route::get('nhanvien/uploadKH/{id}', [NhanVienController::class, 'upImgKhachHang']);
    Route::get('nhanvien/kiemtraemail/{name}',[NhanVienController::class, "CheckEmailTonTai"]);
    Route::get('nhanvien/kiemtrasdt/{name}',[NhanVienController::class, "CheckSdtTonTai"]);
});
