<?php


namespace App\Repositories\HoaDonChiTiet;


use App\Repositories\RepositoryInterface;

interface HoaDonChiTietRepositoryInterface extends RepositoryInterface
{
    public function getHoaDonCTByIdHoaDon($id);
    public function CheckSpTonTai($id, $idsp);
    public function CheckDVTonTai($id, $iddv);
    public function getDV($id, $iddv);
}
