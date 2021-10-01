<?php


namespace App\Repositories\CoSo;


use App\Models\Admin\CoSo;
use App\Repositories\BaseRepository;

class CoSoRepository extends BaseRepository implements CoSoRepositoryInterface
{

    public function getModel()
    {
        return CoSo::class;
    }

}
