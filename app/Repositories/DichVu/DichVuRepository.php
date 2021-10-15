<?php


namespace App\Repositories\DichVu;

use App\Models\Admin\DichVu;
use App\Models\Admin\DichVuModel;
use App\Repositories\BaseRepository;

class DichVuReponsitory extends BaseRepository implements DichVuRepositoryInterface
{
    public function getModel()
    {
        return DichVu::class;
    }
    public function getDichVu()
    {

    }

<<<<<<< HEAD

=======
    public function editDichVu($id)
    {
        return $this->model->select('dichvu.*', 'dichvu.id','danhmuc.name AS danhmuc')
            ->join('danhmuc', 'dichvu.iddm', '=', 'danhmuc.id')
            ->where('dichvu.id', $id)
            ->get();
    }

    public function getDichVuTheoDanhMuc($iddanhmuc)
    {
        return $this->model::where('iddm', $iddanhmuc)->get();
    }
>>>>>>> 7576423996449ea1faab3e05d4c14cec22be5de4
}
