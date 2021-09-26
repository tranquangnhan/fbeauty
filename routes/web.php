<?php

use App\Http\Controllers\Admin\DangNhapAdminController;
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
    



});