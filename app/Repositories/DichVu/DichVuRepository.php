<?php


namespace App\Repositories\DichVu;

use App\Http\Controllers\Controller;
use App\Models\Admin\DichVu;
use App\Models\Admin\DichVuModel;
use App\Repositories\BaseRepository;

class DichVuRepository extends BaseRepository implements DichVuRepositoryInterface
{
    public function getModel()
    {
        return DichVu::class;
    }
    public function getDichVu()
    {

    }

    public function editDichVu($id)
    {
        return $this->model->select('dichvu.*', 'dichvu.id','danhmuc.name AS danhmuc')
            ->join('danhmuc', 'dichvu.iddm', '=', 'danhmuc.id')
            ->where('dichvu.id', $id)->limit(10)
            ->get();

    }

    public function getDichVuTheoDanhMuc($iddanhmuc)
    {
        return $this->model->where('iddm', $iddanhmuc)->get();
    }

    public function search($valueSearch){
        return $this->model->where('name','LIKE','%'.$valueSearch.'%')->get();
    }

    public function dichVuInerjoinDanhMuc(){
        return $this->model->select('dichvu.*','danhmuc.name as namedm')->join('danhmuc','dichvu.iddm','=','danhmuc.id')
        ->orderBy('id', 'DESC')
        ->get();
    }
    public function getDichVuByID($iddv){
        return $this->model->select("*")->where('id', '=', $iddv)->get();
    }
    public function getDichVu2(){
        return $this->model->select('dichvu.*','danhmuc.name as namedm')->join('danhmuc','dichvu.iddm','=','danhmuc.id')->where('dichvu.trangthai', '=', 1)->get();
    }
    public function getDichVu1(){
        return $this->model->select('dichvu.*','danhmuc.name as namedm')
        ->join('danhmuc','dichvu.iddm','=','danhmuc.id')
        ->offset(1)->limit(3)
        ->where('dichvu.trangthai', '=', Controller::TRANGTHAI_DICHVU_HIEN)
        ->orderBy('created_at', 'DESC')
        ->get();
    }
    
    public function getDichVubyGiamGia(){
        return $this->model->select('dichvu.*','danhmuc.name as namedm','giamgia.number as numbergg','giamgia.max as maxgg')
        ->join('danhmuc','dichvu.iddm','=','danhmuc.id')
        ->join('giamgia','giamgia.id','=','dichvu.giamgia')
        ->offset(1)->limit(3)
        ->where('dichvu.trangthai', '=', Controller::TRANGTHAI_DICHVU_HIEN)
        ->orderBy('giamgia', 'DESC')
        ->get();
    }

    public function getDichVusite(){
        return $this->model->select('dichvu.*','danhmuc.name as namedm','dichvu.img as imgdv','dichvu.dongia as dongiadv')
        ->join('danhmuc','dichvu.iddm','=','danhmuc.id')
        ->offset(1)->limit(3)
        ->where('dichvu.trangthai', '=', 1)
        ->orderBy('created_at', 'DESC')
        ->get();
    }

    public function getDichVuall(){
        return $this->model->select('dichvu.*','danhmuc.name as namedm')
        ->join('danhmuc','dichvu.iddm','=','danhmuc.id')
        ->offset(1)->limit(3)
        ->where('dichvu.trangthai', '=', 1)
        ->orderBy('id', 'DESC')
        ->get();
    }

    public function dichvudetail($slug){
        return $this->model->select('dichvu.*','danhmuc.name as namedm','giamgia.number as numbergg','giamgia.max as maxgg')
        ->join('danhmuc','dichvu.iddm','=','danhmuc.id')
        ->join('giamgia','giamgia.id','=','dichvu.giamgia')
        ->where('dichvu.trangthai', '=', Controller::TRANGTHAI_DICHVU_HIEN)
        ->where('dichvu.slug', '=', $slug)
        ->first();
    }

    public function getDichVuByIdDanhMuc($idDanhMuc, $limit){
        return $this->model->select('dichvu.*','danhmuc.name as namedm','danhmuc.id as iddanhmuc','danhmuc.slug as slugdm')
        ->join('danhmuc','dichvu.iddm','=','danhmuc.id')
        ->where('dichvu.trangthai', '=', Controller::TRANGTHAI_DICHVU_HIEN)
        ->where('danhmuc.loai', '=', Controller::LOAI_DANHMUC_DICHVU)
        ->where('dichvu.iddm', '=', $idDanhMuc)
        ->limit($limit)
        ->get();
    }


    public function getAllDichVu(){
        return $this->model->select("*")->where("trangthai",Controller::TRANGTHAI_DICHVU_HIEN)->get();
    }

    public function findDichVuById($id){
        return $this->model->find($id);
    }
}
