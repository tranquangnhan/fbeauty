<?php


namespace App\Repositories\DichVu;

use App\Models\Admin\DichVu;
use App\Repositories\BaseRepository;
use App\Repositories\DichVu\DichVuRepositoryInterface;

class DichVuRepository extends BaseRepository implements DichVuRepositoryInterface
{
    protected $model;

    public function getModel()
    {
        return DichVu::class;
    }

    public function getDichVu()
    {
        return $this->model->select('dichvu.*', 'danhmuc.name')
        ->join('danhmuc', 'dichvu.iddm', '=', 'danhmuc.id')
        ->get();
    }

    public function editDichVu($id)
    {
        return $this->model->select('dichvu.*', 'dichvu.id','danhmuc.name')
            ->join('danhmuc', 'dichvu.iddm', '=', 'danhmuc.id')
            ->where('dichvu.id', $id)
            ->get();
    }
}
