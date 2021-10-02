<?php


namespace App\Repositories\DanhMuc;

interface DanhmucRepositoryInterface
{
     /**
     * Get one
     * @param $id
     * @return mixed
     */
    public function findDanhMucByIdLoai($idLoai);
}
