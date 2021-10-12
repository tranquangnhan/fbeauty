<?php


namespace App\Repositories\HoaDon;


use App\Models\Admin\HoaDonModel;
use App\Repositories\BaseRepository;

class HoaDonRepository extends BaseRepository implements HoaDonRepositoryInterface
{
    protected $model;

    public function getModel()
    {
        return HoaDonModel::class;
    }
}
