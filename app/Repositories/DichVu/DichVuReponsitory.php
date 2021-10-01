<?php


namespace App\Repositories\DichVu;


use App\Models\Admin\DichVu;
use App\Repositories\BaseRepository;

class DichVuReponsitory extends BaseRepository implements DichVuRepositoryInterface
{
    public function getModel()
    {
        return DichVu::class;
    }


}
