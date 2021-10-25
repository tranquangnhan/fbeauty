<?php


namespace App\Repositories\LieuTrinh;

use App\Models\Admin\LieuTrinhModel;
use App\Repositories\BaseRepository;

use App\Repositories\LieuTrinh\LieuTrinhRepositoryInterface;

class LieuTrinhRepository extends BaseRepository implements LieuTrinhRepositoryInterface
{
    protected $model;

    function __construct()
    {
        $this->setModel();
    }

    public function getModel()
    {
        return LieuTrinhModel::class;
    }

    public function setModel()
    {
        $this->model = app()->make(
            $this->getModel()
        );
    }

    public function findLieuTrinhByIdKh($id){
        return $this->model
        ->select("nhanvien.avatar as imgnv",
        "lieutrinh.ngaybatdau",
        "lieutrinh.dukienketthuc",
        "lieutrinh.ghichu",
        "lieutrinh.id as idlieutrinh"
        )
        ->join("nhanvien","nhanvien.id","=","lieutrinh.idnhanvien")->where("idkhachhang","=",$id)->get();
    }
}
