<?php

namespace App\Providers;

use App\Repositories\DanhMuc\DanhMucRepository;
use App\Repositories\DanhMuc\DanhmucRepositoryInterface;
use App\Repositories\NhanVien\NhanVienReponsitory;
use App\Repositories\NhanVien\NhanVienReponsitoryinterface;
use App\Repositories\SanPham\SanPhamRepository;
use App\Repositories\SanPham\SanPhamRepositoryInterface;
use App\Repositories\SanPhamChiTiet\SanPhamChiTietRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(DanhmucRepositoryInterface::class,DanhMucRepository::class);
        $this->app->singleton(SanPhamRepositoryInterface::class,SanPhamRepository::class);
        $this->app->singleton(NhanVienReponsitoryinterface::class,NhanVienReponsitory::class);
        $this->app->singleton(SanPhamChiTietRepositoryInterface::class,SanPhamRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
