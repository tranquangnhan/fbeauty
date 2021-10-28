<?php

namespace App\Repositories\DonHang;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\Redirect;

class DonHangRepository extends BaseRepository implements DonHangRepositoryInterface
{
    protected $model;
    public function getModel(){
        return \App\Models\Admin\DonHangModel::class;
    }

    public function getDonHangChiTietByIdDonHang($id){
        return $this->model->where('iddonhang','=',$id)->get();
    }
    public function getKhachHangChiTietByIdDonHang($id){
        return $this->model->where('idkhachhang','=',$id)->get();
    }

    public function getDonHangAndKhachHangById($id) {
        return $this->model->select('khachhang.name','khachhang.sdt','khachhang.email')
        ->join('khachhang', 'khachhang.id', '=', 'donhang.idkhachhang')->find($id);

        // ->select('idTin', 'TieuDe', 'urlHinh', 'Ngay', 'Ten', 'TomTat',
        //          'Content','SoLanXem', 'tags', 'tin.lang', 'users.hoten', 'users.idUser',
        //          'loaitin.idLT','loaitin.Ten', 'theloai.idTL','theloai.TenTL', 'slug_tin', 'theloai.slug_theloai', 'loaitin.slug_loaitin')
        // ->join('loaitin', 'tin.idLT', '=', 'loaitin.idLT')
        // ->join('users', 'tin.idUser', '=', 'users.idUser')
        // ->join('theloai', 'tin.idTL', '=', 'theloai.idTL')
        // ->where('tin.idTin', '=', $idTin)
        // ->first();
    }
}
