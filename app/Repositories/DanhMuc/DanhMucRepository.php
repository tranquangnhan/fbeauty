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
    public function getdanhmucshow(){
        return $this->model
        ->offset(1)->limit(3)
        ->orderBy('id', 'DESC')
        ->get();
    }
    public function idDanhMucgetDichvu($slug){
        return $this->model->select('danhmuc.*','dichvu.name as namedv','dichvu.name as namedv')
        ->join('dichvu','danhmuc.id','=','dichvu.iddm')
        ->where('dichvu.trangthai', '=', 1)
        ->where('dichvu.slug', '=', $slug)
        ->first();
    }
}
