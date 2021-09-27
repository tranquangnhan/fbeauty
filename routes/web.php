<?php

use App\Http\Controllers\Admin\DangNhapAdminController;
use App\Http\Controllers\Admin\DanhMucController;
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
    Route::resource('/', DanhMucController::class);
    Route::resource('danhmuc', DanhMucController::class);
});
