<?php


namespace App\Repositories\LieuTrinh;

use App\Models\Admin\LieuTrinhModel;
use App\Repositories\BaseRepository;

use App\Repositories\LieuTrinh\LieuTrinhRepositoryInterface;

class LieuTrinhRepository extends BaseRepository implements LieuTrinhRepositoryInterface
{
    protected $model;

    public function getModel()
    {
        return LieuTrinhModel::class;
    }

}
