<?php


namespace App\Repositories\LieuTrinhChiTiet;

use App\Models\Admin\LieuTrinhChiTietModel;
use App\Repositories\BaseRepository;

use App\Repositories\LieuTrinhChiTiet\LieuTrinhChiTietRepositoryInterface;

class LieuTrinhChiTietRepository extends BaseRepository implements LieuTrinhChiTietRepositoryInterface
{
    protected $model;

    function __construct()
    {
        $this->setModel();
    }
    
    public function getModel()
    {
        return LieuTrinhChiTietModel::class;
    }
    public function setModel()
    {
        $this->model = app()->make(
            $this->getModel()
        );
    }
    public function getLieuTrinhChiTietInnerJoin($id){
        return 
        $this->model->select("dichvu.img as imgdichvu",
        "dichvu.name as tendv",
        "nhanvien.name as tennv",
        "nhanvien.avatar as imgnv",
        "dichvu.motangan as motadv",
        "lieutrinhchitiet.ngay",
        "lieutrinhchitiet.mota",
        "lieutrinhchitiet.trangthai",
        "lieutrinhchitiet.imgkhachhang",
        "lieutrinhchitiet.id as idlieutrinh"
        )
        ->join('dichvu', 'lieutrinhchitiet.iddichvu', '=', 'dichvu.id')
        ->join('nhanvien','lieutrinhchitiet.idnhanvien','=','nhanvien.id')
        ->where('idlieutrinh','=',$id)->get();
    }   
}
