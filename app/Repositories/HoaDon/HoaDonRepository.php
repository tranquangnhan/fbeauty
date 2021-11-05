<?php


namespace App\Repositories\HoaDon;


use App\Models\Admin\HoaDonModel;
use App\Repositories\BaseRepository;

class HoaDonRepository extends BaseRepository implements HoaDonRepositoryInterface
{
    protected $model;

    public function getModel()
    {
        return HoaDonModel::class;
    }
    public function ShowHoaDonByIdCoso($id){
        return  $this->model->select('hoadon.*', 'khachhang.name AS tenKh', 'khachhang.sdt AS sodienthoai', 'coso.name AS tencoso', 'nhanvien.name AS tenNV', 'nhanvien.email AS emailNV')
            ->join('khachhang', 'hoadon.idkhachhang', '=', 'khachhang.id')
            ->join('coso', 'hoadon.idcoso', '=', 'coso.id')
            ->join('nhanvien', 'hoadon.idnhanvien', '=', 'nhanvien.id')
            ->where('hoadon.idcoso', '=', $id)
            ->orderBy('hoadon.id', 'desc')
            ->get();
    }
}
