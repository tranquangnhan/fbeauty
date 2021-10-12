<?php


namespace App\Repositories\NhanVien;

use App\Models\Admin\NhanVien;
use App\Repositories\BaseRepository;

use App\Repositories\NhanVien\NhanVienRepositoryInterface;

class NhanVienRepository extends BaseRepository implements NhanVienRepositoryInterface
{
    protected $model;

    public function getModel()
    {
        return NhanVien::class;
    }

    public function getNhanVien()
    {
        return $this->model->select('nhanvien.*', 'dichvu.name AS dichvu', 'coso.name AS coso')
            ->join('dichvu', 'nhanvien.iddichvu', '=', 'dichvu.id')
            ->join('coso', 'nhanvien.idcoso', '=', 'coso.id')
            ->get();
    }

    public function CheckEmail($email){
        return $this->model->select('*')->where('email', '=', $email)->doesntExist();
    }

    public function CheckSdt($sdt){
        return $this->model->select('*')->where('sdt', '=', $sdt)->doesntExist();
    }
}
