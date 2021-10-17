<?php


namespace App\Repositories\LieuTrinh;

use App\Models\Admin\LieuTrinh;
use App\Repositories\BaseRepository;

use App\Repositories\LieuTrinh\LieuTrinhRepositoryInterface;

class LieuTrinhRepository extends BaseRepository implements LieuTrinhRepositoryInterface
{
    protected $model;

    public function getModel()
    {
        return NhanVien::class;
    }

}
