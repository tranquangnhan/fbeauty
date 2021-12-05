<?php


namespace App\Repositories\DanhMuc;

use App\Http\Controllers\Controller;
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
        return $this->model->select("*")->where("loai","=",$idLoai)->get();
    }
    public function getdanhmucshow(){
        return $this->model
        ->offset(1)->limit(3)
        ->where('danhmuc.loai', '=', 1)
        ->orderBy('id', 'DESC')

        ->get();
    }
    public function idDanhMucgetDichvu($id){
        return $this->model->select('danhmuc.*','dichvu.name as namedv','dichvu.slug as slugdv','dichvu.motangan as motangandv','dichvu.img as imgdv','dichvu.dongia as dongiadv','dichvu.img as imgdv')
        ->join('dichvu','dichvu.iddm','=','danhmuc.id')
        ->where('dichvu.trangthai', '=', 1)
        ->where('danhmuc.id', '=', $id)
        ->get();
    }
    public function idDanhMucbyslug($slug){
        return $this->model->select('danhmuc.*')
        ->where('danhmuc.slug', '=', $slug)
        ->get();
    }

    public function getDanhMucLimit($limit){
        return $this->model->select('danhmuc.*')
        ->where('loai', '=', Controller::LOAI_DANHMUC_DICHVU)
        ->limit($limit)
        ->get();
    }
    public function getDanhMucLimitBlog($limit){
        return $this->model->select('*')
        ->where('loai', '=', Controller::LOAI_DANHMUC_BLOG)
        ->limit($limit)
        ->get();
    }
}
