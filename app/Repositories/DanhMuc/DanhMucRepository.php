<?php


namespace App\Repositories\DanhMuc;
use App\Repositories\BaseRepository;
class DanhMucRepository extends BaseRepository implements DanhMucRepositoryInterface
{
    public function getModel(){
        return \App\Models\Admin\DanhMucModel::class;
    }
}
