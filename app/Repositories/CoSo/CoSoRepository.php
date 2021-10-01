<?php


namespace App\Repositories\CoSo;

use App\Models\Admin\CosoModel;
use App\Repositories\BaseRepository;

class CoSoRepository extends BaseRepository implements CoSoRepositoryInterface
{

    public function getModel()
    {
        return CosoModel::class;
    }

}
