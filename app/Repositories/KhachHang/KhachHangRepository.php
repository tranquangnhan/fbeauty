<?php


namespace App\Repositories\KhachHang;

use App\Repositories\BaseRepository;

use App\Repositories\KhachHang\KhachHangRepositoryInterface;

class KhachHangRepository extends BaseRepository implements KhachHangRepositoryInterface
{
    protected $model;

    public function getModel()
    {
        return KhachHangModel::class;
    }

    public function CheckEmail($email){
        return $this->model->select('*')->where('email', '=', $email)->doesntExist();
    }

    public function CheckSdt($sdt){
        return $this->model->select('*')->where('sdt', '=', $sdt)->doesntExist();
    }
}
