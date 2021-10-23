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

}
