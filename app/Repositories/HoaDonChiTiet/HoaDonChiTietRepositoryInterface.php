<?php


namespace App\Repositories\HoaDonChiTiet;


use App\Repositories\RepositoryInterface;

interface HoaDonChiTietRepositoryInterface extends RepositoryInterface
{
    public function getHoaDonCTByIdHoaDon($id);
}
