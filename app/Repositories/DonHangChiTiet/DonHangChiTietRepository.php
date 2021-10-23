<?php

namespace App\Repositories\DonHangChiTiet;
use Illuminate\Support\Facades\DB;
use App\Models\Admin\DonHangChitiet;
use App\Repositories\BaseRepository;
class DonHangChiTietRepository extends BaseRepository implements DonHangChiTietRepositoryInterface
{
    protected $model;
    public function getModel(){
        return DonHangChitiet::class;
    }

    public function getDonHangChiTietByIdDonHang($id){
        return $this->model->where('iddonhang','=',$id)->get();
    }

    public function updateDetailByIdDH($id,$data){
        return $this->model->where("id","=",$id)->update($data);
    }

    // public function getDonHangChiTietByIdDonHangInnerJoin($id){
    //     return $this->model->join('donhang', 'donhang.id', '=', 'donhangchitiet.iddonhang')->where('donhang.id','=',$id)->get();

    // }
    public function getDonHangChiTietByIdDonHangInnerJoin($id){
        return $this->model->select('*', DB::raw('dongiasaugiamgia * soluong as tongtien'))
        ->join('sanphamchitiet', 'sanphamchitiet.id', '=', 'donhangchitiet.idsanphamchitiet')
        ->join('sanpham', 'sanpham.id', '=', 'sanphamchitiet.idsanpham')
        ->where('iddonhang','=',$id)->get();
    }

    public function getDonHangChiTietByIdKhachHangInnerJoin($id){
        return $this->model->select('*')
        ->join('donhang', 'donhang.id', '=', 'donhangchitiet.iddonhang')
        ->join('khachhang', 'khachhang.id', '=', 'donhang.idkhachhang')
        ->where('iddonhang','=',$id)->get();
    }



}
