<?php

namespace App\Repositories\DonHang;
use App\Repositories\BaseRepository;
class DonHangRepository extends BaseRepository implements DonHangRepositoryInterface
{
    protected $model;
    public function getModel(){
        return \App\Models\Admin\DonHangModel::class;
    }
    // public function modelcity(){
    //     return \App\Models\Admin\City::class;
    // }

}
