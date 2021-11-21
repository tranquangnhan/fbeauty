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

    public function getHoaDonCTByIdHoaDon($id){
        return $this->model->select("hoadonchitiet.*", "hoadon.idgiamgia")
            ->join('hoadon', 'hoadonchitiet.idhoadon', '=', 'hoadon.id')
            ->where('hoadonchitiet.idhoadon', '=', $id)
            ->get();
    }

    public function CheckSpTonTai($id, $idsp){
        return $this->model->select("*")
            ->where('hoadonchitiet.idhoadon', '=', $id)
            ->where('hoadonchitiet.idlienquan', '=', $idsp)
            ->where('hoadonchitiet.type', '=', 1)
            ->doesntExist();
    }

    public function CheckDVTonTai($id, $iddv){
        return $this->model->select("*")
            ->where('hoadonchitiet.idhoadon', '=', $id)
            ->where('hoadonchitiet.idlienquan', '=', $iddv)
            ->where('hoadonchitiet.type', '=', 0)
            ->doesntExist();
    }

    public function getHDCT($id, $idsp){
        return $this->model->select("*")
            ->where('hoadonchitiet.idhoadon', '=', $id)
            ->where('hoadonchitiet.idlienquan', '=', $idsp)
            ->where('hoadonchitiet.type', '=', 1)
            ->get();
    }

    public function getDV($id, $iddv){
        return $this->model->select("*")
            ->where('hoadonchitiet.idhoadon', '=', $id)
            ->where('hoadonchitiet.idlienquan', '=', $iddv)
            ->where('hoadonchitiet.type', '=', 0)
            ->get();
    }

    public function findDichVuByIdKhachHang($id){
        return $this->model->select("dichvu.name",'dichvu.img',
        'dichvu.motangan',
        'dichvu.dongia',
        'dichvu.giamgia')
        ->join('dichvu','hoadonchitiet.idlienquan','=','dichvu.id')
        ->join('hoadon','hoadon.id','=','hoadonchitiet.idhoadon')
        ->where('hoadonchitiet.type','=','0')
        ->where('hoadon.idkhachhang','=',$id)
        ->get();
    }


}
