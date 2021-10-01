<?php


namespace App\Repositories\SanPhamChiTiet;
use App\Repositories\BaseRepository;
class SanPhamChiTietRepository extends BaseRepository implements SanPhamChiTietRepositoryInterface
{
    public function getModel(){
        return \App\Models\Admin\SanPhamChiTiet::class;
    }

}
