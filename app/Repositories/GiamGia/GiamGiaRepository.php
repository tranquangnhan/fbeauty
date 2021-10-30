<?php


namespace App\Repositories\GiamGia;
use App\Repositories\BaseRepository;
class GiamGiaRepository extends BaseRepository implements GiamGiaRepositoryInterface
{
    protected $model;
    public function getModel(){
        return \App\Models\Admin\GiamGiaModel::class;
    }
    // public function modelcity(){
    //     return \App\Models\Admin\City::class;
    // }

}
