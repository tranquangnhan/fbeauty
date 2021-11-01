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
}
