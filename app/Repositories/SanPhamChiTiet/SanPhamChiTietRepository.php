<?php


namespace App\Repositories\SanPhamChiTiet;
use App\Repositories\BaseRepository;
use App\Repositories\SanPhamChiTiet\SanPhamChiTietRepositoryInterface;
class SanPhamChiTietRepository extends BaseRepository implements SanPhamChiTietRepositoryInterface
{
    protected $model;

    function __construct()
    {
        $this->setModel();
    }

    public function getModel(){
        return \App\Models\Admin\SanPhamChiTiet::class;
    }

    public function setModel()
    {
        $this->model = app()->make(
            $this->getModel()
        );
    }

    public function updateDetailByIdSp($id,$data){
        return $this->model->where("idsanpham","=",$id)->update($data);
    }

    public function delDetailByIdSp($id){
       return $this->model->where("idsanpham","=",$id)->delete();
    }
}
