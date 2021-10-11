<?php


namespace App\Repositories\SanPhamChiTiet;
use App\Repositories\RepositoryInterface;
interface SanPhamChiTietRepositoryInterface extends RepositoryInterface
{
    public function updateDetailByIdSp($id,$data);

    public function delDetailByIdSp($id);
}
