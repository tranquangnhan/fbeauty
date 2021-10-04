<?php


namespace App\Repositories\KhachHang;


class KhachHangReponsitory
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
