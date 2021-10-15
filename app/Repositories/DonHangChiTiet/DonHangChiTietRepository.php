<?php

namespace App\Repositories\DonHangChiTiet;
use App\Repositories\BaseRepository;
class DonHangChiTietRepository extends BaseRepository implements DonHangChiTietRepositoryInterface
{
    protected $model;
    public function getModel(){
        return \App\Models\Admin\DonHangModel::class;
    }
    // public function modelcity(){
    //     return \App\Models\Admin\City::class;
    // }


}
