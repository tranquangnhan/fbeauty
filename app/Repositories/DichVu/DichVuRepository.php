<?php


namespace App\Repositories\DichVu;

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
        return $this->model->select('dichvu.*','danhmuc.name as namedm')->join('danhmuc','dichvu.iddm','=','danhmuc.id')->get();
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
        ->where('dichvu.trangthai', '=', 1)
        ->orderBy('created_at', 'DESC')
        ->get();
    }
    public function getDichVu3(){
        return $this->model->select('dichvu.*','danhmuc.name as namedm')
        ->join('danhmuc','dichvu.iddm','=','danhmuc.id')
        ->offset(1)->limit(3)
        ->where('dichvu.giamgia', '>=', 1 )
        ->where('dichvu.trangthai', '=', 1)
        ->orderBy('created_at', 'DESC')
        ->get();
    }
    public function dichvudetail($id){
        return $this->model->select('dichvu.*', 'dichvu.id','danhmuc.name AS danhmuc')
            ->join('danhmuc', 'dichvu.iddm', '=', 'danhmuc.id')
            ->where('dichvu.slug', $id)
            ->get();
    }

}
