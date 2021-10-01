<?php

namespace App\Providers;

use App\Repositories\CoSo\CoSoRepository;
use App\Repositories\CoSo\CoSoRepositoryInterface;
use App\Repositories\DanhMuc\DanhMucRepository;
use App\Repositories\DanhMuc\DanhmucRepositoryInterface;
use App\Repositories\DichVu\DichVuReponsitory;
use App\Repositories\DichVu\DichVuRepositoryInterface;
use App\Repositories\NhanVien\NhanVienReponsitory;
use App\Repositories\NhanVien\NhanVienReponsitoryinterface;
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
        $this->app->singleton(NhanVienReponsitoryinterface::class,NhanVienReponsitory::class);
        $this->app->singleton(CoSoRepositoryInterface::class,CoSoRepository::class);
        $this->app->singleton(DichVuRepositoryInterface::class,DichVuReponsitory::class);
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
