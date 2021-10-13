<?php


namespace App\Repositories\HoaDonChiTiet;


use App\Models\Admin\HoaDonChiTietModel;
use App\Repositories\BaseRepository;

class HoaDonChiTietRepository extends BaseRepository implements HoaDonChiTietRepositoryInterface
{
    protected $model;

    public function getModel()
    {
        return HoaDonChiTietModel::class;
    }
}
