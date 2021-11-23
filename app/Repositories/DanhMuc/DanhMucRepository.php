<?php


namespace App\Repositories\DanhMuc;
use App\Repositories\BaseRepository;
class DanhMucRepository extends BaseRepository implements DanhMucRepositoryInterface
{
    protected $model;

    function __construct()
    {
        $this->setModel();
    }

    public function getModel(){
        return \App\Models\Admin\DanhMuc::class;
    }
    public function getAllDanhMuc(){
        return $this->model->select('danhmuc.*')->limit(6)->get();
    }
    public function getall2danhmuc(){
        return $this->model->select('danhmuc.*')->limit(1)->get();
    }
    public function setModel()
    {
        $this->model = app()->make(
            $this->getModel()
        );
    }

    public function findDanhMucByIdLoai($idLoai){
        return $this->model->where("loai","=",$idLoai)->get();
    }

   
}
