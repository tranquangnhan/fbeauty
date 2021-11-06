<?php


namespace App\Repositories\DatLich;
use App\Repositories\RepositoryInterface;
interface DatLichRepositoryInterface extends RepositoryInterface
{
    public function getModel();
    public function getAllCungCoSo($idCoSo);
    public function getAll2CungCoSo($idCoSo);
    public function findDatLichCuaNhanVienTheoThoiGian($thoiGianDat, $idNhanVien);
    public function getSoLanKhachDatByTimeStamp($thoiGianDat);
}
