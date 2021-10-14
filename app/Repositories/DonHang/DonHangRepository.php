<?php

namespace App\Repositories\DonHang;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\Redirect;

class DonHangRepository extends BaseRepository implements DonHangRepositoryInterface
{
    protected $model;
    public function getModel(){
        return \App\Models\Admin\DonHangModel::class;
    }
    public function active_donhang($id){
        return $this->model->where('id' , ' = ' ,$id)->update(['trangthai'=>0]);
        return Redirect::to('index');

    }
    public function active_donhang1($id){
        return $this->model->where('id' , ' = ' ,$id)->update(['trangthai'=>1]);

    }
    public function active_donhang2($id){
        return $this->model->where('id' , ' = ' ,$id)->update(['trangthai'=>2]);

    }
    public function active_donhang3($id){
        return $this->model->where('id' , ' = ' ,$id)->update(['trangthai'=>3]);

    }

}
